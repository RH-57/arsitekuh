<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class DesainRumahInterior extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('KontakModel');
	}

	public function index() {
		$data['kontak'] = $this->KontakModel->viewKontak()->result();
		$this->load->view('partial/header', $data);
		$this->load->view('desainrumahinterior');
		$this->load->view('partial/footer',$data);
	}
}


?>