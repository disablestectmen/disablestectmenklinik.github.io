<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_profile extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model', 'users_model');
	}

	public function index()
	{
		$data['title'] = "My Profile";
		//get from session
		$email = $this->session->userdata('email');
		$data['user'] = $get_user = $this->users_model->get('users', 'email', $email);
		$data['role'] = $get_role = $this->session->userdata('role_id');
		$this->load->view('partials/header', $data);
		$this->load->view('partials/sidebar', $data);
		$this->load->view('users/user_profile');
		$this->load->view('partials/footer');
	}

	public function edit()
	{

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required|trim');
		$this->form_validation->set_rules('phone', 'Nomor Hp', 'required|trim|min_length[10]|max_length[13]');
		if ($this->form_validation->run() == false) {
			$this->index();
		} else {
			$name = $this->input->post('name');
			$nama_perusahaan = $this->input->post('nama_perusahaan');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');

			/** cek file gambar upload */
			$upload_image = $_FILES['image']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '2048';
				// $config['max_width'] = '1024';
				// $config['max_height'] = '768';
				$config['upload_path'] = './assets/uploads/img/profile';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$get_user = $this->users_model->get('users', 'email', $email);
					$image_lama = base64_decode($get_user->image);
					if ($image_lama !== '1.png') {
						unlink(FCPATH . './assets/uploads/img/profile/' . $image_lama);
					}

					$new_image = $this->upload->data('file_name');
				} else {
					$new_image = '';
					echo $this->upload->display_errors();
				}
			}

			$data = [
				'name' => $name,
				'nama_perusahaan' => $nama_perusahaan,
				'phone' => $phone,
				'image' => base64_encode($new_image)
			];

			$where = [
				'email' => $email
			];

			$this->users_model->update('users', $where, $data);
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success" role="alert">
				Congratulation! your profile has been updated!
		  		</div>'
			);
			redirect(base_url('user_profile'), 'refresh');
		}
	}

	public function change_password()
	{
		$data['title'] = "Change Password";
		//get dari session
		$email = $this->session->userdata('email');
		$data['user'] = $get_user = $this->users_model->get('users', 'email', $email);
		$data['role'] = $get_role = $this->session->userdata('role_id');
		$this->load->view('partials/header', $data);
		$this->load->view('partials/sidebar', $data);
		$this->load->view('users/change_password', $data);
		$this->load->view('partials/footer');
	}

	public function edit_password()
	{
		$this->form_validation->set_rules('password_lama', 'Password lama', 'required|trim');
		$this->form_validation->set_rules('password_baru', 'Password baru', 'required|trim[5]|matches[password_konfirmasi]');
		$this->form_validation->set_rules('password_konfirmasi', 'Konfirmasi Password', 'required|trim[5]|matches[password_baru]');

		$email = $this->session->userdata('email');
		$data['user'] = $get_user = $this->users_model->get('users', 'email', $email);
		if ($this->form_validation->run() == false) {
			$this->change_password();
		} else {
			$password_lama = $this->input->post('password_lama');
			$password_baru = $this->input->post('password_baru');
			if (!password_verify($password_lama, $get_user->password)) {

				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-danger" role="alert">
					Password lama salah!
					  </div>'
				);
				redirect('change_password', 'refresh');
			} else {

				if ($password_lama == $password_baru) {

					$this->session->set_flashdata(
						'message',
						'<div class="alert alert-danger" role="alert">
						Password baru tidak boleh sama dengan password lama!
						  </div>'
					);
					redirect('change_password', 'refresh');
				}else{
					$password_baru = password_hash($this->input->post('password_baru'), PASSWORD_DEFAULT);
					
					$data = [
						'password' => $password_baru
					];

					$where = [
						'email' => $email
					];

					$this->users_model->update('users', $where, $data);
					
					$this->session->set_flashdata(
						'message',
						'<div class="alert alert-success" role="alert">
						Password berhasil diubah!
						  </div>'
					);
					redirect('change_password', 'refresh');
				}

			}
		}
	}
}
