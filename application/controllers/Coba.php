<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('partials1/header');
		$this->load->view('test');
		$this->load->view('partials1/footer');
	}

	public function test2()
	{
		$this->load->view('partials1/header');
		$this->load->view('test2');
		$this->load->view('partials1/footer');
	}
}
