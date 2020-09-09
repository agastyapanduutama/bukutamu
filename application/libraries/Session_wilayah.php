<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Session_wilayah
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
        $this->ci->load->model('model_frontend');
	}

	public function kepustakaan($kepustakaan)
	{
		$check = $this->ci->model_frontend->lokasi($kepustakaan);
		if ($check) {
			$id_lokasi	 	= $check->id_lokasi;
			$kepustakaan	= $check->kepustakaan;
		// 
			$sub_lokasi = $this->ci->input->post('sub_lokasi');

			$this->ci->session->set_userdata('sub_lokasi', $sub_lokasi);
		// 
			$this->ci->session->set_userdata('id_lokasi',$id_lokasi);
			$this->ci->session->set_userdata('kepustakaan',$kepustakaan);

			redirect(base_url('frontend/individu'),'refresh');
		}else{
			$this->ci->session->set_flashdata('warning', 'Anda belum memilih lokasi');
			redirect(base_url('frontend'),'refresh');
		}
	}

	function sub_lokasi($sub_lokasi)
	{
		
		echo "hello world";
	}

	public function cek_wilayah()
	{
		if ($this->ci->session->userdata('kepustakaan') =="") {
			$this->ci->session->set_flashdata('warning', 'Anda belum memilih lokasi');
			redirect(base_url('frontend'),'refresh');
		}
	}

	public function logout() 
	{
			$this->ci->session->unset_userdata('sub_lokasi');
			$this->ci->session->unset_userdata('id_lokasi');
			$this->ci->session->unset_userdata('kepustakaan');
			$this->ci->session->set_flashdata('success', 'SILAKAN PILIH');
			redirect(base_url('frontend'),'refresh');
	}

	

}

/* End of file session_wilayah.php */
/* Location: ./application/libraries/session_wilayah.php */
