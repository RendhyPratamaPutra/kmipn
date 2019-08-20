<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class List_community extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get()
    {
        $this->db->select('*');
        $this->db->join('personal', 'personal.id_personal = community.id_personal');
        $this->db->from('community');
        $event = $this->db->get()->result();
        $this->response(array("result" => $event, 200));
    }

    function data_get($id_event = null)
    {
        if (!isset($id_event)) redirect('admin/admin');
        $event = $this->db->get_where('community', array('id_community' => $id_event))->result();
        $this->response(array("result" => $event, 200));
    }
}
