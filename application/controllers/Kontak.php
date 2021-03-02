<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('KontakModel');
		$this->load->helper('url');
	}
	public function index() {
	    if(empty($_SESSION['username'])) {
			$this->session->set_flashdata('message', 'Anda harus login dahulu!');
			redirect('home');
		} else {
		$data['kontak'] = $this->KontakModel->viewKontak()->result(); 
		$this->load->view('admin/partial/header');
		$this->load->view('admin/kontak',$data);
		$this->load->view('admin/partial/footer');
		}
	}


	public function edit() {
		$id_kontak = $this->input->post('id_kontak');
		$email = $this->input->post('email');
		$notelp1 = $this->input->post('notelp1');
		$notelp2 = $this->input->post('notelp2');
		$alamat = $this->input->post('alamat');

		$data = array(
			'email'=>$email,
			'notelp1'=>$notelp1,
			'notelp2'=>$notelp2,
			'alamat'=>$alamat
		);

		$where = array(
			'id_kontak'=>$id_kontak
		);

		$this->KontakModel->editKontak($where,$data,'kontak');
		redirect('kontak');
	}
}


?>