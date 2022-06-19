<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function index()
    {
        $this->load->model('dosen_model', 'dsn1');
        $this->dsn1->id = 1;
        $this->dsn1->nidn = '0110221015';
        $this->dsn1->nama = 'Muchammad';
        $this->dsn1->pendidikan = 'S1';

        $this->load->model('dosen_model', 'dsn2');
        $this->dsn2->id = 2;
        $this->dsn2->nidn = '0110221016';
        $this->dsn2->nama = 'Fahmi';
        $this->dsn2->pendidikan = 'S2';

        $list_dsn = [$this->dsn1, $this->dsn2];
        $data['list_dsn'] = $list_dsn;

        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('dosen', $data);
        $this->load->view('partial/footer');
    }
}
