<?php
	class Genero extends CI_Controller{
		function  __construct() {
			parent::__construct();
			
			$dados['titulo'] = "Alligator - Administração";
			$this->load->view('administracao/elementos/header', $dados);
			$this->load->view('administracao/elementos/menu');
			$this->load->view('administracao/elementos/footer');
		}
		
		function index() {
			$this->load->view('administracao/index');
		}
				
		function adicionar() {
			$this->load->library('form_validation');
			$conf = array(
				'fiel'	=> 'genero',
				'label'	=> 'Gênero',
				'rules' => 'required|min_length[4]|max_length[20]'
			);
			
			$this->form_validation->set_rules($conf);
			if ($this->form_validation->run() == FALSE) {
				$this->index();
			}
			else {
				$dados['gen_nome'] = $this->input->post('genero');
				
				$this->load->model('administracao/genero_model');
				if ($this->genero_model->cadastrar($dados)) {
					$this->index();
				}
			}
		}
		
		function listar() {
			$this->load->model('administracao/genero_model');
			$dados['generos'] = $this->genero_model->listar();
			$this->load->view('administracao/generos/listagem', $dados);
		}
	}
?>