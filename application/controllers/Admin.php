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
}
