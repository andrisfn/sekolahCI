<?php

use GuzzleHttp\Client;

class SekolahM extends CI_model
{
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/SekolahCI/server/api/',
            'auth' => ['admin', '1234']
        ]);
    }

    public function getAllSekolah()
    {
        $response = $this->_client->request('GET', 'sekolah', [
            'query' => [
                'sekolahServer' => 'server123'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function getSekolahById($id)
    {
        $response = $this->_client->request('GET', 'sekolah', [
            'query' => [
                'sekolahServer' => 'server123',
                'id' => $id
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }

    public function hapusDataSekolah($id)
    {
        // $this->db->where('id', $id);
        // $this->db->delete('tbSekolah', ['id' => $id]);
        $response = $this->_client->request('DELETE', 'sekolah', [
            'form_params' => [
                'sekolahServer' => 'server123',
                'id' => $id
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function tambahDataSekolah()
    {
        $data = [
            "wilayah" => $this->input->post('wilayah', true),
            "sd" => $this->input->post('sd', true),
            "smp" => $this->input->post('smp', true),
            "sma" => $this->input->post('sma', true),
            "smk" => $this->input->post('smk', true),
            "slb" => $this->input->post('slb', true),
            "jml" => $this->input->post('jml', true),
            'sekolahServer' => 'server123'
        ];
        // $this->db->insert('tbSekolah', $data);
        $response = $this->_client->request('POST', 'sekolah', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function ubahDataSekolah()
    {
        $data = [
            "wilayah" => $this->input->post('wilayah', true),
            "sd" => $this->input->post('sd', true),
            "smp" => $this->input->post('smp', true),
            "sma" => $this->input->post('sma', true),
            "smk" => $this->input->post('smk', true),
            "slb" => $this->input->post('slb', true),
            "jml" => $this->input->post('jml', true),
            "id" => $this->input->post('id', true),
            'sekolahServer' => 'server123'
        ];
        // $this->db->where('id', $this->input->post('id'));
        // $this->db->update('mahasiswa', $data);
        $response = $this->_client->request('PUT', 'sekolah', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    // public function cariDataMahasiswa()
    // {
    //     $keyword = $this->input->post('keyword', true);
    //     $this->db->like('wilayah', $keyword);
    //     $this->db->or_like('sd', $keyword);
    //     $this->db->or_like('smp', $keyword);
    //     $this->db->or_like('sma', $keyword);
    //     $this->db->or_like('smk', $keyword);
    //     $this->db->or_like('slb', $keyword);
    //     $this->db->or_like('jml', $keyword);

    //     return $this->db->get('tbSekolah')->result_array();
    // }
}
