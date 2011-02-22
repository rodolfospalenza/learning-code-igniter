<?php
class Catalogo extends CI_Controller {
	function __construct() {
		parent::__construct();
	}

	function index() {
		$query = $this->db->get('filme');
		$dados['filmes'] = $query->result();
		$this->load->view('catalogo', $dados);
	}
}
?>