<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Medis extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Medis_model', 'medis_model');
        $this->load->model('Users_model', 'users_model');
    }

    public function index()
    {
        // $data['title'] = "My Profile";
        // //get from session
        // $email = $this->session->userdata('email');
        // $data['user'] = $get_user = $this->products_model->get('users', 'email', $email);
        // $data['role'] = $get_role = $this->session->userdata('role_id');
        $this->load->view('partials/header');
        $this->load->view('partials/sidebar');
        $this->load->view('medis/medis_list');
        $this->load->view('partials/footer');
    }

    public function medis_list()
    {
        $data['title'] = "Data Medis";
        //get from session
        $email = $this->session->userdata('email');
        $data['user'] = $get_user = $this->users_model->get('users', 'email', $email);
        $data['role'] = $get_role = $this->session->userdata('role_id');
        $this->load->view('partials/header', $data);
        $this->load->view('partials/sidebar', $data);
        $this->load->view('medis/medis_list', $data);
        $this->load->view('partials/footer');
    }



    public function hasil_medis_list()
    {
        $data['title'] = "Hasil Medis";
        //get from session
        $email = $this->session->userdata('email');
		$data['user'] = $get_user = $this->users_model->get('users', 'email', $email);
		$data['role'] = $get_role = $this->session->userdata('role_id');
        $this->load->view('partials/header', $data);
        $this->load->view('partials/sidebar', $data);
        $this->load->view('medis/hasil_medis_list', $data);
        $this->load->view('partials/footer');
    }
}
