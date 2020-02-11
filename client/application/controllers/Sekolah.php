<?php

class Sekolah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SekolahM');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Sekolah';
        $data['sekolah'] = $this->SekolahM->getAllSekolah();
        if ($this->input->post('keyword')) {
            $data['sekolah'] = $this->SekolahM->cariDataSekolah();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('sekolah/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Sekolah';

        $this->form_validation->set_rules('wilayah', 'Wilayah', 'required');
        $this->form_validation->set_rules('sd', 'SD', 'required');
        $this->form_validation->set_rules('smp', 'SMP', 'required');
        $this->form_validation->set_rules('sma', 'SMA', 'required');
        $this->form_validation->set_rules('smk', 'SMK', 'required');
        $this->form_validation->set_rules('slb', 'SLB', 'required');
        $this->form_validation->set_rules('jml', 'Jumlah', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('sekolah/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->SekolahM->tambahDataSekolah();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('sekolah');
        }
    }

    public function hapus($id)
    {
        $this->SekolahM->hapusDataSekolah($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('sekolah');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Sekolah';
        $data['sekolah'] = $this->SekolahM->getSekolahById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('sekolah/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Sekolah';
        $data['sekolah'] = $this->SekolahM->getSekolahById($id);
        // $data['jurusan'] = ['Teknik Informatika', 'Teknik Mesin', 'Teknik Planologi', 'Teknik Pangan', 'Teknik Lingkungan'];

        $this->form_validation->set_rules('wilayah', 'Wilayah', 'required');
        $this->form_validation->set_rules('sd', 'SD', 'required');
        $this->form_validation->set_rules('smp', 'SMP', 'required');
        $this->form_validation->set_rules('sma', 'SMA', 'required');
        $this->form_validation->set_rules('smk', 'SMK', 'required');
        $this->form_validation->set_rules('slb', 'SLB', 'required');
        $this->form_validation->set_rules('jml', 'Jumlah', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('sekolah/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->SekolahM->ubahDataSekolah();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('sekolah');
        }
    }
}
