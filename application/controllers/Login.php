<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('aunt_login');
		$this->load->model('model_backend');
	}
	

	public function index()
	{
		$this->form_validation->set_rules('username', 'username','required',
				array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('password', 'password','required',
				array('required' => '%s Harus Diisi'));

		if ($this->form_validation->run()) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->aunt_login->login_awal($username,$password);
		}

		$this->load->view('login');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */