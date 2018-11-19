<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_masdet_table extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function item_list()
    { // get barang list
        $hasil = $this->db->get('tbl_transaksi');
        return $hasil->result();
    }

    public function simpan_barang($kobar, $nabar, $harga)
    {
        $hasil = $this->db->query("INSERT INTO tbl_barang (barang_kode, barang_nama, barang_harga) VALUES('$kobar', '$nabar', '$harga')");
        return $hasil;
    }

    public function get_barang_by_kode($kobar)
    {
        $hasil = $this->db->get_where('tbl_barang', array('barang_kode' => $kobar));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $data) {
                $hasil_by_kode = array(
                    'barang_kode' => $data->barang_kode,
                    'barang_nama' => $data->barang_nama,
                    'barang_harga' => $data->barang_harga,
                );
            }
        }
        return $hasil_by_kode;
            // return $hasil->result();
    }

    function update_barang($kobar, $nabar, $harga)
    {
        $data = array(
            'barang_nama' => $nabar,
            'barang_harga' => $harga,
        );

        $this->db->where('barang_kode', $kobar);
        $hasil = $this->db->update('tbl_barang', $data);
        return $hasil;
    }

    public function hapus_barang($kobar)
    {
        $hasil = $this->db->delete('tbl_barang', array('barang_kode' => $kobar));
        return $hasil;
    }

    public function save($data)
    {      
        $hasil = $this->db->insert('tbl_transaksi', $data);
        return $hasil;
    }

    public function masdet_edit($id)
    {

        $hasil = $this->db->get_where('tbl_transaksi', array('transaksi_id' => $id));
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $data) {
                $hasil_query = array(
                    'transaksi_id' => $data->transaksi_id,
                    'transaksi_tanggal' => $data->transaksi_tanggal,
                    'transaksi_catatan' => $data->transaksi_catatan,
                );
            }
        }

        return $hasil_query;
    }


}





?>