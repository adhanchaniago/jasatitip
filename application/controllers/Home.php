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
			$this->load->library('pagination');
			$config['base_url'] = 'http://localhost/kopnus/nasabah/index/';
			//$config['total_rows'] = $this->model_user->countuser();
			$this->db->from('data_barang');
			$config['total_rows'] = $this->db->count_all_results();
			$config['per_page'] = 12;

			$config['full_tag_open']= '<nav aria-label="Page navigation example"><ul class="pagination">';
			$config['full_tag_close']= '</ul></nav>';
			$config['first_link'] = 'First';
			$config['first_tag_open'] = '<li class="page-item">';
			$config['first_tag_close'] = '</li>';
			$config['last_link'] = 'Last';
			$config['last_tag_open'] = '<li class="page-item">';
			$config['last_tag_close'] = '</li>';
			$config['next_link'] = 'Next';
			$config['next_tag_open'] = '<li class="page-item">';
			$config['next_tag_close'] = '</li>';
			$config['prev_link'] = 'Prev';
			$config['prev_tag_open'] = '<li class="page-item">';
			$config['prev_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li class="page-item">';
			$config['num_tag_close'] = '</li>';
			$config['attributes'] = array('class' => 'page-link');
			$data['start'] =($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['barang']= $this->model_barang->tampil_brg($config['per_page'],$data['start']);
			$this->pagination->initialize($config);
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
	public function informasi($id){
		$data['pesanan'] = $this->model_barang->pesanan_user($id);
		$this->load->template('user/informasi_pesanan', $data);
	}
	public function detail_pesanan($id){
		$data['pesanan'] = $this->model_barang->detail_pesanan($id);
		$data['brg'] = $this->model_barang->detail_brg_pesanan($id);
		$this->load->template('user/detail_pesanan', $data);
	}
	public function tambah($id){
		$query = $this->db->query("SELECT * from data_barang where id_barang='".$id."'");
		$row =$query->row();
		$jumlah = $row->jumlah;
		if ($this->input->post('jumlah') <= $jumlah) {
			$this->model_barang->tambah($id);
			redirect('/');
		}else {
			$data['pesan']='1';
			$data['brg'] = $this->model_barang->detailbarang($id);
			$this->load->template('detail_barang',$data);
		}
	}
	public function forget(){
		$this->load->template('ganti_password');
	}
	public function detail($id){
		$data['brg'] = $this->model_barang->detailbarang($id);
		$data['pesan'] = '0';
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
