<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Sosmed extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_sosmed');
        $this->load->model('M_admin');
        $lib=array("session","form_validation");
        $this->load->library($lib);
	}

	public function index(){
		if ($this->session->userdata('emails') != '' && $this->session->userdata('passwords') != '') {
			$idrole = array('id_role'=>$this->session->userdata('id_roles'));
			$data['dataAdmin'] = $this->M_admin->data_admin($idrole)->row();
			$data['content'] = 'sosmed';
			$this->load->view('indexadmin',$data);
		}else{
			$this->load->view('login');
		}
	}

	public function tampil()
	{
		$data['dataSosmed'] = $this->M_sosmed->select_all();
		$this->load->view('sosmed/list_data', $data);
	}

	public function tambah(){
		$data['content'] = 'sosmed/form';
		$this->load->view('indexadmin',$data);
	}

	public function prosesTambah() {
		$out = array();
		$data = array();

		$this->form_validation->set_rules('nama_sosmed', 'nama_sosmed', 'trim|required');
		$this->form_validation->set_rules('link_sosmed', 'link_sosmed', 'trim|required');
		
		$data 	= $this->input->post();
		if ( $_FILES['gambar_sosmed']['name'] != '' && $this->form_validation->run() == TRUE) {
			$filename = bin2hex(random_bytes(10)).str_replace(' ', '_', $_FILES['gambar_sosmed']['name']);
			$filename = str_replace('(', '', $filename);
			$filename = str_replace(')', '', $filename);
			$data['gambar_sosmed'] = $filename;
			$result = $this->M_sosmed->insert($data);

			if ($result > 0) {
				$config['upload_path']          = 'assets/frontend/img/sosmed/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['file_name']        	= $filename;
				// $config['max_size']             = 100;
				// $config['max_width']            = 1024;
				// $config['max_height']           = 768;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

	            if ($this->upload->do_upload('gambar_sosmed')) {
	            	$out['status'] = '';
					$out['msg'] = '<p class="box-msg">
					      <div class="info-box alert-success">
						      <div class="info-box-icon">
						      	<i class="fa fa-check-circle"></i>
						      </div>
						      <div class="info-box-content" style="font-size:20px">
					        	Data Sosmed Berhasil Ditambahkan</div>
						  </div>
					    </p>';
	            } else{
	            	$out['status'] = '';
				$out['msg'] = '<p class="box-msg">
				      <div class="info-box alert-error">
					      <div class="info-box-icon">
					      	<i class="fa fa-warning"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Sosmed Gagal Upload</div>
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
				        	Data Sosmed Gagal Ditambahkan</div>
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
				        	Data Sosmed Gagal Ditambahkan Luar
				        	</div>
					  </div>
				    </p>';
		}

		$this->session->set_flashdata('msg', $out['msg']);
		redirect('Sosmed');
	}

	public function update($id) {
			
		$id 				= $id;
		$data['dataSosmed'] 	= $this->M_sosmed->select_by_id($id);
		$data['content'] = 'sosmed/form_update';
		$this->load->view('indexadmin',$data);
		
	}

	public function prosesUpdate(){
		$out = array();
		$data = array();

		$data 	= $this->input->post();
		$data['gambar_sosmed'] = '';
		if ( $_FILES['gambar_sosmed']['name'] != '') {
			$filename = bin2hex(random_bytes(10)).str_replace(' ', '_', $_FILES['gambar_sosmed']['name']);
			$filename = str_replace('(', '', $filename);
			$filename = str_replace(')', '', $filename);
			$data['gambar_sosmed'] = $filename;
		}

			
			if ($_FILES['gambar_sosmed']['name'] != '') {
						
				$config['upload_path']          = 'assets/frontend/img/sosmed/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['file_name']        = $filename;
				// $config['max_size']             = 100;
				// $config['max_width']            = 1024;
				// $config['max_height']           = 768;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('gambar_sosmed')) {
					$out['status'] = '';
						$out['msg'] = '<p class="box-msg">
						      <div class="info-box alert-success">
							      <div class="info-box-icon">
							      	<i class="fa fa-check-circle"></i>
							      </div>
							      <div class="info-box-content" style="font-size:20px">
						        	Data Sosmed Berhasil Diupdate</div>
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
						        	Data Sosmed Gagal Diupdate</div>
							  </div>
						    </p>';
				}
				
			}
			$result = $this->M_sosmed->update($data);
				if ($result > 0) {
					$out['status'] = '';
						$out['msg'] = '<p class="box-msg">
						      <div class="info-box alert-success">
							      <div class="info-box-icon">
							      	<i class="fa fa-check-circle"></i>
							      </div>
							      <div class="info-box-content" style="font-size:20px">
						        	Data Sosmed Berhasil Diupdate</div>
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
						        	Data Sosmed Gagal Diupdate</div>
							  </div>
						    </p>';
				}

		$this->session->set_flashdata('msg', $out['msg']);
		redirect('Sosmed');
	}

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_sosmed->delete($id);
		
		if ($result > 0) {
			echo '<p class="box-msg">
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Sosmed Berhasil Dihapus</div>
					  </div>
				    </p>';
		} else {
			echo '<p class="box-msg">
				      <div class="info-box alert-error">
					      <div class="info-box-icon">
					      	<i class="fa fa-warning"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Sosmed Gagal Dihapus</div>
					  </div>
				    </p>';
		}
	}

}

