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
        $this->db->where('status', '1');
        $event = $this->db->get()->result();
        $this->response(array("result" => $event, 200));
    }

    function data_get($id_event = null)
    {
        if (!isset($id_event)) redirect('admin/admin');
        $event = $this->db->get_where('community', array('id_community' => $id_event))->result();
        $this->response(array("result" => $event, 200));
    }

    function search_get($cari = null)
    {
        $this->db->like('name_community', $cari, 'both');
        $event = $this->db->get('community')->result();
        $this->response(array("result" => $event, 200));
    }
    function location_get($cari = null)
    {
        $event = $this->db->get('community')->result();
        if ($event) {
            $output['name_community'] = $event['name_community'];
            $output['latlong'] = $event['latlong'];
            $output['address'] = $event['address'];
            $this->response($event, 200);
        }
    }
}
