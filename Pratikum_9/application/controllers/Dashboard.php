<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('dashboard');
        $this->load->view('partial/footer');
    }
}
