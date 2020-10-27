<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class M_user extends CI_Model {

	public function select_all($columns='',$requestData='') {
		$sql = "SELECT * FROM tbl_user WHERE id_role = 2 ";
		if ($columns != '') {
			$search = array();
			foreach ($columns as $kolom) {
				$search[] = $kolom." LIKE '%".$requestData['search']['value']."%' ";
			}
			$sql.= " AND (".implode(" OR ", $search).")";
			// $sql.=" WHERE employee_name LIKE '".$requestData['search']['value']."%' ";    
			// $requestData['search']['value'] 
			// //contains search parameter
			// $sql.=" OR employee_salary LIKE '".$requestData['search']['value']."%' ";
			// $sql.=" OR employee_age LIKE '".$requestData['search']['value']."%' ";
			$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
		}
		
		$data = $this->db->query($sql);

		return $data;
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM tbl_user WHERE id_user = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function update($data) {
		$foto = '';
		if ($data['foto'] != '') {
			$foto = ",foto='" .$data['foto'] ."'";
		}
		$sql = "UPDATE tbl_user SET username='" .$data['username'] ."',
										password='" .$data['password'] ."',
										nama='" .$data['nama'] ."',
										email='" .$data['email'] ."',
										tanggal_lahir='" .$data['tanggal_lahir'] ."'
										".$foto.",
										alamat='" .$data['alamat'] ."',
										domisili='" .$data['domisili'] ."',
										kota='" .$data['kota'] ."',
										kodepos='" .$data['kodepos'] ."',
										telephone='" .$data['telephone'] ."',
										handphone='" .$data['handphone'] ."',
										pekerjaan='" .$data['pekerjaan'] ."',
										status='" .$data['status'] ."'
										WHERE id_user='" .$data['id_user'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

}

/* End of file M_kota.php */
/* Location: ./application/models/M_kota.php */