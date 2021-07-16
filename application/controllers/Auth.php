 
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Auth');
    }

    public function login()
    {
        $this->load->view('auth/login');
    }

    public function aksi_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $where = array(
            'email' => $email,
            'password' => md5($password)
        );
        $cek = $this->M_Auth->cek_login("users", $where)->num_rows();
        $selects = $this->M_Auth->select($where['email']);
        if ($cek > 0 && $selects[0]['id_level'] == 1) {
            $data_session = array(
                'id_users' => $selects[0]['id_users'],
                'nama' => $selects[0]['nama'],
                'email' => $email,
                'id_level' => $selects[0]['id_level'],
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("Admin"));
        } elseif ($cek > 0 && $selects[0]['id_level'] == 2) {
            $data_session = array(
                'id_users' => $selects[0]['id_users'],
                'nama' => $selects[0]['nama'],
                'email' => $email,
                'id_level' => $selects[0]['id_level'],
                'status' => "login"
            );

            $this->session->set_userdata($data_session);
            redirect(base_url('User'));
        } else {
            echo "Email dan password salah !";
        }
    }

    public function register()
    {
        $this->load->view('auth/register');
    }

    public function proses_register()
    {
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('Auth/register');
        } else {
            $email = $this->input->post('email');
            $nama = $this->input->post('nama');
            $password = $this->input->post('password');
            $pass = md5($password);
            $id_level = 2;
            $data = [
                'nama' => $nama,
                'email' => $email,
                'password' => $pass,
                'id_level' => $id_level
            ];
            $insert = $this->M_Auth->register("users", $data);
            if ($insert) {
                echo '<script>alert("Sukses! Anda berhasil melakukan register. Silahkan login untuk mengakses data.");window.location.href="' . base_url('Auth/login') . '";</script>';
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('Auth/login'));
    }
}
