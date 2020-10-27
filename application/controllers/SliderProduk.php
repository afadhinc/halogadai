<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SliderProduk extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_sliderproduk');
        $this->load->model('M_produk');
        $this->load->model('M_admin');
        $lib=array("session","form_validation");
        $this->load->library($lib);
	}

	public function index(){
		if ($this->session->userdata('emails') != '' && $this->session->userdata('passwords') != '') {
			$idrole = array('id_role'=>$this->session->userdata('id_roles'));
			$data['dataAdmin'] = $this->M_admin->data_admin($idrole)->row();
			$data['content'] = 'sliderproduk';
			$this->load->view('indexadmin',$data);
		}else{
			$this->load->view('login');
		}
	}

	public function tampil($id)
	{
		$data['dataSliderProduk'] = $this->M_sliderproduk->select_slider_produk($id);
		$data['content'] = 'sliderproduk';
		$this->load->view('indexadmin', $data);
	}

	public function table($id)
	{
		$data['dataSliderProduk'] = $this->M_sliderproduk->select_slider_produk($id);
		$data['content'] = 'sliderproduk';
		$this->load->view('sliderproduk/list_data', $data);
	}

	public function tambah($id){
		$data['dataSliderProduk'] = $this->M_sliderproduk->select_slider_produk_form($id)->row();
		$data['content'] = 'sliderproduk/form';
		$this->load->view('indexadmin',$data);
	}

	public function prosesTambah() {
		$out = array();
		$data = array();
		
		$id = $this->input->post('id');
		
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');

		$data 	= $this->input->post();
		
		if ($_FILES['gambar']['name'] != '' && $this->form_validation->run() == TRUE) {

			$data['gambar'] = $_FILES['gambar']['name'];
			$result = $this->M_sliderproduk->insert($data);

        	if ($result > 0) {
				$config['upload_path']          = 'assets/frontend/img/product/';
				$config['allowed_types']        = 'gif|jpg|png';
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
					        	Data Slider Product Berhasil Ditambahkan</div>
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
				        	Data Slider Product Gagal Upload</div>
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
				        	Data Slider Produk Gagal Ditambahkan</div>
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
				        	Data Slider Produk Gagal Ditambahkan</div>
					  </div>
				    </p>';
			}
		$this->session->set_flashdata('msg', $out['msg']);
		redirect('SliderProduk/tampil/'.$id);
	}

	public function update($id) {
			
		$id= $id;
		$data['dataSliderProduk']= $this->M_sliderproduk->select_slider_produk_form_update($id)->row();
		$data['content'] = 'sliderproduk/form_update';
		$this->load->view('indexadmin',$data);
		
	}

	public function prosesUpdate(){
		$out = array();
		$data = array();
		
		$id = $this->input->post('id');
		$data 	= $this->input->post();
		$data['gambar'] = '';

		if ( $_FILES['gambar']['name'] != '') {
			$data['gambar'] = $_FILES['gambar']['name'];
		}

		if ( $_FILES['gambar']['name'] != '') {
			$config['upload_path']          = 'assets/frontend/img/product/';
			$config['allowed_types']        = 'gif|jpg|png';
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
				        	Data Slider Produk Berhasil Diupdate</div>
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

		$result = $this->M_sliderproduk->update($data);

		if ($result > 0) {
			$out['status'] = '';
			$out['msg'] = '<p class="box-msg">
			      <div class="info-box alert-success">
				      <div class="info-box-icon">
				      	<i class="fa fa-check-circle"></i>
				      </div>
				      <div class="info-box-content" style="font-size:20px">
			        	Data Slider Produk Berhasil Diupdate</div>
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
			        	Data Slider Produk Gagal Diupdate</div>
				  </div>
			    </p>';
		}
			$this->session->set_flashdata('msg', $out['msg']);
			redirect('SliderProduk/tampil/'.$id);
	}
		
	public function delete() {
		$id = $_POST['id'];
		
		$path = $this->M_sliderproduk->select_gambar($id);
		$gambar = $path->gambar;
		unlink('assets/img/product/'.$gambar);
		$result = $this->M_sliderproduk->delete($id);
		if ($result > 0) {
			echo '<p class="box-msg">
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Produk Berhasil Dihapus</div>
					  </div>
				    </p>';
		} else {
			echo '<p class="box-msg">
				      <div class="info-box alert-error">
					      <div class="info-box-icon">
					      	<i class="fa fa-warning"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Produk Gagal Dihapus</div>
					  </div>
				    </p>';
		}
	}

}

