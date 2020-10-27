<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class M_kategoriarticle extends CI_Model {

	public function select_all() {
		$sql = "SELECT * FROM tbl_menu where quiz_in='1'";
		$data = $this->db->query($sql);

		return $data;
	}

	public function select_nama_kategori() {
		$sql = "SELECT * FROM tbl_kategori_article ";
		$data = $this->db->query($sql);

		return $data;
	}
	public function select_all2($parent) {
		$sql = "SELECT nama_menu as nama_menu2 FROM tbl_menu where parent='".$parent."'";
		$data = $this->db->query($sql);

		return $data;
	}
	public function parent() {
		$sql = "SELECT * FROM tbl_menu	";
		$data = $this->db->query($sql);

		return $data;
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM tbl_menu WHERE id_menu = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}
	

	public function insert($data) {
		$sql = "INSERT INTO tbl_menu (quiz_in,parent,nama_menu,url,sort,status_published) VALUES('" .$data['quiz_in'] ."',
												   '" .$data['parent'] ."',
												   '" .$data['nama_kategori_article'] ."',
												   '" .$data['url'] ."',
												   '" .$data['sort'] ."',
												   '" .$data['status_published'] ."'

												)";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}

	public function update($data) {
		
		$sql = "UPDATE tbl_menu SET
		nama_menu='" .$data['nama_kategori_article'] ."',
		parent='" .$data['parent'] ."',
		url='" .$data['url'] ."',
		sort='" .$data['sort'] ."',
		status_published='" .$data['status_published'] ."'
											
										WHERE id_menu='" .$data['id_menu'] ."'";
										//echo $sql;

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM tbl_menu WHERE id_menu='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}