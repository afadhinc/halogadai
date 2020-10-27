<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Campaign extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_campaign');
        $this->load->model('M_admin');
        $lib=array("session","form_validation");
        $this->load->library($lib);
	}

	public function index(){
		if ( $this->session->userdata('emails') != '' && $this->session->userdata('passwords') != '') {
			$idrole = array('id_role'=>$this->session->userdata('id_roles'));
			$data['dataAdmin'] = $this->M_admin->data_admin($idrole)->row();
			$data['content'] = 'campaign';
			$this->load->view('indexadmin',$data);
		}else{
			redirect('Home');
		}
	}

	public function tampil()
	{
		$data['dataCampaign'] = $this->M_campaign->select_all();
		$this->load->view('campaign/list_data', $data);
	}

	public function tambah(){
		$data['content'] = 'campaign/form';
		$this->load->view('indexadmin',$data);
	}

	public function upload(){
		ob_get_level();

        //Image Save Option
		//저장 옵션
        $getpath = $this->input->get('path');
        $path = 'assets/img/'.$getpath;

        $config['upload_path'] = $path; //YOUR PATH
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '0';
        $config['file_name'] = 'upload';
        $config['remove_spaces'] = TRUE;

        //Form Upload, Drag & Drop
        $CKEditorFuncNum = $this->input->get('CKEditorFuncNum');
        if(empty($CKEditorFuncNum))
        {
            ////////////////////////////////////////////////////////////////////////////////////////////////////////
            // Drag & Drop
            ////////////////////////////////////////////////////////////////////////////////////////////////////////
            header('Content-Type: application/json');

            $this->load->library('upload', $config);
            if ( !$this->upload->do_upload("upload"))
            {
                $jsondata = array('uploaded'=> 0, 'fileName'=> 'null1', 'url'=> 'null','eror'=>$this->upload->display_errors());

                echo json_encode($jsondata);
            }
            else
            {
                $data = $this->upload->data();

                // JPG compression
                if($this->upload->data('file_ext') === '.jpg') {
                    $filename = $this->upload->data('full_path');
                    $img = imagecreatefromjpeg($filename);
                    imagejpeg($img, $filename, 80);
                }

                $filename = $data['file_name'];
                $url = base_url().$path.'/'.$filename;

                $jsondata = array('uploaded'=> 1, 'fileName'=> $filename, 'url'=> $url);
                echo json_encode($jsondata);
            }
        }
        else
        {
            ////////////////////////////////////////////////////////////////////////////////////////////////////////
            // Form Upload
            ////////////////////////////////////////////////////////////////////////////////////////////////////////
            $this->load->library('upload', $config);
            if ( !$this->upload->do_upload("upload"))
            {
                echo "<script>alert('Send Fail".$this->upload->display_errors('','')."')</script>";
            }
            else
            {
                $CKEditorFuncNum = $this->input->get('CKEditorFuncNum');
                $data = $this->upload->data();

                // JPG compression
                if($this->upload->data('file_ext') === '.jpg') {
                    $filename = $this->upload->data('full_path');
                    $img = imagecreatefromjpeg($filename);
                    imagejpeg($img, $filename, 80);
                }

                $filename = $data['file_name'];

                $url = base_url().$path.'/'.$filename;
                echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction('".$CKEditorFuncNum."', '".$url."', 'Send OK')</script>";
            }
        }

        ob_end_flush();
    	
	}

	public function prosesCek(){
		$link = $this->input->post('alias_url');

		$url = $this->M_campaign->select_url($link);
		
		if ($url->num_rows() > 0) {
			echo "Link sudah ada yang menggunakan";
		}else{
			echo "Link Belum ada ";
		}
	}

	public function prosesTambah() {
		$out = array();
		$data = array();

		$link = $this->input->post('alias_url');

		$url = $this->M_campaign->select_url($link);
		
		if ($url->num_rows() > 0) {
			echo "Link sudah ada yang menggunakan";
			$out['status'] = '';
			$out['msg'] = '<p class="box-msg">
			      <div class="info-box alert-error">
				      <div class="info-box-icon">
				      	<i class="fa fa-warning"></i>
				      </div>
				      <div class="info-box-content" style="font-size:20px">
			        	Data Campaign Gagal Ditambahkan</div>
				  </div>
			    </p>';
		}else{
			echo "Link Belum ada ";
			$this->form_validation->set_rules('tittle', 'tittle', 'trim|required');
			$this->form_validation->set_rules('alias_url', 'alias_url', 'trim|required');
			$this->form_validation->set_rules('tgl_campaign', 'tgl_campaign', 'trim|required');
			$this->form_validation->set_rules('link_video', 'link_video', 'trim|required');
			$this->form_validation->set_rules('link_button', 'link_button', 'trim|required');
			
			$data 	= $this->input->post();
			if (($_FILES['images']['name'] != '' && $url->num_rows() == 0) && $this->form_validation->run() == TRUE) {
				$filename = bin2hex(random_bytes(10)).str_replace(' ', '_', $_FILES['images']['name']);
				$filename = str_replace('(', '', $filename);
				$filename = str_replace(')', '', $filename);
				$data['images'] = $filename;
				// $result = $this->M_campaign->insert($data);

				
					$config['upload_path']          = 'assets/frontend/img/campaign/';
					$config['allowed_types']        = 'gif|jpg|png';
					$config['file_name']        = $filename;
					// $config['max_size']             = 100;
					// $config['max_width']            = 1024;
					// $config['max_height']           = 768;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);

		            if ($this->upload->do_upload('images')) {
		            	$result = $this->M_campaign->insert($data);
		            	if ($result > 0) {
			            	$out['status'] = '';
							$out['msg'] = '<p class="box-msg">
							      <div class="info-box alert-success">
								      <div class="info-box-icon">
								      	<i class="fa fa-check-circle"></i>
								      </div>
								      <div class="info-box-content" style="font-size:20px">
							        	Data Campaign Berhasil Ditambahkan</div>
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
						        	Data Campaign Gagal Upload</div>
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
					        	Data Campaign Gagal Ditambahkan</div>
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
					        	Data Campaign Gagal Ditambahkan Luar
					        	</div>
						  </div>
					    </p>';
			}
		}


		$this->session->set_flashdata('msg', $out['msg']);
		redirect('Campaign');
	}

	public function update($id) {
			
		$id 				= $id;
		$data['dataCampaign'] 	= $this->M_campaign->select_by_id($id);
		$data['content'] = 'campaign/form_update';
		$this->load->view('indexadmin',$data);
		
	}

	public function prosesUpdate(){
		$out = array();
		$data = array();

		$data 	= $this->input->post();
		$data['images'] = '';
		$filename = '';
		$link = $this->input->post('alias_url');

		$url = $this->M_campaign->select_url($link);
		
		if ($url->num_rows() > 0 && $link != $url->row()->alias_url) {
			echo "Link sudah ada yang menggunakan";
			$out['status'] = '';
			$out['msg'] = '<p class="box-msg">
			      <div class="info-box alert-error">
				      <div class="info-box-icon">
				      	<i class="fa fa-check-circle"></i>
				      </div>
				      <div class="info-box-content" style="font-size:20px">
			        	Data Campaign Gagal Diupdate</div>
				  </div>
			    </p>';
		}else{
			
			echo "Link Belum ada ";
			if ( $_FILES['images']['name'] != '') {
				$filename = bin2hex(random_bytes(10)).str_replace(' ', '_', $_FILES['images']['name']);
				$filename = str_replace('(', '', $filename);
				$filename = str_replace(')', '', $filename);
				$data['images'] = $filename;
			}

			
			if ($_FILES['images']['name'] != '') { 
						
				$config['upload_path']          = 'assets/frontend/img/campaign/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['file_name']        = $filename;
				// $config['max_size']             = 100;
				// $config['max_width']            = 1024;
				// $config['max_height']           = 768;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('images')) {
					$out['status'] = '';
					$out['msg'] = '<p class="box-msg">
					      <div class="info-box alert-success">
						      <div class="info-box-icon">
						      	<i class="fa fa-check-circle"></i>
						      </div>
						      <div class="info-box-content" style="font-size:20px">
					        	Data Campaign Berhasil Diupdate</div>
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
					        	Data Campaign Gagal Diupdate</div>
						  </div>
					    </p>';
				}
				
			}
			$result = $this->M_campaign->update($data);
			// echo $result;
				if ($result > 0) {
					$out['status'] = '';
						$out['msg'] = '<p class="box-msg">
						      <div class="info-box alert-success">
							      <div class="info-box-icon">
							      	<i class="fa fa-check-circle"></i>
							      </div>
							      <div class="info-box-content" style="font-size:20px">
						        	Data Campaign Berhasil Diupdate</div>
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
						        	Data Campaign Gagal Diupdate</div>
							  </div>
						    </p>';
				}

		}

		

		$this->session->set_flashdata('msg', $out['msg']);
		redirect('Campaign');
	}

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_campaign->delete($id);
		
		if ($result > 0) {
			echo '<p class="box-msg">
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Campaign Berhasil Dihapus</div>
					  </div>
				    </p>';
		} else {
			echo '<p class="box-msg">
				      <div class="info-box alert-error">
					      <div class="info-box-icon">
					      	<i class="fa fa-warning"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Campaign Gagal Dihapus</div>
					  </div>
				    </p>';
		}
	}

}

