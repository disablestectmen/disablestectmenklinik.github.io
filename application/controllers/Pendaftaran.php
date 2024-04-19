<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftaran_model', 'pendaftaran_model');
        $this->load->model('Users_model', 'users_model');
    }

    public function form_pendaftaran()
    {
        $data['title'] = "Form Pendaftaran";
        //get from session
        $email = $this->session->userdata('email');
        $data['user'] = $get_user = $this->users_model->get('users', 'email', $email);
        $data['role'] = $get_role = $this->session->userdata('role_id');
        $this->load->view('partials/header', $data);
        $this->load->view('partials/sidebar', $data);
        $this->load->view('pendaftaran/form_pendaftaran', $data);
        $this->load->view('partials/footer');
    }

    public function tambah()
    {
        // tambah data form data nanti disini
    }
}
