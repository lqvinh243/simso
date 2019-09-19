<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class ShowData_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function getdatabase(){
        $this->db->select('*');
        $inf =  $this->db->get('thongtin');

        $inf = $inf->result_array();
        return $inf;
    }
}

?>