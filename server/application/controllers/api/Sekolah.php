<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Sekolah extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SekolahM', 'sekolah');

        $this->methods['index_get']['limit'] = 2000;
        $this->methods['index_delete']['limit'] = 2000;
        $this->methods['index_post']['limit'] = 2000;
        $this->methods['index_put']['limit'] = 2000;
    }

    // GET atau Insert
    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null) {
            $sekolah = $this->sekolah->getSekolah();
        } else {
            $sekolah = $this->sekolah->getSekolah($id);
        }
        if ($sekolah) {
            $this->response([
                'status' => true,
                'data' => $sekolah
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    // DELETE atau Hapus
    public function index_delete()
    {
        $id = $this->delete('id');
        if ($id === null) {
            $this->response([
                'status' => false,
                'message' => 'provide an id'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->sekolah->deleteSekolah($id) > 0) {
                //ok
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'deleted'
                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'id not found'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post()
    {
        $data = [
            'wilayah' => $this->post('wilayah'),
            'sd' => $this->post('sd'),
            'smp' => $this->post('smp'),
            'sma' => $this->post('sma'),
            'smk' => $this->post('smk'),
            'slb' => $this->post('slb'),
            'jml' => $this->post('jml')
        ];
        if ($this->sekolah->createSekolah($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'new Sekolah has been created'
            ], REST_Controller::HTTP_CREATED);
        } else {

            $this->response([
                'status' => false,
                'message' => 'failed to create new data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $id = $this->put('id');
        $data = [
            'wilayah' => $this->put('wilayah'),
            'sd' => $this->put('sd'),
            'smp' => $this->put('smp'),
            'sma' => $this->put('sma'),
            'smk' => $this->put('smk'),
            'slb' => $this->put('slb'),
            'jml' => $this->put('jml')
        ];
        if ($this->sekolah->updateSekolah($data, $id) > 0) {
            $this->response([
                'status' => true,
                'message' => 'new Sekolah has been update'
            ], REST_Controller::HTTP_NO_CONTENT);
        } else {
            $this->response([
                'status' => false,
                'message' => 'failed to update data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
