<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class RumahinteriorModel extends CI_Model {
  private $_table = "rumahinterior";

  public $id_ri;
  public $luas;
  public $paketa;
  public $paketb;
  public $paketc;

  public function getAll() {
    return $this->db->get($this->_table)->result();
  }

  public function update($id_ri, $luas, $paketa, $paketb, $paketc) {
    $query = $this->db->query("UPDATE rumahinterior SET luas='luas',paketa='$paketa',paketb='$paketb',paketc='$paketc' WHERE id_ri='$id_ri'");
    return $query;
  }

  public function delete($id_ri) {
    $query = $this->db->$_table->delete(array('id_ri' => $id_ri));
    return $query;
  }
}

 ?>
