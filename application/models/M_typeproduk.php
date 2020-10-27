<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class M_typeproduk extends CI_Model {

	public function select_all() {
		$sql = "SELECT * FROM tbl_type_product";
		$data = $this->db->query($sql);
		return $data;
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM tbl_type_product WHERE id_type_product = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}
	

	public function insert($data) {
		$sql = "INSERT INTO tbl_type_product VALUES(0,
												   '" .$data['nama_type'] ."'
												)";
		$this->db->query($sql);
        return $this->db->affected_rows();
	}

	public function update($data) {
		
		$sql = "UPDATE tbl_type_product SET nama_type='" .$data['nama_type'] ."'
											 WHERE id_type_product='" .$data['id_type_product'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM tbl_type_product WHERE id_type_product='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}
