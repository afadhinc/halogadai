<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class M_setting extends CI_Model {

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
										email='" .$data['email'] ."' 
									 
										".$foto.",
									 
										status='1'
										WHERE id_user='" .$data['id_user'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

}

/* End of file M_kota.php */
/* Location: ./application/models/M_kota.php */