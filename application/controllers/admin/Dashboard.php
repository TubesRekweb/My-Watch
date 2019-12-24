<?php

class Dashboard extends CI_Controller {

	public function index(){


		    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
			// menampilkan barang dengan mengambil data di modelbarang yang ada di folder model
		    $data['barang'] = $this->model_barang->tampil_data()->result();
		
			$this->load->view('templates/admin_header', $data);
			$this->load->view('templates/admin_menubar', $data);
			$this->load->view('admin/dashboard', $data);
			$this->load->view('templates/admin_footer');
	}

	public function proses_pesanan(){
		$is_processed = $this->model_invoice->index();
		if( $is_processed ){

			$this->cart->destroy();
			$this->load->view('templates/admin_header');
			$this->load->view('templates/admin_menubar');
			$this->load->view('proses_pesanan');
			$this->load->view('templates/admin_footer');
		} else{
			echo "maaf Pesanan anda gagal diproses";
		}
	}
}


