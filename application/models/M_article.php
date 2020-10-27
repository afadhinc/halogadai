<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class M_article extends CI_Model {

	public function select_all() {
		$sql = "SELECT a.*,m.nama_menu,m.parent,m.url,m.sort,m.icon,ka.nama_kategori_article,u.username,u.nama,u.email FROM tbl_article a LEFT JOIN tbl_menu m ON a.id_menu=m.id_menu LEFT JOIN tbl_kategori_article ka ON a.id_kategori_article=ka.id_kategori_article LEFT JOIN tbl_user u 
			ON a.id_user=u.id_user ORDER BY a.tgl_article DESC";
		$data = $this->db->query($sql);

		return $data;
	}

	public function select_data_old(){
		$db2 = $this->load->database('database_kedua', TRUE);
		$sql = "SELECT node_revision.title,file_managed.filename as images,field_revision_body.body_value as body,field_revision_body.body_summary as body_sumary,url_alias.alias as alias_url,node.status as status_publish,node.promote as status_promoted,FROM_UNIXTIME(node.created)  as tgl_article,node.uid as user_id FROM node
			left join node_revision on node_revision.nid = node.nid and node_revision.vid=node.vid
			left join file_usage on file_usage.id = node.nid and file_usage.type='node'
			left join file_managed on file_managed.fid = file_usage.fid
			left join field_revision_body on field_revision_body.entity_type='node' and field_revision_body.bundle='article' and field_revision_body.revision_id=node_revision.vid
			left join url_alias on url_alias.source = CONCAT('node', '/', node_revision.nid)
			where node.type = 'article'";
		$data = $db2->query($sql);

		return $data;
	}

	public function select_all_trending() {
		
		$sql = "SELECT a.*,m.nama_menu,m.parent,m.url,m.sort,m.icon,ka.nama_kategori_article,u.username,u.nama,u.email FROM tbl_article a LEFT JOIN tbl_menu m ON a.id_menu=m.id_menu LEFT JOIN tbl_kategori_article ka ON a.id_kategori_article=ka.id_kategori_article LEFT JOIN tbl_user u 
			ON a.id_user=u.id_user where a.status_published='1' and a.trending='1'";
		$data = $this->db->query($sql);

		return $data;
	}

	public function trend($id){
      $this->db->where('id_article',$id);
      $this->db->update('tbl_article',array('trending'=>'1'));
    }
    public function notrend($id){
      $this->db->where('id_article',$id);
      $this->db->update('tbl_article',array('trending'=>'0'));
    }

	public function select_data($data) {
		
		$this->db->select('*');
		$this->db->from('tbl_article');
		$this->db->where($data);

		return $this->db->get()->row();
	}

	public function select_url($url) {
		$sql = "SELECT alias_url FROM tbl_article WHERE alias_url='{$url}'";
		$data = $this->db->query($sql);

		return $data;
	}

	public function select_by_url($url) {
		$sql = "SELECT * FROM tbl_article WHERE alias_url = '{$url}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM tbl_article WHERE id_article = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}
	

	public function insert($data) {
		$sql = "INSERT INTO tbl_article (id_article,id_menu,id_user,title,images,body,alias_url,status_published,tgl_article,tags,meta_keyword,meta_description,meta_title,meta_image,hasilA,hasilB) VALUES(0,
												   '" .$data['id_menu'] ."',
												   
												   '" .$data['id_user'] ."',
												   '" .$data['title'] ."',
												   '" .$data['images'] ."',
												   '" .$data['body'] ."',
												   '" .$data['alias_url'] ."',
												   '" .$data['status_published'] ."',
												   
												   '" .$data['tgl_article'] ."',
												   '" .$data['tags'] ."',
												   '" .$data['meta_keyword'] ."',
												   '" .$data['meta_description'] ."',
												   '" .$data['meta_title'] ."',
												   '" .$data['meta_image'] ."',
												   '" .$data['hasilA'] ."',
												   '" .$data['hasilB'] ."'
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
		if ($data['meta_image'] != '') {
			$image = ",meta_image='" .$data['meta_image'] ."'";
		}

		$sql = "UPDATE tbl_article SET 		id_menu='" .$data['id_menu'] ."',
											
											id_user='" .$data['id_user'] ."',
											title='" .$data['title'] ."'
											".$foto.",
											body='" .$data['body'] ."',
											alias_url='" .$data['alias_url'] ."',
											status_published='" .$data['status_published'] ."',
											
											tgl_article='" .$data['tgl_article'] ."',
											tags='" .$data['tags'] ."',
											meta_keyword='" .$data['meta_keyword'] ."',
											meta_description='" .$data['meta_description'] ."',
											meta_title='" .$data['meta_title'] ."'
											".$image.",
											hasilA='" .$data['hasilA'] ."',
											hasilB='" .$data['hasilB'] ."'
											
											 WHERE id_article='" .$data['id_article'] ."'";

		// echo $sql;

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
	public function updatesorttrend($data) {
		
		$sql = "UPDATE tbl_article SET 		sort_trending='" .$data['sort_trending'] ."'
											
											 WHERE id_article='" .$data['id_article'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM tbl_article WHERE id_article='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}

/* End of file M_kota.php */
/* Location: ./application/models/M_kota.php */