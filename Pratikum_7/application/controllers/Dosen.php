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
        $this->dsn1->gender = 'Laki-laki';
        $this->dsn1->tmp_lahir = 'Depok';
        $this->dsn1->tgl_lahir = '19-09-1999';
        $this->dsn1->pendidikan = 'S1 Teknik Informatika';

        $this->load->model('dosen_model', 'dsn2');
        $this->dsn2->id = 2;
        $this->dsn2->nidn = '0110221019';
        $this->dsn2->nama = 'Muchammad';
        $this->dsn2->pendidikan = 'S1';
        $this->dsn2->gender = 'Laki-laki';
        $this->dsn2->tmp_lahir = 'Depok';
        $this->dsn2->tgl_lahir = '19-09-1999';
        $this->dsn2->pendidikan = 'S1 Teknik Informatika';

        $this->load->model('dosen_model', 'dsn3');
        $this->dsn3->id = 3;
        $this->dsn3->nidn = '0110221019';
        $this->dsn3->nama = 'Baik';
        $this->dsn3->pendidikan = 'S1';
        $this->dsn3->gender = 'Laki-laki';
        $this->dsn3->tmp_lahir = 'Depok';
        $this->dsn3->tgl_lahir = '19-10-2000';
        $this->dsn3->pendidikan = 'S1 Teknik Informatika';

        $all_dosen = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['all_dosen'] = $all_dosen;

        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('dosen/view_dosen', $data);
        $this->load->view('partial/footer');
    }
}
