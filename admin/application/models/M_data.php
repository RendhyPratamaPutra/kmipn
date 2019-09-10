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
function get_all_personal()
{
    return $this->db->get('personal');
}
function pagination_personal($dataStart, $perpage){
        // return  $this->db->get('personal');
    $this->db->select('*');
    $this->db->from('personal');
    $this->db->limit($perpage, $dataStart);
    // $this->db->limit(2, 1);
    return $this->db->get();
}

function get_personal_keyword($keyword){

    $this->db->select('*');
    $this->db->from('personal');
    $this->db->or_like('id_personal', $keyword, 'both');
    $this->db->or_like('name', $keyword, 'both');
    $this->db->or_like('address', $keyword, 'both');
    $this->db->or_like('contac_person', $keyword, 'both');
    $this->db->or_like('email', $keyword, 'both');
    // $this->db->limit($perpage, $dataStart);
    // $this->db->limit(2, 0);

    return $this->db->get();
}

function pagination_personal_keyword($keyword, $dataStart, $perpage){
    
    $this->db->select('*');
    $this->db->from('personal');
    $this->db->or_like('id_personal', $keyword, 'both');
    $this->db->or_like('name', $keyword, 'both');
    $this->db->or_like('address', $keyword, 'both');
    $this->db->or_like('contac_person', $keyword, 'both');
    $this->db->or_like('email', $keyword, 'both');
    $this->db->limit($perpage, $dataStart);
    // $this->db->limit($dataStart, $perpage);
    // $this->db->limit(2, 0);

    return $this->db->get();
}

function get_all_community()
{
        return  $this->db->get('community');
}

function get_community()
{
		return $this->db->get_where('community', ['status' => 1]);

}

function get_req()
{
		return $this->db->get_where('community', ['status' => 0]);

}

function delete_reedem($id_act)
    {
        $this->db->where('id_act', $id_act);
        $this->db->delete('act_reedem');
    }
}
?>