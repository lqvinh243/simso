<?php 
defined('BASEPATH') or exit('No script access allowed');


class editData_controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view('narbar.php');
    }
} 

?>
