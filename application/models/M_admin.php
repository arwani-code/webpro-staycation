<?php 
class M_admin extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function get_admin(){
        $query = $this->db->get('admin');
        return $query->result();
    }

    public function get_bookings(){
        $query = $this->db->get('tb_booking');
        return $query->result();
    }

    public function check_admin(){
        $username = set_value("username");
            $password = set_value("password");

            $result = $this->db->where("username", $username)
                               ->where("password", $password)
                               ->get("admin");

            if($result->num_rows() > 0){
                return $result->row();
            }else{
                return false;
            }         
    }

    public function sum_mospickeds(){
        $query = $this->db->query("SELECT sum(price) AS total from tb_mostpickeds");
        return $query->result();
    }

    public function sum_houses(){
        $query = $this->db->query("SELECT sum(price) AS total from tb_houses");
        return $query->result();
    }

    public function sum_hotels(){
        $query = $this->db->query("SELECT sum(price) AS total from tb_hotels");
        return $query->result();
    }

    public function total_spent(){
        $query = $this->db->query("SELECT sum(price_total) AS total from tb_booking");
        return $query->result();
    }

    public function detail_transaction($id){
        return $this->db->get_where('tb_booking', array("id_user" => $id))->result();
    }

    public function delete_booking($id){
        $where = array("id_user" => $id);
        $this->db->delete('tb_booking', $where);
        redirect('admin_controller/index');
    }

    public function update_booking($id, $data){
        $this->db->where('id_user', $id);
        $this->db->update('tb_booking', $data);
    }
}
?>
