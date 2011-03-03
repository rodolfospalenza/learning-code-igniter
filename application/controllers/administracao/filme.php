<?php
	class Filme extends CI_Controller {
		function __construct() {
			parent::__construct();
			
			$dados['titulo'] = "Alligator - Administração";
			$this->load->view('administracao/elementos/header', $dados);
			$this->load->view('administracao/elementos/menu');
			$this->load->view('administracao/elementos/footer');
		}
		
		function listar() {
			$this->load->model('administracao/filme_model');
			$dados['filmes'] = $this->filme_model->listar();
			$this->load->view('administracao/filmes/listagem', $dados);
		}
	}