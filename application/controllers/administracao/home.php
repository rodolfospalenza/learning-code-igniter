<?php
	class Home extends CI_Controller {
		function __construct() {
			parent::__construct();
			
			$dados['titulo'] = "Alligator - Administração";
			$this->load->view('administracao/elementos/header', $dados);
			$this->load->view('administracao/elementos/menu');
			$this->load->view('administracao/elementos/footer');
		}
		
		function index() {
			$this->load->view('administracao/index');
		}
	}
?>