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

function get_all_personal(){
        return  $this->db->get('personal');
}

function get_personal_keyword($keyword){
    // $cond = array('id_personal' => $keyword, 'name' => $keyword, 'address' => $keyword, 'contac_person' => $keyword, 'address' => $email);
    // $dataP = $query = "SELECT * FROM personal
    // WHERE 
    // id_personal LIKE '%$keyword%' OR
    // name LIKE '%$keyword%' OR
    // address LIKE '%$keyword%' OR
    // contac_person LIKE '%$keyword%' OR
    // email LIKE '%$keyword%'";

    $this->db->select('*');
    $this->db->from('personal');
    $this->db->or_like('id_personal', $keyword, 'both');
    $this->db->or_like('name', $keyword, 'both');
    $this->db->or_like('address', $keyword, 'both');
    $this->db->or_like('contac_person', $keyword, 'both');
    $this->db->or_like('email', $keyword, 'both');


    // $countData  = $this->db->query($dataP);
    // $totData = $this->db->count_all_results($dataP);

    // // $totData = mysqli_num_rows($countData);
    // $maxData = 1;
    // $pages = ceil($totData / $maxData);
    // $activePage = ( isset($_GET['page']) ) ? $_GET['page'] : 1;
    // $dataStart = ( $maxData * $activePage ) - $maxData;

    // $query = "SELECT * FROM personal
    // WHERE 
    // id_personal LIKE '%$keyword%' OR
    // name LIKE '%$keyword%' OR
    // address LIKE '%$keyword%' OR
    // contac_person LIKE '%$keyword%' OR
    // email LIKE '%$keyword%'
    // LIMIT $dataStart, $maxData";

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
}
?>