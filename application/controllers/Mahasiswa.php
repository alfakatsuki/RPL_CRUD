<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
      redirect(base_url("login"));
    }
    $this->load->model('ModelMahasiswa'); 
    
  }
  
  public function index(){
    $data['mahasiswa'] = $this->ModelMahasiswa->view();
    // print_r($data);
    $this->load->view('mahasiswa/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ 
      if($this->ModelMahasiswa->validation("save")){ 
        $this->ModelMahasiswa->save(); 
        redirect('mahasiswa');
      }
    }
    
    $this->load->view('mahasiswa/form_tambah');
  }
  
  public function ubah($nim){
    if($this->input->post('submit')){ 
      if($this->ModelMahasiswa->validation("update")){ //
        $this->ModelMahasiswa->edit($nim);
        redirect('mahasiswa');
      }
    }
    
    $data['mahasiswa'] = $this->ModelMahasiswa->view_by($nim);
    $this->load->view('mahasiswa/form_ubah', $data);
  }
  
  public function hapus($nim){
    $this->ModelMahasiswa->delete($nim); 
    redirect('mahasiswa');
  }
}
