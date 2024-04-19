<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model', 'users_model');
	}

	public function index()
	{
		$data['title'] = "Dashboard";
		//get dari session
		$email = $this->session->userdata('email');
		$data['user'] = $get_user = $this->users_model->get('users', 'email', $email);
		$data['role'] = $get_role = $this->session->userdata('role_id');
		$this->load->view('partials/header', $data);
		$this->load->view('partials/sidebar', $data);
		($get_role == "Operator") ? $this->load->view('dashboard/dashboard') : $this->load->view('dashboard/dashboard_user');
		$this->load->view('partials/footer');
	}

}
