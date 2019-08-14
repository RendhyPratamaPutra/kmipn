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
}
