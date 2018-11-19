<?php

class Masdet_table extends CI_Controller
{
    function __construct()
    {
        // $CI =& get_instance();
        // $this->uri->segment(1) = $this->uri->segment(1); // controller name 
        // $mod_name = 'm_'.$this->uri->segment(1); // model name 
        parent::__construct();
        if ($this->session->userdata('level') == '') {
            redirect('auth');
        }
        $this->load->model('m_'. $this->uri->segment(1));
    }

    public function index()
    {
        $data = array(
            'container' => 'v_'.$this->uri->segment(1),
            'page_title' => 'Masdet Table'
        );
        $this->load->view('template/template', $data);
        $this->load->view('js_page/' . $this->uri->segment(1) . '_js'); 
    }

    public function show_data()
    {
        $data = $this->m_masdet_table->item_list();
        echo json_encode($data);
    }

    // Form untuk Add (new) masdet
    public function add_masdet()
    {
        $data = array(
            'container' => 'v_masdet_form',
            'page_title' => 'Masdet Add'
        );
        $this->load->view('template/template', $data);
    }


    // Form untuk Edit Masdet
    public function edit_masdet()
    {
        $id = $this->uri->segment(3);
        $form_data = $this->m_masdet_table->masdet_edit($id);
        $data = array(
            'container' => 'v_masdet_form',
            'page_title' => 'Masdet Edit',
            'form_data' => $form_data
        );
        $this->load->view('template/template', $data);
    }

    public function save_masdet()
    {
        $data = array(
            'transaksi_id' => $this->input->post('transaksi_id'),
            'transaksi_tanggal' => $this->input->post('transaksi_tanggal'),
            'transaksi_catatan' => $this->input->post('transaksi_catatan') 
        );

        $hasil = $this->m_masdet_table->save($data);
        if ($hasil) {
            $this->index();
        } else {
            echo "something wrong";
        }
    }

}

?>