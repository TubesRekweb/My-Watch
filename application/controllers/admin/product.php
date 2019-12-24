<?php
class Product extends CI_Controller {

	public function index()
	{
		$data['barang']= $this->model_barang->tampil_data()->result();		
		if ($this->input->post('keyword')) {
			$data['barang'] = $this->model_barang->cariDataBarang();
		}
			$this->load->view('templates/admin_header');
			$this->load->view('templates/admin_menubar');
			$this->load->view('admin/product', $data);
			$this->load->view('templates/admin_footer');
	}
	
     public function detail($id){
	     $data['judul'] = 'Detail Data Barang';
	     $data['barang'] = $this->model_barang->getBarangById($id);
		 $this->load->view('templates/admin_header', $data);
		 $this->load->view('templates/admin_menubar',$data);
	     $this->load->view('admin/detail', $data);
	     $this->load->view('templates/admin_footer');
    }
		public function hapus($id){
		$this->model_barang->hapusDataBarang($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/Product');
	}


	//function ubah
	public function edit($id){
		$data['judul'] = 'Form Ubah Data Barang';
		$data['barang'] = $this->model_barang->getBarangById($id);
			$this->load->view('templates/admin_header',$data);
			$this->load->view('templates/admin_menubar');
			$this->load->view('admin/ubah', $data);
			$this->load->view('templates/admin_footer');
	}

	public function ubah(){
			$this->model_barang->ubahDataBarang();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('admin/Product');		
	}
}