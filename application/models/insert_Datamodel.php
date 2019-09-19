<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class insert_Datamodel extends CI_Model{
    public function __construct()
    {
        parent::__construct();       
    }

    public function insert($email,$number,$price){
        $data = array('email'=>$email,'number'=>$number,'price'=>$price);

        $this->db->insert('thongtin',$data);
        return $this->db->insert_id();
    }
}

?>