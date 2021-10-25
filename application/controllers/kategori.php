<?php

class Kategori extends CI_Controller{
    public function elektronik(){
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('elektronik',$data);
        $this->load->view('templates/footer');

    }

    public function pakaian(){
        $data['pakaian'] = $this->model_kategori->data_pakaian()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian',$data);
        $this->load->view('templates/footer');

    }

    public function peralatan_olahraga(){
        $data['peralatan_olahraga'] = $this->model_kategori->data_peralatan_olahraga()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('peralatan_olahraga',$data);
        $this->load->view('templates/footer');

    }

    public function pakaian_anak(){
        $data['pakaian_anak'] = $this->model_kategori->data_pakaian_anak()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_anak',$data);
        $this->load->view('templates/footer');

    }

    public function aksesoris(){
        $data['aksesoris'] = $this->model_kategori->data_aksesoris()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('aksesoris',$data);
        $this->load->view('templates/footer');

    }
}