<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('ContactModel');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('KontakModel');
	}



	public function index() {
		$data['kontak']=$this->KontakModel->viewKontak()->result();
		$this->load->view('partial/header',$data);
		$this->load->view('pesan');
		$this->load->view('partial/footer',$data);
		
	}

	public function addContact() {
		
		$data = array (
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'date'=>$this->input->post('date'),
			'subject'=>$this->input->post('subject'),
			'message'=>$this->input->post('message')
		);
		$this->db->insert('contact', $data);
		redirect('home');		
	}

	public function viewContact() {
		$data['contact']=$this->ContactModel->getAll();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/pesan',$data);
		$this->load->view('admin/partial/footer');
	}
}




?>