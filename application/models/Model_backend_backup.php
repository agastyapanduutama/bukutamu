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

	public function hapus_individu($data) {
		$this->db->where('id_individu', $data['id_individu']);
		$this->db->delete('individu', $data);
	}

	

	public function lok_bandung()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->where('wilayah', 1);
		$this->db->order_by('id_individu', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

		public function lok_cibinong()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->where('wilayah', '3');
		$this->db->order_by('id_individu', 'desc');
		$query = $this->db->get();
		return $query->result();
	}


		public function lok_cibinong_zoologi()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->where('sub_lokasi', '1');
		$this->db->order_by('id_individu', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

		public function lok_cibinong_bootani()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->where('sub_lokasi', '2');
		$this->db->order_by('id_individu', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

		public function lok_cibinong_bioteknologi()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->where('sub_lokasi', '3');
		$this->db->order_by('id_individu', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

		public function lok_cibinong_limnologi()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->where('sub_lokasi', '4');
		$this->db->order_by('id_individu', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function lok_cibinong_biomaterial()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->where('sub_lokasi', '5');
		$this->db->order_by('id_individu', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

		public function lok_bogor()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->where('wilayah', '4');
		$this->db->order_by('id_individu', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

		public function lok_serpong()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->where('wilayah', '5');
		$this->db->order_by('id_individu', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

		public function lok_jakarta()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->where('wilayah', '2');
		$this->db->order_by('id_individu', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function lok_rombongan_bandung()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->where('wilayah', 1);
		$this->db->order_by('id_rombongan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

		public function lok_rombongan_cibinong()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->where('wilayah', '3');
		$this->db->order_by('id_rombongan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}


		public function lok_rombongan_cibinong_zoologi()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->where('sub_lokasi', '1');
		$this->db->order_by('id_rombongan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

		public function lok_rombongan_cibinong_bootani()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->where('sub_lokasi', '2');
		$this->db->order_by('id_rombongan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

		public function lok_rombongan_cibinong_bioteknologi()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->where('sub_lokasi', '3');
		$this->db->order_by('id_rombongan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

		public function lok_rombongan_cibinong_limnologi()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->where('sub_lokasi', '4');
		$this->db->order_by('id_rombongan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

		public function lok_rombongan_cibinong_biomaterial()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->where('sub_lokasi', '5');
		$this->db->order_by('id_rombongan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

		public function lok_rombongan_bogor()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->where('wilayah', '4');
		$this->db->order_by('id_rombongan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

		public function lok_rombongan_serpong()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->where('wilayah', '5');
		$this->db->order_by('id_rombongan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

		public function lok_rombongan_jakarta()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->where('wilayah', '2');
		$this->db->order_by('id_rombongan', 'desc');
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

	

		public function cari_data_bandung()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->order_by('id_individu', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('wilayah','1');
		$query = $this->db->get();
		return $query->result();
	}

	public function cari_data_jakarta()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->order_by('id_individu', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('wilayah','2');
		$query = $this->db->get();
		return $query->result();
	}

	public function cari_data_cibinong()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->order_by('id_individu', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('wilayah','3');
		$query = $this->db->get();
		return $query->result();
	}

	public function cari_data_zoologi()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->order_by('id_individu', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('sub_lokasi','1');
		$query = $this->db->get();
		return $query->result();
	}

	public function cari_data_bootani()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->order_by('id_individu', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('sub_lokasi','2');
		$query = $this->db->get();
		return $query->result();
	}

	public function cari_data_bioteknologi()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->order_by('id_individu', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('sub_lokasi','3');
		$query = $this->db->get();
		return $query->result();
	}

	public function cari_data_limnologi()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->order_by('id_individu', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('sub_lokasi','4');
		$query = $this->db->get();
		return $query->result();
	}

	public function cari_data_biomaterial()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->order_by('id_individu', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('sub_lokasi','5');
		$query = $this->db->get();
		return $query->result();
	}

	public function cari_data_bogor()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->order_by('id_individu', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('wilayah','4');
		$query = $this->db->get();
		return $query->result();
	}

	public function cari_data_serpong()
	{
		$this->db->select('*');
		$this->db->from('individu');
		$this->db->order_by('id_individu', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('wilayah','5');
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

	

		public function cari_data_rombongan_bandung()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->order_by('id_rombongan', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('wilayah','1');
		$query = $this->db->get();
		return $query->result();
	}

	public function cari_data_rombongan_jakarta()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->order_by('id_rombongan', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('wilayah','2');
		$query = $this->db->get();
		return $query->result();
	}

	public function cari_data_rombongan_cibinong()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->order_by('id_rombongan', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('wilayah','3');
		$query = $this->db->get();
		return $query->result();
	}

	public function cari_data_rombongan_zoologi()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->order_by('id_rombongan', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('sub_lokasi','1');
		$query = $this->db->get();
		return $query->result();
	}

	public function cari_data_rombongan_bootani()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->order_by('id_rombongan', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('sub_lokasi','2');
		$query = $this->db->get();
		return $query->result();
	}

	public function cari_data_rombongan_bioteknologi()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->order_by('id_rombongan', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('sub_lokasi','3');
		$query = $this->db->get();
		return $query->result();
	}

	public function cari_data_rombongan_limnologi()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->order_by('id_rombongan', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('sub_lokasi','4');
		$query = $this->db->get();
		return $query->result();
	}

	public function cari_data_rombongan_biomaterial()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->order_by('id_rombongan', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('sub_lokasi','5');
		$query = $this->db->get();
		return $query->result();
	}

	public function cari_data_rombongan_bogor()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->order_by('id_rombongan', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('wilayah','4');
		$query = $this->db->get();
		return $query->result();
	}

	public function cari_data_rombongan_serpong()
	{
		$this->db->select('*');
		$this->db->from('rombongan');
		$this->db->order_by('id_rombongan', 'DESC');
		$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
		$this->db->where('wilayah','5');
		$query = $this->db->get();
		return $query->result();
	}

	function report_filter()
	{
		


		// if (($this->input->post("jenis")==='all') {
		// 	$hasil=$this->db->query("
		// 	SELECT tanggal_kunjungan,nama_pengunjung,wilayah,no_kunjungan,jenis_kelamin,''AS pria,''AS wanita,pekerjaan,pendidikan_terakhir FROM individu WHERE 
		// 	`tanggal_kunjungan` >= '" . $this->input->post('tgl_awal') . "' AND 
		// 	`tanggal_kunjungan` <= '" . $this->input->post('tgl_akhir') . "'
		// 	UNION
		// 	SELECT tanggal_kunjungan,nama_ketua,wilayah,no_kunjungan,'',pria,wanita,'','' FROM rombongan WHERE 
		// 	`tanggal_kunjungan` >= '" . $this->input->post('tgl_awal') . "' AND 
		// 	`tanggal_kunjungan` <= '" . $this->input->post('tgl_akhir') . "'
		// 	");
		// 	return $hasil->result();
		// }

		// $hasil=$this->db->query("
		// SELECT tanggal_kunjungan,nama_pengunjung,wilayah,no_kunjungan,jenis_kelamin,''AS pria,''AS wanita,pekerjaan,pendidikan_terakhir FROM individu WHERE 
		// `tanggal_kunjungan` >= '" . $this->input->post('tgl_awal') . "' AND 
		// `tanggal_kunjungan` <= '" . $this->input->post('tgl_akhir') . "'
		// UNION
		// SELECT tanggal_kunjungan,nama_ketua,wilayah,no_kunjungan,'',pria,wanita,'','' FROM rombongan WHERE 
		// `tanggal_kunjungan` >= '" . $this->input->post('tgl_awal') . "' AND 
		// `tanggal_kunjungan` <= '" . $this->input->post('tgl_akhir') . "'
		// ");

		if ($this->input->post('jenis')==='all') {
			$hasil=$this->db->query("
			SELECT tanggal_kunjungan,nama_pengunjung,wilayah,sub_lokasi,no_kunjungan,jenis_kelamin,''AS pria,''AS wanita,pekerjaan,pendidikan_terakhir FROM individu WHERE `tanggal_kunjungan` >= '" . $this->input->post('tgl_awal') . "' AND `tanggal_kunjungan` <= '" . $this->input->post('tgl_akhir') . "'
			UNION
			SELECT tanggal_kunjungan,nama_ketua,wilayah,sub_lokasi,no_kunjungan,'',pria,wanita,'','' FROM rombongan WHERE `tanggal_kunjungan` >= '" . $this->input->post('tgl_awal') . "' AND `tanggal_kunjungan` <= '" . $this->input->post('tgl_akhir') . "'
			");
			return $hasil->result();
		}else{
			$this->db->select('*');
			$this->db->from($this->input->post("jenis"));
			$this->db->where('tanggal_kunjungan >=',$this->input->post('tgl_awal'));
			$this->db->where('tanggal_kunjungan <=',$this->input->post('tgl_akhir'));
				if ($this->input->post('wilayah')==='all') {
			
				}else{
			$this->db->where('wilayah',$this->input->post('wilayah') );
				}
			$query = $this->db->get();
			return $query->result();
		}

		
	}

	public function caridata_nama(){

		$keyword = $this->input->post('keyword');
		$this->db->like('nama_pengunjung' , $keyword);
		return $this->db->get('individu')->result_array();

	}

}

/* End of file Model_backend.php */
/* Location: ./application/models/Model_backend.php */