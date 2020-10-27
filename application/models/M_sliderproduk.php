<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class M_sliderproduk extends CI_Model {

	public function select_slider_produk($id) {
		$sql = "SELECT sp.*,p.nama_product FROM tbl_slider_product sp LEFT JOIN tbl_product p ON sp.id_product=p.id_product WHERE p.id_product= '".$id."' ";
		
		$data = $this->db->query($sql);

		return $data;
	}

	public function select_slider_produk_form($id) {
		$sql = "SELECT * FROM tbl_product WHERE id_product= '".$id."' ";
		
		$data = $this->db->query($sql);

		return $data;
	}

	public function select_slider_produk_form_update($id) {
		$sql = "SELECT sp.*,p.nama_product FROM tbl_slider_product sp LEFT JOIN tbl_product p ON sp.id_product=p.id_product WHERE sp.id_slider= '".$id."' ";
		
		$data = $this->db->query($sql);

		return $data;
	}

	public function select_slider_produk_id($id) {
		$sql = "SELECT sp.*,p.nama_product FROM tbl_slider_product sp LEFT JOIN tbl_product p ON sp.id_product=p.id_product WHERE p.id_product= '".$id."' ";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_gambar($id){
		$sql = "SELECT gambar FROM tbl_slider_product WHERE id_slider = '".$id."' ";
		$data = $this->db->query($sql);

		return $data->row();
	}
	
	public function insert($data) {
		$sql = "INSERT INTO tbl_slider_product VALUES(0,
												   '" .$data['id'] ."',
												   '" .$data['gambar'] ."',
												   '" .$data['deskripsi'] ."'
												)";
		$this->db->query($sql);
        return $this->db->affected_rows();
	}

	public function update($data) {
		$foto = '';
		if ($data['gambar'] != '') {
			$foto = "gambar='" .$data['gambar'] ."',";
		}
		$sql = "UPDATE tbl_slider_product SET  id_product='" .$data['id'] ."',
												".$foto."
												deskripsi='" .$data['deskripsi'] ."'
												WHERE id_slider='" .$data['id_slider'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM tbl_slider_product WHERE id_slider='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}
