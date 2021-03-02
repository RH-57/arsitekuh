<?php
defined('BASEPATH')OR exit('No diredct script access allowed');

class Admin extends CI_Controller {
	public function index() {
		if(empty($_SESSION['username'])) {
			$this->session->set_flashdata('message', 'Anda harus login dahulu!');
			redirect('home');
		} else {
			$this->load->view('admin/partial/header');
			$this->load->view('admin/index');
			$this->load->view('admin/partial/footer');
		}
	}
}

?>