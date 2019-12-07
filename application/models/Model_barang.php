<?php
class Model_barang extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	public function tampilkan(){
		$query = $this->db->query("SELECT * from data_barang");
		return $query->result_array();
	}
	public function detail($id){
		$query = $this->db->query("SELECT * from data_barang where id_barang='".$id."'");
		return $query->row_array();
	}
}
