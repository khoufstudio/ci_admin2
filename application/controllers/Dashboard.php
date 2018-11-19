<?php

class Dashboard extends CI_Controller
{

    function __construct() {
        parent::__construct();
        // $this->load->helper('form');
        if ($this->session->userdata('level') == '') {
            redirect('auth');
        }
    }

    public function index() {
        $data = array(
            'container' => 'dashboard',
            'title' => 'Dashboard'
        );
        $this->load->view('template/template', $data);
    }

    public function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        session_destroy();
        redirect('auth');
    }
}
