<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Periodfact extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_periodfact');
        $this->load->model('M_admin');
        $lib=array("session","form_validation");
        $this->load->library($lib);
	}

	public function index(){
		if ($this->session->userdata('emails') != '' && $this->session->userdata('passwords') != '') {
			$idrole = array('id_role'=>$this->session->userdata('id_roles'));
			$data['dataAdmin'] = $this->M_admin->data_admin($idrole)->row();
			$data['content'] = 'periodfact';
			$this->load->view('indexadmin',$data);
		}else{
			$this->load->view('login');
		}
	}

	public function tampil()
	{
		$data['dataPeriodfact'] = $this->M_periodfact->select_all();
		$this->load->view('periodfact/list_data', $data);
	}

	public function tambah(){
		$data['content'] = 'periodfact/form';
		$this->load->view('indexadmin',$data);
	}

	public function prosesTambah() {
		$out = array();
		$data = array();
		
		$this->form_validation->set_rules('judul', 'judul', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
		$this->form_validation->set_rules('sort', 'sort', 'trim|required');

		$data 	= $this->input->post();
		if ( $_FILES['gambar']['name'] != '' && $this->form_validation->run() == TRUE) {
			
			$filename = bin2hex(random_bytes(10)).str_replace(' ', '_', $_FILES['gambar']['name']);
			$filename = str_replace('(', '', $filename);
			$filename = str_replace(')', '', $filename);

			$data['gambar'] = $filename;

			// $result = $this->M_periodfact->insert($data);
			
			$config['upload_path']          = 'assets/frontend/img/imgfacts/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['file_name']        = $filename;
			// $config['max_size']             = 100;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

	            if ($this->upload->do_upload('gambar')) {
	            	$result = $this->M_periodfact->insert($data);
	            	if ($result > 0) {
	            		$out['status'] = '';
						$out['msg'] = '<p class="box-msg">
						      <div class="info-box alert-success">
							      <div class="info-box-icon">
							      	<i class="fa fa-check-circle"></i>
							      </div>
							      <div class="info-box-content" style="font-size:20px">
						        	Data Slider Berhasil Ditambahkan</div>
							  </div>
						    </p>';
	            	}
	            	
	            } else{
	            	$out['status'] = '';
					$out['msg'] = '<p class="box-msg">
				      <div class="info-box alert-error">
					      <div class="info-box-icon">
					      	<i class="fa fa-warning"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Slider Gagal Upload</div>
					  </div>
				    </p>';
	            }
			} else {
				$out['status'] = '';
				$out['msg'] = '<p class="box-msg">
				      <div class="info-box alert-error">
					      <div class="info-box-icon">
					      	<i class="fa fa-warning"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Slider Gagal Ditambahkan</div>
					  </div>
				    </p>';
			}
		
		// print_r($data) ;
		$this->session->set_flashdata('msg', $out['msg']);
		redirect('Periodfact');
	}

	public function update($id) {
			
		$id 				= $id;
		$data['dataPeriodfact'] 	= $this->M_periodfact->select_by_id($id);
		$data['content'] = 'periodfact/form_update';
		$this->load->view('indexadmin',$data);
		
	}

	public function prosesUpdate(){
		$out = array();
		$data = array();

		$data 	= $this->input->post();
		$data['gambar'] = '';
		$filename = '';
		if ( $_FILES['gambar']['name'] != '') {
			$filename = bin2hex(random_bytes(10)).str_replace(' ', '_', $_FILES['gambar']['name']);
			$filename = str_replace('(', '', $filename);
			$filename = str_replace(')', '', $filename);
			$data['gambar'] = $filename;
		}

			
			if ($_FILES['gambar']['name'] != '' ) {
						
				$config['upload_path']          = 'assets/frontend/img/imgfacts/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['file_name']        = $filename;
				// $config['max_size']             = 100;
				// $config['max_width']            = 1024;
				// $config['max_height']           = 768;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('gambar')) {
					$out['status'] = '';
						$out['msg'] = '<p class="box-msg">
						      <div class="info-box alert-success">
							      <div class="info-box-icon">
							      	<i class="fa fa-check-circle"></i>
							      </div>
							      <div class="info-box-content" style="font-size:20px">
						        	Data Slider Berhasil Diupdate</div>
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
						        	Data Slider Gagal Diupdate</div>
							  </div>
						    </p>';
				}
			}
			$result = $this->M_periodfact->update($data);
				if ($result > 0) {
					$out['status'] = '';
						$out['msg'] = '<p class="box-msg">
						      <div class="info-box alert-success">
							      <div class="info-box-icon">
							      	<i class="fa fa-check-circle"></i>
							      </div>
							      <div class="info-box-content" style="font-size:20px">
						        	Data Slider Berhasil Diupdate</div>
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
						        	Data Slider Gagal Diupdate</div>
							  </div>
						    </p>';
				}

		$this->session->set_flashdata('msg', $out['msg']);
		redirect('Periodfact');
	}

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_periodfact->delete($id);
		
		if ($result > 0) {
			echo '<p class="box-msg">
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Slider Berhasil Dihapus</div>
					  </div>
				    </p>';
		} else {
			echo '<p class="box-msg">
				      <div class="info-box alert-error">
					      <div class="info-box-icon">
					      	<i class="fa fa-warning"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Slider Gagal Dihapus</div>
					  </div>
				    </p>';
		}
	}

}

