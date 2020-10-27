<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class KategoriArticle extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_kategoriarticle');
        $this->load->model('M_admin');
        $lib=array("session","form_validation");
        $this->load->library($lib);
	}

	public function index(){
		if ($this->session->userdata('emails') != '' && $this->session->userdata('passwords') != '') {
			$idrole = array('id_role'=>$this->session->userdata('id_roles'));
			$data['dataAdmin'] = $this->M_admin->data_admin($idrole)->row();
			$data['content'] = 'kategoriarticle';
			$this->load->view('indexadmin',$data);
		}else{
			$this->load->view('login');
		}
	}

	public function tampil()
	{
		$data['dataKategoriArticle'] = $this->M_kategoriarticle->select_all();
		$this->load->view('kategoriarticle/list_data', $data);
	}

	public function tambah(){
		$data['dataParent'] = $this->M_kategoriarticle->parent();
		$data['content'] = 'kategoriarticle/form';
		$this->load->view('indexadmin',$data);
	}

	public function prosesTambah() {
		$out = array();
		$data = array();
		$this->form_validation->set_rules('nama_kategori_article', 'Nama Kategori Article', 'trim|required');
		// $this->form_validation->set_rules('url', 'url', 'trim|required');
		// $this->form_validation->set_rules('sort', 'sort', 'trim|required');
		// $this->form_validation->set_rules('	status_published', 'status_published', 'trim|required');
		$data 	= $this->input->post();

		if ( $this->form_validation->run() == TRUE ) {
			$result = $this->M_kategoriarticle->insert($data);
			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = '<p class="box-msg">
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Kategori Article Berhasil Ditambahkan</div>
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
				        	Data Kategori Article Gagal Ditambahkan
				        	</div>
					  </div>
				    </p>';
		}

		$this->session->set_flashdata('msg', $out['msg']);
		redirect('KategoriArticle');
	}

	public function update($id) {
			
		$id 				= $id;
		$data['dataParent'] = $this->M_kategoriarticle->parent();
		$data['dataKategoriArticle'] 	= $this->M_kategoriarticle->select_by_id($id);
		$data['content'] = 'kategoriarticle/form_update';
		$this->load->view('indexadmin',$data);
		
	}

	public function prosesUpdate() {
		$out = array();
		$data = array();
		$this->form_validation->set_rules('nama_kategori_article', 'Nama Kategori Article', 'trim|required');
		// $this->form_validation->set_rules('url', 'url', 'trim|required');
		// $this->form_validation->set_rules('sort', 'sort', 'trim|required');
		// $this->form_validation->set_rules('	status_published', 'status_published', 'trim|required');
		$data 	= $this->input->post();

		if ( $this->form_validation->run() == TRUE ) {
			$result = $this->M_kategoriarticle->update($data);
			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = '<p class="box-msg">
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Kategori Article Berhasil Diupdate</div>
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
				        	Data Kategori Article Gagal Diupdate
				        	</div>
					  </div>
				    </p>';
		}

		$this->session->set_flashdata('msg', $out['msg']);
		redirect('KategoriArticle');
	}

	
	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_kategoriarticle->delete($id);
		
		if ($result > 0) {
			echo '<p class="box-msg">
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Kategori Article Berhasil Dihapus</div>
					  </div>
				    </p>';
		} else {
			echo '<p class="box-msg">
				      <div class="info-box alert-error">
					      <div class="info-box-icon">
					      	<i class="fa fa-warning"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Kategori Article Gagal Dihapus</div>
					  </div>
				    </p>';
		}
	}

}

