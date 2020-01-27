<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('model_barang');
	}
	public function index()
	{
		if ($this->session->status == "admin") {
			$data['brg'] = $this->model_barang->tampilkan();
			$this->load->template('admin/home', $data);
		}
	}
	public function tambah($id)
	{
		if ($this->session->status == "admin") {
			$data['brg'] = $this->model_barang->brg($id);
			$this->load->template('admin/tambah', $data);
		}
	}
	public function proses_pesanan($id){
		$this->model_barang->proses_pesanan($id);
		redirect('/');
	}
	public function simpan_brg(){
		$config['upload_path'] = 'asset/gambar/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']  = '0';
		$config['remove_space'] = TRUE;
		$this->upload->initialize($config);
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$file=$this->upload->data();
			$this->model_barang->simpan_brg($file);
			redirect('/');
			// echo "Berhasil";
		}else{
			// Jika gagal :
			echo "Gagal";
		}
	}
	public function tambah_produk()
	{
		if ($this->session->status == "admin") {
			$this->load->template('admin/input_brg');
		}
	}
	public function list_pesanan()
	{
		if ($this->session->status == "admin") {
			$data['brg'] = $this->model_barang->pesanan();
			$this->load->template('admin/list_pesanan', $data);
		}
	}
	public function detail($id)
	{
		if ($this->session->status == "admin") {
			$data['pesanan'] = $this->model_barang->detail($id);
			$data['brg'] = $this->model_barang->detailbrg($id);
			$this->load->template('admin/detail', $data);
		}
	}
	public function simpan($id)
	{
		if ($this->session->status == "admin") {
			$this->model_barang->simpan($id);
			redirect('/');
		}
	}

}
