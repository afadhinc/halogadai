<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cms extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_admin');
        $lib=array("session","form_validation");
        $this->load->library($lib);
	}

	public function index()
	{
		if ($this->session->userdata('emails') != '' && $this->session->userdata('passwords') != '') {
			redirect('Cms/home');
		}else{
			$this->load->view('login');
		}
		// $this->load->view('login');
		
	}

	public function home(){
		if ($this->session->userdata('emails') != '' && $this->session->userdata('passwords') != '') {
			$idrole = array('id_role'=>$this->session->userdata('id_roles'));
			$data['dataAdmin'] = $this->M_admin->data_admin($idrole)->row();
			$data['content'] = 'dashboard';
			$this->load->view('indexadmin',$data);
			
		}else{
			redirect('Cms');
		}
	}

}
