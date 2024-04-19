<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekap extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rekap_model', 'rekap_model');
        $this->load->model('Users_model', 'users_model');
    }

    public function rekap_product_list()
    {
        $data['title'] = "Rekap Product List";
        //get from session
        $email = $this->session->userdata('email');
        $data['user'] = $get_user = $this->users_model->get('users', 'email', $email);
        $data['role'] = $get_role = $this->session->userdata('role_id');
        $this->load->view('partials/header', $data);
        $this->load->view('partials/sidebar', $data);
        $this->load->view('rekap/rekap_product_list', $data);
        $this->load->view('partials/footer');
    }



    public function rekap_pasien_list()
    {
        $data['title'] = "Rekap Pasien List";
        //get from session
        $email = $this->session->userdata('email');
		$data['user'] = $get_user = $this->users_model->get('users', 'email', $email);
		$data['role'] = $get_role = $this->session->userdata('role_id');
        $this->load->view('partials/header', $data);
        $this->load->view('partials/sidebar', $data);
        $this->load->view('rekap/rekap_pasien_list', $data);
        $this->load->view('partials/footer');
    }

    public function rekap_medis_list()
    {
        $data['title'] = "Rekap Medis List";
        //get from session
        $email = $this->session->userdata('email');
		$data['user'] = $get_user = $this->users_model->get('users', 'email', $email);
		$data['role'] = $get_role = $this->session->userdata('role_id');
        $this->load->view('partials/header', $data);
        $this->load->view('partials/sidebar', $data);
        $this->load->view('rekap/rekap_medis_list', $data);
        $this->load->view('partials/footer');
    }
}
