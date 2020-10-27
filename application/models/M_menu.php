<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class M_menu extends CI_Model {

	public function select_menu() {
		$sql = "SELECT * FROM tbl_menu where Quiz_in='1'";
		$data = $this->db->query($sql);

		return $data;
	}

	
}