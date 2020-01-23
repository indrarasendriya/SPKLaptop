<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laptop_model extends CI_Model
{
  public function addLaptop()
  {
    $data = [
      'merk' => $this->input->post('merk', true),
      'tipe' => $this->input->post('tipe', true),
      'prosesor' => $this->input->post('prosesor', true),
      'ram' => $this->input->post('ram', true),
      'memory' => $this->input->post('memory', true),
      'graphics' => $this->input->post('graphics', true),
      'layar' => $this->input->post('layar', true),
      'harga' => $this->input->post('harga', true),
      'kebutuhan' => $this->input->post('kebutuhan', true)
    ];

    //querynya
    $this->db->insert('laptop', $data);
    $id = $this->db->insert_id();
    $data2 = [
      'id_laptop' => $id
    ];
    $this->db->insert('nilai', $data2);
  }
  public function editLaptop()
  {
    $data = [
      'merk' => $this->input->post('merk'),
      'tipe' => $this->input->post('tipe'),
      'prosesor' => $this->input->post('prosesor'),
      'ram' => $this->input->post('ram'),
      'memory' => $this->input->post('memory'),
      'layar' => $this->input->post('layar'),
      'harga' => $this->input->post('harga', true),
      'kebutuhan' => $this->input->post('kebutuhan', true)
    ];

    $this->db->where('id_laptop', $this->input->post('id_laptop'));
    $this->db->update('laptop', $data);
  }

  public function deleteLaptop($id)
  {
    $this->db->where('id_laptop', 'id_nilai', $id);
  }
  public function countLaptop()
  {
    $query = $this->db->get('laptop');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
  public function cekKodeLaptop()
  {
    $query = $this->db->query("SELECT MAX(kode_laptop) as max_id from laptop");
    $rows = $query->row();
    $kode = $rows->max_id;
    $noUurut = (int) substr($kode, 2, 1);
    $noUurut++;
    $char = "C";
    $kode = $char . sprintf("%02s", $noUurut);
    return $kode;
  }
}
