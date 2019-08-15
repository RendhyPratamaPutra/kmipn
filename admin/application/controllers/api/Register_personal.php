<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Register_personal extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }
    
    function index_post(){
        $date_register=date('l, d-m-Y');
        $data=array(
            'name'=>$this->post('name'),
            'address'=>$this->post('address'),
            'contact_person'=>$this->post('contact_person'),
            'email'=>$this->post('email'),
            'password'=>$this->post('password'),
            'jk'=>$this->post('jk'),
            'date_register'=>$date_register,
            'photo'=>$this->post('photo'),
            'point'=>"0",
            'role_id'=>"2"
        );
        $insert=$this->db->insert('personal',$data);
        if($insert){
            $this->response($data,200);
        }else{
            $this->response(array('status' => 'fail', 502));
        }
       
    }
}