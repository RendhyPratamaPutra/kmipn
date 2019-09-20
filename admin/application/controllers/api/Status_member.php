<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Status_member extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get()
    {
        $this->db->select('*');
        $this->db->join('personal', 'personal.id_personal = status_member.id_personal');
        $this->db->join('community', 'community.id_community = status_member.id_community');
        $this->db->from('status_member');
        $event = $this->db->get()->result();
        $this->response(array("result" => $event, 200));
    }

    function sum_get($id_event = null)
    {
        $this->db->select('*');
        $this->db->join('personal', 'personal.id_personal = status_member.id_personal');
        $this->db->join('community', 'community.id_community = status_member.id_community');
        $this->db->from('status_member');
        $this->db->where('status_member.id_community', $id_event);
        $event = $this->db->count_all_results();
        $this->response(array("result" => $event, 200));
    }


    function check_get($id_community = null, $id_personal = null)
    {
        $this->db->select('*');
        $this->db->join('personal', 'personal.id_personal = status_member.id_personal');
        $this->db->join('community', 'community.id_community = status_member.id_community');
        $this->db->from('status_member');
        $where = ['status_member.id_personal' => $id_personal, 'status_member.id_community' => $id_community];
        $this->db->where($where);
        $data = $this->db->count_all_results();
        if ($data == 0) {
            $this->response(array("result" => "null", 200));
        } else {
            $this->db->select('*');
            $this->db->join('personal', 'personal.id_personal = status_member.id_personal');
            $this->db->join('community', 'community.id_community = status_member.id_community');
            $this->db->from('status_member');
            $where = ['status_member.id_personal' => $id_personal, 'status_member.id_community' => $id_community];
            $this->db->where($where);
            $this->response(array("result" => $this->db->get()->result(), 200));
        }
    }

    function insert_get($id_community = null, $id_personal = null)
    {
        $data = array(
            'id_community' => $id_community,
            'id_personal' => $id_personal,
            'status_member' => 'Member'
        );

        $this->db->insert('status_member', $data);
    }
}
