<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class personal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_personal');
        $this->load->library('form_validation');        
    
    }

    public function index()
    {
     $data['personal'] = $this->model('m_personal')->result();
        $this->load->view('personal/personal_list');

    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Personal_model->json();
    }

    public function read($id) 
    {
        $row = $this->Personal_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_personal' => $row->id_personal,
		'name' => $row->name,
		'gender' => $row->gender,
        'address' => $row->address,
        'contac_person' => $row->contac_person,
        'email' => $row->email,
		'password' => $row->password,
		'point' => $row->point,
		'created' => $row->created,
	    );
            $this->load->view('template/header');
            $this->load->view('personal/personal_read', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('personal'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('personal/create_action'),
    	    'id_personal' => set_value('id_personal'),
    	    'name' => set_value('name'),
    	    'gender' => set_value('gender'),
    	    'address' => set_value('address'),
    	    'contac_person' => set_value('contac_person'),
    	    'email' => set_value('email'),
    	    'password' => set_value('password'),
    	    'point' => set_value('point'),
    	    'created' => set_value('created'),
    	);
        $this->load->view('template/header');
        $this->load->view('personal/personal_form', $data);
        $this->load->view('template/footer');
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'gender' => $this->input->post('gender',TRUE),
		'address' => $this->input->post('address',TRUE),
		'contac_person' => $this->input->post('contac_person',TRUE),
		'email' => $this->input->post('email',TRUE),
		'password' => $this->input->post('password',TRUE),
		'point' => $this->input->post('point',TRUE),
		'created' => $this->input->post('created',TRUE),
	    );

            $this->Personal_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('personal'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Personal_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('personal/update_action'),
		'id_personal' => set_value('id_personal', $row->id_personal),
		'name' => set_value('name', $row->name),
		'gender' => set_value('gender', $row->gender),
		'address' => set_value('address', $row->address),
		'contac_person' => set_value('contac_person', $row->contac_person),
		'email' => set_value('email', $row->email),
		'password' => set_value('password', $row->password),
		'point' => set_value('point', $row->point),
	    'created' => set_value('created', $row->created),
	    );
            $this->load->view('template/header');
            $this->load->view('personal/personal_form', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('personal'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_personal', TRUE));
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'gender' => $this->input->post('gender',TRUE),
		'address' => $this->input->post('address',TRUE),
		'contac_person' => $this->input->post('contac_person',TRUE),
		'email' => $this->input->post('email',TRUE),
		'password' => $this->input->post('password',TRUE),
		'point' => $this->input->post('point',TRUE),
		'created' => $this->input->post('created',TRUE),
	    );

            $this->Personal_model->update($this->input->post('id_personal', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('personal'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Personal_model->get_by_id($id);

        if ($row) {
            $this->Personal_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('personal'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('personal'));
        }
    }

    public function _rules() 
    {
    	$this->form_validation->set_rules('NAME', 'name', 'trim|required');
    	$this->form_validation->set_rules('GENDER', 'gender', 'trim|required');
    	$this->form_validation->set_rules('ADDRESS', 'address', 'trim|required');
    	$this->form_validation->set_rules('CONTAC_PERSON', 'contac_person', 'trim|required');
    	$this->form_validation->set_rules('EMAIL', 'alamat', 'trim|required');
    	$this->form_validation->set_rules('PASSWORD', 'password', 'trim|required');
    	$this->form_validation->set_rules('POINT', 'photo', 'trim|required');	
    	$this->form_validation->set_rules('CREATED', 'created', 'trim|required');
    	$this->form_validation->set_rules('id_personal', 'id_personal', 'trim');
    	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
