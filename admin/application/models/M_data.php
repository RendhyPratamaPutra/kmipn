<?php
class M_data extends CI_Model{
	public function __construct()
{
parent::__construct();
// Your own constructor code
$this->load->database();
}
public function add_event($data,$table){
     $this->db->insert($table,$data);
}

?>