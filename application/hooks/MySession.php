<?php
	class MySession{
		private $CI;

	    function __construct(){
	        $this->CI =& get_instance();
	        if (!isset($this->CI->session)){
		        $this->CI->load->library('session');
		    }		    
	    }


	    /**
	    *	CHECK LOGIN
	    *	
	    *	VERIFICA SI LA SESION EXISTE ANTES DE EJECUTAR EL CONTROLADOR
	    */
	    /*public function check_login(){
	    	$url = $this->CI->uri->uri_string();	    	
	    	if($this->CI->session->ERP_USER_LOGGED == TRUE){	    		
	    		if($url == 'web/login' || $url == ''){
	    			redirect('web/dashboard');
	    		}
	    	}else{
	    		if($url != 'web/login' && $url != 'usuarios/login'){
	    			$this->CI->session->sess_destroy();
	    			redirect('web/login');
	    		}
	    	}
	    }*/
	}