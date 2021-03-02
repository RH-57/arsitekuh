<?php
defined('BASEPATH')OR exit ('No direct script access allowed');

class Landingpages extends CI_Controller {
	public function __contruct() {
		parent::__contruct();

	}

	public function index() {
		$this->load->view('landingpages');
	}
}
?>