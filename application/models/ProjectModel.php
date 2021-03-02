<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class ProjectModel extends CI_Model {
	private $_table = "project";

	public $id_project;
	public $nama;
	public $desain;
	public $jenis;
	public $tgl_selesai;
	public $keterangan;
	public $gambar = "default.jpg";

	public function rules() {
		return[
			['field' => 'name',
			'label' => 'Name',
			'rules' => 'required'],

			['field' => 'desain',
			'label' => 'Desain',
			'rules' => 'required'],

			['field' => 'jenis',
			'label' => 'Jenis',
			'rules' => 'required'],

			['field' => 'keterangan',
			'label' => 'Keterangan',
			'rules' => 'required']
		];
	}


	public function getAll() {
		return $this->db->get($this->_table)->result();
	}

	public function insert($data) {
		$this->db->insert('project',$data);
      return TRUE;
	}

	public function __uploadImage() {
		
	}

	public function getRumahInterior() {

	}

	public function getRumahEksterior() {

	}

	public function getKontraktorInterior() {

	}

	public function getKontraktorEksterior() {

	}

	public function update($data,$kondisi) {
		$this->db->update('project',$data,$kondisi);
		return TRUE;
	}

	public function delete($where) {
		$this->db->where($where);
		$this->db->delete('project');
		return TRUE;
	}
}


?>