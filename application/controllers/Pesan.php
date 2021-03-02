<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Pesan extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('PesanModel');
		$this->load->helper('url');
	}

	public function index() {
	    if(empty($_SESSION['username'])) {
			$this->session->set_flashdata('message', 'Anda harus login dahulu!');
			redirect('home');
		} else {
		$data['contact']=$this->PesanModel->getAll();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/pesan',$data);
		$this->load->view('admin/partial/footer');
		}
	}
}

?>