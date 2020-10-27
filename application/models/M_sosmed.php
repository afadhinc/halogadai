<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class M_sosmed extends CI_Model {

	public function select_all() {
		$sql = "SELECT * FROM tbl_sosmed";
		$data = $this->db->query($sql);

		return $data;
	}

	public function select_url($url) {
		$sql = "SELECT link_sosmed FROM tbl_sosmed WHERE link_sosmed='{$url}'";
		$data = $this->db->query($sql);

		return $data;
	}

	public function select_by_url($url) {
		$sql = "SELECT * FROM tbl_sosmed WHERE link_sosmed = '{$url}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM tbl_sosmed WHERE id_sosmed = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}
	

	public function insert($data) {
		$sql = "INSERT INTO tbl_sosmed VALUES(0,
												   '" .$data['nama_sosmed'] ."',
												   '" .$data['link_sosmed'] ."',
												   '" .$data['gambar_sosmed'] ."'
												)";
		// $sql = "INSERT INTO master_film VALUES(0,
		// 										   'asa',
		// 										   'qws',
		// 										   '40.jpg'
		// 										)";
		$this->db->query($sql);
        return $this->db->affected_rows();
	}

	public function update($data) {
		$foto = '';
		if ($data['gambar_sosmed'] != '') {
			$foto = ",gambar_sosmed='" .$data['gambar_sosmed'] ."'";
		}
		$sql = "UPDATE tbl_sosmed SET nama_sosmed='" .$data['nama_sosmed'] ."',
										link_sosmed='" .$data['link_sosmed'] ."'
											".$foto."
											
											
											 WHERE id_sosmed='" .$data['id_sosmed'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM tbl_sosmed WHERE id_sosmed='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}

/* End of file M_kota.php */
/* Location: ./application/models/M_kota.php */