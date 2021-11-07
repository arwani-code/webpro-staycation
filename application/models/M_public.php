<?php 

class M_public extends CI_Model{

    public function mostpicked(){
        return $this->db->get("tb_mostpickeds")->result();
    }

    public function houses(){
        return $this->db->get("tb_houses")->result();
    }

    public function hotels(){
        return $this->db->get("tb_hotels")->result();
    }

    public function data(){
        return $this->db->get("tb_data")->result();
    }

    public function reviews(){
        return $this->db->get("tb_reviews")->result();
    }

    public function detail_mostpicked($id){
        return $this->db->get_where('tb_mostpickeds', array("id" => $id))->result();
    }

    public function detail_houses($id){
        return $this->db->get_where('tb_houses', array("id" => $id))->result();
    }

    public function detail_hotels($id){
        return $this->db->get_where('tb_hotels', array("id" => $id))->result();
    }

    public function booking_user($data){
        $this->db->insert('tb_booking', $data);
    }

    public function get_booking_user($id){
        return $this->db->get_where('tb_booking', array("id_user" => $id))->result();
    }
}
 

?>
