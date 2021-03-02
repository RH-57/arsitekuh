<?php

defined('BASEPATH')OR exit('NO direct script access allowed');

class UserModel extends CI_Model {
	public function get($username) {
		$this->db->where('username', $username); //menambahkan where clause
		$result = $this->db->get('user')->row(); //mengeksekusi dan ambil data query

		return $result;
	}

	public function fetch_password($session_id) {
		$fetch_pass=$this->db->query("SELECT * FROM user WHERE id_user='$session_id'");
		$res=$fetch_pass->result();
	}

	public function ganti_password($session_id,$new_pass) {
		$update=$this->db->query("UPDATE user SET password='$new_password' WHERE id_user='$sesion_id'");
	}
	
}

?>