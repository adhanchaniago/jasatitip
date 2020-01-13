<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('model_barang');
		$this->load->model('model_user');
	}
	public function index(){
		if ($this->session->status == "admin") {
			redirect('/admin');
		}else{
			$data['barang']= $this->model_barang->tampilkan();
			$this->load->template('index',$data);
		}
	}
	public function login(){
		$data['failed'] = "0";
		$this->load->template('login',$data);
	}
	public function register(){
		$this->load->template('register');
	}
	public function keranjang($id){
		$data['barang'] = $this->model_barang->keranjang($id);
		$data['detailbarang'] = $this->model_barang->detailkeranjang($id);
		$this->load->template('user/keranjang', $data);
	}
	public function tambah($id){
		$this->model_barang->tambah($id);
		redirect('/');
	}
	public function forget(){
		$this->load->template('ganti_password');
	}
	public function detail($id){
		$data['brg'] = $this->model_barang->detailbarang($id);
		// $data['brga'] = $this->model_barang->detailbrg($id);
		$this->load->template('detail_barang',$data);
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('/');
	}
	public function delete($id,$id1){
		$this->model_barang->delete($id,$id1);
		redirect('/');
	}
	public function update($id,$id1){
		$this->model_barang->update($id,$id1);
		redirect('/');
	}
	public function proses($id){
		$this->model_barang->update_pesan($id);
		redirect('/');
	}
	public function signin()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		$pass1 = md5($pass);
		$user = $this->model_user->signin( $email,$pass1 );
		if( isset($user)){
			// password cocok, login berhasil
			// simpan data session untuk mengenali user di setiap halaman
			$this->session->nama = $user['nama'];
			$this->session->uid = $user['id_user'];
			$this->session->status = $user['status_user'];
			// kembali ke halaman depan
			if ($this->session->status == "user") {
				redirect('/');
			}else {
				redirect('/admin');
			}
		} else {
			$data['failed'] = "1";
			$this->load->template('login', $data);
		}
	}
	public function req()
	{
		// $pass = $this->input->post('password');
		// $pass1 = $this->input->post('confirm');
		// if ($pass == $pass1) {
			$this->model_user->register();
			redirect('/login');
		// }else {
		//
		// }
	}
}
