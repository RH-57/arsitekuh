<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Jasadesainrumahinterior extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('KontakModel');
		$this->load->model('RumahinteriorModel');
	}

	public function index() {
		$data['kontak'] = $this->KontakModel->viewKontak()->result();
		$hargari['rumahinterior'] = $this->RumahinteriorModel->getAll();

		$this->load->view('partial/header', $data);
		$this->load->view('jasadesainrumahinterior', $hargari);
		$this->load->view('partial/footer', $data);
	}
}




?>
