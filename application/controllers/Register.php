<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Register_model', 'register_model');
		$this->load->library('form_validation');
	}

	// public function index()
	// {
	// 	$data['title'] = "Register";
	// 	$this->load->view('register/register', $data);
	// }

	public function registrasi()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|trim|min_length[5]|matches[password2]',
			[
				'matches' => 'Password dont matches!',
				'min_length' => 'Password too short'
			]
		);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim[5]|matches[password]');

		if ($this->form_validation->run() == false) {
			$data['title'] = "Register";
			$this->load->view('register/register', $data);
		} else {
			htmlspecialchars($name = $this->input->post('name', true));
			htmlspecialchars($email = $this->input->post('email', true));
			$image = 'default.jpg';
			$password = $this->input->post('password');

			$data = [
				'name' => $name,
				'email' => $email,
				'image' => 	$image,
				'password' => password_hash($password, PASSWORD_DEFAULT),
				'role_id' => 3,
				'is_active' => 1,
				'date_create' => time()
			];
			$this->register_model->insert('users', $data); // inject langsung ke db tanpa model
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success" role="alert">
				Congratulation! your account has been created. Please Login
		  		</div>'
			);
			redirect(base_url('auth'), 'refresh');
		}
	}
}
