<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class Tentang extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('TentangModel');
	}

	public function index() {
	    if(empty($_SESSION['username'])) {
			$this->session->set_flashdata('message', 'Anda harus login dahulu!');
			redirect('home');
		} else {
		$query['tentang'] = $this->TentangModel->viewTentang()->result();
		$this->load->view('admin/partial/header');
		$this->load->view('admin/tentang', $query);
		$this->load->view('admin/partial/footer');
		}

	}

	public function edit() {
		$id = $this->input->post('id');
		$tentang = $this->input->post('tentang');
		$visi = $this->input->post('visi');
		$misi = $this->input->post('misi');
		

		$data = array(
			'tentang'=>$tentang,
			'visi'=>$visi,
			'misi'=>$misi
		);

		$where = array(
			'id'=>$id
		);

		$this->TentangModel->editTentang($where,$data,'tentang');
		redirect('tentang');
	}
}


?>