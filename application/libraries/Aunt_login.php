<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aunt_login
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
        $this->ci->load->model('model_backend');
	}

	public function login($username,$password)
	{
		$check = $this->ci->model_backend->login($username,$password);
		if ($check) {
			$id_user 	= $check->id_user;
			$nama_user	= $check->nama_user;
			$level		= $check->level;
			
			$this->ci->session->set_userdata('id_user',$id_user);
			$this->ci->session->set_userdata('nama_user',$nama_user);
			$this->ci->session->set_userdata('username',$username);
			$this->ci->session->set_userdata('level',$level);

			redirect(base_url('backend/dashboard'),'refresh');
		}else{
			$this->ci->session->set_flashdata('warning', 'Login salah, periksa username dan password');
			redirect(base_url('backend'),'refresh');
		}
	}

	public function new_session($username,$password)
	{
		$check = $this->ci->model_backend->login($username,$password);
		if ($check) {
			$id_user 	= $check->id_user;
			$nama_user	= $check->nama_user;
			$level		= $check->level;
			
			$this->ci->session->set_userdata('id_user',$id_user);
			$this->ci->session->set_userdata('nama_user',$nama_user);
			$this->ci->session->set_userdata('username',$username);
			$this->ci->session->set_userdata('level',$level);
		}
	}

	public function cek_login()
	{
		if ($this->ci->session->userdata('username') =="") {
			$this->ci->session->set_flashdata('warning', 'Anda harus login terlebih dahulu');
			redirect(base_url('backend'),'refresh');
		}
	}

	public function logout() 
	{
			$this->ci->session->unset_userdata('id_user');
			$this->ci->session->unset_userdata('nama_user');
			$this->ci->session->unset_userdata('username');
			$this->ci->session->set_flashdata('success', 'Anda sudah keluar');
			redirect(base_url('backend'),'refresh');


	}


	public function login_awal($username,$password)
	{
		$check = $this->ci->model_backend->login($username,$password);
		if ($check) {
			$id_user 	= $check->id_user;
			$nama_user	= $check->nama_user;
			$level		= $check->level;
			
			$this->ci->session->set_userdata('id_user',$id_user);
			$this->ci->session->set_userdata('nama_user',$nama_user);
			$this->ci->session->set_userdata('username',$username);
			$this->ci->session->set_userdata('level',$level);

			redirect(base_url('frontend/dashboard'),'refresh');
		}else{
			$this->ci->session->set_flashdata('warning', 'Login salah, periksa username dan password');
			redirect(base_url('login'),'refresh');
		}
	}

	public function cek_login_awal()
	{
		if ($this->ci->session->userdata('username') =="") {
			$this->ci->session->set_flashdata('warning', 'Anda harus login terlebih dahulu');
			redirect(base_url('login'),'refresh');
		}
	}
	
}

/* End of file Aunt_login.php */
/* Location: ./application/libraries/Aunt_login.php */
