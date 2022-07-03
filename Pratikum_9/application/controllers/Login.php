<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function proses()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // $query = $this->db->get_where('account', array('username' => $username));

        // $data_user = $query->row();

        // var_dump($data_user);

        if ($this->auth->login_user($username, $password)) {
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', 'Username & Password salah');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('is_login');
        redirect('login');
    }
}
