<?php

class Crud_table extends CI_Controller
{
    // $controller_name = $this->uri->segment(1); // controller name 
    function __construct() {
        parent::__construct();
        if ($this->session->userdata('level') == '') {
            redirect('auth');
        }
        $this->load->model('crud_table_model');
    }

    public function index() {
        $data = array(
            'container' => 'crud_table',
            'page_title' => 'CRUD Table'
            // 'js_page' => 'data_siswa_v2_js.php'
        );
        // echo $this->uri->segment(1);
        $this->load->view('template/template', $data);
        $this->load->view('js_page/'. $this->uri->segment(1).'_js'); // data_siswa_v2.php

    }

    public function data_barang() {
        $data = $this->crud_table_model->barang_list();
        echo json_encode($data);
    }

    public function simpan_barang() {
        $kobar = $this->input->post('kobar');
        $nabar = $this->input->post('nabar');
        $harga = $this->input->post('harga');
        $data = $this->crud_table_model->simpan_barang($kobar, $nabar, $harga);
        echo json_encode($data);
    }

    public function get_barang() {
        $kobar = $this->input->get('id');
        $data = $this->crud_table_model->get_barang_by_kode($kobar);
        echo json_encode($data);
    }

    function update_barang() {
        $kobar=$this->input->post('kobar');
        $nabar=$this->input->post('nabar');
        $harga=$this->input->post('harga');
        $data=$this->crud_table_model->update_barang($kobar,$nabar,$harga);
        echo json_encode($data);
    }

    public function hapus_barang() {
        $kode = $this->input->post('kode');
        $data = $this->crud_table_model->hapus_barang($kode);
        echo json_encode($data);
    }

   



}