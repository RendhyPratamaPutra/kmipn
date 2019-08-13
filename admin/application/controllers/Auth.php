<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		// if ($this->session->userdata('email')) {
		// 	redirect('Auth');
		// }
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'SIGN IN - BERSIHNESIA';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('Auth/login');
			$this->load->view('templates/auth_footer');
		} else {
			//validasi berhasil
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('personal', ['email' => $email])->row_array();

		//jika user ada
		if ($user) {
			//jika user aktif

			if ($password == $user['password']) {
				$data = [
					'email' => $user['email'],
					'role_id' => $user['role_id']
				];
				$this->session->set_userdata($data);
				if ($user['role_id'] == 1) {
					redirect('Admin');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong password!
                  </div>');
				redirect('Auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not registered!
          </div>');
			redirect('Auth');
		}
	}
}
