<?php

class detailUser extends CI_Controller {

  public function detail($id){
    $data['judul'] = 'Detail Data Barang';
    $data['barang'] = $this->model_barang->getBarangById($id);
    $this->load->view('templates/admin_header', $data);
    $this->load->view('home/detail', $data);
    $this->load->view('templates/admin_footer');
  }
}