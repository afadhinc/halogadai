<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Loginadmin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_admin');
        $lib=array("session","form_validation");
        $this->load->library($lib);
	}

	public function do_login()
	{
        //var_dump('cek login');
		$data = array('email' => $this->input->post('email'),
					'password' => $this->input->post('password')
					);
		
		$var = $this->M_admin->select($data);
		
		if ($var->num_rows() > 0 && ($var->row()->id_role == 1 || $var->row()->id_role == 3)) {
			$data_session = array(
				'emails' => $this->input->post('email'),
				'passwords' => $this->input->post('password'),
				'id_roles' => $var->row()->id_role,
				'id_users' => $var->row()->id_user
			);
			$this->session->set_userdata($data_session);
			redirect('Cms/home');
		}else{
			// redirect('admin_menstruasi');
			redirect('Cms');
		}
	}

	function logout(){
		unset($_SESSION['id_users'],$_SESSION['emails'],$_SESSION['passwords'],$_SESSION['id_roles']);
		
		// redirect('admin_menstruasi');
		redirect('Cms');
	}
}
