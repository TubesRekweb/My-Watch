<?php

class Gallery extends CI_Controller {

	public function index(){

		    // menampilkan barang dengan mengambil data di modelbarang dan modelkategori yang ada di folder model
			$data['barang'] = $this->model_barang->tampil_data()->result();
			$data['man'] = $this->model_kategori->data_man()->result();
			$data['woman'] = $this->model_kategori->data_woman()->result();
			$data['couple'] = $this->model_kategori->data_couple()->result();
		
			$this->load->view('templates/admin_header', $data);
			$this->load->view('templates/admin_menubar', $data);
			$this->load->view('admin/Gallery', $data);
			$this->load->view('templates/gallery_footer');
	}
	
}