<?php 
class Index extends CI_Controller {

    public function __construct() {
        parent::__construct();
    	$this->load->model('data');
    }
     public function index() {
        $this->load->helper('form');
        $this->load->view('index');
    }

    public function insert_user(){
      $response = $this->data->insert_user();
        
        if($response == true){
        echo "Above data entered successfully";
        } else {
        	echo "error";
        }
    }

    public function insert_partner(){
      $response = $this->data->insert_partner();
        if($response > 0){
        echo "Above data entered successfully";
        } else {
            echo "error";
        }
    }

    public function update_user(){
      $response = $this->data->update_user();
        if($response > 0){
        echo "Above data updated successfully";
        } else {
            echo "error";
        }
    }

    public function insert_first_daughter(){
      $response = $this->data->insert_first_daughter();
        if($response > 0){
        echo "first daughter inserted successfully";
        } else {
            echo "error";
        }
    }
    public function insert_second_daughter(){
      $response = $this->data->insert_second_daughter();
        if($response > 0){
        echo "second daughter inserted successfully";
        } else {
            echo "error";
        }
    }
    public function insert_first_son(){
      $response = $this->data->insert_first_son();
        if($response > 0){
        echo "first son inserted successfully";
        } else {
            echo "error";
        }
    }

}

 ?>