<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function index(){


		    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
// menampilkan barang
		    $data['barang'] = $this->model_barang->tampil_data()->result();
		
			$this->load->view('templates/admin_header', $data);
			$this->load->view('templates/admin_menubar', $data);
			$this->load->view('admin/dashboard', $data);
			$this->load->view('templates/admin_footer');
	}

	public function hapus($id){
		$this->model_barang->hapusDataBarang($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin');
	}
}