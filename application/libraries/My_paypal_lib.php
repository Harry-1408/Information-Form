<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
    /**
    * Code Igniter
    *
    * An open source application development framework for PHP 4.3.2 or newer
    *
    * @package		CodeIgniter
    * @author		Rick Ellis
    * @copyright	Copyright (c) 2006, pMachine, Inc.
    * @license		http://www.codeignitor.com/user_guide/license.html
    * @link		http://www.codeigniter.com
    * @since		Version 1.0
    * @filesource
    */

    // ------------------------------------------------------------------------

    /**
    * PayPal_Lib Controller Class (Paypal IPN Class)
    *
    * This CI library is based on the Paypal PHP class by Micah Carrick
    * See www.micahcarrick.com for the most recent version of this class
    * along with any applicable sample files and other documentaion.
    *
    * This file provides a neat and simple method to interface with paypal and
    * The paypal Instant Payment Notification (IPN) interface.  This file is
    * NOT intended to make the paypal integration "plug 'n' play". It still
    * requires the developer (that should be you) to understand the paypal
    * process and know the variables you want/need to pass to paypal to
    * achieve what you want.  
    *
    * This class handles the submission of an order to paypal as well as the
    * processing an Instant Payment Notification.
    * This class enables you to mark points and calculate the time difference
    * between them.  Memory consumption can also be displayed.
    *
    * The class requires the use of the PayPal_Lib config file.
    *
    * @package     CodeIgniter
    * @subpackage  Libraries
    * @category    Commerce
    * @author      Teacode <info@teacodes.com>
    * @copyright   Copyright (c) 2006, http://teacodes.com
    *
    */

    // ------------------------------------------------------------------------


    class my_paypal_lib {

        var $last_error;                 // holds the last error encountered

        var $ipn_log;                    // bool: log IPN results to text file?

        var $ipn_log_file;               // filename of the IPN log
        var $ipn_response;               // holds the IPN response from paypal   
        var $ipn_data = array();         // array contains the POST values for IPN

        var $fields = array();           // array holds the fields to submit to paypal

        var $CI;

        function my_paypal_lib() {

            // initialization constructor.  Called when class is created.

            $this->CI =& get_instance();
            $this->CI->load->helper('url');
            $this->CI->load->helper('form');

            $this->paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';

            //      $this->paypal_url = 'https://www.paypal.com/cgi-bin/webscr';

            $this->last_error = '';

            $this->ipn_log_file = APPPATH.'logs/.ipn_results.log';
            $this->ipn_log = true; 
            $this->ipn_response = '';

            // populate $fields array with a few default values.  See the paypal
            // documentation for a list of fields and their data types. These defaul
            // values can be overwritten by the calling script.

            $this->add_field('rm','2');           // Return method = POST
            $this->add_field('cmd','_cart'); 
            $this->add_field('upload','1'); 

        }

        function add_field($field, $value) {

            // adds a key=>value pair to the fields array, which is what will be 
            // sent to paypal as POST variables.  If the value is already in the 
            // array, it will be overwritten.

            $this->fields["$field"] = $value;
        }

        function submit_paypal_post() {
            // this function actually generates an entire HTML page consisting of
            // a form with hidden elements which is submitted to paypal via the 
            // BODY element's onLoad attribute.  We do this so that you can validate
            // any POST vars from you custom form before submitting to paypal.  So 
            // basically, you'll have your own form which is submitted to your script
            // to validate the data, which in turn calls this function to create
            // another hidden form and submit to paypal.

            // The user will briefly see a message on the screen that reads:
            // "Please wait, your order is being processed..." and then immediately
            // is redirected to paypal.

            echo "<html>\n";
            echo "<head><title>Processing Payment...</title></head>\n";
            echo "<body onLoad=\"document.forms['paypal_form'].submit();\">\n";
            echo "<center><h2>Please wait, your order is being processed and you";
            echo " will be redirected to the paypal website.</h2></center>\n";
            echo "<form method=\"post\" name=\"paypal_form\" ";
            echo "action=\"".$this->paypal_url."\">\n";

            foreach ($this->fields as $name => $value) {
                echo "<input type=\"hidden\" name=\"$name\" value=\"$value\"/>\n";
            }
            echo '';
            //   echo "<center><img src='".plugins_url()."/checkout-payment/images/processing.gif' style='height:150px; width:114px;'><br />If you are not automatically redirected to ";
            echo "paypal within 5 seconds...<br/><br/>\n";
            echo "<input type=\"submit\" class=\"btn_submit\" value=\"Click Here\"></center>\n";

            echo "</form>\n";
            echo "</body></html>\n";
        }

        function validate_ipn() {

            // parse the paypal URL
            $url_parsed=parse_url($this->paypal_url);        
            // generate the post string from the _POST vars aswell as load the
            // _POST vars into an arry so we can play with them from the calling
            // script.
            $post_string = '';    
            foreach ($_POST as $field=>$value) { 
                $this->ipn_data["$field"] = $value;
                $post_string .= $field.'='.urlencode(stripslashes($value)).'&'; 
            }
            $post_string.="cmd=_notify-validate"; // append ipn command

            // open the connection to paypal
            $fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);
            //      $fp = fsockopen($url_parsed[host],"80",$err_num,$err_str,30); 
            if(!$fp) {

                // could not open the connection.  If loggin is on, the error message
                // will be in the log.
                $this->last_error = "fsockopen error no. $errnum: $errstr";
                $this->log_ipn_results(false);       
                return false;

            } else { 

                // Post the data back to paypal
                fputs($fp, "POST $url_parsed[path] HTTP/1.1\r\n"); 
                fputs($fp, "Host: $url_parsed[host]\r\n"); 
                fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n"); 
                fputs($fp, "Content-length: ".strlen($post_string)."\r\n"); 
                fputs($fp, "Connection: close\r\n\r\n"); 
                fputs($fp, $post_string . "\r\n\r\n"); 

                // loop through the response from the server and append to variable
                while(!feof($fp)) { 
                    $this->ipn_response .= fgets($fp, 1024); 
                } 

                fclose($fp); // close connection

            }

            if (preg_match("/VERIFIED/",$this->ipn_response)) {

                // Valid IPN transaction.
                $this->log_ipn_results(true);
                return true;       

            } else {

                // Invalid IPN transaction.  Check the log for details.
                $this->last_error = 'IPN Validation Failed.';
                $this->log_ipn_results(false);   
                return false;

            }

        }

        function log_ipn_results($success) {

            if (!$this->ipn_log) return;  // is logging turned off?

            // Timestamp
            $text = '['.date('m/d/Y g:i A').'] - '; 

            // Success or failure being logged?
            if ($success) $text .= "SUCCESS!\n";
            else $text .= 'FAIL: '.$this->last_error."\n";

            // Log the POST variables
            $text .= "IPN POST Vars from Paypal:\n";
            foreach ($this->ipn_data as $key=>$value) {
                $text .= "$key=$value, ";
            }

            // Log the response from the paypal server
            $text .= "\nIPN Response from Paypal Server:\n ".$this->ipn_response;

            // Write to log
            $fp=fopen($this->ipn_log_file,'a');
            fwrite($fp, $text . "\n\n"); 

            fclose($fp);  // close file
        }

        function dump_fields() {

            // Used for debugging, this function will output all the field/value pairs
            // that are currently defined in the instance of the class using the
            // add_field() function.

            echo "<h3>my_paypal_lib->dump_fields() Output:</h3>";
            echo "<table width=\"95%\" border=\"1\" cellpadding=\"2\" cellspacing=\"0\">
            <tr>
            <td bgcolor=\"black\"><b><font color=\"white\">Field Name</font></b></td>
            <td bgcolor=\"black\"><b><font color=\"white\">Value</font></b></td>
            </tr>"; 

            ksort($this->fields);
            foreach ($this->fields as $key => $value) {
                echo "<tr><td>$key</td><td>".urldecode($value)."&nbsp;</td></tr>";
            }

            echo "</table><br>"; 
        }
    }         

?>