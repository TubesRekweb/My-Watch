<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

	public function hapus($id){
		$this->model_barang->hapusDataBarang($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/Databarang');
	}


	//function ubah
	public function edit($id){
		$data['judul'] = 'Form Ubah Data Barang';
		$data['barang'] = $this->model_barang->getBarangById($id);
			$this->load->view('templates/admin_header', $data);
			$this->load->view('admin/ubah', $data);
			$this->load->view('templates/admin_footer');
	}

	public function ubah(){
			$this->model_barang->ubahDataBarang();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('admin/Dashboard');		
	}
}