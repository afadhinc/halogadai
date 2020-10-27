<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class M_periodfact extends CI_Model {

	public function select_all() {
		$sql = "SELECT * FROM tbl_slider_fact";
		$data = $this->db->query($sql);

		return $data;
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM tbl_slider_fact WHERE id_slider = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}
	

	public function insert($data) {
		$sql = "INSERT INTO tbl_slider_fact VALUES(0,
												   '" .$data['gambar'] ."',
												   '" .$data['judul'] ."',
												   '" .$data['deskripsi'] ."',
												   '" .$data['sort'] ."'
												)";
		$this->db->query($sql);
        return $this->db->affected_rows();
		// echo $sql;
	}

	public function update($data) {
		$foto = '';
		if ($data['gambar'] != '') {
			$foto = ",gambar='" .$data['gambar'] ."'";
		}
		$sql = "UPDATE tbl_slider_fact SET judul='" .$data['judul'] ."',
										deskripsi='" .$data['deskripsi'] ."',
										sort='" .$data['sort'] ."'
											".$foto."
											
											
											 WHERE id_slider='" .$data['id_slider'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM tbl_slider_fact WHERE id_slider='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}
