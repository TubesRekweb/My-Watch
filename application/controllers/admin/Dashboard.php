<?php

class Dashboard extends CI_Controller {

	public function index(){


		    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			// menampilkan barang
		    $data['barang'] = $this->model_barang->tampil_data()->result();
		
			$this->load->view('templates/admin_header', $data);
			$this->load->view('templates/admin_menubar', $data);
			$this->load->view('admin/dashboard', $data);
			$this->load->view('templates/admin_footer', $data);
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

<<<<<<< HEAD
	public function ubah(){
			$this->model_barang->ubahDataBarang();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('admin/dashboard');		
	}

	public function detail($id){
		$data['judul'] = 'Detail Data Barang';
		$data['barang'] = $this->model_barang->getBarangById($id);
		$this->load->view('templates/admin_header', $data);
		$this->load->view('admin/detail', $data);
		$this->load->view('templates/admin_footer');
	}
}
=======
}
>>>>>>> 44fdfc828d2ff3c289c6656779c12edf4a0afb7b
