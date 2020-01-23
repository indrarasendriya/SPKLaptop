<?php
defined('BASEPATH') or exit('No Direct script access allowed');

class Admin_model extends CI_Model
{
  public function getUser()
  {
    return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
  }
  public function getMember()
  {
    return $this->db->get('user')->result_array();
  }
  public function getRole()
  {
    return $this->db->get('role')->result_array();
  }
  public function getAlternatif()
  {
    return $this->db->get('laptop')->result_array();
  }
  public function getKriteria()
  {
    return $this->db->get('kriteria')->result_array();
  }
  public function getLaptop()
  {
    return $this->db->get('laptop')->result_array();
  }
  public function getLaptopDesign()
  {
    return $this->db->get_where('laptop', ['kebutuhan' => '1'])->result_array();
  }
  public function getLaptopOffice()
  {
    return $this->db->get_where('laptop', ['kebutuhan' => '2'])->result_array();
  }
  public function getKebutuhan()
  {
    return $this->db->get('role_kebutuhan')->result_array();
  }
  public function getNilai()
  {
    return $this->db->get('nilai')->result_array();
  }
}
