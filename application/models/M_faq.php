<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class M_faq extends CI_Model {

	public function select_all() {
		$sql = "SELECT * FROM tbl_faq";
		$data = $this->db->query($sql);
		return $data;
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM tbl_faq WHERE id_faq = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}
	

	public function insert($data) {
		$sql = "INSERT INTO tbl_faq VALUES(0,
												   '" .$data['judul'] ."',
												   '" .$data['body'] ."'
												)";
		$this->db->query($sql);
        return $this->db->affected_rows();
	}

	public function update($data) {
		
		$sql = "UPDATE tbl_faq SET judul='" .$data['judul'] ."',
									body='" .$data['body'] ."'
											 WHERE id_faq='" .$data['id_faq'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM tbl_faq WHERE id_faq='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}
