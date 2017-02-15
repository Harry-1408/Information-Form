<?php 
if(!function_exists('add_css'))
{
    function add_css($cssArray)
    {
        $cssStyles = array();

        if(!empty($cssArray))
        {
            foreach($cssArray as $folder => $cssPath)
            {
                $cssDIRPath = FCPATH.'assets/'.$cssPath.'.css';
                $cssORGPath = ASSETS_FOLDER.$cssPath.'.css';
                /*                $cssORGPath = base_url().'assets/'.$cssPath.'.css';*/

                if(file_exists($cssDIRPath))
                {
                    $cssStyles[] = link_tag($cssORGPath);
                }
            }
        }
        echo implode(' ', $cssStyles);
    }
}

if(!function_exists('add_js'))
{
    function add_js($jsArray)
    {
        $jsScript = array();

        if(!empty($jsArray))
        {
            foreach($jsArray as $folder => $jsPath)
            {
                $jsDIRPath = FCPATH.'assets/'.$jsPath.'.js';
                $jsORGPath = base_url(ASSETS_FOLDER.$jsPath.'.js');

                if(file_exists($jsDIRPath))
                {
                    $jsScript[] = '<script type="text/javascript" src="'.$jsORGPath.'"></script>';
                }
            }
        }
        echo implode('', $jsScript);
    }
}

if(!function_exists('add_messages'))
{
    function add_messages($message, $type = 'success')
    {
        $CI = & get_instance();
        $msg[$type] = $message;
        $CI->session->set_userdata('text_messages', $msg);
    }
}

if(!function_exists('display_messages'))
{
    function display_messages()
    {
        $CI = & get_instance();
        $messages = $CI->session->userdata('text_messages'); 
        if(!empty($messages))
        {
            foreach($messages as $msgKey => $msg)
            {
                $cls = ($msgKey == 'error') ? 'danger' : "success";
                $dispMsg[] = $msg;

            }
            echo '<div role="alert" class="alert alert-'.$cls.' alert-dismissible fade in">
            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">X</span></button>
            '.implode('<br />', $dispMsg).'
            </div>';
            $CI->session->unset_userdata('text_messages');
        }
    }
}


if(!function_exists('get_roles'))
{
    function get_roles()
    {
        return array(
        'management' => 'Management',
        'agent' => 'Quest Agent',
        );
    }
}

if(!function_exists('is_user_loggedin'))
{
    function is_user_loggedin($redirect = NULL)
    {
        $CI = & get_instance();  
        if(!$CI->session->userdata('is_user_login'))
        {
            $redirectUrl = ($redirect !== NULL) ? base_url($redirect) : base_url('/login/');
            redirect($redirectUrl);

        }

    }
}

if(!function_exists('get_user_profile_pic'))
{
    function get_user_profile_pic($role,$userId)
    {
        $CI = & get_instance();
        $CI2 = & get_instance();  
        $profile_pic = '';
        $CI->load->model('users_model');
       // $CI2->load->model('Employee_model');

        if($role == 'management')
        {
            $row = $CI->users_model->get_user($userId);

            if(!empty($row)){

                $profile_pic = $row->profile_image;

            }else
            {
                $profile_pic = ''; 
            }

        }else if($role == 'employee'){

            $row = $CI->users_model->get_user($userId);

            if(!empty($row)){

                $profile_pic = $row->profile_image;

            }else
            {
                $profile_pic = ''; 
            }
        }
        else{

            $profile_pic = '';
        }

        return $profile_pic;

    }
}

if(!function_exists('get_user_full_name'))
{
    function get_user_full_name($role,$userId)
    {
        $CI = & get_instance();  
        $fullname = '';
        $CI->load->model('users_model');

        if($role == 'management')
        {
            $row = $CI->users_model->get_user($userId);

            if(!empty($row)){

                $fullname = $row->first_name." ".$row->last_name;

            }else
            {
                $fullname = ''; 
            }

        }else{

            $fullname = '';
        }

        return $fullname;

    }
}


if(!function_exists('send_mail'))
{
    function send_mail($to,$subject,$from,$message)
    {
        $CI = & get_instance();
        $CI->email->initialize(array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.gmail.com',
        'smtp_user' => 'teacodestechnology@gmail.com',
        'smtp_pass' => 'TCodeTT@1716',
        'smtp_port' => 465,
        'crlf' => "\r\n",
        'newline' => "\r\n"
        ));
        $CI->email->from('noowait@gmail.com', 'noOwait');
        $CI->email->to($to);
        $CI->email->subject($subject);
        $CI->email->message($message);
        $CI->email->send();
        /*        echo $CI->email->print_debugger();*/

        return  true;
    }
}

if(!function_exists('send_html_mail'))
{
    function send_html_mail($to,$subject,$from,$message)
    {

        $CI = & get_instance();
        $CI->email->initialize(array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.gmail.com',
        'smtp_user' => 'teacodestechnology@gmail.com',
        'smtp_pass' => 'TCodeTT@1716',
        'smtp_port' => 465,
        'mailtype' => 'html',
        'charset'   => 'iso-8859-1',
        'crlf' => "\r\n",
        'newline' => "\r\n"
        ));
        $CI->email->from('mailtest@teacodes.com', 'noOwait');
        $CI->email->to($to);
        $CI->email->subject($subject);
        $CI->email->message($message);
        $CI->email->send();
        /*        echo $CI->email->print_debugger();*/

        return  true;
    }
}

if(!function_exists('my_pagination'))
{
    function my_pagination($base_url = NULL,$total_rows = NULL,$per_page = NULL){

        $CI = & get_instance();  
        $config["base_url"] = $base_url;
        $config["total_rows"] = $total_rows;
        $config["per_page"] = $per_page;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="nextpage">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = 'Previous';
        $config['prev_tag_open'] = '<li class="prevpage">';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><span>';
        $config['cur_tag_close'] = '</span></li>';
        $config['last_link'] = FALSE;
        $config['first_link'] = FALSE;
        $CI->pagination->initialize($config);
        return $CI->pagination->create_links();

    }
}

function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function random_color() {
    return random_color_part() . random_color_part() . random_color_part();
}

if(!function_exists('page_access'))
{
    function page_access($role)
    {
        $CI = & get_instance();  
        $current_role = $CI->session->userdata('user_role');

        if(!array_key_exists($current_role, $role))
        {
            redirect('/dashboard/');
        }
    }
}

if(!function_exists('get_paypal_url'))
{
    function get_paypal_url()
    {
        $paypalUrl = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
        return $paypalUrl;
    }
}

if(!function_exists('my_new_pagination'))
{
    function my_new_pagination($base_url = NULL,$total_rows = NULL,$per_page = NULL){

        $CI = & get_instance();  
        $config['uri_segment'] = 5;
        $config["base_url"] = $base_url;
        $config["total_rows"] = $total_rows;
        $config["per_page"] = $per_page;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="nextpage">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = 'Previous';
        $config['prev_tag_open'] = '<li class="prevpage">';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><span>';
        $config['cur_tag_close'] = '</span></li>';
        $config['last_link'] = FALSE;
        $config['first_link'] = FALSE;
        $CI->pagination->initialize($config);
        return $CI->pagination->create_links();

    }
}

if(!function_exists('getAddress'))
{
    function getAddress($lat, $lon){
        $url  = "http://maps.googleapis.com/maps/api/geocode/json?latlng=".
        $lat.",".$lon."&sensor=false";
        $json = @file_get_contents($url);
        $data = json_decode($json);
        $status = $data->status;
        $address = '';
        if($status == "OK"){
            $address = $data->results[0]->formatted_address;
        }
        return $address;

    }
}


