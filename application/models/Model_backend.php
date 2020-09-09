<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_backend extends CI_Model {

	public function login($username,$password){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where(array('username' => $username, 
							   'password' => SHA1($password)));
		$query = $this->db->get();
		return $query->row();
		}	

	public function akun(){
		$this->db->select('*');
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result();
		}	

	public function list_rombongan()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->order_by('id_rombongan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function list_individu()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->order_by('id_individu', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail_rombongan($id_rombongan)
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->order_by('id_rombongan', 'DESC');
		$this->db->where('id_rombongan', $id_rombongan);
		$query = $this->db->get();
		return $query->row();
	}

	public function detail_individu($id_individu)
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->order_by('id_individu', 'DESC');
		$this->db->where('id_individu', $id_individu);
		$query = $this->db->get();
		return $query->row();
	}

	public function hapus_rombongan($data) {
		$this->db->where('id_rombongan', $data['id_rombongan']);
		$this->db->delete('rombongan', $data);
	}

	public function detail_user($id_user)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by('id_user', 'DESC');
		$this->db->where('id_user', $id_user);
		$query = $this->db->get();
		return $query->row();
	}

	public function edit_user($data) {
		$this->db->where('id_user', $data['id_user']);
		$this->db->update('user', $data);
	}

	public function hapus_user($data) {
		$this->db->where('id_user', $data['id_user']);
		$this->db->delete('user', $data);
	}

	public function hapus_individu($data) {
		$this->db->where('id_individu', $data['id_individu']);
		$this->db->delete('individu', $data);
	}

	public function wilayah($id_wilayah)
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->where('wilayah', $id_wilayah);
		$query = $this->db->get();
		return $query->result();
	}

	public function index_lokasi()
		{
			$this->db->select('*');
			$this->db->from('lokasi_buku_tamu');
			$this->db->order_by('id_lokasi', 'DESC');
			$query = $this->db->get();
			return $query->result();
		}	

	public function sub_wilayah($id_wilayah)
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->where('sub_lokasi', $id_wilayah);
		$query = $this->db->get();
		return $query->result();
	}


	public function wilayah_rombongan($id_wilayah)
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->where('wilayah', $id_wilayah);
		$query = $this->db->get();
		return $query->result();
	}

	public function sub_wilayah_rombongan($id_wilayah)
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->where('sub_lokasi', $id_wilayah);
		$query = $this->db->get();
		return $query->result();
	}


		public function cari_data_seluruh()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->order_by('id_individu', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$query = $this->db->get();
		return $query->result();
	}


		public function filter_wilayah($id_wilayah)
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->order_by('id_individu', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('wilayah', $id_wilayah);
		$query = $this->db->get();
		return $query->result();
	}

		public function filter_sub_wilayah($id_wilayah)
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->order_by('id_individu', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('sub_lokasi', $id_wilayah);
		$query = $this->db->get();
		return $query->result();
	}


	
	public function cari_data_rombongan_seluruh()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->order_by('id_rombongan', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$query = $this->db->get();
		return $query->result();
	}

		public function filter_wilayah_rombongan($id_wilayah)
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->order_by('id_rombongan', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('wilayah', $id_wilayah);
		$query = $this->db->get();
		return $query->result();
	}

		public function filter_sub_wilayah_rombongan($id_wilayah)
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->order_by('id_rombongan', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('sub_lokasi', $id_wilayah);
		$query = $this->db->get();
		return $query->result();
	}


	function report_filter()
	{

		if ($this->input->post('wilayah')!='all') {
			$this->db->select('*');
			if ($_POST['jenis']!='all') {
				$this->db->from($this->input->post("jenis"));
			}else{
			$this->db->from('individu','rombongan');
				}
			$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
			$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
				// if ($this->input->post('wilayah')!='all') {
					$this->db->where('wilayah',$this->input->post('wilayah') );
				// }
			$query = $this->db->get();
			return $query->result();
		}

		if ($this->input->post('jenis')==='all') {
			$hasil=$this->db->query("
			SELECT email,no_telp,instansi,tanggal_kunjungan,nama_pengunjung,wilayah,sub_lokasi,no_kunjungan,jenis_kelamin,''AS pria,''AS wanita,pekerjaan,pendidikan_terakhir FROM individu WHERE `tanggal_kunjungan` >= '" . $this->input->post('tgl_awal') . "' AND `tanggal_kunjungan` <= '" . $this->input->post('tgl_akhir') . "'
			UNION
			SELECT email,no_telp,nama_instansi,tanggal_kunjungan,nama_ketua,wilayah,sub_lokasi,no_kunjungan,'',pria,wanita,'','' FROM rombongan WHERE `tanggal_kunjungan` >= '" . $this->input->post('tgl_awal') . "' AND `tanggal_kunjungan` <= '" . $this->input->post('tgl_akhir') . "'
			");
			return $hasil->result();


		
		}elseif($this->input->post('jenis')!=='all'){
			$this->db->select('*');
			$this->db->from($this->input->post('jenis'));
			$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
			$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
				
				if ($this->input->post('profesi')!='all') {
					$this->db->where('pekerjaan',$this->input->post('profesi') );
				}

				if ($this->input->post('jk')!='all') {
					$this->db->where('jenis_kelamin',$this->input->post('jk') );
				}

				if ($this->input->post('wilayah')!='all') {
					$this->db->where('wilayah',$this->input->post('wilayah') );
				}

			$query = $this->db->get();
			return $query->result();
		}		
	}

	public function tambah_user($data){
		$this->db->insert('user', $data);
	}



}

/* End of file Model_backend.php */
/* Location: ./application/models/Model_backend.php */