<?php
class Home extends CI_Controller {
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->load->view('header.php');
		$this->load->view('leftbar.php');
		$this->load->view('content.php');
		$this->load->view('footer.php');
	}
}

?>