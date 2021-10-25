<?php
class Model_kategori extends CI_Model{
    public function data_elektronik(){
        return $this->db->get_where('tb_barang', 
        array('kategori' => 'elektronik'));

    }
    public function data_pakaian(){
        return $this->db->get_where('tb_barang', 
        array('kategori' => 'pakaian'));

    }
    public function data_pakaian_anak(){
        return $this->db->get_where('tb_barang',
         array('kategori' => 'pakaian anak'));

    }
    public function data_aksesoris(){
        return $this->db->get_where('tb_barang',
         array('kategori' => 'aksesoris'));

    }
    public function data_peralatan_olahraga(){
        return $this->db->get_where('tb_barang', 
        array('kategori' => 'peralatan olahraga'));

    }
}