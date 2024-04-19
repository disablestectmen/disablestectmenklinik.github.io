<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->login_check();
	}

	// private function login_check()
	// {
	// 	if (empty($this->lib_jwt->getJWT('Token'))) {
	// 	  $jwt = array(
	// 		'status' => 'error3'
	// 	  );
	// 	  $this->lib_jwt->setJWT($jwt, 'error');
	// 	  redirect(base_url('auth'));
	// 	}
	// }

	private function login_check(){
		if(empty($this->session->userdata('email'))){
			redirect('auth', 'refresh');
		}
	}
}
