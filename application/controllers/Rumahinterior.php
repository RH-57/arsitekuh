<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Rumahinterior extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('RumahinteriorModel');
    $this->load->library('form_validation');
  }

  public function index() {
    if(empty($_SESSION['username'])) {
      $this->session->set_flashdata('message','Anda tidak memiliki akses');
      redirect('home');
    } else {
      $data["rumahinterior"] = $this->RumahinteriorModel->getall();
      $this->load->view('admin/partial/header');
      $this->load->view('admin/desainrumahinterior', $data);
      $this->load->view('admin/partial/footer');
    }
  }

  public function tambah() {
    $data = array (
      'luas'=>$this->input->post('luas'),
      'paketa'=>$this->input->post('paketa'),
      'paketb'=>$this->input->post('paketb'),
      'paketc'=>$this->input->post('paketc')
    );
    $this->db->insert('rumahinterior', $data);
    redirect('rumahinterior');
  }

  public function delete() {
    $model = new RumahinteriorModel();
    $id_ri = $this->request->getPost('id_ri');
    $model->delete('id_ri');
    redirect('rumahinterior');
  }

  public function ubah() {
    $id_ri = $this->input->post('id_ri');
    $luas = $this->input->post('luas');
    $paketa = $this->input->post('paketa');
    $paketb = $this->input->post('paketb');
    $paketc = $this->input->post('paketc');
    $this->RumahinteriorModel->ubahData($id_ri,$luas,$paketa,$paketb,$paketc);
    redirect('rumahinterior');
  }
}


?>
