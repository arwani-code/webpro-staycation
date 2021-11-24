<?php 
class Admin_controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct(); 
         
    }

    public function index() {
        if($this->session->userdata('role_id') != 1){
            redirect('admin_controller/sign_in');
          }
          $data['title'] = 'Admin';
          $data["admin"] = $this->M_admin->get_admin();
          $data["bookings"] = $this->M_admin->get_bookings();
          $data["mostpickeds"] = $this->M_admin->sum_mospickeds();	
          $data["houses"] = $this->M_admin->sum_houses();	
         $data["hotels"] = $this->M_admin->sum_hotels();

        $this->load->view('pages/admin/templates/v_header');
        $this->load->view('pages/admin/index', $data);
        $this->load->view('pages/admin/templates/v_footer');
    }

    public function sign_in() {
        $this->form_validation->set_rules("username", "Username", "required", [
            "required" => "Username harus di isi!"
        ]);
        $this->form_validation->set_rules("password", "Password", "required", [
            "required" => "Password harus di isi!"
        ]);
        
        if($this->form_validation->run() == false){
            $data['title'] = 'Sign In';
            $this->load->view('pages/admin/templates/v_header');
            $this->load->view('pages/admin/v_signin', $data);
            $this->load->view('pages/admin/templates/v_footer');
        } else {
            $admin = $this->M_admin->check_admin();
            if($admin === false){
                $this->session->set_flashdata("message", '
                <div class="alert alert-danger d-flex align-items-center rounded" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="22" height="22" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        Username atau password salah !
                    </div>
                    <button type="button" class="btn-close btn-sm mx-auto" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ');
                redirect("Admin_controller/sign_in");
            }else{
                $this->session->set_userdata('username', $admin->username);
                $this->session->set_userdata('role_id', $admin->role_id);
                $this->session->set_userdata('id', $admin->id);
            }

            switch($admin->role_id){
                case 1: 
                    redirect('Admin_controller/index');
                break;
                case 2: 
                    redirect('Admin_controller/sign_in');
                break;
                 default;
                    break;   
            }
        }
    }

    public function log_out() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('id');
        redirect('Admin_controller/sign_in');
    }

    public function transaction() {
        if($this->session->userdata('id') != 1){
        redirect('admin_controller/sign_in');
      }

        $total = 0;

        $data['title'] = 'Transaction';
        foreach($this->M_admin->total_spent() as $transaction){
            $total += $transaction->total;
        }
        
        $data["bookings"] = $this->M_admin->get_bookings();
        $data["admin"] = $this->M_admin->get_admin();
        $data["total"] = $total;

        $this->load->view('pages/admin/templates/v_header');
        $this->load->view('pages/admin/v_transactions', $data);
        $this->load->view('pages/admin/templates/v_footer');
    }   

    public function detail_transaction($id) {
        if($this->session->userdata('id') != 1){
            redirect('admin_controller/sign_in');
          }

          $data['title'] = 'Detail Transaction';
          $data["admin"] = $this->M_admin->get_admin();
          $data["bookings"] = $this->M_admin->detail_transaction($id);

        $this->load->view('pages/admin/templates/v_header');
        $this->load->view('pages/admin/v_transactions_detail', $data);
        $this->load->view('pages/admin/templates/v_footer');
    }   

    public function edit_booking($id) {
        if($this->session->userdata('id') != 1){
            redirect('admin_controller/sign_in');
          }
        
        $data['title'] = 'Edit Booking';
        $data["bookings"] = $this->M_public->get_booking_user($id);  
        $data["admin"] = $this->M_admin->get_admin();

        $this->load->view('pages/admin/templates/v_header');
        $this->load->view('pages/admin/v_edit_booking', $data);
        $this->load->view('pages/admin/templates/v_footer');
    }   

    public function booking(){
        if($this->session->userdata('id') != 1){
            redirect('admin_controller/sign_in');
          }

        $data['title'] = 'Booking';
        $data["bookings"] = $this->M_admin->get_bookings();
        $data["admin"] = $this->M_admin->get_admin();

        $this->load->view('pages/admin/templates/v_header');
        $this->load->view('pages/admin/v_booking', $data);
        $this->load->view('pages/admin/templates/v_footer');
    }

    public function bank(){
        if($this->session->userdata('id') != 1){
            redirect('admin_controller/sign_in');
          }

        $data['title'] = 'Booking';
        
        $data["admin"] = $this->M_admin->get_admin();
        $data["admin"] = $this->M_admin->get_admin();
        $data["bookings"] = $this->M_admin->get_bookings();

        $this->load->view('pages/admin/templates/v_header');
        $this->load->view('pages/admin/v_bank', $data);
        $this->load->view('pages/admin/templates/v_footer');
 

    }

    public function pdf_booking($id){
        if($this->session->userdata('id') != 1){
            redirect('admin_controller/sign_in');
          }

          $this->load->library('pdfgenerator');

          $where = array("id" => $id);
          $data["get_bookings"] = $this->M_public->get_booking_user($id);
  
          $file_pdf = 'bukti_pdf';
          // setting paper
          $paper = 'A4';
          $orientation = "portrait";
  
          $html = $this->load->view('pages/admin/v_pdf',$data, true);
  
           // run dompdf
          $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }

    public function print_booking($id){
        if($this->session->userdata('id') != 1){
            redirect('admin_controller/sign_in');
          }
        
        $data["bookings"] = $this->M_public->get_booking_user($id);
        $data["title"] = "Print Booking";
        
        $this->load->view('pages/admin/v_print', $data);

    }

    public function excel_booking($id){
        if($this->session->userdata('id') != 1){
            redirect('admin_controller/sign_in');
          }

        $data["bookings"] = $this->M_public->get_booking_user($id);
        $data["title"] = "Data Booking";
        
        $this->load->view('pages/admin/v_excel', $data);

    }

    public function delete_booking($id){
        if($this->session->userdata('id') != 1){    
            redirect('admin_controller/sign_in');
        }
        $this->M_admin->delete_booking($id);
        $this->session->set_flashdata('message_update', '<div class="alert alert-success d-flex align-items-center alert-dismissible fade show" style="max-width: 85%;" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
        Data Berhasil Di Hapus
        </div>
        <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        '
    );
        redirect('admin_controller/index');
    }

    public function update_booking($id){
        if($this->session->userdata('id') != 1){
            redirect('admin_controller/sign_in');
          }

        // $id_user = $this->input->post('id_user');  
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
        );
        $this->M_admin->update_booking($id, $data);
        $this->session->set_flashdata('message_update', '<div class="alert alert-success d-flex align-items-center alert-dismissible fade show" style="max-width: 85%;" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
            Data Berhasil Diubah
            </div>
            <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            '
        );
        redirect('admin_controller/index');
    }
}

?>
