<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class M_aboutus extends CI_Model {

	public function select_all() {
		$sql = "SELECT * FROM tbl_about";
		$data = $this->db->query($sql);
		return $data;
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM tbl_about WHERE id_about = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}
	

	public function insert($data) {
		$sql = "INSERT INTO tbl_about VALUES(0,
												   '" .$data['judul'] ."',
												   '" .$data['body'] ."'
												)";
		$this->db->query($sql);
        return $this->db->affected_rows();
	}

	public function update($data) {
		
		$sql = "UPDATE tbl_about SET judul='" .$data['judul'] ."',
									body='" .$data['body'] ."'
											 WHERE id_about='" .$data['id_about'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM tbl_about WHERE id_about='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}
