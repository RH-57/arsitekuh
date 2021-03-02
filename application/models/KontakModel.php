<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class KontakModel extends CI_Model {
	private $_table = 'kontak';

	public function viewKontak() {
		return $this->db->get('kontak');

	}

	public function editKontak($where,$data) {
		$this->db->where($where);
		$this->db->update('kontak', $data);
	}
}





?>