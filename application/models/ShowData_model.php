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

    public function delData_model($id){
        $this->db->where('id',$id);
        return $this->db->delete('thongtin');
        
    }

    public function editData_model($id){
        $this->db->select('*');
        $this->db->where('id',$id);

        $temp = $this->db->get('thongtin');
        $temp = $temp->result_array();
        return $temp;
    }

    public function updateData_model($id,$email,$number,$price){
        $array_update = array(
            'id' => $id,
            'email' => $email,
            'number' => $number,
            'price' => $price
        );

        $this->db->where('id',$id);
        
        return $this->db->update('thongtin',$array_update);
    }
}

?>