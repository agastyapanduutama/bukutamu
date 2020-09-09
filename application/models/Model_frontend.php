<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_frontend extends CI_Model {


	public function tambah_individu($data)
		{
			$this->db->insert('individu', $data);
		}

	public function tambah_rombongan($data)
		{
			$this->db->insert('rombongan', $data);
		}		

	public function index_lokasi()
		{
			$this->db->select('*');
			$this->db->from('lokasi_buku_tamu');
			$this->db->order_by('id_lokasi', 'DESC');
			$query = $this->db->get();
			return $query->result();
		}	

    public function sub_lokasi()
        {
            $this->db->select('*');
            $this->db->from('sub_lokasi');
            $this->db->order_by('id_sub_lokasi', 'DESC');
            $query = $this->db->get();
            return $query->result();
        }   

	public function lokasi($kepustakaan){
		$this->db->select('*');
		$this->db->from('lokasi_buku_tamu');
		$this->db->where(array('id_lokasi' => $kepustakaan));
		$query = $this->db->get();
		return $query->row();
		}	

    // function sub_lokasi()


	function get_no_pengunjung(){
        $result = $this->db->query("SELECT MAX(RIGHT(no_kunjungan,4)) AS kbbd FROM individu");
        $kd = "";
        if($result->num_rows()>0){
            foreach($result->result() as $nilai){
                $tmp = ((int)$nilai->kbbd)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('dmy').$kd;
    }

    function get_no_rombongan(){
        $result = $this->db->query("SELECT MAX(RIGHT(no_kunjungan,4)) AS kbbd FROM rombongan");
        $kd = "";
        if($result->num_rows()>0){
            foreach($result->result() as $nilai){
                $tmp = ((int)$nilai->kbbd)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('dmy').$kd;
    }

}

/* End of file model_frontend.php */
/* Location: ./application/models/model_frontend.php */