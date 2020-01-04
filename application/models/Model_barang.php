<?php
class Model_barang extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	public function tampilkan(){
		$query = $this->db->query("SELECT * from data_barang");
		return $query->result_array();
	}
	public function listbrg(){
		$query = $this->db->query("SELECT * from data_barang");
		return $query->result_array();
	}
	public function detail($id){
		$query = $this->db->query("SELECT * from data_barang where id_barang='".$id."'");
		return $query->row_array();
	}
	public function keranjang	($id){
		$query = $this->db->query("SELECT * from pesanan where id_user='".$id."'");
		return $query->row_array();
	}
	public function detailkeranjang	($id){
		$query = $this->db->query("SELECT * FROM pesanan where id_user='" . $id. "' and status ='0'");
		$row = $query->row();
		$data = $row->id_pesanan;
		$query = $this->db->query("SELECT * from detail_pesanan inner join data_barang using(id_barang) where id_pesanan='".$data."'");
		return $query->result_array();
	}
	public function tambah($id){
		$data=[
			'id_user' => $this->session->uid,
			'status' =>'0'
		];
		$this->db->insert('pesanan', $data);
		$user = $this->session->uid;
		$query = $this->db->query("SELECT * FROM pesanan where id_user='" . $user . "'");
		$row = $query->row();
		$data1 = $row->id_pesanan;
		$data=[
			'id_pesanan' => $data1,
			'id_barang' => $id,
			'jumlah_pesanan' => $this->input->post('jumlah')
		];
		$this->db->insert('detail_pesanan', $data);
	}
}
