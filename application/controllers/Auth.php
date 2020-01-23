<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        //form validasi login
        if ($this->session->userdata('email')) {
            redirect('admin');
        }

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        //jika salah, kembalikan error ke login
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login Page';
            $this->load->view('Auth/login', $data);
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //jika ada usernya
        if ($user) {
            //jika usernya aktif
            if ($user['is_active'] == 1) {
                //cek passsword
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    //jika role 1 oper ke dashboard admin
                    if ($user['role_id'] == 1) {
                        redirect('Admin');
                        //redirect('admin');
                    } else {
                        redirect('member');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class ="alert alert-danger"
                        role="alert">Password Salah!</div>');
                    redirect('auth');
                }
                //email belum diverif
            } else {
                $this->session->set_flashdata('message', '<div class ="alert alert-danger"
                    role="alert">Email belum diverifikasi!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class ="alert alert-danger"
            role="alert">Email belum terdaftar!</div>');
            redirect('auth');
        }
    }
    //validasi data registrasi
    public function register()
    {
        $this->form_validation->set_rules('username', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password tidak sesuai',
            'min_lenght' => 'Password kurang panjang'
        ]);
        $data['judul'] = 'Registration Page';
        $this->load->view('auth/register', $data);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Register Page';
            $this->load->view('Auth/register', $data);
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'userlogin.png',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Kamu sudah terdaftar, Silahkan login :)</div>');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Berhasil Logout!</div>');
        redirect('auth');
    }
    public function block()
    {
        $data['judul'] = 'Akses Tidak Diizinkan!';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('Templates/admin_header', $data);
        $this->load->view('Auth/block');
    }
}
