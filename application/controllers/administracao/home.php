<?php
	class Home extends CI_Controller {
		function __construct() {
			parent::__construct();
		}
		
		function index() {
			$dados['titulo'] = "Alligator - Administração";
			$this->load->view('administracao/elementos/header', $dados);
			$this->load->view('administracao/index.php');
			$this->load->view('administracao/elementos/footer');
		}
	}
?>