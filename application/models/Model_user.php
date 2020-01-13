<?php
class Model_user extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function register(){
		$data=[
      'nama' => $this->input->post('nama'),
      'email' => $this->input->post('email'),
      'password' => md5($this->input->post('password')),
      'alamat' => $this->input->post('alamat'),
      'telepon' => $this->input->post('telepon'),
      'status_user' => "user"
    ];
    $this->db->insert('users', $data);
	}
	public function signin($email,$pass){
		$query = $this->db->query("SELECT * from users where email='".$email."' and password='".$pass."'");
		return $query->row_array();
	}
}
