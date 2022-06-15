<?php
defined('BASEPATH') or exit('No direct script access allowed');

class adminModel extends CI_Model
{
  public function getAllAcc()
  {
    return $this->db->get('user')->result_array();
  }

  public function getAllAccByRole()
  {
    return $this->db->get_where('user', ['role_id' => 2])->result_array();
  }

  public function countAcc()
  {
    $this->db->count_all('user');
  }

  public function searchAcc()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('name', $keyword);
    $this->db->or_like('email', $keyword);
    return $this->db->get('user')->result_array();
  }

  public function deleteUser($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function deleteKelas($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function deletePelajaran($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function getPelajaranById($id)
  {
    return $this->db->get_where('pelajaran', ['id' => $id])->row_array();
  }

  public function getAllPost()
  {
    return $this->db->get('post')->result_array();
  }

  public function countPost()
  {
    $this->db->count_all('post');
  }

  public function deletePost($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function getAllMessage()
  {
    return $this->db->get('message')->result_array();
  }

  public function prosesEditPelajaran()
  {
    $data = [
      'pelajaran' => $this->input->post('pelajaran')
    ];

    $uploadimg = $_FILES['image']['name'];

    if ($uploadimg) {
      $config['allowed_types']        = 'jpeg|jpg|png';
      $config['max_size']             = '2048';
      $config['file_name']            = 'mapel' . time();
      $config['upload_path']          = './assets/img/';

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('image')) {
        $old_image = $data['pelajaran']['image'];
        if ($old_image != 'mapel.jpg') {
          unlink(FCPATH . 'assets/img/' . $old_image);
        }

        $new_image = $this->upload->data('file_name');
        $this->db->set('foto', $new_image);
      } else {
        echo $this->upload->display_errors();
      }
    }

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('pelajaran', $data);
  }
}