<?php
class M_data extends CI_Model{
	public function __construct()
{
parent::__construct();
// Your own constructor code
$this->load->database();
}
 function add_event($data,$table){
     $this->db->insert($table,$data);
}
function tambah_information($data,$table){
    $this->db->insert($table,$data);
}
function cek_login($email,$password){		
    $this->db->where('email', $email);
    $this->db->where('password', $password);
    $data = $this->db->get('personal')->row_array();
    return $data;
}



}
?>