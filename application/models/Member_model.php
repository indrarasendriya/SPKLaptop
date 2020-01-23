<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member_model extends CI_Model
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

  public function addMember()
  {
    $data = [
      'nama' => $this->input->post('nama', true),
      'email' => $this->input->post('email', true),
      'password' => password_hash('12345', PASSWORD_DEFAULT),
      'image' => $this->upload->data('file_name'),
      'role_id' => $this->input->post('role_id', true),
      'date_created' => $this->input->post('date_created', true),
      'is_active' => $this->input->post('is_active', true)
    ];

    //querynya
    $this->db->insert('user', $data);
  }
  public function editMember()
  {
    $data = [
      'nama' => $this->input->post('nama'),
      'email' => $this->input->post('email'),
      'role_id' => $this->input->post('role_id'),
      'date_created' => $this->input->post('date_created'),
      'is_active' => $this->input->post('is_active')
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('user', $data);
  }

  public function deleteMember($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('user');
  }
}
