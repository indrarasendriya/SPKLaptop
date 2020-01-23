<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    sudah_login();
    $this->load->model('Admin_model', 'admin');
    $this->load->library('form_validation');
    $this->load->model('Laptop_model', 'laptop');
    $this->load->model('Kriteria_model', 'kriteria');
    $this->load->model('Nilai_laptop_model', 'nilai');
    $this->load->model('Perhitungan_model', 'spk');
  }
  public function index()
  {
    $data['judul'] = "Admin DSS";
    $data['user'] = $this->admin->getUser();

    $data['jumlahLaptop'] = $this->laptop->countLaptop();
    $data['jumlahKriteria'] = $this->kriteria->countKriteria();

    $this->load->view('Templates/admin_header', $data);
    $this->load->view('Templates/admin_sidebar', $data);
    $this->load->view('Templates/admin_topbar', $data);
    $this->load->view('Admin/index', $data);
    $this->load->view('Templates/admin_footer');
  }

  public function kriteria()
  {
    $data['judul'] = 'Kriteria DSS';
    $data['nama_tbl'] = 'Tabel Kriteria';
    $data['kriteria'] = $this->admin->getKriteria();
    $data['user'] = $this->admin->getUser();
    $data['role'] = $this->admin->getRole();
    $data['kode'] = $this->kriteria->cekKodeKriteria();
    $this->load->view('Templates/admin_header', $data);
    $this->load->view('Templates/admin_sidebar', $data);
    $this->load->view('Templates/admin_topbar', $data);
    $this->load->view('Admin/kriteria', $data);
    $this->load->view('Templates/admin_footer');
    $this->load->view('Admin/modal/add/modal_add_kriteria', $data);
    $this->load->view('Admin/modal/edit/modal_edit_kriteria', $data);
  }
  public function laptop()
  {
    $data['judul'] = 'Data Laptop DSS';
    $data['nama_tbl'] = 'Tabel Data Laptop';
    $data['user'] = $this->admin->getUser();
    $data['role'] = $this->admin->getRole();
    $data['laptop'] = $this->admin->getLaptop();
    $data['kebutuhan'] = $this->admin->getKebutuhan();

    $this->load->view('Templates/admin_header', $data);
    $this->load->view('Templates/admin_sidebar', $data);
    $this->load->view('Templates/admin_topbar', $data);
    $this->load->view('Admin/laptop', $data);
    $this->load->view('Templates/admin_footer');
    $this->load->view('Admin/modal/add/modal_add_laptop');
    $this->load->view('Admin/modal/edit/modal_edit_laptop', $data);
  }

  public function nilaiLaptop()
  {
    $data['judul'] = 'Nilai Laptop DSS';
    $data['nama_tbl'] = 'Tabel Nilai Laptop';
    $data['user'] = $this->admin->getUser();
    $data['role'] = $this->admin->getRole();
    $data['nilai'] = $this->nilai->getJoinNilaiLaptop();
    $data['kebutuhan'] = $this->admin->getKebutuhan();

    $this->load->view('Templates/admin_header', $data);
    $this->load->view('Templates/admin_sidebar', $data);
    $this->load->view('Templates/admin_topbar', $data);
    $this->load->view('Admin/nilai', $data);
    $this->load->view('Templates/admin_footer');
    $this->load->view('Admin/modal/add/modal_add_nilai', $data);
    // $this->load->view('Admin/modal/edit/modal_edit_nilai', $data);
  }
  public function perhitungan()
  {
    $data['judul'] = 'Perhitungan DSS';
    $data['nama'] = 'Proses Perhitungan';
    $data['tabel1'] = 'Data Nilai Alternatif Laptop';
    $data['tabel2'] = 'Normalisasi Data Laptop';
    $data['tabel3'] = 'Hasil Ranking';
    $data['user'] = $this->admin->getUser();
    $data['role'] = $this->admin->getRole();
    $data['nilai'] = $this->nilai->getJoinNilaiLaptop();
    $data['perhitungan'] = $this->spk->getJoinNilaiLaptop();
    $data['MaxC1'] = $this->spk->MaxC1();
    $data['MaxC2'] = $this->spk->MaxC2();
    $data['MaxC3'] = $this->spk->MaxC3();
    $data['MaxC4'] = $this->spk->MaxC4();
    $data['MaxC5'] = $this->spk->MaxC5();
    $data['MinC6'] = $this->spk->MinC6();
    $data['BobotC1'] = $this->spk->getBobotC1();
    $data['BobotC2'] = $this->spk->getBobotC2();
    $data['BobotC3'] = $this->spk->getBobotC3();
    $data['BobotC4'] = $this->spk->getBobotC4();
    $data['BobotC5'] = $this->spk->getBobotC5();
    $data['BobotC6'] = $this->spk->getBobotC6();



    $this->load->view('Templates/admin_header', $data);
    $this->load->view('Templates/admin_sidebar', $data);
    $this->load->view('Templates/admin_topbar', $data);
    $this->load->view('Admin/perhitungan', $data);
    $this->load->view('Templates/admin_footer');
  }
}
