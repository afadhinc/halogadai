<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class M_campaign extends CI_Model {

	public function select_all() {
		$sql = "SELECT * FROM tbl_campaign";
		$data = $this->db->query($sql);

		return $data;
	}

	public function select_url($url) {
		$sql = "SELECT alias_url FROM tbl_campaign WHERE alias_url='{$url}'";
		$data = $this->db->query($sql);

		return $data;
	}

	public function select_by_url($url) {
		$sql = "SELECT * FROM tbl_campaign WHERE alias_url = '{$url}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM tbl_campaign WHERE id_camapaign = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}
	

	public function insert($data) {
		$sql = "INSERT INTO tbl_campaign VALUES(0,
												   '" .$data['tittle'] ."',
												   '" .$data['images'] ."',
												   '" .$data['body'] ."',
												   '" .$data['alias_url'] ."',
												   '" .$data['status_published'] ."',
												   '" .$data['tgl_campaign'] ."',
												   '" .$data['link_video'] ."',
												   '" .$data['link_button'] ."',
												   '" .$data['nama_button'] ."'
												)";
		// $sql = "INSERT INTO master_film VALUES(0,
		// 										   'asa',
		// 										   'qws',
		// 										   '40.jpg'
		// 										)";
		$this->db->query($sql);
        return $this->db->affected_rows();
	}

	public function update($data) {
		$foto = '';
		if ($data['images'] != '') {
			$foto = ",images='" .$data['images'] ."'";
		}
		$sql = "UPDATE tbl_campaign SET tittle='" .$data['tittle'] ."'
										".$foto.",
										body='" .$data['body'] ."',
										alias_url='" .$data['alias_url'] ."',
										status_published='" .$data['status_published'] ."',
										tgl_campaign='" .$data['tgl_campaign'] ."',
										link_video='" .$data['link_video'] ."',
										link_button='" .$data['link_button'] ."',
										nama_button='" .$data['nama_button'] ."'
										WHERE id_camapaign='" .$data['id_camapaign'] ."'";

		// return $sql;

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM tbl_campaign WHERE id_camapaign='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}
