<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Alamat extends CI_Controller {


	public function index() {
		$this->load->view('admin/partial/header');
		$this->load->view('admin/partial/footer');
	}
}


?>