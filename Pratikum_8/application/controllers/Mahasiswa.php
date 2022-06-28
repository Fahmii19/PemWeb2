<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("mahasiswa_model");
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['mhs_siswa'] = $this->mahasiswa_model->getAll();

        $data['judul'] = 'Form Mahasiswa';

        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('mahasiswa/mahasiswa', $data);
        $this->load->view('partial/footer');
    }

    public function create_mahasiswa()
    {
        $data['judul'] = 'Tambah Mahasiswa';
        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('mahasiswa/create_mahasiswa', $data);
        $this->load->view('partial/footer');
    }

    public function save_mahasiswa()
    {

        $this->form_validation->set_rules('nim', 'nim', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jk', 'jk', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required');
        $this->form_validation->set_rules('prodi', 'prodi', 'required');
        $this->form_validation->set_rules('ipk', 'ipk', 'required');
        if ($this->form_validation->run() == true) {
            $data['nim'] = $this->input->post('nim');
            $data['nama'] = $this->input->post('nama');
            $data['jk'] = $this->input->post('jk');
            $data['tgl_lahir'] = $this->input->post('tgl_lahir');
            $data['tempat_lahir'] = $this->input->post('tempat_lahir');
            $data['prodi'] = $this->input->post('prodi');
            $data['ipk'] = $this->input->post('ipk');
            $this->mahasiswa_model->save_mahasiswa($data);
            redirect('mahasiswa');
        } else {
            $this->load->view('partial/header');
            $this->load->view('partial/sidebar');
            $this->load->view('mahasiswa/mahasiswa');
            $this->load->view('partial/footer');
        }
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

    public function delete()
    {
        $id = $this->input->get('id');

        $this->load->model('mahasiswa_model', 'mhs');
        $this->mhs->delete([$id]);

        redirect(base_url() . 'mahasiswa', 'refresh');
        return;
    }

    public function edit_mahasiswa($id)
    {
        $data['judul'] = 'Form Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa_model->getDataMahasiwa($id);
        $this->load->view('partial/header');
        $this->load->view('partial/sidebar');
        $this->load->view('mahasiswa/edit_mahasiswa', $data);
        $this->load->view('partial/footer');
    }

    public function aksi_edit()
    {

        $this->form_validation->set_rules('nim', 'nim', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jk', 'jk', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required');
        $this->form_validation->set_rules('prodi', 'prodi', 'required');
        $this->form_validation->set_rules('ipk', 'ipk', 'required');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('id');
            $data['nim'] = $this->input->post('nim');
            $data['nama'] = $this->input->post('nama');
            $data['jk'] = $this->input->post('jk');
            $data['tgl_lahir'] = $this->input->post('tgl_lahir');
            $data['tempat_lahir'] = $this->input->post('tempat_lahir');
            $data['prodi'] = $this->input->post('prodi');
            $data['ipk'] = $this->input->post('ipk');
            $this->mahasiswa_model->edit_mahasiswa($id, $data);
            redirect('mahasiswa');
        } else {
            $id = $this->input->post('id');
            $data['mahasiswa'] = $this->mahasiswa_model->getDataMahasiwa($id);

            $this->load->view('partial/header');
            $this->load->view('partial/sidebar');
            $this->load->view('mahasiswa/edit_mahasiswa', $data);
            $this->load->view('partial/footer');
        }
    }
}
