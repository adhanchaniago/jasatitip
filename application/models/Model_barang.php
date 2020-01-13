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
	public function pesanan(){
		$query = $this->db->query("SELECT * from pesanan inner join users using(id_user)");
		return $query->result_array();
	}
	public function detail($id){
		$query = $this->db->query("SELECT * from pesanan inner join users using(id_user) where id_pesanan='".$id."'");
		return $query->row_array();
	}
	public function detailBarang($id){
		$query = $this->db->query("SELECT * from data_barang where id_barang='".$id."'");
		return $query->row_array();
	}
	public function detailbrg($id){
		$query = $this->db->query("SELECT * from detail_pesanan inner join data_barang using(id_barang) where id_pesanan='".$id."'");
		return $query->result_array();
	}
	public function keranjang	($id){
		$query = $this->db->query("SELECT * from pesanan where id_user='".$id."'");
		return $query->row_array();
	}
	public function brg	($id){
		$query = $this->db->query("SELECT * from data_barang where id_barang='".$id."'");
		return $query->row_array();
	}
	public function delete($id,$id1){
		$array = array('id_pesanan' => $id, 'id_barang' => $id1);
		$this->db->where($array);
		$this->db->delete('detail_pesanan');
	}
	public function update($id,$id1){
		$data = array ('jumlah_pesanan' => $this->input->post('jmlh'));
		$array = array('id_pesanan' => $id, 'id_barang' => $id1);
		$this->db->where($array);
		$this->db->update('detail_pesanan',$data);
	}
	public function update_pesan($id){
		$data = array ('alamat_tujuan' => $this->input->post('alamat'),'total' => $this->input->post('total') , 'status' =>"1");
		$this->db->where('id_user', $id);
		$this->db->update('pesanan',$data);
	}
	public function detailkeranjang	($id){
		$query = $this->db->query("SELECT * FROM pesanan where id_user='" . $id. "' and status ='0'");
		$row = $query->row_array();
		$data = $row['id_pesanan'];
		$query = $this->db->query("SELECT * from detail_pesanan inner join data_barang using(id_barang) where id_pesanan='".$data."'");
		return $query->result_array();
	}
	public function tambah($id){
		$user = $this->session->uid;
		$data=[
			'id_user' => $this->session->uid,
			'status' =>'0'
		];
		$this->db->insert('pesanan', $data);
		$query = $this->db->query("SELECT * FROM pesanan where id_user='" . $user . "'");
		$row = $query->row();
		$data1 = $row->id_pesanan;
		$total = $row->total;
		$data=[
			'id_pesanan' => $data1,
			'id_barang' => $id,
			'jumlah_pesanan' => $this->input->post('jumlah')
		];
		$this->db->insert('detail_pesanan', $data);
		$jumlah = $this->input->post('harga');
		$hasil = $total + ($jumlah * $this->input->post('jumlah'));
		$data = array ('total' => $hasil);
		$this->db->where('id_user', $id);
		$this->db->update( 'pesanan', $data );

	}
	public function simpan($id){
		$query = $this->db->query("SELECT * FROM data_barang where id_barang='" .$id. "'");
		$row = $query->row();
		$jumlah = $row->jumlah;
		$total = $jumlah + $this->input->post('jumlah');
		$data = array ('harga' => $this->input->post('harga'), 'jumlah' => $total);
		$this->db->where('id_barang', $id);
		$this->db->update( 'data_barang', $data );
	}
}
