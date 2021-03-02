<?php
defined('BASEPATH')OR exit('No direct script access allowed');

Class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('KontakModel');
		$this->load->model('HomeModel');
	}


	public function index() {
		$query['project'] = $this->HomeModel->jumlahProject();
		$data['kontak'] = $this->KontakModel->viewKontak()->result();
		$this->load->view('partial/header',$data);
		$this->load->view('index',$query);
		$this->load->view('partial/footer',$data);
	}

}


?>