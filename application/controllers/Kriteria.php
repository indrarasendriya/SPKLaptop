<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Kriteria_model', 'kriteria');
  }
  public function addKriteria()
  {
    $this->kriteria->addKriteria();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kriteria Berhasil Ditambah!</div>');
    redirect('admin/kriteria');
  }

  public function editKriteria()
  {
    $this->kriteria->editKriteria();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kriteria Berhasil Diubah!</div>');
    redirect('admin/kriteria');
  }
  public function deleteKriteria($id)
  {
    $this->kriteria->deleteKriteria($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kriteria Berhasil DiHapus!</div>');
    redirect('admin/kriteria');
  }
}
