<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function __construct(){
		parent::__construct();
		// Your own constructor code
		$this->load->helper("url");
		$this->load->model("visa_model");
		$this->load->model('M_kategoriproduk');
		$lib=array("session","form_validation");
		 $this->load->model('M_pengajuan');
		 
		
	}
	 
	public function index(){
		$data=array();
		$wh = array('status_published'=>'1');
		$data['content']="page/home";
		$limit=3;
		$data['dataslider']=$this->visa_model->data_slider();
		$data['datablog']=$this->visa_model->data_blog($wh);
		$data['datafaq']=$this->visa_model->data_faq();
		$data['dataproduk']=$this->visa_model->select_packagelimit($limit);
		$this->load->view('index',$data);
	}
	
	public function index_map(){
		$data=array();
		$data['content']="page/index-map";
		$this->load->view('index',$data);
	}
	
	public function ajukan(){
		$data=array();
		$data['content']="page/ajukan";
		$data['data']=$this->visa_model->data_about();
		$data['msg'] ="";
		$this->load->view('index',$data);
	}
	
	public function persyaratan(){
		$data=array();
		$data['content']="page/persyaratan"; 
		$data['dataAboutUs']= $this->db->query("select * from tbl_persyaratan where id_persyaratan=1");
		$this->load->view('index',$data);
	}
	
	public function disclaimer(){
		$data=array();
		$data['content']="page/about-us";
		$data['dataAboutUs']=$this->visa_model->data_about();
		$this->load->view('index',$data);
	}
	
	public function faq(){
		$data=array();
		$data['content']="page/faq";
		$data['dataAboutUs']=$this->db->query("select * from tbl_faq where id_faq=1");
		$this->load->view('index',$data);
	}
	public function blog(){
		$data=array();
		$wh = array('status_published'=>'1');
		$data['content']="page/blog";
		$data['datablog']=$this->visa_model->data_blog($wh);
		$this->load->view('index',$data);
	}
    
	public function leasing(){
		$data=array();
		 
		$data['content']="page/leasing";
		$data['data']= $this->M_kategoriproduk->select_all();
		$this->load->view('index',$data);
	}
     
	public function contact_us(){
		$data=array();
		$data['content']="page/contact-us";
		$this->load->view('index',$data);
	}
	
	public function prosesTambah() {
		$out = array();
		$data = array();
		
		$data 	= $this->input->post();
	
		$result = $this->M_pengajuan->insert($data);

		if ($result > 0) {
			$out['status'] = '';
			$out['msg'] = 'success';
			
			$this->sendemail($data['idpengajuan']);
			
		} else{
			$out['status'] = '';
			$out['msg'] = 'failed';
		}
		
	 
		 
		redirect('home/ajukan?msg=success&id='.$data['idpengajuan'], $out);
	}
	
	
	function sendemail($idpengajuan){
        // Load PHPMailer library
        $this->load->library('phpmailer_lib');
         
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
        
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'dedenkertawijaya@gmail.com';
        $mail->Password = '@30Okto1992';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
        
        $mail->setFrom('info@halogadai.com', 'halogadai');
        $mail->addReplyTo('dedenkertawijaya@gmail.com', 'halogadai');
        
        // Add a recipient
        $mail->addAddress('halogadaicom@gmail.com');
        
        // Add cc or bcc 
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
        
        // Email subject
        $mail->Subject = 'Pengajuan pinjaman baru dengan ID '.$idpengajuan;
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mailContent = "<h1>Ada pengajuan pinjaman baru ".$idpengajuan."</p>";
        $mail->Body = $mailContent;
        
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Message has been sent';
        }
    }
    
	
}
