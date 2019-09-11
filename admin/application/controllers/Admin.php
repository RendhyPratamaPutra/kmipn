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
		$data['dataevent'] = $this->db->get('tb_event')->result();
		$data['personal'] = $this->db->get('jumlah_personal')->result();
		$data['community'] = $this->db->get('jumlah_community')->result();
		$data['event'] = $this->db->get('jumlah_event')->result();
		$this->load->view('Admin/dashbord', $data);
	}

	public function tambah_event()
	{
		$data['title'] = 'ADD EVENT - BERSIHNESIA';	
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
	public function list_merchandise()
	{
		$data['title'] = 'MERCHANDISE - BERSIHNESIA';	
		$data['user'] = $this->db->get_where('personal', ['email' => $this->session->userdata('email')])->row_array();
		$data['item_reedem'] = $this->db->get('item_reedem')->result();
		$this->load->view('Admin/v_list_merchandise', $data);
	}	
	public function list_event()
	{
		$data['title'] = 'EVENT LIST - BERSIHNESIA';	
		$data['user'] = $this->db->get_where('personal', ['email' => $this->session->userdata('email')])->row_array();
		$data['tb_event'] = $this->db->get('tb_event')->result();
		$this->load->view('Admin/v_list_event', $data);
	}

	public function view_add_information()
	{
		$data['user'] = $this->db->get_where('personal', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('Admin/v_add_information', $data);
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


	// Personal
	public function personal_list($activePage = 1)
	{
		// session login
		$data['user'] = $this->db->get_where('personal', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "PERSONAL LIST";
		// pagination
		$perpage = 2;
		$startData = ($perpage * $activePage) - $perpage;
		$data['total_rows'] = $this->m_data->get_all_personal()->num_rows();
		$data['pages'] = ceil($data['total_rows'] / $perpage);
		$data['active'] = $activePage;
		$data['personal'] = $this->m_data->pagination_personal($startData, $perpage)->result();
		
		$this->load->view('Admin/v_personal_list', $data);
	}
	public function read($id) 
    {
        $row = $this->personal_model->get_id($id);
        if ($row) {
            $data = array(
		'id_personal' => $row->id_personal,
		'name' => $row->name,
		'address' => $row->address,
		'contac_person' => $row->contact_person,
		'email' => $row->email,
		'password' => $row->password,
		'jk' => $row->jk,
		'date_register' => $row->date_register,
		'photo' => $row->photo,
		'point' => $row->point,
		'role_id' => $row->role_id,
		);
            $this->load->view('Admin/v_personal_list', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('Admin'));
        }
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

	public function personal_pagination_keyword($keyword = null, $activePage = null)
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

	public function personal_pagination($activePage = null)
	{
		if(is_null($activePage)){
			$activePage = 1;
		}
		$perpage = 2;
		$data['total_rows'] = $this->m_data->get_all_personal()->num_rows();
		$data['pages'] = ceil($data['total_rows'] / $perpage);
		$data['active'] = $activePage;

		$startData = ($perpage * $activePage) - $perpage;
		$data['personal'] = $this->m_data->pagination_personal($startData, $perpage)->result();

		$this->load->view('Tables/tb_personal', $data);
	}
	// end Personal


	// Event
	public function event_list($activePage = 1)
	{
		// session login
		$data['user'] = $this->db->get_where('personal', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "PERSONAL LIST";
		// pagination
		$perpage = 2;
		$startData = ($perpage * $activePage) - $perpage;
		$data['total_rows'] = $this->m_data->get_all_event()->num_rows();
		$data['pages'] = ceil($data['total_rows'] / $perpage);
		$data['active'] = $activePage;
		$data['event'] = $this->m_data->pagination_event($startData, $perpage)->result();
		
		$this->load->view('Admin/v_event_list', $data);
		
	}
	

	public function event_search($keyword = null)
	{
		
		$activePage = 1;
		$perpage = 2;
		$data['total_rows'] = $this->m_data->get_event_keyword($keyword)->num_rows();
		$data['pages'] = ceil($data['total_rows'] / $perpage);
		$data['active'] = $activePage;

		$startData = ($perpage * $activePage) - $perpage;
		
		$data['event'] = $this->m_data->pagination_event_keyword($keyword, $startData, $perpage)->result();
		$this->load->view('Tables/tb_event', $data);
	}

	public function event_pagination_keyword($keyword = null, $activePage = null)
	{
		if(is_null($activePage)){
			$activePage = 1;
		}
		$perpage = 2;
		$data['total_rows'] = $this->m_data->get_event_keyword($keyword)->num_rows();
		$data['pages'] = ceil($data['total_rows'] / $perpage);
		$data['active'] = $activePage;

		$startData = ($perpage * $activePage) - $perpage;
		
		$data['event'] = $this->m_data->pagination_event_keyword($keyword, $startData, $perpage)->result();
		$this->load->view('Tables/tb_event', $data);
	}

	public function event_pagination($activePage = null)
	{
		if(is_null($activePage)){
			$activePage = 1;
		}
		$perpage = 2;
		$data['total_rows'] = $this->m_data->get_all_event()->num_rows();
		$data['pages'] = ceil($data['total_rows'] / $perpage);
		$data['active'] = $activePage;

		$startData = ($perpage * $activePage) - $perpage;
		$data['event'] = $this->m_data->pagination_event($startData, $perpage)->result();

		$this->load->view('Tables/tb_event', $data);
	}
	// end Event


	// Community
	public function community_list($activePage = 1)
	{
		// session login
		$data['user'] = $this->db->get_where('personal', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "PERSONAL LIST";
		// pagination
		$perpage = 2;
		$startData = ($perpage * $activePage) - $perpage;
		$data['total_rows'] = $this->m_data->get_all_community()->num_rows();
		$data['pages'] = ceil($data['total_rows'] / $perpage);
		$data['active'] = $activePage;
		$data['community'] = $this->m_data->pagination_community($startData, $perpage)->result();
		
		$this->load->view('Admin/v_community_list', $data);
	}

	public function community_search($keyword = null)
	{
		
		$activePage = 1;
		$perpage = 2;
		$data['total_rows'] = $this->m_data->get_community_keyword($keyword)->num_rows();
		$data['pages'] = ceil($data['total_rows'] / $perpage);
		$data['active'] = $activePage;

		$startData = ($perpage * $activePage) - $perpage;
		
		$data['community'] = $this->m_data->pagination_community_keyword($keyword, $startData, $perpage)->result();
		$this->load->view('Tables/tb_community', $data);
	}

	public function community_pagination_keyword($keyword = null, $activePage = null)
	{
		if(is_null($activePage)){
			$activePage = 1;
		}
		$perpage = 2;
		$data['total_rows'] = $this->m_data->get_community_keyword($keyword)->num_rows();
		$data['pages'] = ceil($data['total_rows'] / $perpage);
		$data['active'] = $activePage;

		$startData = ($perpage * $activePage) - $perpage;
		
		$data['community'] = $this->m_data->pagination_community_keyword($keyword, $startData, $perpage)->result();
		$this->load->view('Tables/tb_community', $data);
	}

	public function community_pagination($activePage = null)
	{
		if(is_null($activePage)){
			$activePage = 1;
		}
		$perpage = 2;
		$data['total_rows'] = $this->m_data->get_all_community()->num_rows();
		$data['pages'] = ceil($data['total_rows'] / $perpage);
		$data['active'] = $activePage;

		$startData = ($perpage * $activePage) - $perpage;
		$data['community'] = $this->m_data->pagination_community($startData, $perpage)->result();

		$this->load->view('Tables/tb_community', $data);
	}
	// end Community
	public function community_list_()
	{
		$data['user'] = $this->db->get_where('personal', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "COMMUNITY LIST";
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

	public function request_reedem()
	{
		$data['title'] = 'REQUEST REEDEM - BERSIHNESIA';	
		$data['user'] = $this->db->get_where('personal', ['email' => $this->session->userdata('email')])->row_array();
	
		$data['act_reedem'] = $this->m_data->getreedem();
        $data['item_reedem'] = $this->db->get('item_reedem')->result();
		$this->load->view('Admin/v_request_reedem', $data);
	}

	public function delete_reedem($id_act)
    {

        if ($id_act) {
            $this->m_data->delete_reedem($id_act);
            redirect('Admin/request_reedem');
        } else {
            redirect('Admin/request_reedem');
        }
	}
	
	public function tambah_point()
	{
		$data['title'] = 'ADD POINT - BERSIHNESIA';	
		$data['user'] = $this->db->get_where('personal', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('Admin/v_tambah_point', $data);
	}
}
