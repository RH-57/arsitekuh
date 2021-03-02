<?php 
defined('BASEPATH')OR exit ('No direct script access allowed');

class Project extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('ProjectModel');
		$this->load->library('upload');
	}

	public function index() {
		if(empty($_SESSION['username'])) {
			$this->session->set_flashdata('message', 'Anda harus login dahulu!');
			redirect('home');
		} else {
			$data["project"] = $this->ProjectModel->getAll();
			$this->load->view('admin/partial/header');
			$this->load->view('admin/project', $data);
			$this->load->view('admin/partial/footer');
		}
	}

	
	public function tambah() {
		$nama = $this->input->post('nama');
		$desain = $this->input->post('desain');
		$jenis = $this->input->post('jenis');
		$tgl_selesai = $this->input->post('tgl_selesai');
		$keterangan = $this->input->post('keterangan');

		
		//get gambar
		$config['upload_path'] = './assets/upload/project';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $_FILES['gambar']['name'];

		$this->upload->initialize($config);

		if (!empty($_FILES['gambar']['name'])) {
			if ($this->upload->do_upload('gambar')) {
				$gambar = $this->upload->data();
				$data = array(
					'nama'=>$nama,
					'desain'=>$desain,
					'jenis'=>$jenis,
					'tgl_selesai'=>$tgl_selesai,
					'keterangan'=>$keterangan,
					'gambar'=>$gambar['file_name'],
				);
				$this->ProjectModel->insert($data);
				redirect('project');
			} else {
				die("Gagal upload !");
			}
		} else {
			echo "Tidak Masuk";
		}
	}

	public function hapus($id_project,$gambar) {
		$path = './assets/upload/project/';
		@unlink($path.$gambar);

		$where = array('id_project' => $id_project);
		$this->ProjectModel->delete($where);
		return redirect('project');
	}

	public function ubah() {
		$id_project = $this->input->post('id_project');
		$nama = $this->input->post('nama');
		$desain = $this->input->post('desain');
		$jenis = $this->input->post('jenis');
		$tgl_selesai = $this->input->post('tgl_selesai');
		$keterangan = $this->input->post('keterangan');

		$path = './assets/upload/project/';

		$kondisi = array('id_project' => $id_project);

		//get gambar
		$config['upload_path'] = './assets/upload/project/';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';
		$config['max_width'] = '4480';
		$config['max_height'] = '4480';
		$config['file_name'] = $_FILES['gambar']['name'];

		$this->upload->initialize($config);

		if (!empty($_FILES['gambar']['name'])) {
			if ($this->upload->do_upload('gambar')) {
				$gambar = $this->upload->data();
				$data = array(
					'nama'=>$nama,
					'desain'=>$desain,
					'jenis'=>$jenis,
					'tgl_selesai'=>$tgl_selesai,
					'keterangan'=>$keterangan,
					'gambar'=>$gambar['file_name'],
				);

				//hapus foto dari direktori
				@unlink($path.$this->input->post('filelama'));

				$this->ProjectModel->update($data,$kondisi);
				redirect('project');
			} else {
				die("Gagal update");
			}
		} else {
			echo "Tidak masuk";
		}
	}
}



?>