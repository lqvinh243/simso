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
}

?>