<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("dosen_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $this->load->model('dosen_model', 'dsn1');
        // $this->dsn1->id = 1;
        // $this->dsn1->nidn = '0110221015';
        // $this->dsn1->nama = 'Muchammad';
        // $this->dsn1->pendidikan = 'S1';
        // $this->dsn1->gender = 'Laki-laki';
        // $this->dsn1->tmp_lahir = 'Depok';
        // $this->dsn1->tgl_lahir = '19-09-1999';
        // $this->dsn1->pendidikan = 'S1 Teknik Informatika';

        // $this->load->model('dosen_model', 'dsn2');
        // $this->dsn2->id = 2;
        // $this->dsn2->nidn = '0110221019';
        // $this->dsn2->nama = 'Muchammad';
        // $this->dsn2->pendidikan = 'S1';
        // $this->dsn2->gender = 'Laki-laki';
        // $this->dsn2->tmp_lahir = 'Depok';
        // $this->dsn2->tgl_lahir = '19-09-1999';
        // $this->dsn2->pendidikan = 'S1 Teknik Informatika';

        // $this->load->model('dosen_model', 'dsn3');
        // $this->dsn3->id = 3;
        // $this->dsn3->nidn = '0110221019';
        // $this->dsn3->nama = 'Baik';
        // $this->dsn3->pendidikan = 'S1';
        // $this->dsn3->gender = 'Laki-laki';
        // $this->dsn3->tmp_lahir = 'Depok';
        // $this->dsn3->tgl_lahir = '19-10-2000';
        // $this->dsn3->pendidikan = 'S1 Teknik Informatika';

        // $all_dosen = [$this->dsn1, $this->dsn2, $this->dsn3];
        // $data['all_dosen'] = $all_dosen;

        $data['dosen'] = $this->dosen_model->getAll();


        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('dosen/dosen', $data);
        $this->load->view('partial/footer');
    }

    public function create_dosen()
    {
        $data['judul'] = 'Form Dosen';

        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('dosen/create_dosen', $data);
        $this->load->view('partial/footer');
    }


    public function delete()
    {
        $id = $this->input->get('id');

        $this->load->model('dosen_model', 'dsn');
        $this->dsn->delete([$id]);

        redirect(base_url() . 'dosen', 'refresh');
        return;
    }

    public function save_dosen()
    {

        $this->form_validation->set_rules('nidn', 'nidn', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jk', 'jk', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required');
        $this->form_validation->set_rules('prodi', 'prodi', 'required');
        $this->form_validation->set_rules('pendidikan_akhir', 'pendidikan_akhir', 'required');
        if ($this->form_validation->run() == true) {
            $data['nidn'] = $this->input->post('nidn');
            $data['nama'] = $this->input->post('nama');
            $data['jk'] = $this->input->post('jk');
            $data['tempat_lahir'] = $this->input->post('tempat_lahir');
            $data['prodi'] = $this->input->post('prodi');
            $data['pendidikan_akhir'] = $this->input->post('pendidikan_akhir');
            $this->dosen_model->save_dosen($data);
            redirect('dosen');
        } else {
            $this->load->view('partial/header');
            $this->load->view('partial/sidebar');
            $this->load->view('dosen/dosen');
            $this->load->view('partial/footer');
        }
    }


    public function edit_dosen($id)
    {
        $data['dosen'] = $this->dosen_model->getDataDosen($id);
        $data['judul'] = 'Form Dosen';
        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('dosen/edit_dosen', $data);
        $this->load->view('partial/footer');
    }

    public function aksi_edit()
    {
        $this->form_validation->set_rules('nidn', 'nidn', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jk', 'jk', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required');
        $this->form_validation->set_rules('prodi', 'prodi', 'required');
        $this->form_validation->set_rules('pendidikan akhir', 'pendidikan akhir', 'required');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('id');
            $data['nidn'] = $this->input->post('nidn');
            $data['nama'] = $this->input->post('nama');
            $data['jk'] = $this->input->post('jk');
            $data['tgl_lahir'] = $this->input->post('tgl_lahir');
            $data['tempat_lahir'] = $this->input->post('tempat_lahir');
            $data['prodi'] = $this->input->post('prodi');
            $data['pendidikan akhir'] = $this->input->post('pendidikan akhir');
            $this->dosen_model->edit_dosen($id, $data);
            redirect('dosen');
        } else {
            $id = $this->input->post('id');
            $data['dosen'] = $this->dosen_model->getDataDosen($id);

            $this->load->view('partial/header');
            $this->load->view('partial/sidebar');
            $this->load->view('dosen/edit_dosen', $data);
            $this->load->view('partial/footer');
        }
    }
}
