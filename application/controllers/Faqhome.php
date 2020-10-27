<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Faqhome extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_faqhome');
        $this->load->model('M_admin');
        $lib=array("session","form_validation");
        $this->load->library($lib);
	}

	public function index(){
		if ($this->session->userdata('emails') != '' && $this->session->userdata('passwords') != '') {
			$idrole = array('id_role'=>$this->session->userdata('id_roles'));
			$data['dataAdmin'] = $this->M_admin->data_admin($idrole)->row();
			$data['content'] = 'faqhome';
			$this->load->view('indexadmin',$data);
		}else{
			$this->load->view('login');
		}
	}

	public function tampil()
	{
		$data['dataFaqhome'] = $this->M_faqhome->select_all();
		$this->load->view('faqhome/list_data', $data);
	}

	public function tambah(){ 
		$data['content'] = 'faqhome/form';
		$this->load->view('indexadmin',$data);
	}

	public function prosesTambah() {
		$out = array();
		$data = array();
		$this->form_validation->set_rules('judul', 'judul', 'trim|required'); 
		$data 	= $this->input->post();

		if ( $this->form_validation->run() == TRUE ) {
			$result = $this->M_faqhome->insert($data);
			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = '<p class="box-msg">
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Faq Berhasil Ditambahkan</div>
					  </div>
				    </p>';
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = '<p class="box-msg">
				      <div class="info-box alert-error">
					      <div class="info-box-icon">
					      	<i class="fa fa-warning"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Faq Gagal Ditambahkan
				        	</div>
					  </div>
				    </p>';
		}

		$this->session->set_flashdata('msg', $out['msg']);
		redirect('Faqhome');
	}

	public function update($id) {
			
		$id 				= $id; 
		$data['dataFaqhome'] 	= $this->M_faqhome->select_by_id($id);
		$data['content'] = 'faqhome/form_update';
		$this->load->view('indexadmin',$data);
		
	}

	public function prosesUpdate() {
		$out = array();
		$data = array();
		$this->form_validation->set_rules('judul', 'judul', 'trim|required'); 
		$data 	= $this->input->post();

		if ( $this->form_validation->run() == TRUE ) {
			$result = $this->M_faqhome->update($data);
			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = '<p class="box-msg">
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Faq Berhasil Diupdate</div>
					  </div>
				    </p>';
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = '<p class="box-msg">
				      <div class="info-box alert-error">
					      <div class="info-box-icon">
					      	<i class="fa fa-warning"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Faq Gagal Diupdate
				        	</div>
					  </div>
				    </p>';
		}

		$this->session->set_flashdata('msg', $out['msg']);
		redirect('Faqhome');
	}

	
	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_faqhome->delete($id);
		
		if ($result > 0) {
			echo '<p class="box-msg">
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Faq Berhasil Dihapus</div>
					  </div>
				    </p>';
		} else {
			echo '<p class="box-msg">
				      <div class="info-box alert-error">
					      <div class="info-box-icon">
					      	<i class="fa fa-warning"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Faq Gagal Dihapus</div>
					  </div>
				    </p>';
		}
	}

}

