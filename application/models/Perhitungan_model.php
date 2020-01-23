<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perhitungan_model extends CI_Model
{
  public function getJoinNilaiLaptop()
  {
    $getJoinNilaiLaptop2 = "SELECT `laptop`.`merk`, `laptop`.`tipe`, `nilai`.* 
    FROM `nilai` JOIN `laptop` ON `nilai`.`id_nilai` = `laptop`.`id_laptop` 
    WHERE `nilai`.`id_nilai` = `laptop`.`id_laptop` 
        ";
    return $this->db->query($getJoinNilaiLaptop2)->result_array();
  }

  public function MaxC1()
  {
    $queryMax = "SELECT MAX(`C1`) AS `C1` FROM `nilai`";
    return $this->db->query($queryMax)->row_array();
  }
  public function MaxC2()
  {
    $queryMax = "SELECT MAX(`C2`) AS `C2` FROM `nilai`";
    return $this->db->query($queryMax)->row_array();
  }
  public function MaxC3()
  {
    $queryMax = "SELECT MAX(`C3`) AS `C3` FROM `nilai`";
    return $this->db->query($queryMax)->row_array();
  }
  public function MaxC4()
  {
    $queryMax = "SELECT MAX(`C4`) AS `C4` FROM `nilai`";
    return $this->db->query($queryMax)->row_array();
  }

  public function MaxC5()
  {
    $queryMax = "SELECT MAX(`C5`) AS `C5` FROM `nilai`";
    return $this->db->query($queryMax)->row_array();
  }

  public function MinC6()
  {
    $queryMin = "SELECT MIN(`C6`) AS `C6` FROM `nilai`";
    return $this->db->query($queryMin)->row_array();
  }

  public function getBobotC1()
  {
    return $this->db->get_where('kriteria', ['id_kriteria' => 1])->row_array();
  }
  public function getBobotC2()
  {
    return $this->db->get_where('kriteria', ['id_kriteria' => 2])->row_array();
  }

  public function getBobotC3()
  {
    return $this->db->get_where('kriteria', ['id_kriteria' => 3])->row_array();
  }
  public function getBobotC4()
  {
    return $this->db->get_where('kriteria', ['id_kriteria' => 4])->row_array();
  }
  public function getBobotC5()
  {
    return $this->db->get_where('kriteria', ['id_kriteria' => 5])->row_array();
  }

  public function getBobotC6()
  {
    return $this->db->get_where('kriteria', ['id_kriteria' => 6])->row_array();
  }
}
