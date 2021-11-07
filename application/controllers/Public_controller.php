<?php

class Public_controller extends CI_Controller {

	protected $rules;

	public function __construct()
	{
		parent::__construct();
		$this->rules = array(
			array(
					'field' => 'firstname',
					'label' => 'Firstname',
					'rules' => 'required',
					'errors' => array(
						'required' => 'Nama harus di isi!.',
				),
			),
			array(
					'field' => 'lastname',
					'label' => 'Lastname',
					'rules' => 'required',
					'errors' => array(
							'required' => 'Nama harus di isi.',
					),
			),
			array(
					'field' => 'phoneNumber',
					'label' => 'PhoneNumber',
					'rules' => 'required',
					'errors' => array(
						'required' => 'Nomor telepon harus di isi.',
				),
			),
			array(
					'field' => 'email',
					'label' => 'Email',
					'rules' => 'required',
					'errors' => array(
						'required' => 'Email harus di isii!!.',
				),
			),
			array(
					'field' => 'name_pengirim',
					'label' => 'Name_pengirim',
					'rules' => 'required',
					'errors' => array(
						'required' => 'Nama pengirim harus di isi.',
				),
			),
			array(
					'field' => 'start_book',
					'label' => 'Start_book',
					'rules' => 'required',
					'errors' => array(
						'required' => 'Tanggal booking harus di isi',
				),
			),
			array(
					'field' => 'end_book',
					'label' => 'End_book',
					'rules' => 'required',
					'errors' => array(
						'required' => 'Tanggal booking harus di isi',
				),
			),
			array(
					'field' => 'image_transfer',
					'label' => 'Image_transfer',
					'rules' => 'required',
					'errors' => array(
						'required' => 'Bukti transfer harus di kirim',
				),
			)
		);
	}

	public function error_page(){
		$this->load->view("pages/error_404");
	}

	public function index()
	{
		$data["title"] = "home page"; 
		$data["mostpickeds"] = $this->M_public->mostpicked();	
		$data["houses"] = $this->M_public->houses();	
		$data["hotels"] = $this->M_public->hotels();	
		$data["data"] = $this->M_public->data();	
		$data["reviews"] = $this->M_public->reviews();	

		$this->load->view('templates/v_header', $data);
		$this->load->view('pages/v_home');
		$this->load->view('templates/v_footer');
	}

	public function detail_mostpicked($id)
	{
		$data["title"] = "detail page"; 	
		$data["details"] = $this->M_public->detail_mostpicked($id);
		
		$this->load->view('templates/v_header', $data);
		$this->load->view('pages/v_detail', $data);
		$this->load->view('templates/v_footer', $data);	
			
	}

	public function detail_houses($id)
	{
		$data["title"] = "detail page"; 	
		$data["details"] = $this->M_public->detail_houses($id);

		$this->load->view('templates/v_header', $data);
		$this->load->view('pages/v_detail', $data);
		$this->load->view('templates/v_footer', $data);		
	}

	public function detail_hotels($id)
	{
		$data["title"] = "detail page"; 	
		$data["details"] = $this->M_public->detail_hotels($id);

		$this->load->view('templates/v_header', $data);
		$this->load->view('pages/v_detail', $data);
		$this->load->view('templates/v_footer', $data);		
	
	}

	public function complete_checkout($id)
	{
		if($id){
		$data["title"] = "checkout"; 	

		$this->load->view('templates/v_header', $data);
		$this->load->view('pages/v_complete_checkout');
		}else{
			redirect("public_controller/error_page");
		}
	}

	public function checkout_booking(){
		
		if($this->input->post('email') == null){
            redirect("public_controller/error_page");
        }else{
		$id_user = time();
		$tgl1 = new DateTime($this->input->post('start_book'));
		$tgl2 = new DateTime($this->input->post('end_book'));
		$days =  $tgl2->diff($tgl1)->d;

		$price = intval($this->input->post('price_'));
		$total = $price * $days * 1000;

		$image_transfer = $_FILES['image_transfer']['name'];

		if($image_transfer){
			$config['upload_path'] = './assets/img/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '2048';
			$config['remove_space'] = TRUE;
				
			$this->load->library("upload", $config);
			$this->upload->initialize($config);
			
			if (!$this->upload->do_upload('image_transfer')) {
					echo "Gambar gagal di upload";
			} else {
				$image_transfer = $this->upload->data("file_name");
			}
		}
		

		$data = array(
			'id_user' => $id_user,
			'name_order' => $this->input->post('name'),
			'category_order' => $this->input->post('category'),
			'imageUrl' => $this->input->post('imageUrl'),
			'price_order' => $this->input->post('price_'),
			'username' => $this->input->post('lastname'),
			'price_total' => $total,
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phoneNumber'),
			'start_booking' => $this->input->post('start_book'),
			'end_booking' => $this->input->post('end_book'),
			'days' => $days,
			'name_pengirim' => $this->input->post('name_pengirim'),
			'name_bank' => $this->input->post('bank'),
			'bukti_transfer' => $image_transfer,
		);

		$this->M_public->booking_user($data);
		
		$data["title"] = "checkout"; 
		$data["get_bookings"] = $this->M_public->get_booking_user($id_user);

			
		$this->load->view('templates/v_header', $data);
		$this->load->view('pages/v_checkout', $data);
		$this->load->view('templates/v_footer');
	}
	}

	public function cetak($id){
        $this->load->library('pdfgenerator');

        $where = array("id" => $id);
		$data["get_bookings"] = $this->M_public->get_booking_user($id);

        $file_pdf = 'bukti_booking';
        // setting paper
        $paper = 'A4';
        $orientation = "portrait";

        $html = $this->load->view('pages/v_bukti_booking',$data, true);

         // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
  
    }
}
