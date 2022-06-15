<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kelasModel extends CI_Model
{
  public function getKelas()
  {
    return $this->db->get('kelas')->result_array();
  }

  public function count_kelas()
  {
    $this->db->count_all('kelas');
  }
}