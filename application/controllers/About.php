<?php
defined('BASEPATH')OR exit('No direct script access allowed');

Class About extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('KontakModel');
		$this->load->model('TentangModel');
	}

	public function index() {
		$data['kontak'] = $this->KontakModel->viewKontak()->result();
		$tentang['tentang'] = $this->TentangModel->viewTentang()->result();
		$this->load->view('partial/header', $data);
		$this->load->view('v_about', $tentang);
		$this->load->view('partial/footer', $data);
	}

	public function simpan() {

	}
}

?>