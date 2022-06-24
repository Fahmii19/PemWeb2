<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

    public function index()
    {

        $this->load->model('mahasiswa_model', 'mhs1');
        $this->mhs1->id = 1;
        $this->mhs1->nim = '0110221097';
        $this->mhs1->nama = 'Budi';
        $this->mhs1->gender = 'L';
        $this->mhs1->ipk = 3.85;

        $this->load->model('mahasiswa_model', 'mhs2');
        $this->mhs2->id = 2;
        $this->mhs2->nim = '0110221098';
        $this->mhs2->nama = 'Sapto';
        $this->mhs2->gender = 'L';
        $this->mhs2->ipk = 3.5;

        $this->load->model('mahasiswa_model', 'mhs3');
        $this->mhs3->id = 3;
        $this->mhs3->nim = '0110221099';
        $this->mhs3->nama = 'Ilham';
        $this->mhs3->gender = 'L';
        $this->mhs3->ipk = 3.25;

        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
        $data['list_mhs'] = $list_mhs;
        $data['judul'] = 'Form Mahasiswa';

        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('mahasiswa/mahasiswa', $data);
        $this->load->view('partial/footer');
    }

    public function create_mahasiswa()
    {
        $data['judul'] = 'Form Mahasiswa';
        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('mahasiswa/create_mahasiswa', $data);
        $this->load->view('partial/footer');
    }

    public function view_mahasiswa()
    {
        $data['judul'] = 'Form Mahasiswa';

        $this->load->model('mahasiswa_model', 'mhs1');

        $this->mhs1->nim = $this->input->post('nim');
        $this->mhs1->nama = $this->input->post('nama');
        $this->mhs1->gender = $this->input->post('jk');
        $this->mhs1->tmp_lahir = $this->input->post('tgl_lahir');
        $this->mhs1->tgl_lahir = $this->input->post('tempat_lahir');
        $this->mhs1->prodi = $this->input->post('prodi');
        $this->mhs1->ipk = $this->input->post('ipk');


        $data['mahasiswa'] = $this->mhs1;
        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('mahasiswa/view_mahasiswa', $data);
        $this->load->view('partial/footer');
    }
}
