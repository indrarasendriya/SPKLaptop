<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_Laptop_model extends CI_Model

{
  public function getJoinNilaiLaptop()
  {
    $queryNilaiLaptop = "SELECT `laptop`.`merk`, `laptop`.`tipe`, `nilai`.* 
    FROM `nilai` JOIN `laptop` ON `nilai`.`id_nilai` = `laptop`.`id_laptop` 
    WHERE `nilai`.`id_nilai` = `laptop`.`id_laptop`
        ";
    return $this->db->query($queryNilaiLaptop)->result_array();
  }

  public function NilaiLaptop()
  {
    $id_nilai = $this->input->post('id_nilai');
    $c1 = $this->input->post('C1');
    $c2 = $this->input->post('C2');
    $c3 = $this->input->post('C3');
    $c4 = $this->input->post('C4');
    $c5 = $this->input->post('C5');
    $c6 = $this->input->post('C6');

    $data = [
      'id_nilai' => $id_nilai,
      'C1' => $c1,
      'C2' => $c2,
      'C3' => $c3,
      'C4' => $c4,
      'C5' => $c5,
      'C6' => $c6
    ];

    $this->db->where('id_nilai', $this->input->post('id_nilai'));
    $this->db->update('nilai', $data);
  }
  public function getLaptop()
  {
    return $this->db->get('laptop')->result_array();
  }
  public function TipeLaptop()
  {
    return $this->db->get('laptop')->result_array();
  }
}
