<?php

class Auth extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
    }

    public function index() {
        // $data = array('container' => 'dashboard');
        $this->load->view('login');
    }

    public function cek_login() {
        $data = array(
            'username' => $this->input->post('username', TRUE), 
            'password' => md5($this->input->post('password', TRUE))
        );

        $this->load->model('model_user'); // load model_user
        $hasil = $this->model_user->cek_user($data);

        if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Loggin';
                $sess_data['id'] = $sess->id;
                $sess_data['username'] = $sess->username;
                $sess_data['level'] = $sess->level;
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('level') != '') {
                redirect('dashboard');
            } 
            // elseif ($this->session->userdata('level') == 'member') {
            //     redirect('dashboard');
            // }
        } else {
            echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
            // echo $data["username"] . "-" . $data["password"];
        }


    }


}
