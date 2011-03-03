<?php
	class Genero_model extends CI_Model {
		function __construct() {
			parent::__construct();
		}
		
		function cadastrar($data) {
			return $this->db->insert('genero', $data);
		}
		
		function listar() {
			$query = $this->db->get('genero');
			return $query->result();
		}
	}
?>