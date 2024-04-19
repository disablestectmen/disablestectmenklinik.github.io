<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model', 'login_model');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['title'] = "Login";
			$this->load->view('auth/login', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$get_user = $this->login_model->get('users', 'email', $email);
		$get_role = $this->login_model->get('user_role', 'id_role', $get_user->role_id);

		if ($get_user) {

			if ($get_user->is_active == 1) {

				if (password_verify($password, $get_user->password)) {
					$data = [
						'email' => $get_user->email,
						'role_id' => $get_role->role,
					];
					$this->session->set_userdata($data);
					redirect('dashboard');
				} else {
					$this->session->set_flashdata(
						'message',
						'<div class="position-relative top-0">
							<div class="alert alert-danger" role="alert">
								<span>
									Wrong password!
								</span>
						  </div>'
					);
					redirect(base_url('auth'), 'refresh');
				}
			} else {
				$this->session->set_flashdata(
					'message',
					'<div class="position-relative top-0">
						<div class="alert alert-danger" role="alert">
							<span>
								This email has not been activated!
							</span>
					 	</div>
					  </div>'
				);
				redirect(base_url('auth'), 'refresh');
			}
		} else {
			$this->session->set_flashdata(
				'message',
				'<div class="position-relative top-0">
					<div class="alert alert-danger" role="alert">
						<span>
							Email not registration!
						</span>
		  			</div>
				  </div>'			);
			redirect(base_url('auth'), 'refresh');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata(
			'message',
			'<div class="position-relative top-0">
				<div class="alert alert-danger" role="alert">
					<span>
						You have been logged out!
					</span>
			  	</div>
			</div>'

		);
		redirect(base_url('auth'), 'refresh');
	}
}
