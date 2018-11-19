<?php
// header('Access-Control-Allow-Origin: *');
// header("Access-Control-Allow-Methods: GET, OPTIONS");

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		if ($this->session->userdata('level') != '') {
			redirect('dashboard');
		}
	}

	public function index() {
		$this->load->view('login');
	}
}
