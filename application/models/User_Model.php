<?php

class User_Model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function getAll(){
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('users');

      if($query->num_rows() > 0) {
          return $query->result();
      }else{
        return false;
      }
    }

    public function userId($id){
      $this->db->where('id', $id);
      $query = $this->db->get('users');

      if($query->num_rows() > 0) {
          return $query->row();
        }else{
          return false;
      }
    }

    function insertUser(){
      $fields = array(
        'name'=>$this->input->post('name'),
        'email'=>$this->input->post('email'),
        'phone'=>$this->input->post('phone')
      );
      $this->db->insert('users', $fields);

      if($this->db->affected_rows() > 0){
        return true;
      }else{
        return false;
      }
    }

    function updateUser(){
      $id = $this->input->post('user_id');
      $fields = array(
        'name'=>$this->input->post('name'),
        'email'=>$this->input->post('email'),
        'phone'=>$this->input->post('phone')
      );
      $this->db->where('id',$id);
      $this->db->update('users', $fields);

      if($this->db->affected_rows() > 0){
        return true;
      }else{
        return false;
      }
    }

    public function deleteUser($id){
      $this->db->where('id', $id);
      $this->db->delete('users');
      if($this->db->affected_rows() > 0){
        return true;
      }else{
        return false;
      }
    }


}
