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
        $this->load->model("M_data");
    }


    function index_get()
    {
        $event = $this->db->get('tb_event')->result();
        $this->response(array("result" => $event, 200));
    }

    function data_get($id_event = null)
    {
        if (!isset($id_event)) redirect('admin/admin');
        $event = $this->db->get_where('tb_event', array('id_event' => $id_event))->result();
        $this->response(array("result" => $event, 200));
    }
}
