<?php
class Model_barang extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	public function tampilkan(){
		$query = $this->db->query("SELECT * from data_barang");
		return $query->result_array();
	}
	public function tampil_brg($limit,$start){
		$query = $this->db->query("SELECT * from data_barang limit $start, $limit");
		return $query->result_array();
	}
	public function pesanan(){
		$query = $this->db->query("SELECT * from pesanan inner join users using(id_user)");
		return $query->result_array();
	}
	public function detail_pesanan($id){
		$query = $this->db->query("SELECT * from pesanan inner join users using(id_user) where id_pesanan='".$id."'");
		return $query->row_array();
	}
	public function detail_brg_pesanan($id){
		$query = $this->db->query("SELECT * from detail_pesanan inner join data_barang using(id_barang) where id_pesanan='".$id."'");
		return $query->result_array();
	}
	public function detail($id){
		$query = $this->db->query("SELECT * from pesanan inner join users using(id_user) where id_pesanan='".$id."'");
		return $query->row_array();
	}
	public function pesanan_user($id){
		$query = $this->db->query("SELECT * from pesanan where id_user='".$id."' and alamat_tujuan is not null");
		return $query->result_array();
	}
	public function detailBarang($id){
		$query = $this->db->query("SELECT * from data_barang where id_barang='".$id."'");
		return $query->row_array();
	}
	public function detailbrg($id){
		$query = $this->db->query("SELECT * from detail_pesanan inner join data_barang using(id_barang) where id_pesanan='".$id."'");
		return $query->result_array();
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
		$this->db->where('id_pesanan', $id);
		$this->db->update('pesanan',$data);
	}
	public function proses_pesanan($id){
		$st = '2';
		$data = array ('tanggal_kirim' => $this->input->post('tgl_kirim'),'tanggal_tiba' => $this->input->post('tgl_tiba') , 'status' =>$st);
		$this->db->where('id_pesanan', $id);
		$this->db->update('pesanan',$data);
	}
	public function keranjang	($id){
		$query = $this->db->query("SELECT * from pesanan where id_user='".$id."' and status='0'");
		return $query->row_array();
	}
	public function detailkeranjang	($id){
		$query = $this->db->query("SELECT * FROM pesanan where id_user='" . $id. "' and status ='0'");
		$row = $query->row_array();
		$data = $row['id_pesanan'];
		$query = $this->db->query("SELECT * from detail_pesanan inner join data_barang using(id_barang) where id_pesanan='".$data."'");
		return $query->result_array();
	}
	public function simpan_brg($file){
		$data=[
			'nama_barang' => $this->input->post('nama'),
			'jenis_barang' => $this->input->post('jenis'),
			'harga' => $this->input->post('harga'),
			'jumlah' => $this->input->post('jumlah'),
			'deskripsi' => $this->input->post('deskripsi'),
			'gambar' => $file['file_name']
		];
		$this->db->insert('data_barang',$data);
	}
	public function tambah($id){
		$user = $this->session->uid;
		$data=[
			'id_user' => $this->session->uid,
			'tanggal_pesanan' => date('Y-m-d'),
			'status' =>'0'
		];
		$this->db->insert('pesanan', $data);
		$query = $this->db->query("SELECT * FROM pesanan where id_user='" . $user . "' and status='0'");
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
		$data = array ('harga' => $this->input->post('harga'), 'jumlah' => $this->input->post('jumlah'), 'deskripsi' => $this->input->post('deskripsi'));
		$this->db->where('id_barang', $id);
		$this->db->update( 'data_barang', $data );
	}
}
