<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class ContactModel extends CI_Model {
	private $_table="contact";

	public function getAll() {
		return $this->db->get($this->_table)->result();
	}

	
}




?>