<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class insert_controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view('insert_view');
    }

    public function insert_dataController(){
        
        $email = $this->input->post('email');
        $number = $this->input->post('number');
        $price =  $this->input->post('price');
        
        $this->load->model('insert_Datamodel');
        if($this->insert_Datamodel->insert($email,$number,$price)){
            $this->load->view('insert_successfully');
        }
        else echo "404 not found".$this->insert_Datamodel->insert($email,$number,$price);

         
    }
}


?>