<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TypeProduk extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_typeproduk');
        $this->load->model('M_admin');
        $lib=array("session","form_validation");
        $this->load->library($lib);
	}

	public function index(){
		if ($this->session->userdata('emails') != '' && $this->session->userdata('passwords') != '') {
			$idrole = array('id_role'=>$this->session->userdata('id_roles'));
			$data['dataAdmin'] = $this->M_admin->data_admin($idrole)->row();
			$data['content'] = 'typeproduk';
			$this->load->view('indexadmin',$data);
		}else{
			$this->load->view('login');
		}
	}

	public function tampil()
	{
		$data['dataTypeProduk'] = $this->M_typeproduk->select_all();
		$this->load->view('typeproduk/list_data', $data);
	}

	public function tambah(){
		$data['content'] = 'typeproduk/form';
		$this->load->view('indexadmin',$data);
	}

	public function prosesTambah() {
		$out = array();
		$data = array();
		
		$this->form_validation->set_rules('nama_type', 'nama_type', 'trim|required');
		
		$data 	= $this->input->post();

		if ($this->form_validation->run() == TRUE) {
		
			$result = $this->M_typeproduk->insert($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = '<p class="box-msg">
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Type Produk Berhasil Ditambah</div>
					  </div>
				    </p>';
			} else{
				$out['status'] = '';
				$out['msg'] = '<p class="box-msg">
				      <div class="info-box alert-error">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Type Produk Gagal Ditambah</div>
					  </div>
				    </p>';
			}
			
		}else{
				$out['status'] = '';
				$out['msg'] = '<p class="box-msg">
				      <div class="info-box alert-error">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Type Produk Gagal Ditambah</div>
					  </div>
				    </p>';
			}
		$this->session->set_flashdata('msg', $out['msg']);
		redirect('TypeProduk');
	}

	public function update($id) {
			
		$id= $id;
		$data['dataTypeProduk']= $this->M_typeproduk->select_by_id($id);
		$data['content'] = 'typeproduk/form_update';
		$this->load->view('indexadmin',$data);
		
	}

	public function prosesUpdate(){
		$out = array();
		$data = array();

		$data 	= $this->input->post();
		$this->form_validation->set_rules('nama_type', 'nama_type', 'trim|required');
		

		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_typeproduk->update($data);
			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = '<p class="box-msg">
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Type Produk Berhasil Diupdate</div>
					  </div>
				    </p>';
			}else{
				$out['status'] = '';
				$out['msg'] = '<p class="box-msg">
				      <div class="info-box alert-error">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Type Produk Gagal Diupdate</div>
					  </div>
				    </p>';
			}
			
		} else{
			$out['status'] = '';
			$out['msg'] = '<p class="box-msg">
			      <div class="info-box alert-error">
				      <div class="info-box-icon">
				      	<i class="fa fa-check-circle"></i>
				      </div>
				      <div class="info-box-content" style="font-size:20px">
			        	Data Type Produk Gagal Diupdate</div>
				  </div>
			    </p>';
		}

		$this->session->set_flashdata('msg', $out['msg']);
		redirect('TypeProduk');
	}

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_typeproduk->delete($id);
		
		if ($result > 0) {
			echo '<p class="box-msg">
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Type Produk Berhasil Dihapus</div>
					  </div>
				    </p>';
		} else {
			echo '<p class="box-msg">
				      <div class="info-box alert-error">
					      <div class="info-box-icon">
					      	<i class="fa fa-warning"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Type Produk Gagal Dihapus</div>
					  </div>
				    </p>';
		}
	}

}

