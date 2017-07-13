<?php

class Blog_Model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function getAll(){
      $this->db->order_by('id', 'DESC');
      $query = $this->db->get('blogs');

      if($query->num_rows() > 0) {
          return $query->result();
      }else{
        return false;
      }
    }

    public function blogId($id){
      $this->db->where('id', $id);
      $query = $this->db->get('blogs');

      if($query->num_rows() > 0) {
          return $query->row();
        }else{
          return false;
      }
    }

    function insertBlog(){
      $fields = array(
        'name'=>$this->input->post('name'),
        'email'=>$this->input->post('email'),
        'phone'=>$this->input->post('phone')
      );
      $this->db->insert('blogs', $fields);

      if($this->db->affected_rows() > 0){
        return true;
      }else{
        return false;
      }
    }

    function updateBlog(){
      $id = $this->input->post('user_id');
      $fields = array(
        'name'=>$this->input->post('name'),
        'email'=>$this->input->post('email'),
        'phone'=>$this->input->post('phone')
      );
      $this->db->where('id',$id);
      $this->db->update('blogs', $fields);

      if($this->db->affected_rows() > 0){
        return true;
      }else{
        return false;
      }
    }

    public function deleteBlog($id){
      $this->db->where('id', $id);
      $this->db->delete('blogs');
      if($this->db->affected_rows() > 0){
        return true;
      }else{
        return false;
      }
    }


}
