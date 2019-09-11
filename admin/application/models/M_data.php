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
    $this->db->or_like('contact_person', $keyword, 'both');
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
    $this->db->or_like('contact_person', $keyword, 'both');
    $this->db->or_like('email', $keyword, 'both');
    $this->db->limit($perpage, $dataStart);
    // $this->db->limit($dataStart, $perpage);
    // $this->db->limit(2, 0);

    return $this->db->get();
}
// end Personal


// Event
function get_all_event()
{
    return $this->db->get('tb_event');
}

function pagination_event($dataStart, $perpage){
        // return  $this->db->get('personal');
    $this->db->select('*');
    $this->db->from('tb_event');
    $this->db->limit($perpage, $dataStart);
    // $this->db->limit(2, 1);


    return $this->db->get();
}

function get_event_keyword($keyword){

    // not finished yet
    $this->db->select('*');
    $this->db->from('tb_event');
    $this->db->or_like('id_event', $keyword, 'both');
    $this->db->or_like('id_community', $keyword, 'both');
    $this->db->or_like('name_event', $keyword, 'both');
    // $this->db->or_like('description', $keyword, 'both');
    $this->db->or_like('address', $keyword, 'both');
    $this->db->or_like('status_event', $keyword, 'both');

    return $this->db->get();
}

function pagination_event_keyword($keyword, $dataStart, $perpage){
    
    // not finisfhed yet
    $this->db->select('*');
    $this->db->from('tb_event');
    $this->db->or_like('id_event', $keyword, 'both');
    $this->db->or_like('id_community', $keyword, 'both');
    $this->db->or_like('name_event', $keyword, 'both');
    // $this->db->or_like('description', $keyword, 'both');
    $this->db->or_like('address', $keyword, 'both');
    $this->db->or_like('status_event', $keyword, 'both');
    $this->db->limit($perpage, $dataStart);

    return $this->db->get();
    
}
// end Event


// Community
function get_all_community()
{
    return $this->db->get('community');
}

function pagination_community($dataStart, $perpage){
        // return  $this->db->get('personal');
    $this->db->select('*');
    $this->db->from('community');
    $this->db->limit($perpage, $dataStart);
    // $this->db->limit(2, 1);


    return $this->db->get();
}

function get_community_keyword($keyword){

    // not finished yet
    $this->db->select('*');
    $this->db->from('community');
    $this->db->or_like('id_community', $keyword, 'both');
    $this->db->or_like('name_community', $keyword, 'both');
    $this->db->or_like('jumlah_point', $keyword, 'both');
    $this->db->or_like('jumlah_item', $keyword, 'both');
    // $this->db->or_like('status_event', $keyword, 'both');

    return $this->db->get();
}

function pagination_community_keyword($keyword, $dataStart, $perpage){
    
    // not finisfhed yet
    $this->db->select('*');
    $this->db->from('community');
    $this->db->or_like('id_community', $keyword, 'both');
    $this->db->or_like('name_community', $keyword, 'both');
    $this->db->limit($perpage, $dataStart);

    return $this->db->get();
}
// end Community

//merchandise
function get_all_item_reedem()
{
    return $this->db->get('item_reedem');
}

function pagination_item_reedem($dataStart, $perpage){
        // return  $this->db->get('personal');
    $this->db->select('*');
    $this->db->from('item_reedem');
    $this->db->limit($perpage, $dataStart);
    // $this->db->limit(2, 1);


    return $this->db->get();
}

function get_item_reedem_keyword($keyword){

    // not finished yet
    $this->db->select('*');
    $this->db->from('item_reedem');
    $this->db->or_like('id_item', $keyword, 'both');
    $this->db->or_like('name_item', $keyword, 'both');
    // $this->db->or_like('contact_person', $keyword, 'both');
    // $this->db->or_like('address', $keyword, 'both');
    // $this->db->or_like('status_event', $keyword, 'both');

    return $this->db->get();
}

function pagination_item_reedem_keyword($keyword, $dataStart, $perpage){
    
    // not finisfhed yet
    $this->db->select('*');
    $this->db->from('item_reedem');
    $this->db->or_like('id_item', $keyword, 'both');
    $this->db->or_like('name_item', $keyword, 'both');
    $this->db->limit($perpage, $dataStart);

    return $this->db->get();
}
//end merchandise

function get_all_community_()
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

    public function getreedem() {

        $query = "SELECT `act_reedem`.* , `item_reedem`.`name_item`, `item_reedem`.`category` FROM `act_reedem` JOIN `item_reedem` ON `act_reedem`.`id_item` = `item_reedem`.`id_item`";

        return $this->db->query($query)->result_array();
    }
}
