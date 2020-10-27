<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class KategoriProduk extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_kategoriproduk');
        $this->load->model('M_admin');
        $lib=array("session","form_validation");
        $this->load->library($lib);
	}

	public function index(){
		if ($this->session->userdata('emails') != '' && $this->session->userdata('passwords') != '') {
			$idrole = array('id_role'=>$this->session->userdata('id_roles'));
			$data['dataAdmin'] = $this->M_admin->data_admin($idrole)->row();
			$data['content'] = 'kategoriproduk';
			$this->load->view('indexadmin',$data);
		}else{
			$this->load->view('login');
		}
	}

	public function tampil()
	{
		$data['dataKategoriProduk'] = $this->M_kategoriproduk->select_all();
		$this->load->view('kategoriproduk/list_data', $data);
	}

	public function tambah(){
		$data['content'] = 'kategoriproduk/form';
		$this->load->view('indexadmin',$data);
	}

	public function prosesCek(){
		$link = $this->input->post('url_kategori');

		$url = $this->M_kategoriproduk->select_url($link);
		
		if ($url->num_rows() > 0) {
			echo "Link sudah ada yang menggunakan";
		}else{
			echo "Link Belum ada ";
		}
	}

	public function prosesTambah() {
		$out = array();
		$data = array();
		$link = $this->input->post('url_kategori');

		$url = $this->M_kategoriproduk->select_url($link);
		
		if ($url->num_rows() > 0) {
			echo "Link sudah ada yang menggunakan";
			$out['status'] = 'form';
				$out['msg'] = '<p class="box-msg">
					      <div class="info-box alert-error">
						      <div class="info-box-icon">
						      	<i class="fa fa-warning"></i>
						      </div>
						      <div class="info-box-content" style="font-size:20px">
					        	Data Kategori Produk Gagal Ditambahkan Luar
					        	</div>
						  </div>
					    </p>';
		}else{
			echo "Link Belum ada ";
			$this->form_validation->set_rules('nama_kategori', 'nama_kategori', 'trim|required');
			$this->form_validation->set_rules('url_kategori', 'url_kategori', 'trim|required');
			
			$data 	= $this->input->post();
			if ( $_FILES['gambar_kategori']['name'] != '' && $this->form_validation->run() == TRUE) {

				$data['gambar_kategori'] = $_FILES['gambar_kategori']['name'];
				$result = $this->M_kategoriproduk->insert($data);

				if ($result > 0) {
					$config['upload_path']          = 'assets/img/product/';
					$config['allowed_types']        = 'gif|jpg|png';
					// $config['max_size']             = 100;
					// $config['max_width']            = 1024;
					// $config['max_height']           = 768;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);

		            if ($this->upload->do_upload('gambar_kategori')) {
		            	$out['status'] = '';
						$out['msg'] = '<p class="box-msg">
						      <div class="info-box alert-success">
							      <div class="info-box-icon">
							      	<i class="fa fa-check-circle"></i>
							      </div>
							      <div class="info-box-content" style="font-size:20px">
						        	Data Kategori Produk Berhasil Ditambahkan</div>
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
					        	Data Kategori Produk Gagal Upload</div>
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
					        	Data Kategori Produk Gagal Ditambahkan</div>
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
					        	Data Kategori Produk Gagal Ditambahkan Luar
					        	</div>
						  </div>
					    </p>';
			}

		}


		$this->session->set_flashdata('msg', $out['msg']);
		redirect('KategoriProduk');
	}

	public function update($id) {
			
		$id= $id;
		$data['dataKategoriProduk']= $this->M_kategoriproduk->select_by_id($id);
		$data['content'] = 'kategoriproduk/form_update';
		$this->load->view('indexadmin',$data);
		
	}

	public function prosesUpdate(){
		$out = array();
		$data = array();

		$data 	= $this->input->post();
		$data['gambar_kategori'] = '';
		if ( $_FILES['gambar_kategori']['name'] != '') {
			$data['gambar_kategori'] = $_FILES['gambar_kategori']['name'];
		}

			
			if ($_FILES['gambar_kategori']['name'] != '' ) {
						
				$config['upload_path']          = 'assets/img/product/';
				$config['allowed_types']        = 'gif|jpg|png';
				// $config['max_size']             = 100;
				// $config['max_width']            = 1024;
				// $config['max_height']           = 768;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('gambar_kategori')) {
					$out['status'] = '';
						$out['msg'] = '<p class="box-msg">
						      <div class="info-box alert-success">
							      <div class="info-box-icon">
							      	<i class="fa fa-check-circle"></i>
							      </div>
							      <div class="info-box-content" style="font-size:20px">
						        	Data Kategori Produk Berhasil Diupdate</div>
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
						        	Data Kategori Produk Gagal Diupdate</div>
							  </div>
						    </p>';
				}
			}
			
			$result = $this->M_kategoriproduk->update($data);
				if ($result > 0) {
					$out['status'] = '';
						$out['msg'] = '<p class="box-msg">
						      <div class="info-box alert-success">
							      <div class="info-box-icon">
							      	<i class="fa fa-check-circle"></i>
							      </div>
							      <div class="info-box-content" style="font-size:20px">
						        	Data Kategori Produk Berhasil Diupdate</div>
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
						        	Data Kategori Produk Gagal Diupdate</div>
							  </div>
						    </p>';
				}

		$this->session->set_flashdata('msg', $out['msg']);
		redirect('KategoriProduk');
	}

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_kategoriproduk->delete($id);
		
		if ($result > 0) {
			echo '<p class="box-msg">
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Ecommerce Berhasil Dihapus</div>
					  </div>
				    </p>';
		} else {
			echo '<p class="box-msg">
				      <div class="info-box alert-error">
					      <div class="info-box-icon">
					      	<i class="fa fa-warning"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Ecommerce Gagal Dihapus</div>
					  </div>
				    </p>';
		}
	}

}

