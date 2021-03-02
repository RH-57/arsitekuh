<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class PesanModel extends CI_Model {
	private $_table="contact";

	public function getAll() {
		$this->db->order_by('date','DESC');
		return $this->db->get($this->_table)->result();
		
	}

	
}




?>