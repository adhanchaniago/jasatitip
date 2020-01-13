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
			$data['brg'] = $this->model_barang->listbrg();
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
