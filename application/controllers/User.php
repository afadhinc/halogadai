<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_user');
        $this->load->model('M_admin');
        $lib=array("session","form_validation","upload");
        $this->load->library($lib);
	}

	public function index(){
		if ($this->session->userdata('emails') != '' && $this->session->userdata('passwords') != '') {
			if ($this->session->userdata('id_roles') == 1) {
				$idrole = array('id_role'=>$this->session->userdata('id_roles'));
				$data['dataAdmin'] = $this->M_admin->data_admin($idrole)->row();
				$data['content'] = 'user';
				$this->load->view('indexadmin',$data);
			}else{
				redirect('Home/home');
			}
		
			
		}else{
			$this->load->view('login');
		}
	}

	public function tampil()
	{
		$data['dataUser'] = $this->M_user->select_all();
		$this->load->view('user/list_data', $data);
	}

	public function tampilAjax()
	{
		
		// storing  request (ie, get/post) global array to a variable  
		$requestData= $this->input->post();

		$columns = array( 
		// datatable column index  => database column name
			0 =>'username', 
			1 => 'nama',
			2 => 'email',
			3 => 'tanggal_lahir',
			4 => 'foto',
			5 => 'alamat',
			6 => 'domisili',
			7 => 'kota',
			8 => 'kodepos',
			9 => 'telephone',
			10 => 'handphone',
			11 => 'pekerjaan',
			12 => 'jenis_kelamin',
			13 => 'status',
			14 => 'login_form'
		);
		$dataUser = $this->M_user->select_all();
		$totalData = $dataUser->num_rows();
		$totalFiltered = $totalData;
		// // getting total number records without any search
		// $sql = "SELECT employee_name, employee_salary, employee_age ";
		// $sql.=" FROM employee";
		// $query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
		// $totalData = mysqli_num_rows($query);
		// $totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


		if( !empty($requestData['search']['value']) ) {
			$dataUser2 = $this->M_user->select_all($columns,$requestData);
			$totalFiltered = $dataUser2->num_rows();

		// 	// if there is a search parameter
		// 	$sql = "SELECT employee_name, employee_salary, employee_age ";
		// 	$sql.=" FROM employee";
		// 	$sql.=" WHERE employee_name LIKE '".$requestData['search']['value']."%' ";    // $requestData['search']['value'] contains search parameter
		// 	$sql.=" OR employee_salary LIKE '".$requestData['search']['value']."%' ";
		// 	$sql.=" OR employee_age LIKE '".$requestData['search']['value']."%' ";
		// 	$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
		// 	$totalFiltered = mysqli_num_rows($query); 
		// when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 

		// 	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
		// 	$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees"); // again run query with limit
			
		} 
		else {	
			$dataUser2 = $this->M_user->select_all($columns,$requestData);
			// $sql = "SELECT employee_name, employee_salary, employee_age ";
			// $sql.=" FROM employee";
			// $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
			// $query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
			
		}

		$data = array();
		$no = 0;
		foreach ($dataUser2->result() as $row) {
			// preparing an array
			$requestData['start']++;
			$nestedData=array(); 
			$no++;
			$nestedData[] = $requestData['start'];
			
			$nestedData[] = $row->username;
			$nestedData[] = $row->nama;
			$nestedData[] = $row->email;

			$nestedData[] = $row->tanggal_lahir;
			$tamp=$row->foto;
			$foto= '
			<div class="break-word">
        	<img class="profile-user-img img-responsive img-square"  src="';
	        if($tamp == ''){
	          $foto.=base_url("assets/img/not.png");
	          // echo file_exists("assets/img/not.png");
	        }
          else
          {
            $foto.=$this->config->item('base_url').'assets/img/imgUser/'.$tamp; 

          }
         $foto.= '" alt = "User profile picture">
         </div>';
			$nestedData[] = $foto;			

			$nestedData[] = $row->alamat;

			$nestedData[] = $row->domisili;
			$nestedData[] = $row->kota;
			$nestedData[] = $row->kodepos;

			$nestedData[] = $row->telephone;
			$nestedData[] = $row->handphone;
			$nestedData[] = $row->pekerjaan;

			$nestedData[] = $row->jenis_kelamin==1?'Laki-Laki':'Wanita';
			$nestedData[] = $row->status==1?'Menikah':'Belum Menikah';
			$nestedData[] = $row->login_form==1?'Web':($row->login_form==2?'Facebook':($row->login_form==3?'Twitter':($row->login_form==4?'Apps':'')));
			$nestedData[] = '<a href="'.base_url().'user/update/'.$row->id_user.'">

          <button class="btn btn-warning">
            <input type="hidden" name="id_user" value="'.$row->id_user.'">
            <i class="glyphicon glyphicon-repeat"></i> Update
          </button>
        </a>';
			
			$data[] = $nestedData;
		}  

		$json_data = array(
					"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
					"recordsTotal"    => intval( $totalData ),  // total number of records
					"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
					"data"            => $data   // total data array
					);

		echo json_encode($json_data);  // send data as json format
	}

	public function update($id) {
			
		$id 				= $id;
		$data['dataUser'] 	= $this->M_user->select_by_id($id);
		$data['content'] = 'user/form_update';
		$this->load->view('indexadmin',$data);
		
	}

	public function detail($id) {
			
		$id 				= $id;
		$data['dataUser'] 	= $this->M_user->select_by_id($id);
		$data['content'] = 'user/detail';
		$this->load->view('indexadmin',$data);
		
	}

	public function prosesUpdate(){
		$out = array();
		$data = array();
		$this->load->library('upload');
		$data 	= $this->input->post();
		$data['foto'] = '';
		$filename = '';
		if ( $_FILES['foto']['name'] != '') {
			$filename = bin2hex(random_bytes(10)).str_replace(' ', '_', $_FILES['foto']['name']);
			$filename = str_replace('(', '', $filename);
			$filename = str_replace(')', '', $filename);
			$data['foto'] = $filename;

			$config['upload_path']          = 'assets/img/imgUser/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['file_name']        = $filename;
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
						        	Data User Berhasil Diupdate</div>
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
						        	Data User Gagal Diupdate</div>
							  </div>
						    </p>';
				}
		}
		
			$result = $this->M_user->update($data);
				if ($result > 0) {
					$out['status'] = '';
						$out['msg'] = '<p class="box-msg">
						      <div class="info-box alert-success">
							      <div class="info-box-icon">
							      	<i class="fa fa-check-circle"></i>
							      </div>
							      <div class="info-box-content" style="font-size:20px">
						        	Data User Berhasil Diupdate</div>
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
						        	Data User Gagal Diupdate</div>
							  </div>
						    </p>';
				}

		$this->session->set_flashdata('msg', $out['msg']);
		redirect('User');
	}

}

