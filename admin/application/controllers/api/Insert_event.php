<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Insert_event extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    function index_post()
    {
        $post = $this->input->post();
        $data = array(
            'id_community' => $post['id_community'],
            'name_event' => $post['name_event'],
            'photo' => $post['photo'],
            'description' =>  $post['description'],
            'address' => $post['address'],
            'date' => $post['date'],
            'time' => $post['time'],
            'longlat' => $post['longlat'],
            'status_event' => $post['status_event'],
            'status' => "0"
        );
        $insert = $this->db->insert('tb_event', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
