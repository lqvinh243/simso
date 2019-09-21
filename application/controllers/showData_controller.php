<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class showData_controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        //$this->load->view('ShowData_view');
        
        $this->load->model('ShowData_model');
        $arraysim = $this->ShowData_model->getdatabase();
        $arraysim = array('dataformcontroller'=>$arraysim);
        $this->load->view('ShowData_view',$arraysim,false);
    }

    public function delData_controller($idnhandc){
        
        $this->load->model('ShowData_model');
        if($this->ShowData_model->delData_model($idnhandc)){
            $this->load->view('del_successfully');
        }else echo "fail";
    }

    public function editData_controller($idnhandc){
        $this->load->model('ShowData_model');
        $array_result = $this->ShowData_model->editData_model($idnhandc);
        $array_result = array('array_edit'=>$array_result);
        $this->load->view('editData_view',$array_result,false);  
    }

    public function updateData_controller(){
        $this->load->model('ShowData_model');
        $id = $this->input->post('id').'<br>';
        $email = $this->input->post('email');
        $number = $this->input->post('number');
        $price = $this->input->post('price');
        if($this->ShowData_model->updateData_model($id,$email,$number,$price)){
            $this->load->view('update_succesfully');
        }else echo "false";
    }
}

?>