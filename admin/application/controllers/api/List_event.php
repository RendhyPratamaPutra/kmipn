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
        $this->db->select('*');
        $this->db->from('tb_event');
        $this->db->where('status', '1');

        $event = $this->db->get()->result();
        $this->response(array("result" => $event, 200));
        $this->response(array("result" => $event, 200));
    }

    function data_get($id_event = null)
    {
        $this->db->select('*');
        $this->db->join('community', 'community.id_community = tb_event.id_community');
        $this->db->from('tb_event');
        $where = ['id_event' => $id_event, 'status' => '1'];
        $this->db->where('id_event', $id_event);

        $event = $this->db->get()->result();
        $this->response(array("result" => $event, 200));
    }

    function search_get($cari = null)
    {
        $this->db->like('name_event', $cari, 'both');
        $event = $this->db->get('tb_event')->result();
        $this->response(array("result" => $event, 200));
    }

    function detail_get($id_event = null, $id_personal = null)
    {
        $this->db->select('COUNT(*) as total');
        $where = ['id_event' => $id_event, 'id_personal' => $id_personal];
        $this->db->where($where);
        $this->db->from('trans_event');
        $event = $this->db->count_all_results();
        if ($event != null) {
            $this->response(array("result" => "true", 200));
        } else {
            $this->response(array("result" => "false", 200));
        }
    }

    function insert_get($id_event = null, $id_personal = null)
    {
        $data = array(
            'id_event' => $id_event,
            'id_personal' => $id_personal
        );
        $this->db->select('COUNT(*) as total');
        $where = ['id_event' => $id_event, 'id_personal' => $id_personal];
        $this->db->where($where);
        $this->db->from('trans_event');
        $event = $this->db->count_all_results();
        if ($event != null) {
            $this->response(array("result" => "true", 200));
        } else {
            $this->db->insert('trans_event', $data);
            $this->response(array("result" => "false", 200));
        }
    }

    function member_get($id_event = null)
    {
        $this->db->select('*');
        $this->db->join('personal', 'personal.id_personal = trans_event.id_personal');
        $this->db->from('trans_event');
        $where = ['id_event' => $id_event];
        $this->db->where($where);

        $event = $this->db->get()->result();
        $this->response(array("result" => $event, 200));
    }
}
