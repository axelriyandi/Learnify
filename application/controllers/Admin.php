<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('adminModel', 'admin');
  }

  public function index()
  {
    $data['title'] = 'Learnify | Dashboard';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['account'] = $this->admin->getAllAccByRole();
    if ($this->input->post('keyword')) {
      $data['account'] = $this->admin->searchAcc();
    }
    $data['total_acc'] = $this->admin->countAcc();
    $data['total_pelajaran'] = $this->pelajaranModel->count_pelajaran();
    $data['total_kelas'] = $this->kelasModel->count_kelas();
    $data['pelajaran'] = $this->db->get('pelajaran')->result_array();
    $data['kelas'] = $this->db->get('kelas')->result_array();
    $data['message'] = $this->db->get('message')->result_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/index', $data);
    $this->load->view('admin/modal', $data);
    $this->load->view('templates/footer');
  }

  public function deleteUser($id)
  {
    $where = array('id' => $id);
    $this->admin->deleteUser($where, 'user');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    User success deleted!</div>');
    redirect('admin');
  }

  public function deleteKelas($id)
  {
    $where = array('id' => $id);
    $this->admin->deleteKelas($where, 'kelas');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    Class success deleted!</div>');
    redirect('admin');
  }

  public function tambahKelas()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data = [
      'kelas' => $this->input->post('kelas')
    ];

    $this->db->insert('kelas', $data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    Kelas Berhasil Ditambahkan!</div>');
    redirect('admin');
  }

  public function deletePelajaran($id)
  {
    $where = array('id' => $id);
    $this->admin->deletePelajaran($where, 'pelajaran');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    Pelajaran success deleted!</div>');
    redirect('admin');
  }

  public function tambahPelajaran()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    if ($this->input->method() == 'post') {
      $config['upload_path']          = './assets/img/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = '2048';
      $config['file_name']            = 'mapel' . time();

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('image')) {
        echo $this->upload->display_errors();
      } else {
        $imgpel = $this->upload->data();

        $data = [
          'foto' => $imgpel['file_name'],
          'pelajaran' => $this->input->post('pelajaran')
        ];

        $this->db->insert('pelajaran', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Pelajaran Berhasil Ditambahkan!</div>');
        redirect('admin');
      }
    }
  }

  public function prosesEditPelajaran($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['pelajaran'] = $this->admin->getPelajaranById($id);

    $this->form_validation->set_rules('pelajaran', 'Nama Pelajaran', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('admin/index', $data);
      $this->load->view('admin/modal', $data);
      $this->load->view('templates/footer');
    } else {
      $this->admin->prosesEditPelajaran();
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      Pelajaran berhasil diperbarui!</div>');
      redirect('admin');
    }
  }
}