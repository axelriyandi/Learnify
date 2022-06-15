<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in(); 
    $this->load->model('userModel', 'user');
  }
  
  public function index()
  {
    $data['title'] = 'Learnify | Home';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('user/index', $data);
    $this->load->view('templates/footer');
  }

  public function profile()
  {
    $data['title'] = 'Learnify | My Profile';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('user/profile', $data);
    $this->load->view('templates/footer');
  }

  public function editProfile()
  {
    $data['title'] = 'learnify | My Profile';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('name', 'Name', 'required|trim');

    if($this->form_validation->run() == false) {      
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/profile', $data);
      $this->load->view('templates/footer');
    } else {
      $name = $this->input->post('name');
      $email = $this->input->post('email');

      // Jika ada img yang akan di upload
      $uploadimg = $_FILES['image']['name'];

      if($uploadimg) {
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = '2048';
        $config['upload_path']          = './assets/img/profile/';

        $this->load->library('upload', $config);

        if($this->upload->do_upload('image')) {
          $old_image = $data['user']['image'];
          if($old_image != 'defaul.jpg') {
            unlink(FCPATH . 'assets/img/profile/' . $old_image);
          }
          
          $new_image = $this->upload->data('file_name');
          $this->db->set('image', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }

      $this->db->set('name', $name);
      $this->db->where('email', $email);
      $this->db->update('user');
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      Your profile success updated!</div>');
      redirect('user/profile');
    }
  }

  public function changesPassword()
  {
    $data['title'] = 'Learnify | Changes Password';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('currentpassword', 'Current Password', 'required|trim');
    $this->form_validation->set_rules('newpassword1', 'New Password', 'required|trim|min_length[3]|matches[newpassword2]');
    $this->form_validation->set_rules('newpassword2', 'Repeat Password', 'required|trim|matches[newpassword1]');
    
    if($this->form_validation->run() == false) {      
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/changespassword', $data);
      $this->load->view('templates/footer');
    } else {
      $current_password = $this->input->post('currentpassword');
      $new_password = $this->input->post('newpassword1');
      if(!password_verify($current_password, $data['user']['password'])) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Your current password wrong!</div>');
        redirect('user/changespassword');
      } else {
        if($current_password == $new_password) {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          Your password cannot be the same as current!</div>');
          redirect('user/changespassword');
        } else {
          // Password nya ok
          $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
          
          $this->db->set('password', $password_hash);
          $this->db->where('email', $this->session->userdata('email'));
          $this->db->update('user');
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Your password changes!</div>');
          redirect('user/changespassword');
        }
      }
    }
  }  

  public function pelajaran()
  {
    $data['title'] = 'Learnify | Daftar Pelajaran';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['pelajaran'] = $this->pelajaranModel->getPelajaran();
    $data['kelas'] = $this->kelasModel->getKelas();
 
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('pelajaran/daftar-pelajaran', $data);
    $this->load->view('templates/footer');
    
  }

  public function detailPelajaran($id)
  {
    $data['title'] = 'Learnify | Detail Pelajaran';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['materi'] = $this->pelajaranModel->join($id);
 
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('pelajaran/detail-pelajaran', $data);
    $this->load->view('templates/footer');    
  }

  public function kontak()
  {
    $data['title'] = 'Learnify | Kontak Kami';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
 
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('user/kontak', $data);
    $this->load->view('templates/footer');    
  }

  public function pesan()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    
    $this->form_validation->set_rules('message', 'Message', 'required|trim', [
      'required' => 'This message cannot be empty!'
    ]);

    if($this->form_validation->run() == false) {
      $data['title'] = 'Aspein | Critique & Suggest';
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/kontak', $data);
      $this->load->view('templates/footer');
    } else {
      if($this->input->method() == 'post') {
        $config['upload_path']          = './assets/img/message/';
        $config['allowed_types']        = 'pdf|jpg|png|jpeg';
        $config['max_size']             = '2048';
  
        $this->load->library('upload', $config);
  
        if(!$this->upload->do_upload('file')) {
          echo $this->upload->display_errors();
        } else {
          $imgfile = $this->upload->data();
  
          $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'message' => $this->input->post('message'),
            'attach' => $imgfile['file_name'],
            'date_message' => time()
          ];
  
          $this->db->insert('message', $data);
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Your message was sent successfully!</div>');
          redirect('user/pesan');
        }
      }
    }
  }
}