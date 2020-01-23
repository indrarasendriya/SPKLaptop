<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Member_model', 'member');
    $this->load->model('Admin_model', 'admin');
    $this->load->model('Nilai_laptop_model', 'nilai');
    $this->load->model('Perhitungan_model', 'spk');
    $this->load->model('Laptop_model', 'laptop');
    $this->load->model('Kriteria_model', 'kriteria');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['judul'] = "Halaman member";
    $data['user'] = $this->admin->getUser();

    $data['jumlahLaptop'] = $this->laptop->countLaptop();
    $data['jumlahKriteria'] = $this->kriteria->countKriteria();

    $this->load->view('Templates/admin_header', $data);
    $this->load->view('Templates/admin_sidebar', $data);
    $this->load->view('Templates/admin_topbar', $data);
    $this->load->view('Member/index', $data);
    $this->load->view('Templates/admin_footer');
  }


  public function user()
  {
    $data['judul'] = 'User DSS';
    $data['nama_tbl'] = 'Tabel User';
    $data['user'] = $this->member->getUser();

    $data['member'] = $this->admin->getMember();
    $data['role'] = $this->admin->getRole();

    $this->load->view('Templates/admin_header', $data);
    $this->load->view('Templates/admin_sidebar', $data);
    $this->load->view('Templates/admin_topbar', $data);
    $this->load->view('Admin/member', $data);
    $this->load->view('Templates/admin_footer');
    $this->load->view('Admin/modal/add/modal_add_member');
    $this->load->view('Admin/modal/edit/modal_edit_member', $data);
  }


  public function addMember()
  {

    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //cek jika ada gambar yang di akan diupload
    $gambar = $_FILES['image']['name'];
    if ($gambar = '') {
      # code...
    } else {
      $config['upload_path']          = './asset/images/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = 2048;
      $config['max_width']            = 8000;
      $config['max_height']           = 9000;
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('image')) {
        echo "Gagal";
      } else {
        $this->member->addMember();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Member berhasil ditambahkan!</div>');
        redirect('admin/member');
      }
    }
    $this->member->addMember($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data Member Berhasil Ditambhakan!
        </div>');
    redirect('admin/member');
  }

  public function editMember()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    // cek jika ada gambar yang akan diupload
    $upload_image = $_FILES['image']['name'];
    if ($upload_image) {
      $config['upload_path']          = './asset/images/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = 2048;
      $config['max_width']            = 8000;
      $config['max_height']           = 9000;

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('image')) {
        $old_image = $data['user']['image'];
        if ($old_image != 'user.png') {
          unlink(FCPATH . 'asset/images/' . $old_image);
        }
        $new_image = $this->upload->data('file_name');

        //insert image ke tbl user pada kolom image
        $this->db->set('image', $new_image);
      } else {
        echo $this->upload->dispay_errors();
      }
    }
    $this->member->editMember();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Member berhasil diubah!</div>');
    redirect('admin/member');
  }

  public function deleteMember($id)
  {
    $this->member->deleteMember($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengguna berhasil dihapus!</div>');
    redirect('admin/member');
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
