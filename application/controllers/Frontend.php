<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_frontend');
		$this->load->library('session_wilayah');
		$this->aunt_login->cek_login_awal();
		
        // $this->session_wilayah->cek_wilayah();
	}

	public function index()
	{

		$lokasi = $this->model_frontend->index_lokasi();

		$data = array('lokasi' => $lokasi , );

		$this->load->view('frontend/index', $data, FALSE);

	}

	public function dashboard()
	{
		$this->load->view('dashboard');
	}

	public function cek_lokasi()
	{
		$this->form_validation->set_rules('kepustakaan', 'kepustakaan','required',
				array('required' => '%s Harus dipilih'));

		if ($this->form_validation->run()) {
			$kepustakaan = $this->input->post('kepustakaan');
			$this->session_wilayah->kepustakaan($kepustakaan);
			var_dump($kepustakaan);

			$sub_lokasi =  $this->input->post('sub_lokasi');
			$this->session_wilayah->sub_lokasi($sub_lokasi);
			// var_dump($sub_lokasi);

		}


		$this->individu();
	}

	public function individu()
	{		
		
		$x['no_kunjungan']=$this->model_frontend->get_no_pengunjung();

		$data = array(
					  'kepustakaan' => $this->session->userdata('id_lokasi'),
					  'sub_lokasi' => $this->session->userdata('sub_lokasi'),
					  'x' => $x,
					  'isi'	  => 'frontend/individu' 
					);

		$this->load->view('frontend/templates/wrapper', $data, FALSE);	
	}

	public function simpan_individu()
	{
		$i = $this->input;
			$data = array(	
				'status_keanggotaan'	=> $i->post('status_keanggotaan'),
				'nama_pengunjung'		=> $i->post('nama_pengunjung'),
				'pekerjaan'				=> $i->post('pekerjaan'),
				'pendidikan_terakhir'	=> $i->post('pendidikan_terakhir'),
				'instansi'				=> $i->post('instansi'),
				'alamat_instansi'		=> $i->post('alamat_instansi'),
				'alamat'				=> $i->post('alamat')	,
				'jenis_kelamin'			=> $i->post('jenis_kelamin'),
				'wilayah'				=> $i->post('wilayah'),
				'jenis_layanan'			=> $i->post('jenis_layanan'),
				'no_kunjungan'			=> $i->post('no_kunjungan'),
				'sub_lokasi'			=> $i->post('sub_lokasi')
				'email'			=> $i->post('email')
				'no_telp'			=> $i->post('no_telp')
		);
			$this->model_frontend->tambah_individu($data);
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
			redirect(base_url('frontend/individu'),'refresh');	
	}

	public function rombongan()
	{
		$x['no_kunjungan']=$this->model_frontend->get_no_pengunjung();
	
		$data = array( 'kepustakaan' => $this->session->userdata('id_lokasi'),
			  'sub_lokasi' => $this->session->userdata('sub_lokasi'),
					 	'x'	=> $x,
					  'isi'	  => 'frontend/rombongan' );

		$this->load->view('frontend/templates/wrapper', $data, FALSE);	
	}


	public function simpan_rombongan()
	{
		$i = $this->input;
			$data = array(	
				'nama_ketua'		=> $i->post('nama_ketua'),
				'nomor_ketua'		=> $i->post('nomor_ketua'),
				'nama_instansi'		=> $i->post('nama_instansi'),
				'alamat_instansi'	=> $i->post('alamat_instansi'),
				'nomor_instansi'	=> $i->post('nomor_instansi'),
				'email_instansi'	=> $i->post('email_instansi'),
				'jumlah_personil_instansi'	=> $i->post('jumlah_personil_instansi'),
				'pria'				=> $i->post('pria'),
				'wanita'			=> $i->post('wanita'),
				'pns'				=> $i->post('pns'),
				'swasta'			=> $i->post('swasta'),
				'peneliti'			=> $i->post('peneliti'),
				'guru'				=> $i->post('guru'),
				'dosen'				=> $i->post('dosen'),
				'pensiunan'			=> $i->post('pensiunan'),
				'tni'				=> $i->post('tni'),
				'wiraswasta'		=> $i->post('wiraswasta'),
				'pelajar'			=> $i->post('pelajar'),
				'mahasiswa'			=> $i->post('mahasiswa'),
				'lainnya'			=> $i->post('lainnya'),
				'sd'				=> $i->post('sd'),
				'smp'				=> $i->post('smp'),
				'sma'				=> $i->post('sma'),
				'd1'				=> $i->post('d1'),
				'd2'				=> $i->post('d2'),
				'd3'				=> $i->post('d3'),
				's1'				=> $i->post('s1'),
				's2'				=> $i->post('s2'),
				's3'				=> $i->post('s3'),
				'wilayah'			=> $i->post('wilayah'),
				'jenis_layanan'		=> $i->post('jenis_layanan'),
				'no_kunjungan'		=> $i->post('no_kunjungan'),
				'sub_lokasi'		=> $i->post('sub_lokasi')
				'email'		=> $i->post('email')
				'no_telp'		=> $i->post('sub_lokasi')
		);
			$this->model_frontend->tambah_rombongan($data);
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
			redirect(base_url('frontend/rombongan'),'refresh');	
			// echo "aws";
	}

	public function ajaxLokasi()
	{
		$id = $this->input->post('id_lokasi');
		$query = $this->db->query('SELECT sub_lokasi.id_lokasi,
										  sub_lokasi.id_sub_lokasi,
										  sub_lokasi.nama_sub_lokasi
								   			FROM sub_lokasi 
								   				WHERE sub_lokasi.id_lokasi = ? ',array($id));
		$result = array();

		if( $query->num_rows() > 0 )
		{
			// ambil data dari var $query
			$fetch = $query->result_array();

			$no = 0;
			// result jika dataa 
			foreach( $fetch as $row ) :
				$result[$no]['id'] = $row['id_lokasi'];
				$result[$no]['sub_id'] = $row['id_sub_lokasi'];
				$result[$no++]['name'] = $row['nama_sub_lokasi'];
			endforeach;

		}

		// result
		echo json_encode($result);

	}

	function keluar_wilayah()
	{
		$this->session_wilayah->logout();
	}

	function editor()
	{
		$this->load->view('frontend/hello');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */

