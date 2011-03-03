<?php
	class Filme_model extends CI_Model {
		function __construct() {
			parent::__construct();
		}
				
		function listar() {
			$query = $this->db->get('filme');
			return $query->result();
		}
	}
?>