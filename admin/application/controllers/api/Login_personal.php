<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Login_personal extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('m_data');
    }
function index_post(){
        $email=$this->input->post('email');
        $password = $this->input->post('password');
        $where=array(
            'email'=>$email,
            'password'=>$password
        );
        
        // $cek=$this->m_login->cek_login_biasa($username,$password)->num_rows();
        $cek=$this->m_data->cek_login($email,$password);
    
       // echo $cek;

       /* if ($cek) {
            $this->response(array('status'=> 'oke','id'=>$cek['id_user']));
        }*/
        if ($cek) {
            $output['email'] = $email;
            $output['password'] = $cek['password']; 
            $output['contact_person'] = $cek['contact_person']; 
            $output['id_personal'] = $cek['id_personal'];
            $this->response($output,200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }

        
    }
}
?>