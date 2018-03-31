<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ModelMahasiswa extends CI_Model {
  public function view(){
    return $this->db->get('mahasiswa')->result();
  }
  
  public function view_by($nim){
    $this->db->where('nim', $nim);
    return $this->db->get('mahasiswa')->row();
  }
  
  public function validation($mode){
    $this->load->library('form_validation'); 
    if($mode == "save")
      $this->form_validation->set_rules('input_nim', 'Nim', 'required|is_unique[mahasiswa.nim]');
    
    $this->form_validation->set_rules('input_nama', 'Nama', 'required');
    $this->form_validation->set_rules('input_jeniskelamin', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('input_id_line', 'ID Line', 'required');
    $this->form_validation->set_rules('input_alamat', 'Alamat', 'required');
      
    if($this->form_validation->run()) 
      return TRUE; 
    else 
      return FALSE;
  }
  
  public function save(){
    $data = array(
      "nim" => $this->input->post('input_nim'),
      "nama" => $this->input->post('input_nama'),
      "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
      "id_line" => $this->input->post('input_id_line'),
      "alamat" => $this->input->post('input_alamat')
    );
    
    $this->db->insert('mahasiswa', $data);
  }
  
  public function edit($nim){
    $data = array(
      "nama" => $this->input->post('input_nama'),
      "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
      "id_line" => $this->input->post('input_id_line'),
      "alamat" => $this->input->post('input_alamat')
    );
    
    $this->db->where('nim', $nim);
    $this->db->update('mahasiswa', $data); 
  }
  
  public function delete($nim){
    $this->db->where('nim', $nim);
    $this->db->delete('mahasiswa'); 
  }
}