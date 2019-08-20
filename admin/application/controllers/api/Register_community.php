<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Register_community extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }
    
    function index_post(){
        $date_register=date('l, d-m-Y');
        $data=array(
            'name_community'=>$this->post('name_community'),
            'contact_person'=>$this->post('contact_person'),
            'description'=>$this->post('description'),
            'status'=>"Di Terima",
            'legality'=>$this->post('legality'),
            'photo'=>$this->post('photo'),
        );
        $insert=$this->db->insert('community',$data);
        if($insert){
            $this->response($data,200);
        }else{
            $this->response(array('status' => 'fail', 502));
        }
       
    }
}