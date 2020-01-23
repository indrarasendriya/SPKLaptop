<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Nilai_laptop_model', 'nilai');
    $this->load->library('form_validation');
  }
  public function NilaiLaptop()
  {
    $this->nilai->nilaiLaptop();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Nilai nilai Laptop Berhasil Diupdate!</div>');
    redirect('admin/nilaiLaptop');
  }

  public function editNilaiLaptop()
  {
    $this->nilai->editNilaiLaptop();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Nilai nilai Laptop Berhasil Diupdate!</div>');
    redirect('admin/nilaiLaptop');
  }

  public function deleteNilaiLaptop($id)
  {
    $this->nilai->deleteNilaiLaptop($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data nilai Laptop Berhasil Diupdate!</div>');
    redirect('admin/nilaiLaptop');
  }
}
