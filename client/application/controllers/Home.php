<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SekolahM');
    }
    // public function index()
    // {
    //     $data['judul'] = 'Home';
    //     $data['sekolah'] = $this->ChartM->getAllSekolah();
    //     $this->load->view('chart', $data);
    // }
    public function index($nama = '')
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $nama;
        $data['chart'] = $this->SekolahM->getAllSekolah();
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
