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
		$data['user'] = $this->db->get_where('personal', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'DASHBOARD - BERSIHNESIA';
		$data['personal'] = $this->db->get('jumlah_personal')->result();
		$data['community'] = $this->db->get('jumlah_community')->result();
		$data['event'] = $this->db->get('jumlah_event')->result();
		$this->load->view('Admin/dashbord', $data);
	}

	public function tambah_event()
	{
		$data['user'] = $this->db->get_where('personal', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('Admin/v_tambah_event', $data);
	}

	function add_event()
	{
		$nama_event = $this->input->post('name_event');
		$description = $this->input->post('description');
		$address = $this->input->post('address');
		$latlong = $this->input->post('longlat');
		$date = $this->input->post('date');
		$time = $this->input->post('time');
		$photo = $_FILES['photo'];
		if ($gambar = '') { } else {
			$config['upload_path'] = './upload';
			$config['allowed_types'] = 'gif|jpg|png';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('photo')) {
				echo "<script>
                    alert('Foto Terlalu Besar!');
                    </script>";
				echo '<script>window.location="tambah_kategori";</script>';
				die();
			} else {
				$photo = $this->upload->data('file_name');
			}
		}
		$data = array(
			'name_event' => $nama_event,
			'description' => $description,
			'address' => $address,
			'longlat' => $latlong,
			'time_date' => $date,
			'photo' => $photo,
			'status_event' => "Diterima"
		);
		$this->m_data->add_event($data, 'tb_event');
		echo "<script>
                alert('Event Dibuat!');
                </script>";
		echo '<script>window.location="list_event";</script>';
	}

	public function list_event()
	{
		$data['user'] = $this->db->get_where('personal', ['email' => $this->session->userdata('email')])->row_array();
		$data['tb_event'] = $this->db->get('tb_event')->result();
		$this->load->view('Admin/v_list_event', $data);
	}

	public function view_add_information()
	{
		$data['user'] = $this->db->get_where('personal', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('Admin/v_add_information');
	}
	
	public function add_information()
	{
		$category = $this->input->post('category');
		$nama_information = $this->input->post('name_information');
		$description = $this->input->post('description');
		$date = $this->input->post('date');
		$value = $this->input->post('value');
		$photo = $_FILES['photo'];
		if ($gambar = '') { } else {
			$a['upload_path'] = './upload';
			$a['allowed_types'] = 'gif|jpg|png';

			$this->load->library('upload', $a);
			if (!$this->upload->do_upload('photo')) {
				echo "<script>
                    alert('Foto Terlalu Besar!');
                    </script>";
				echo '<script>window.location="view_add_information";</script>';
				die();
			} else {
				$photo = $this->upload->data('file_name');
			}
		}
		$data = array(
			'category' => $category,
			'name_information' => $nama_information,
			'description' => $description,
			'date' => $date,
			'photo' => $photo,
			'value' => $value,

		);
		$this->m_data->tambah_information($data, 'information');
		echo "<script>
                alert('Informasi Dibuat!');
                </script>";
		echo '<script>window.location="list_item";</script>';
	}

	public function list_item()
	{
		$data['title'] = "TRASH LIST";
		$data['user'] = $this->db->get_where('personal', ['email' => $this->session->userdata('email')])->row_array();
		$data['item'] = $this->db->query("SELECT * FROM information WHERE category='Barang'")->result();
		$this->load->view('Admin/v_list_information_item', $data);
	}

	public function personal_list($activePage = 1)
	{
		// session login
		$data['user'] = $this->db->get_where('personal', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "PERSONAL LIST";
		// req data ke db
		
		// pagination
		$perpage = 2;
		$startData = ($perpage * $activePage) - $perpage;
		$data['total_rows'] = $this->m_data->get_all_personal()->num_rows();
		$data['pages'] = ceil($data['total_rows'] / $perpage);
		$data['active'] = $activePage;
		$data['personal'] = $this->m_data->pagination_personal($startData, $perpage)->result();

		// $config['base_url'] = site_url();
		// $config['total_rows'] = $this->m_data->get_all_personal()->num_rows();
		// $config['per_page'] = $perpage;

		$this->load->view('Admin/v_personal_list', $data);
	}

	public function personal_search($keyword = null)
	{
		
		$activePage = 1;
		$perpage = 2;
		$data['total_rows'] = $this->m_data->get_personal_keyword($keyword)->num_rows();
		$data['pages'] = ceil($data['total_rows'] / $perpage);
		$data['active'] = $activePage;

		$startData = ($perpage * $activePage) - $perpage;
		
		$data['personal'] = $this->m_data->pagination_personal_keyword($keyword, $startData, $perpage)->result();
		$this->load->view('Tables/tb_personal', $data);
	}

	public function personal_pagination($keyword = null, $activePage = null)
	{
		if(is_null($activePage)){
			$activePage = 1;
		}
		$perpage = 2;
		$data['total_rows'] = $this->m_data->get_personal_keyword($keyword)->num_rows();
		$data['pages'] = ceil($data['total_rows'] / $perpage);
		$data['active'] = $activePage;

		$startData = ($perpage * $activePage) - $perpage;
		
		$data['personal'] = $this->m_data->pagination_personal_keyword($keyword, $startData, $perpage)->result();
		$this->load->view('Tables/tb_personal', $data);
	}

	public function community_list()
	{
		$data['user'] = $this->db->get_where('personal', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "COMMUNITY LIST";
		// $data['community'] = $this->m_data->get_all_community()->result();
		$data['community'] = $this->m_data->get_community()->result();

		$this->load->view('Admin/v_community_list', $data);
	}

	public function request()
	{
		$data['user'] = $this->db->get_where('personal', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "COMMUNITY LIST";
		$data['community'] = $this->m_data->get_req()->result();
		$this->load->view('Admin/request_community', $data);
	}
}
