<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visa_model extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
	
	public function data_slider($wh=""){
		$this->db->select('*');
		$this->db->from('tbl_slider_fact');
		if($wh!=""){
			$this->db->where($wh);
		}
		return $this->db->get();
	}
	
	public function data_faq($wh=""){
		$this->db->select('*');
		$this->db->from('tbl_faq_home');
		if($wh!=""){
			$this->db->where($wh);
		}
		return $this->db->get();
	}

	public function data_blog($wh=""){
		$this->db->select('*');
		$this->db->from('tbl_article');
		if($wh!=""){
			$this->db->where($wh);
		}
		return $this->db->get();
	}

	public function data_about($wh=""){
		$this->db->select('*');
		$this->db->from('tbl_about');
		if($wh!=""){
			$this->db->where($wh);
		}
		return $this->db->get();
	}

	public function select_package($wh="") {
		$this->db->select('a.*,b.nama_kategori,b.gambar_kategori,b.url_kategori,c.nama_type');
		$this->db->from('tbl_product a');
		$this->db->join('tbl_kategori_product b','a.id_kategori_product=b.id_kategori_product','left');
		$this->db->join('tbl_type_product c','a.id_type_product=c.id_type_product','left');
		if($wh!=""){
			$this->db->where($wh);
		}
		return $this->db->get();
	}

	public function select_packagelimit($limit="") {
		$this->db->select('a.*,b.nama_kategori,b.gambar_kategori,b.url_kategori,c.nama_type');
		$this->db->from('tbl_product a');
		$this->db->join('tbl_kategori_product b','a.id_kategori_product=b.id_kategori_product','left');
		$this->db->join('tbl_type_product c','a.id_type_product=c.id_type_product','left');
		if($limit!=""){
			$this->db->limit($limit);
		}
		return $this->db->get();
	}

	public function ambildatacatalog($url){   
        $this->db->select('a.*,b.nama_product,b.body');
        $this->db->from('tbl_kategori_product a');
        $this->db->join('tbl_product b','a.id_kategori_product=b.id_kategori_product','left');
        $this->db->where('url_kategori',$url);
        return $this->db->get();
    }

    public function ambildatablog($url){   
        $this->db->select('*');
        $this->db->from('tbl_article');
        $this->db->where('alias_url',$url);
        return $this->db->get();
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