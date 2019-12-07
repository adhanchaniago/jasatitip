<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('model_barang');
	}
	public function index(){
		$data['barang']= $this->model_barang->tampilkan();
		$this->load->template('index',$data);
	}
	public function login(){
		$this->load->template('login');
	}
	public function register(){
		$this->load->template('register');
	}
	public function keranjang(){
		$this->load->template('user/alamat');
	}
	public function detail($id){
		$data['brg'] = $this->model_barang->detail($id);
		$this->load->template('detail_barang',$data);
	}
}
