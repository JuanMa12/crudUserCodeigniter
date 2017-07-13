<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

	public function index(){
		$data["titulo"] = "Usuarios";
		$data["users"] = $this->user_model->getAll();

		$this->load->view("user/index",$data);
	}

	public function create(){
		$data["titulo"] = "Crear Usuario";
		$this->load->view("user/create",$data);
	}

	public function store(){
		$result = $this->user_model->insertUser($data);
		if($result){
			$this->session->set_flashdata('success_msg','User Save');
		}else{
			$this->session->set_flashdata('error_msg','User Not Save');
		}

		redirect(base_url('user/index'));
	}

	public function edit($id){
		$data["titulo"] = "Editar Usuario";
		$data["user"] = $this->user_model->userId($id);
		$this->load->view("user/edit",$data);
	}

	public function update(){
		$result = $this->user_model->updateUser($data);
		if($result){
			$this->session->set_flashdata('success_msg','User Update');
		}else{
			$this->session->set_flashdata('error_msg','User Not Update');
		}

		redirect(base_url('user/index'));
	}

	public function delete($id){
		$result = $this->user_model->deleteUser($id);
		print_r($result);
		if($result){
			$this->session->set_flashdata('success_msg','User Delete');
		}else{
			$this->session->set_flashdata('error_msg','User Not Delete');
		}
		redirect(base_url('user/index'));
	}



}
