<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->library('session');
		$this->load->helper('url');
	}


	public function index() {
		if($this->session->userdata('authenticated'))
			redirect('admin/index');

		$this->load->view('login');
	}

	public function login() {
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$user = $this->UserModel->get($username);

		if(empty($user)) {
			$this->session->set_flashdata('message','Username tidak ditemukan');
			redirect('auth');
		} else {
			if($password == $user->password) {
				$session = array(
					'authenticated'=>true,
					'username'=>$user->username,
					'nama'=>$user->nama
				);

				$this->session->set_userdata($session);
				redirect('admin/index');
			} else {
				$this->session->set_flashdata('message','Password salah');
				redirect('auth');
			}
		}
	}

	

	public function logout() {
		$this->session->sess_destroy();
		redirect('auth');
	}

	public function ganti_password() {
		if($this->input->post('ganti_password')) {
			$old_pass=$this->input->post('old_pass');
			$new_pass=$this->input->post('new_pass');
			$conf_pass=$this->input->post('conf_pass');
			$session_id=$this->session->userdata('id_user');
			$query=$this->db->query("SELECT * FROM user WHERE id_user='$session_id'");
			if((!strcmp($old_pass, $password)) && (!strcmp($new_pass, $conf_pass))) {
				$this->UserModel->ganti_password($session_id,$new_pass);
				echo "Password changed successfully";
			} else {
				echo "Invalid";
			}
			$this->load->view('admin/partial/header');
		}

	}
}


?>