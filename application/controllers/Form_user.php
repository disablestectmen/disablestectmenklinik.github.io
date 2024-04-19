<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_user extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/sidebar');
		$this->load->view('users/form_user');
		$this->load->view('partials/footer');
	}
}
