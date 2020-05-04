<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ekspor extends CI_Model {

	public function view()
	{
		$this->db->select('*');
		$this->db->from('penjualan','produk','supplier');
		$this->db->join('produk', 'produk.id_produk = penjualan.id_barang', 'left');
		// $this->db->join('supplier', 'supplier.id_supplier = penjualan.id_supplier', 'left');
		$this->db->order_by('id_penjualan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function keluar()
	{
		$this->db->select('*');
		$this->db->from('penjualan','produk');
		$this->db->join('produk', 'produk.id_produk = penjualan.id_barang', 'left');
		$this->db->order_by('id_penjualan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function masuk()
	{
		$this->db->select('*');
		$this->db->from('produk','supplier', 'kode_supplier');
		$this->db->join('supplier', 'supplier.id_supplier = produk.id_supplier', 'left');
		$this->db->join('kode_supplier', 'kode_supplier.id_kode = produk.id_kode_supplier', 'left');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Model_ekspor.php */
/* Location: ./application/models/Model_ekspor.php */