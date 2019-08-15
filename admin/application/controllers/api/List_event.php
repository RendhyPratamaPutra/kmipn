<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class List_event extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get()
    {
        $event = $this->db->get('tb_event')->result();
        $this->response(array("result" => $event, 200));
    }

    function data_get($id_event = null)
    {
        if (!isset($id_event)) redirect('admin/admin');

        $data["produk"] = $produk->getById($id_produk);
        if (!$data["produk"]) show_404();

        $this->load->view("admin/edit_produk", $data);
        $event = $this->db->get('tb_event')->result();
        $this->response(array("result" => $event, 200));
    }
}
