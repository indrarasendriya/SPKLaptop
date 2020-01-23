<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria_model extends CI_Model
{
  public function addKriteria()
  {
    $Kode = $this->cekKodeKriteria();
    $data = [
      'kode_kriteria' => $Kode,
      'nama_kriteria' => $this->input->post('nama_kriteria', true),
      'attribut' => $this->input->post('attribut', true),
      'bobot_kriteria' => $this->input->post('bobot', true)
    ];

    //querynya
    $this->db->insert('kriteria', $data);
  }
  public function editKriteria()
  {
    $data = [
      'nama_kriteria' => $this->input->post('nama'),
      'attribut' => $this->input->post('attribut'),
      'bobot_kriteria' => $this->input->post('bobot')
    ];

    $this->db->where('id_kriteria', $this->input->post('id_kriteria'));
    $this->db->update('kriteria', $data);
  }

  public function deleteKriteria($id)
  {
    $this->db->where('id_kriteria', $id);
    $this->db->delete('kriteria');
  }
  public function countKriteria()
  {
    $query = $this->db->get('kriteria');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
  public function cekKodeKriteria()
  {
    $query = $this->db->query("SELECT MAX(kode_kriteria) as max_id from kriteria");
    $rows = $query->row();
    $kode = $rows->max_id;
    $noUurut = (int) substr($kode, 2, 1);
    $noUurut++;
    $char = "C";
    $kode = $char . sprintf("%02s", $noUurut);
    return $kode;
  }
}
