<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class M_produk extends CI_Model {

	public function select_all() {
		$sql = "SELECT p.*,kp.nama_kategori,kp.gambar_kategori,kp.url_kategori,tp.nama_type FROM tbl_product p LEFT JOIN tbl_kategori_product kp ON p.id_kategori_product=kp.id_kategori_product LEFT JOIN tbl_type_product tp ON p.id_type_product=tp.id_type_product";
		
		$data = $this->db->query($sql);

		return $data;
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM tbl_product WHERE id_product = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}
	

	public function insert($data) {
		$sql = "INSERT INTO tbl_product VALUES(0,
												   '" .$data['id_kategori_product'] ."',
												   '" .$data['id_type_product'] ."',
												   '" .$data['nama_product'] ."',
												   '" .$data['body'] ."'
												)";
		$this->db->query($sql);
        return $this->db->affected_rows();
	}

	public function update($data) {
		
		$sql = "UPDATE tbl_product SET  nama_product='" .$data['nama_product'] ."',
										id_kategori_product='" .$data['id_kategori_product'] ."',
										body='" .$data['body'] ."',
										id_type_product='" .$data['id_type_product'] ."'
											 WHERE id_product='" .$data['id_product'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM tbl_product WHERE id_product='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}
