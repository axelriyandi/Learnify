<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelajaranModel extends CI_Model
{
  public function getPelajaran()
  {
    return $this->db->get('pelajaran')->result_array();
  }

  public function getMateri($id)
  {
    $id = $this->uri->segment(3);
    $id_kelas = $this->uri->segment(4);

    $query = "SELECT * FROM materi where id_pelajaran = $id AND id_kelas = $id_kelas";

    return $this->db->query($query)->result_array();
  }

  public function join($id)
  { 
    $this->db->select("*");
    $this->db->from("materi");
    $this->db->join('kelas', 'materi.id_kelas = kelas.id');
    $this->db->join('pelajaran', 'materi.id_pelajaran = pelajaran.id');

    $id = $this->uri->segment(3);
    $id_kelas = $this->uri->segment(4);

    $query = "SELECT * FROM materi where id_pelajaran = $id AND id_kelas = $id_kelas";

    return $this->db->query($query)->result_array();
  }

  public function count_pelajaran()
  {
    $this->db->count_all('pelajaran');
  }
}