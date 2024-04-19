<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
	}

	// public function index($start = null)
	// {

	// 	$data['title'] = "Dashboard";

	// 	//base url Admin/index
	// 	$config['base_url'] = base_url('user');// url ambil dari routes
    //     $config['reuse_query_string'] = true;

    //     $data['keyword'] = $this->input->post('keyword');

    //     $config['total_rows'] = $this->users_model->count_all_user($data['keyword']);
    //     $config['per_page'] = 10;

    //     $this->pagination->initialize($config);
    //     $data['pagination'] = $this->pagination->create_links();

    //     $data['start'] = $start;
    //     $data['from_row'] = 1 + $start;
    //     $data['to_row'] = $this->users_model->count_data_user($config['per_page'], $data['start'], $data['keyword']) + $start;
    //     $data['total_rows'] = $config['total_rows'];
    //     $data['users'] = $this->users_model->get_data_user($config['per_page'], $data['start'], $data['keyword'])->result();

	// 	$email = $this->session->userdata('email');
	// 	$data['user'] = $get_user = $this->users_model->get('users', 'email', $email);
    //     $data['role'] = $get_role = $this->session->userdata('role_id');
	// 	// $data['role'] = $get_role = $this->users_model->get('user_role', 'id_role', $get_user->role_id);
    //     // $data['username'] = $this->lib_jwt->getJWT('Token')->username;

	// 	$this->load->view('partials/header');
	// 	$this->load->view('partials/sidebar', $data);
	// 	$this->load->view('admin/user', $data);
	// 	$this->load->view('partials/footer');
	// }

	public function user($start = null)
	{

		$data['title'] = "Dashboard";

		//base url Admin/index
		$config['base_url'] = base_url('user');// url ambil dari routes
        $config['reuse_query_string'] = true;

        $data['keyword'] = $this->input->post('keyword');

        $config['total_rows'] = $this->users_model->count_all_user($data['keyword']);
        $config['per_page'] = 10;

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $data['start'] = $start;
        $data['from_row'] = 1 + $start;
        $data['to_row'] = $this->users_model->count_data_user($config['per_page'], $data['start'], $data['keyword']) + $start;
        $data['total_rows'] = $config['total_rows'];
        $data['users'] = $this->users_model->get_data_user($config['per_page'], $data['start'], $data['keyword'])->result();

		$email = $this->session->userdata('email');
		$data['user'] = $get_user = $this->users_model->get('users', 'email', $email);
        $data['role'] = $get_role = $this->session->userdata('role_id');
		// $data['role'] = $get_role = $this->users_model->get('user_role', 'id_role', $get_user->role_id);
        // $data['username'] = $this->lib_jwt->getJWT('Token')->username;

		$this->load->view('partials/header');
		$this->load->view('partials/sidebar', $data);
		$this->load->view('admin/user', $data);
		$this->load->view('partials/footer');
	}
}
