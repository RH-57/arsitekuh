<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Kontraktorexterior extends CI_Controller {
  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $this->load->view('admin/partial/header');
    $this->load->view('admin/kontraktorexterior');
    $this->load->view('admin/partial/footer');
  }
}

 ?>
