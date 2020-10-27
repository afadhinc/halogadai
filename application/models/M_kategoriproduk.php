<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class M_kategoriproduk extends CI_Model {

	public function select_all() {
		$sql = "SELECT * FROM tbl_kategori_product";
		$data = $this->db->query($sql);
		return $data;
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM tbl_kategori_product WHERE id_kategori_product = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_url($url) {
		$sql = "SELECT url_kategori FROM tbl_kategori_product WHERE url_kategori='{$url}'";
		$data = $this->db->query($sql);

		return $data;
	}
	

	public function insert($data) {
		$sql = "INSERT INTO tbl_kategori_product VALUES(0,
												   '" .$data['nama_kategori'] ."',
												   '" .$data['gambar_kategori'] ."',
												   '" .$data['url_kategori'] ."',
												   '" .$data['body'] ."'
												)";
		$this->db->query($sql);
        return $this->db->affected_rows();
	}

	public function update($data) {
		$foto = '';
		if ($data['gambar_kategori'] != '') {
			$foto = ",gambar_kategori='" .$data['gambar_kategori'] ."'";
		}
		$sql = "UPDATE tbl_kategori_product SET nama_kategori='" .$data['nama_kategori'] ."',
										url_kategori='" .$data['url_kategori'] ."',
										body='" .$data['body'] ."'
											".$foto."
											 WHERE id_kategori_product='" .$data['id_kategori_product'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM tbl_kategori_product WHERE id_kategori_product='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}
