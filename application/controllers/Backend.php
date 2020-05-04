<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_backend');
		$this->load->library('aunt_login');
		// $this->load->library('pdf');
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
			$this->aunt_login->login($username,$password);
		}

		$this->load->view('backend/login');
	}

	public function dashboard()
	{				
			$individu = $this->db->count_all('individu');
			$rombongan = $this->db->count_all('rombongan');

			$data = array('title' => 'Dashboard' ,
						  'individu' => $individu,
						  'rombongan' => $rombongan,
						  'isi'	  => 'backend/dashboard' );

			$this->load->view('backend/templates/wrapper', $data, FALSE);
	}

	public function tambah_user()
	{
		$lokasi = $this->model_backend->index_lokasi();

		$valid = $this->form_validation;
		
		$valid->set_rules('nama_user', 'user','required',
				array('required'	=> '%s Harus diisi'));
		
		if ($valid->run()===FALSE) {
		
		$data = array('title'	=>  'user',
					 'lokasi' 	=>  $lokasi,
					 'isi'		=>	'backend/pengaturan/add');
	
		$this->load->view('backend/templates/wrapper', $data, FALSE);
		
		}else{
			$i = $this->input;
			$data = array(	
							'username'	=> $i->post('username'),
							'password'	=> SHA1($i->post('password')),
							'nama_user'	=> $i->post('nama_user'),
							'level'		=> $i->post('level'),
							'lokasi'	=> $i->post('lokasi')
		);
			$this->model_backend->tambah_user($data);
			$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan');
			redirect(base_url('backend/pengaturan'),'refresh');	
		}
	}

	public function hapus_user($id_user)
	{
			$user = $this->model_backend->detail_user($id_user);
			$data = array('id_user' => $id_user);
			$this->model_backend->hapus_user($data);
			$this->session->set_flashdata('success', 'Data berhasil Dihapus');
			redirect(base_url('backend/pengaturan'),'refresh');	
	}

	public function laporan()
	{

		$lokasi = $this->model_frontend->index_lokasi();

		$data = array('title' => 'Laporan' ,
					  'lokasi' => $lokasi,
					  'isi'	  => 'backend/laporan/index'
					   );
		$this->load->view('backend/templates/wrapper', $data, FALSE);
	}

	public function list_rombongan()
	{
		$list_rombongan = $this->model_backend->list_rombongan();

		$data = array('title' => 'List Rombongan' ,
					  'rombongan'  => $list_rombongan,		  
					  'isi'	  => 'backend/rombongan/index' );

		$this->load->view('backend/templates/wrapper', $data, FALSE);
	}

	public function hapus_rombongan($id_rombongan)
	{
			$rombongan = $this->model_backend->detail_rombongan($id_rombongan);
			$data = array('id_rombongan' => $id_rombongan);
			$this->model_backend->hapus_rombongan($data);
			$this->session->set_flashdata('success', 'Data berhasil Dihapus');
			redirect(base_url('backend/list_rombongan'),'refresh');	
	}

	public function list_individu()
	{
		$list_individu = $this->model_backend->list_individu();

		$data = array('title' => 'List Individu' ,
					  'individu'  => $list_individu,
					  'isi'	  => 'backend/individu/index' );

		$this->load->view('backend/templates/wrapper', $data, FALSE);

	}

	public function hapus_individu($id_individu)
	{
			$individu = $this->model_backend->detail_individu($id_individu);
			$data = array('id_individu' => $id_individu);
			$this->model_backend->hapus_individu($data);
			$this->session->set_flashdata('success', 'Data berhasil Dihapus');
			redirect(base_url('backend/list_individu'),'refresh');	
	}

// Individu
	public function kawasan($id_wilayah)
	{
		$kawasan = $this->model_backend->wilayah($id_wilayah);
		$data = array('title' => 'Kawasan',
					  'wilayah' => $kawasan, 
					  'isi' => 'backend/individu/wilayah' );
		$this->load->view('backend/templates/wrapper', $data, FALSE);
	}

	public function sub_kawasan($id_wilayah)
	{
		$kawasan = $this->model_backend->sub_wilayah($id_wilayah);
		$data = array('title' => 'Kawasan',
					  'wilayah' => $kawasan, 
					  'isi' => 'backend/individu/wilayah' );
		$this->load->view('backend/templates/wrapper', $data, FALSE);
	}

	public function cari_kawasan_seluruh()
	{
		$cari = $this->model_backend->cari_data_seluruh();
		$data = array('title'=> 'Hasil Filter Data',
					  'isi' => 'backend/individu/hasil' ,
					  'individu' => $cari );

		$this->load->view('backend/templates/wrapper', $data, FALSE);
	}

	public function cari_kawasan($id_wilayah)
	{
		$cari = $this->model_backend->filter_wilayah($id_wilayah);
		$data = array('title'=> 'Hasil Filter Data',
					  'isi' => 'backend/individu/hasil' ,
					  'individu' => $cari );

		$this->load->view('backend/templates/wrapper', $data, FALSE);
	}

	public function cari_sub_kawasan($id_wilayah)
	{
		$cari = $this->model_backend->filter_sub_wilayah($id_wilayah);
		$data = array('title'=> 'Hasil Filter Data',
					  'isi' => 'backend/individu/hasil' ,
					  'individu' => $cari );

		$this->load->view('backend/templates/wrapper', $data, FALSE);
	}

// Rombongan
	public function kawasan_rombongan($id_wilayah)
	{
		$kawasan = $this->model_backend->wilayah_rombongan($id_wilayah);
		$data = array('title' => 'Kawasan',
					  'wilayah' => $kawasan, 
					  'isi' => 'backend/rombongan/wilayah' );
		$this->load->view('backend/templates/wrapper', $data, FALSE);
	}

	public function sub_kawasan_rombongan($id_wilayah)
	{
		$kawasan = $this->model_backend->sub_wilayah_rombongan($id_wilayah);
		$data = array('title' => 'Kawasan',
					  'wilayah' => $kawasan, 
					  'isi' => 'backend/rombongan/wilayah' );
		$this->load->view('backend/templates/wrapper', $data, FALSE);
	}

	public function cari_kawasan_rombongan_seluruh()
	{
		$cari = $this->model_backend->cari_data_seluruh();
		$data = array('title'=> 'Hasil Filter Data',
					  'isi' => 'backend/rombongan/hasil' ,
					  'rombongan' => $cari );

		$this->load->view('backend/templates/wrapper', $data, FALSE);
	}

	public function cari_kawasan_rombongan($id_wilayah)
	{
		$cari = $this->model_backend->filter_wilayah_rombongan($id_wilayah);
		$data = array('title'=> 'Hasil Filter Data',
					  'isi' => 'backend/rombongan/hasil' ,
					  'rombongan' => $cari );

		$this->load->view('backend/templates/wrapper', $data, FALSE);
	}

	public function cari_sub_kawasan_rombongan($id_wilayah)
	{
		$cari = $this->model_backend->filter_sub_wilayah_rombongan($id_wilayah);
		$data = array('title'=> 'Hasil Filter Data',
					  'isi' => 'backend/rombongan/hasil' ,
					  'rombongan' => $cari );

		$this->load->view('backend/templates/wrapper', $data, FALSE);
	}

// Cetak
	public function report_filter()
	{
		$filterdata = $this->model_backend->report_filter();
		$lokasi = $this->model_frontend->index_lokasi();
		$data = array('title' =>  'Laporan', 
					  'filter' => $filterdata,
					  'lokasi' => $lokasi,
					  'isi'	  => 'backend/laporan/laporan_filter',
					   );

		$this->load->view('backend/templates/wrapper', $data, FALSE);	

		
		
	}
// Penngaturan
	public function pengaturan()
	{
		$setting = $this->model_backend->akun();

		$data = array(	'title' => 'Pengaturan',
						'akun' => $setting,
						'isi' => 'backend/pengaturan/index' , );

		$this->load->view('backend/templates/wrapper', $data, FALSE);
	}

	public function pengaturan_sandi($id_user)
	{
		$setting = $this->model_backend->akun();


		$data = array(	'title' => 'Pengaturan',
						'akun' => $setting,
						'isi' => 'backend/pengaturan/pengaturan_sandi' , );

		$this->load->view('backend/templates/wrapper', $data, FALSE);
	}

	public function simpan_pengaturan($id_user)
	{
		
		$user = $this->model_backend->detail_user($id_user);
		$i = $this->input;
			$data = array(	
				'id_user'			=> $id_user,
				'nama_user'			=> $i->post('nama_user'),
				'username'			=> $i->post('username'),
				'password'			=> SHA1($i->post('password')),
		);
			$this->model_backend->edit_user($data);
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
			$this->session->set_userdata('nama_user',$i->post('nama_user'));
			$this->session->set_userdata('username',$i->post('username'));
			$this->session->set_userdata('password',$i->post('password'));
			redirect(base_url('Backend/pengaturan/'.$this->session->userdata('id_user')),'refresh');	
	}

	function keluar()
	{
		$this->aunt_login->logout();
	}


}

/* End of file backend.php */
/* Location: ./application/controllers/backend.php */