<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class M_faqhome extends CI_Model {

	public function select_all() {
		$sql = "SELECT * FROM  tbl_faq_home";
		$data = $this->db->query($sql);

		return $data;
	}

	public function select_nama_kategori() {
		$sql = "SELECT * FROM tbl_faq_home ";
		$data = $this->db->query($sql);

		return $data;
	}
  

	public function select_by_id($id) {
		$sql = "SELECT * FROM tbl_faq_home WHERE id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}
	

	public function insert($data) {
		$sql = "INSERT INTO tbl_faq_home (judul,deskripsi) VALUES('" .$data['judul'] ."',
												   '" .$data['deskripsi'] ."' 
												)";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function update($data) {
		
		$sql = "UPDATE tbl_faq_home SET
		judul='" .$data['judul'] ."',
		deskripsi='" .$data['deskripsi'] ."' 
											
										WHERE id='" .$data['id'] ."'";
										//echo $sql;

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM tbl_faq_home WHERE id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}