<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model');
    }

	public function index(){
		$data = $this->blog_model->getAll();
		$nameData = "blogs";
		$this->responseJson($data,$nameData);
	}

	public function show($id){
		$data = $this->blog_model->blogId($id);
		$nameData = "blog";
		$this->responseJson($data,$nameData);
	}

	public function responseJson($data,$nameData){
		if($nameData == ""){
			$nameData = "data";
		}
		if($data != null){
			print json_encode(array("status"=>"200","$nameData"=>$data));
		}else{
			print json_encode(array("message"=>"No se encontraron resultados!"));
		}
	}
}
