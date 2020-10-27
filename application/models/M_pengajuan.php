<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class M_pengajuan extends CI_Model {

	public function select_all() {
// 		$sql = "SELECT a.*, b.*, c.*, d.nama_kategori as leasing FROM tbl_pengajuan a
// 				left join tbl_merk b on a.id_merk=b.id_merk
// 				left join tbl_tipe c on a.id_tipe = c.id_tipe
// 				left join tbl_kategori_product d on a.id_leasing = d.id_kategori_product
// 				order by a.tanggal desc
// 				";
		$sql = "SELECT a.*,a.id_merk as merk, a.id_tipe as tipe,   d.nama_kategori as leasing FROM tbl_pengajuan a
			 
				left join tbl_kategori_product d on a.id_leasing = d.id_kategori_product
				order by a.tanggal desc
				";
				
		$data = $this->db->query($sql);
		return $data;
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM tbl_pengajuan WHERE id_pengajuan = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}
	

	public function insert($data) {
		$sql = "INSERT INTO tbl_pengajuan VALUES(0,
												   '" .$data['nama'] ."',
												   '" .$data['hp'] ."',
												   '" .$data['email'] ."',
												   '" .$data['alamat'] ."',
												   '" .$data['id_merk'] ."',
												   '" .$data['id_tipe'] ."',
												   '" .$data['tahun'] ."',
												   '" .$data['nilai_pinjaman'] ."',
												   '" .$data['tenor'] ."',
												   '" .$data['bpkb'] ."',
												   " .$data['id_leasing'] .",
												   '" .date('Y-m-d H:i:s') ."' 
												)";
		$this->db->query($sql);
        return $this->db->affected_rows();
	}

	public function update($data) {
		
		$sql = "UPDATE tbl_pengajuan SET nama='" .$data['nama'] ."',
											hp='" .$data['hp'] ."',
											email='" .$data['email'] ."',
											alamat='" .$data['alamat'] ."',
											id_merk='" .$data['id_merk'] ."',
											id_tipe='" .$data['id_tipe'] ."',
											tahun='" .$data['tahun'] ."',
											nilai_pinjaman='" .$data['nilai_pinjaman'] ."',
											tenor='" .$data['tenor'] ."',
											bpkb='" .$data['bpkb'] ."',
											id_leasing=" .$data['id_leasing'] ."
											 WHERE id_pengajuan='" .$data['id_pengajuan'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM tbl_pengajuan WHERE id_pengajuan='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}
