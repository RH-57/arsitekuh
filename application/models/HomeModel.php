<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class HomeModel extends CI_Model {
	public function jumlahProject() {
		$query = $this->db->get('project');
		if($query->num_rows()>0) {
			return $query->num_rows();
		} else {
			return 0;
		}
	}	
}

?>