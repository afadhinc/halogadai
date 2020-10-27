<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Setting extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_setting');
        $this->load->model('M_admin');
        $lib=array("session","form_validation","upload");
        $this->load->library($lib);
	}

	public function index(){
		if ($this->session->userdata('emails') != '' && $this->session->userdata('passwords') != '') {
			$idrole = array('id_role'=>$this->session->userdata('id_roles'));
			$data['dataAdmin'] = $this->M_admin->data_admin($idrole)->row();
			$data['content'] = 'setting';
			$this->load->view('indexadmin',$data);
		}else{
			$this->load->view('login');
		}
	}

	// public function tampil()
	// {
	// 	$data['dataUser'] = $this->M_user->select_all();
	// 	$this->load->view('user/list_data', $data);
	// }

	public function update($id) {
			
		$id 				= $id;
		$data['dataSetting'] 	= $this->M_setting->select_by_id($id);
		$data['content'] = 'setting/form_update';
		$this->load->view('indexadmin',$data);
		
	}

	public function prosesUpdate(){
		$out = array();
		$data = array();
		$this->load->library('upload');
		$data 	= $this->input->post();
		$data['foto'] = '';

		if ( $_FILES['foto']['name'] != '') {
			$data['foto'] = $_FILES['foto']['name'];

			$config['upload_path']          = 'assets/img/user';
			$config['allowed_types']        = 'gif|jpg|png';
			// $config['max_size']             = 100;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('foto')) {
					$out['status'] = '';
						$out['msg'] = '<p class="box-msg">
						      <div class="info-box alert-success">
							      <div class="info-box-icon">
							      	<i class="fa fa-check-circle"></i>
							      </div>
							      <div class="info-box-content" style="font-size:20px">
						        	Data Setting Berhasil Diupdate</div>
							  </div>
						    </p>';
				}else{
					$out['status'] = '';
						$out['msg'] = '<p class="box-msg">
						      <div class="info-box alert-success">
							      <div class="info-box-icon">
							      	<i class="fa fa-check-circle"></i>
							      </div>
							      <div class="info-box-content" style="font-size:20px">
						        	Data Setting Gagal Diupdate</div>
							  </div>
						    </p>';
				}
		}
		
		$result = $this->M_setting->update($data);
			if ($result > 0) {
				$out['status'] = '';
					$out['msg'] = '<p class="box-msg">
					      <div class="info-box alert-success">
						      <div class="info-box-icon">
						      	<i class="fa fa-check-circle"></i>
						      </div>
						      <div class="info-box-content" style="font-size:20px">
					        	Data Setting Berhasil Diupdate</div>
						  </div>
					    </p>';
			} else{
				$out['status'] = '';
					$out['msg'] = '<p class="box-msg">
					      <div class="info-box alert-success">
						      <div class="info-box-icon">
						      	<i class="fa fa-check-circle"></i>
						      </div>
						      <div class="info-box-content" style="font-size:20px">
					        	Data Setting Gagal Diupdate</div>
						  </div>
					    </p>';
			}

		$this->session->set_flashdata('msg', $out['msg']);
		if ($this->session->userdata('id_roles') == 1) {
			redirect('Setting/update/'.$data['id_user'] );
		}else {
			redirect('Admin/home');	
		}
		
	}

}

