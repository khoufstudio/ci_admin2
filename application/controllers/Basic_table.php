<?php

class Basic_table extends CI_Controller
{

    function __construct() {
        parent::__construct();
        // $this->load->helper('form');
        if ($this->session->userdata('level') == '') {
            redirect('auth');
        }
        $this->load->model('Basic_table_model');
        // $this->load->library('javascript/jquery');
    }

    public function index() {
        $data = array(
            'page_title' => 'Basic Table',
            'container' => 'basic_table',
            'javascript_file' => 'basic_table.js'
    );
        $this->load->view('template/template', $data);
    }

    function get_data_user() {
        $list = $this->Basic_table_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->username;
            $row[] = $field->first_name;
            $row[] = $field->last_name;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Basic_table_model->count_all(),
            "recordsFiltered" => $this->Basic_table_model->count_filtered(),
            "data" => $data,
        );

        //output dalam format JSON
        echo json_encode($output);
    }
}