<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pengajuan extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_pengajuan');
        $this->load->model('M_admin');
        $lib=array("session","form_validation");
        $this->load->library($lib);
	}

	public function index(){
		if ($this->session->userdata('emails') != '' && $this->session->userdata('passwords') != '') {
			$idrole = array('id_role'=>$this->session->userdata('id_roles'));
			$data['dataAdmin'] = $this->M_admin->data_admin($idrole)->row();
			$data['content'] = 'pengajuan';
			$this->load->view('indexadmin',$data);
		}else{
			$this->load->view('login');
		}
	}
	
	public function export(){
		if ($this->session->userdata('emails') != '' && $this->session->userdata('passwords') != '') {
		 
			$data['dataPengajuan'] = $this->M_pengajuan->select_all();
			$data['content'] = 'pengajuan';
			$this->load->view('pengajuan/export-excel',$data);
		}else{
			$this->load->view('login');
		}
	}

	public function tampil()
	{
		$data['dataPengajuan'] = $this->M_pengajuan->select_all();
		$this->load->view('pengajuan/list_data', $data);
	}

	public function upload(){
		ob_get_level();

        //Image Save Option
		//저장 옵션
        $getpath = $this->input->get('path');
        $path = 'assets/frontend/img/'.$getpath;

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

	public function tambah(){
		$data['content'] = 'pengajuan/form';
		$this->load->view('indexadmin',$data);
	}

	public function prosesTambah() {
		$out = array();
		$data = array();
		
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		
		$data 	= $this->input->post();

		if ($this->form_validation->run() == TRUE) {
		
			$result = $this->M_pengajuan->insert($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = '<p class="box-msg">
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data About Us Berhasil Ditambah</div>
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
				        	Data About Us Gagal Ditambah</div>
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
				        	Data About Us Gagal Ditambah</div>
					  </div>
				    </p>';
			}
		$this->session->set_flashdata('msg', $out['msg']);
		redirect('Pengajuan');
	}

	public function update($id) {
			
		$id= $id;
		$data['dataPengajuan']= $this->M_pengajuan->select_by_id($id);
		$data['content'] = 'pengajuan/form_update';
		$this->load->view('indexadmin',$data);
		
	}

	public function prosesUpdate(){
		$out = array();
		$data = array();

		$data 	= $this->input->post();
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		

		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_pengajuan->update($data);
			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = '<p class="box-msg">
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data About Us Berhasil Diupdate</div>
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
				        	Data About Us Gagal Diupdate</div>
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
			        	Data About Us Gagal Diupdate</div>
				  </div>
			    </p>';
		}

		$this->session->set_flashdata('msg', $out['msg']);
		redirect('Pengajuan');
	}

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_pengajuan->delete($id);
		
		if ($result > 0) {
			echo '<p class="box-msg">
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data About Us Berhasil Dihapus</div>
					  </div>
				    </p>';
		} else {
			echo '<p class="box-msg">
				      <div class="info-box alert-error">
					      <div class="info-box-icon">
					      	<i class="fa fa-warning"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data About Us Gagal Dihapus</div>
					  </div>
				    </p>';
		}
	}

}

