<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		check_login();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'DASHBOARD - BERSIHNESIA';
		$this->load->view('Admin/dashbord', $data);
	}
	function tambah_event(){
	$nama_event=$this->input->post('name_event');
	$description=$this->input->post('description');
	$address=$this->input->post('address');
	$latlong=$this->input->post('latlong');
	$date_time=$this->input->post('date'),$this->input->post('time');
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
                    $gambar=$this->upload->data('file_name');
                }
				}
				$data=array(
					'name_event'=>$nama_event,
					'description'=>$description,
					'address'=>$address,
					'latlong'=>$latlong,
					'date_time'=>$date_time,
					'photo'=>$photo,
					'status_event'=>"Diterima"

				);
			$this->m_data->add_event($data,'tb_event');
			echo "<script>
                alert('Event Dibuat!');
                </script>";
                echo '<script>window.location="Admin/v_tambah";</script>';
	}
}
