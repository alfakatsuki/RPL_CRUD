<?php 
 
class About extends CI_Controller{
 
	public function __construct(){
		parent::__construct();

		
		$this->load->model('ModelLogin');
	}
 	
	function index(){
		$this->load->view('about');
	}
 
	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}