<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		check_login();
		$this->load->library('form_validation');
		$this->load->model('m_data');
		
	}

	public function index()
	{
		$data['title'] = 'DASHBOARD - BERSIHNESIA';
		$this->load->view('Admin/dashbord', $data);
	}
	public function tambah_event(){
		$this->load->view('Admin/v_tambah_event');
	}
	function add_event(){
	$nama_event=$this->input->post('name_event');
	$description=$this->input->post('description');
	$address=$this->input->post('address');
	$latlong=$this->input->post('longlat');
	$date=$this->input->post('date');
	$time=$this->input->post('time');
	$photo=$_FILES['photo'];
        if($gambar=''){}
            else{
                $config['upload_path']='./upload';
                $config['allowed_types']='gif|jpg|png';

                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('photo')){
                    echo "<script>
                    alert('Foto Terlalu Besar!');
                    </script>";
                    echo '<script>window.location="tambah_kategori";</script>';die();
                }else{
                    $photo=$this->upload->data('file_name');
                }
				}
				$data=array(
					'name_event'=>$nama_event,
					'description'=>$description,
					'address'=>$address,
					'longlat'=>$latlong,
					'time_date'=>$date,
					'photo'=>$photo,
					'status_event'=>"Diterima"
				);
			$this->m_data->add_event($data,'tb_event');
			echo "<script>
                alert('Event Dibuat!');
                </script>";
                echo '<script>window.location="tambah_event";</script>';
	}
	public function list_event(){
		$data['tb_event']=$this->db->get('tb_event')->result();
		$this->load->view('Admin/v_list_event',$data);

	}
}
