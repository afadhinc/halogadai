<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Article extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_article');
        $this->load->model('M_kategoriarticle');
        $this->load->model('M_quizsoal');
        $this->load->model('M_menu');
        $this->load->model('M_admin');
        $lib=array("session","form_validation","Spreedsheet");
        $this->load->library($lib);
	}

	public function prosesTrending(){
		$id=$this->input->post('id');
		$this->M_article->trend($id);
	}
	public function prosesNoTrending(){
		$id=$this->input->post('id');
		$this->M_article->notrend($id);
	}

	public function index(){
		if ($this->session->userdata('emails') != '' && $this->session->userdata('passwords') != '') {
			$idrole = array('id_role'=>$this->session->userdata('id_roles'));
			$data['dataAdmin'] = $this->M_admin->data_admin($idrole)->row();
			$data['content'] = 'article';
			$this->load->view('indexadmin',$data);
		}else{
			redirect('Home');
		}
	}

	public function tampil()
	{
		$data['dataArticle'] = $this->M_article->select_all();

		$this->load->view('article/list_data', $data);
	}

	public function spreadsheet(){
		$spreadsheet = $this->spreedsheet->load();
		// Set document properties
        $spreadsheet->getProperties()->setCreator('Maarten Balliauw')
            ->setLastModifiedBy('Maarten Balliauw')
            ->setTitle('Office 2007 XLSX Test Document')
            ->setSubject('Office 2007 XLSX Test Document')
            ->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
            ->setKeywords('office 2007 openxml php')
            ->setCategory('Test result file');
        $data_artikel_lama = $this->M_article->select_data_old();
        $nomor = 2;
        foreach ($data_artikel_lama->result() as $lama) {
        	// Add some data
	        $spreadsheet->setActiveSheetIndex(0)
	        	->setCellValue('A1', 'Title')
	        	->setCellValue('B1', 'Images')
	        	->setCellValue('C1', 'Alias_Url')
	        	->setCellValue('D1', 'Status_Published')
	        	->setCellValue('E1', 'Body')
	        	->setCellValue('F1', 'Status_Promoted')
	        	->setCellValue('G1', 'Tanggal_Article')
	        	->setCellValue('H1', 'Tags')
	        	->setCellValue('I1', 'Nama Kategori Artikel')
	        	->setCellValue('J1', 'User Id')
	            ->setCellValue('A'.$nomor, $lama->title)
	            ->setCellValue('B'.$nomor, $lama->images)
	            ->setCellValue('C'.$nomor, $lama->alias_url)
	            ->setCellValue('D'.$nomor, $lama->status_publish==1?'Published':'Not Published')
	            ->setCellValue('E'.$nomor, $lama->body)
	            ->setCellValue('F'.$nomor, $lama->status_promoted==1?'Promoted':'Not Promoted')
	            ->setCellValue('G'.$nomor, $lama->tgl_article)
	            ->setCellValue('H'.$nomor, '-')
	            ->setCellValue('I'.$nomor, '-')
	            ->setCellValue('J'.$nomor, '-');
	        $nomor++; 
        }

        // Rename worksheet
        $spreadsheet->getActiveSheet()->setTitle('Article');

        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $spreadsheet->setActiveSheetIndex(0);
        $date = date('Y-m-d_His');
        // Redirect output to a client’s web browser (Xls)
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Article'.$date.'.xls"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

        // If you're serving to IE over SSL, then the following may be needed
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0
        // echo $spreadsheet;
        $writer = $this->spreedsheet->IOFactory($spreadsheet);
        $writer->save('php://output');
        exit;
	}
	public function tampiltrending()
	{
		$data['dataArticleTrending'] = $this->M_article->select_all_trending();
		// $data['dataArticle'] = $this->M_article->select_all();
		$this->load->view('article/list_data_trending', $data);
		// $this->load->view('article/list_data', $data);
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
		$data['content'] = 'article/form';
		$data['dataMenu'] = $this->M_menu->select_menu();
		$data['dataKategoriArticle'] = $this->M_kategoriarticle->select_all();
		$data['dataUser'] = $this->session->userdata('id_users');
		$this->load->view('indexadmin',$data);
	}

	public function prosesCek(){
		$link = $this->input->post('alias_url');

		$url = $this->M_article->select_url($link);
		
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

		$url = $this->M_article->select_url($link);
		
		if ($url->num_rows() > 0) {
			echo "Link sudah ada yang menggunakan";
			$out['status'] = '';
			$out['msg'] = '<p class="box-msg">
			      <div class="info-box alert-error">
				      <div class="info-box-icon">
				      	<i class="fa fa-warning"></i>
				      </div>
				      <div class="info-box-content" style="font-size:20px">
			        	Data Article Gagal Ditambahkan</div>
				  </div>
			    </p>';
		}else{
			echo "Link Belum ada ";
			// $this->form_validation->set_rules('alias_url', 'alias_url', 'trim|required');
			$this->form_validation->set_rules('title', 'title', 'trim|required');
			$this->form_validation->set_rules('status_published', 'status_published', 'trim|required');
			$this->form_validation->set_rules('tgl_article', 'tgl_article', 'trim|required');

			$data 	= $this->input->post();
			if ($this->form_validation->run() == TRUE ) {

				if ( $_FILES['images']['name'] != '' && $url->num_rows() == 0 ) {
					$filename = bin2hex(random_bytes(10)).str_replace(' ', '_', $_FILES['images']['name']);
					$filename = str_replace('(', '', $filename);
					$filename = str_replace(')', '', $filename);
					$data['images'] = $filename;

					// $result = $this->M_article->insert($data);

					
						$config['upload_path']          = 'assets/frontend/img/imgMenstruasi/';
						$config['allowed_types']        = 'gif|jpg|png';
						$config['file_name']        = $filename;
						$config['overwrite'] 	= TRUE;
						// $config['max_size']             = 100;
						// $config['max_width']            = 1024;
						// $config['max_height']           = 768;
						$this->load->library('upload', $config);
						$this->upload->initialize($config);

			            if ($this->upload->do_upload('images')) {
			            	if ( $_FILES['meta_image']['name'] != '' && $url->num_rows() == 0 ) {
								$filename = bin2hex(random_bytes(10)).str_replace(' ', '_', $_FILES['meta_image']['name']);
								$filename = str_replace('(', '', $filename);
								$filename = str_replace(')', '', $filename);
								$data['meta_image'] = $filename;

								// $result = $this->M_article->insert($data);

								
									$config['upload_path']          = 'assets/frontend/img/imgMenstruasi/';
									$config['allowed_types']        = 'gif|jpg|png';
									$config['file_name']        = $filename;
									$config['overwrite'] 	= TRUE;
									// $config['max_size']             = 100;
									// $config['max_width']            = 1024;
									// $config['max_height']           = 768;
									$this->load->library('upload', $config);
									$this->upload->initialize($config);

			            	if ($this->upload->do_upload('meta_image')) {
			            		$filename = bin2hex(random_bytes(10)).str_replace(' ', '_', $_FILES['meta_image']['name']);
								$filename = str_replace('(', '', $filename);
								$filename = str_replace(')', '', $filename);
			            		$data['meta_image'] = $filename;
			            	}

			            }
			            		$data['id_user'] = $this->session->userdata('id_users');
							    $result = $this->M_article->insert($data);
							    if ($result > 0) {
								 	$out['status'] = '';
									$out['msg'] = '<p class="box-msg">
									      <div class="info-box alert-success">
										      <div class="info-box-icon">
										      	<i class="fa fa-check-circle"></i>
										      </div>
										      <div class="info-box-content" style="font-size:20px">
									        	Data Article Berhasil Ditambahkan</div>
										  </div>
									    </p>';
									// print_r($data);
									$dt = array('alias_url'=>$this->input->post('alias_url'));
									$selectquiz = $this->M_article->select_data($dt);
									$jumquiz = count($this->input->post('quiz'));
									// echo'masuk';
									// print_r($this->input->post('quiz'));

										for ($i=0; $i < $jumquiz ; $i++) { 
											$dt = array('id_article'=>$selectquiz->id_article,
														'soal'=>$_POST['quiz'][$i],
														'opsi1'=>$_POST['opsi1'][$i],
														'opsi2'=>$_POST['opsi2'][$i]
													);
											$insertquiz = $this->M_quizsoal->insert($dt);
											if ($insertquiz > 0) {
												$out['status'] = '';
												$out['msg'] = '<p class="box-msg">
												      <div class="info-box alert-success">
													      <div class="info-box-icon">
													      	<i class="fa fa-check-circle"></i>
													      </div>
													      <div class="info-box-content" style="font-size:20px">
												        	Data Article Berhasil Ditambahkan</div>
													  </div>
												    </p>';
											}
										}

						            } else{
						            	$out['status'] = '';
										$out['msg'] = '<p class="box-msg">
										      <div class="info-box alert-error">
											      <div class="info-box-icon">
											      	<i class="fa fa-warning"></i>
											      </div>
											      <div class="info-box-content" style="font-size:20px">
										        	Data Article Gagal Upload</div>
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
						        	Data Article Gagal Ditambahkan</div>
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
						        	Data Article Gagal Ditambahkan 
						        	</div>
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
						        	Data Article Gagal Ditambahkan 
						        	</div>
							  </div>
						    </p>';
						}	
		}
		
		$this->session->set_flashdata('msg', $out['msg']);
		redirect('Article');
	}

	public function update($id) {
			
		$id 				= $id;
		$data['dataArticle'] 	= $this->M_article->select_by_id($id);
		$data['dataMenu'] = $this->M_menu->select_menu();
		$data['dataKategoriArticle'] = $this->M_kategoriarticle->select_all();
		$data['content'] = 'article/form_update';
		$this->load->view('indexadmin',$data);
		
	}

	public function prosesUpdate(){
		$out = array();
		$data = array();

		$link = $this->input->post('alias_url');
		$data 	= $this->input->post();

		$data['images'] = '';
		$url = $this->M_article->select_url($link);
		
		if ($url->num_rows() > 0 && $link != $url->row()->alias_url) {
			echo "Link sudah ada yang menggunakan";
			$out['status'] = '';
			$out['msg'] = '<p class="box-msg">
			      <div class="info-box alert-error">
				      <div class="info-box-icon">
				      	<i class="fa fa-check-circle"></i>
				      </div>
				      <div class="info-box-content" style="font-size:20px">
			        	Data Article Gagal Diupdate</div>
				  </div>
			    </p>';
		}else{
			$filename = '';
			echo "Link Belum ada ";
			if ( $_FILES['images']['name'] != '') {

				$filename = bin2hex(random_bytes(10)).str_replace(' ', '_', $_FILES['images']['name']);
				$filename = str_replace('(', '', $filename);
				$filename = str_replace(')', '', $filename);
				$data['images'] = $filename;

			}

			
			if ($_FILES['images']['name'] != '') {
				// $path = 'assets/img/imgMenstruasi/';

				$config['upload_path']          = 'assets/frontend/img/imgMenstruasi/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['file_name']        = $filename;
				$config['overwrite'] 	= TRUE;
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
					        	Data Article Berhasil Diupdate</div>
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
					        	Data Article Gagal Diupdate</div>
						  </div>
					    </p>';
				}
				
			}
			if ($_FILES['meta_image']['name'] != '') {
				// $path = 'assets/img/imgMenstruasi/';

				$config['upload_path']          = 'assets/frontend/img/imgMenstruasi/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['file_name']        = $filename;
				$config['overwrite'] 	= TRUE;
				// $config['max_size']             = 100;
				// $config['max_width']            = 1024;
				// $config['max_height']           = 768;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if ($this->upload->do_upload('meta_image')) {
					if ( $_FILES['meta_image']['name'] != '') {

						$filename = bin2hex(random_bytes(10)).str_replace(' ', '_', $_FILES['meta_image']['name']);
						$filename = str_replace('(', '', $filename);
						$filename = str_replace(')', '', $filename);
						$data['meta_image'] = $filename;

					}
				}
			}

			$result = $this->M_article->update($data);
			echo $result;
				if ($result > 0) {
					$out['status'] = '';
					$out['msg'] = '<p class="box-msg">
					      <div class="info-box alert-success">
						      <div class="info-box-icon">
						      	<i class="fa fa-check-circle"></i>
						      </div>
						      <div class="info-box-content" style="font-size:20px">
					        	Data Article Berhasil Diupdate</div>
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
					        	Data Article Gagal Diupdate Luar</div>
						  </div>
					    </p>';
				}
		}
		
		// print_r($data);
		$this->session->set_flashdata('msg', $out['msg']);
		redirect('Article');
	}
	public function updatesorttrend($id) {
			
		$id 				= $id;
		$data['dataArticle'] 	= $this->M_article->select_by_id($id);
		$data['dataMenu'] = $this->M_menu->select_menu();
		$data['dataKategoriArticle'] = $this->M_kategoriarticle->select_all();
		$data['content'] = 'article/form_update_trend';
		$this->load->view('indexadmin',$data);
		
	}
	public function prosesUpdateSortTrending(){
		$out = array();
		$data = array();

		$data 	= $this->input->post();
		
			$result = $this->M_article->updatesorttrend($data);
				if ($result > 0) {
					$out['status'] = '';
						$out['msgsort'] = '<p class="box-msg">
						      <div class="info-box alert-success">
							      <div class="info-box-icon">
							      	<i class="fa fa-check-circle"></i>
							      </div>
							      <div class="info-box-content" style="font-size:20px">
						        	Data Article Berhasil Diupdate</div>
							  </div>
						    </p>';
				} else{
					$out['status'] = '';
						$out['msgsort'] = '<p class="box-msg">
						      <div class="info-box alert-success">
							      <div class="info-box-icon">
							      	<i class="fa fa-check-circle"></i>
							      </div>
							      <div class="info-box-content" style="font-size:20px">
						        	Data Article Gagal Diupdate</div>
							  </div>
						    </p>';
				}
		$this->session->set_flashdata('msgsort', $out['msgsort']);
		redirect('Article');
	}

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_article->delete($id);
		
		if ($result > 0) {
			echo '<p class="box-msg">
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Article Berhasil Dihapus</div>
					  </div>
				    </p>';
		} else {
			echo '<p class="box-msg">
				      <div class="info-box alert-error">
					      <div class="info-box-icon">
					      	<i class="fa fa-warning"></i>
					      </div>
					      <div class="info-box-content" style="font-size:20px">
				        	Data Article Gagal Dihapus</div>
					  </div>
				    </p>';
		}
	}

}

