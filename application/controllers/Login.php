<?php 
 
class Login extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		$fail = array('fails' => 0);		
		$this->load->model('ModelLogin');
 		if($this->session->userdata('status') == "login"){
		  // redirect(base_url("mahasiswa"));
		}
	}
 
	function index(){
		if($this->session->userdata('status') == "login"){
		  redirect(base_url("mahasiswa"));
		}
		else $this->load->view('login/v_login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->ModelLogin->cek_login("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("mahasiswa"));
 		
		}else{
			$this->session->set_flashdata('error_msg', 'Wrong Username/Password');
			$this->load->view('login/v_login');			
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}