<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Crud_table_model extends CI_Model {

        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        public function barang_list() { // get barang list
            $hasil = $this->db->get('tbl_barang');
            return $hasil->result();
        }

        public function simpan_barang($kobar, $nabar, $harga) {
            $hasil = $this->db->query("INSERT INTO tbl_barang (barang_kode, barang_nama, barang_harga) VALUES('$kobar', '$nabar', '$harga')");
            return $hasil;
        }

        public function get_barang_by_kode($kobar) {
            $hasil = $this->db->get_where('tbl_barang', array('barang_kode' =>  $kobar));
            if($hasil->num_rows()>0){
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

        function update_barang($kobar, $nabar, $harga) {
            $data = array(
                'barang_nama' => $nabar,
                'barang_harga' => $harga,
            );

            $this->db->where('barang_kode', $kobar);
            $hasil = $this->db->update('tbl_barang', $data);
            return $hasil;
        }

        public function hapus_barang($kobar) {
            $hasil = $this->db->delete('tbl_barang', array('barang_kode' => $kobar)); 
            return $hasil;
        }


    }





?>