<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Informasi_barang extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->model("M_data");
    }


    function index_get()
    {
        $event = $this->db->get_where('information', array('Category' => 'Barang'))->result();
        $this->response(array("result" => $event, 200));
    }

}
