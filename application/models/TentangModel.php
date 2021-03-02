<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class TentangModel extends CI_Model {
	private $_table = 'tentang';

	public function viewTentang() {
		return $this->db->get('tentang');
		return $this->db->get('visi');
		return $this->db->get('misi');

	}

	public function editTentang($where,$data) {
		$this->db->where($where);
		$this->db->update('tentang', $data);
	}
}


?>