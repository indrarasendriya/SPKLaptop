<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laptop extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Laptop_model', 'laptop');
    $this->load->library('form_validation');
  }
  public function addLaptop()
  {
    $this->laptop->addLaptop();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Laptop Berhasil Ditambah!</div>');
    redirect('admin/laptop');
  }

  public function editLaptop()
  {
    $this->laptop->editLaptop();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Laptop Berhasil Diubah!</div>');
    redirect('admin/laptop');
  }

  public function deleteLaptop($id)
  {
    $this->laptop->deleteLaptop($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Laptop Berhasil Dihapus!</div>');
    redirect('admin/laptop');
  }
}
