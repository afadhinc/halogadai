<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
	
	function select($id = '') {
		if ($id != '') {
			$this->db->where($id);
		}

		$data = $this->db->get('tbl_user');

		return $data;
	}

	public function data_admin($idrole){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where($idrole);
		return $this->db->get();
	}

	public function data_adminNumRows($iduser){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where($iduser);
		return $this->db->get()->row();
	}

}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */