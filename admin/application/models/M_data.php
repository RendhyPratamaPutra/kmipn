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


public function getById($id_event)
{
    return $this->db->get_where(('tb_event'), ["id_event" => $id_event])->row_array();
}

}
?>