<?php 
class Admin_controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();  
    }

    public function index() {
        $this->load->view('pages/admin/templates/v_header');
        $this->load->view('pages/admin/templates/v_sidebar');
        $this->load->view('pages/admin/index');
        $this->load->view('pages/admin/templates/v_footer');
    }

    public function sign_in() {
        $this->load->view('pages/admin/templates/v_header');
        $this->load->view('pages/admin/v_signin');
        $this->load->view('pages/admin/templates/v_footer');
    }

    public function sign_up() {
        $this->load->view('pages/admin/templates/v_header');
        $this->load->view('pages/admin/v_signup');
        $this->load->view('pages/admin/templates/v_footer');
    }

    public function transaction() {
        $this->load->view('pages/admin/templates/v_header');
        $this->load->view('pages/admin/templates/v_sidebar');
        $this->load->view('pages/admin/v_transactions');
        $this->load->view('pages/admin/templates/v_footer');
    }   

    public function transaction_detail() {
        $this->load->view('pages/admin/templates/v_header');
        $this->load->view('pages/admin/templates/v_sidebar');
        $this->load->view('pages/admin/v_transactions_detail');
        $this->load->view('pages/admin/templates/v_footer');
    }   

    public function edit_admin() {
        $this->load->view('pages/admin/templates/v_header');
        $this->load->view('pages/admin/templates/v_sidebar');
        $this->load->view('pages/admin/v_transactions_detail');
        $this->load->view('pages/admin/templates/v_footer');
    }   
}

?>
