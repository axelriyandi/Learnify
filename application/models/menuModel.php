<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menuModel extends CI_Model
{
  public function getSubMenu()
  {
    $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
              FROM `user_sub_menu` JOIN `user_menu`
              ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
            ";
    return $this->db->query($query)->result_array();
  }

  public function deleteSubMenu($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function editSubMenu($id)
  {
    return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
  }

  public function proseseditSubmenu($id)
  {
    $data = [
      'title' => $this->input->post('title'),
      'menu_id' => $this->input->post('menu_id'),
      'url' => $this->input->post('url'),
      'icon' => $this->input->post('icon'),
      'is_active' => $this->input->post('is_active')
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('user_sub_menu', $data);
  }

  public function deleteMenu($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
}