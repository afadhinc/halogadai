<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class M_quizsoal extends CI_Model {

	public function select_detail_soal($id) {
		$sql = "SELECT a.title,a.id_article,qs.id_quiz_soal,qs.soal,qs.opsi1,qs.opsi2 FROM tbl_article a LEFT JOIN tbl_quiz_soal qs ON a.id_article=qs.id_article WHERE a.id_article = '{$id}'";

		$data = $this->db->query($sql);

		return $data;
	}

	public function select_detail_soal_id($id) {
		$sql = "SELECT a.title,a.hasilA,a.hasilB,a.id_article,qs.id_quiz_soal,qs.soal,qs.opsi1,qs.opsi2 FROM tbl_article a LEFT JOIN tbl_quiz_soal qs ON a.id_article=qs.id_article WHERE a.id_article = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM tbl_quiz_soal WHERE id_quiz_soal = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}
	

	public function insert($data) {
		$sql = "INSERT INTO tbl_quiz_soal VALUES(0,
												   '" .$data['id_article'] ."',
												   '" .$data['soal'] ."',
												   '" .$data['opsi1'] ."',
												   '" .$data['opsi2'] ."'
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
		
		$sql = "UPDATE tbl_quiz_soal SET id_quiz_soal='" .$data['id_quiz_soal'] ."', 
										id_article='" .$data['id_article'] ."',
										soal='" .$data['soal'] ."',
										opsi1='" .$data['opsi1'] ."',
										opsi2='" .$data['opsi2'] ."'

										WHERE id_quiz_soal='" .$data['id_quiz_soal'] ."'";

		// echo $sql;
		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM tbl_quiz_soal WHERE id_quiz_soal='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}

/* End of file M_kota.php */
/* Location: ./application/models/M_kota.php */