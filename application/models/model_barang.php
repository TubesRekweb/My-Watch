<?php

class Model_barang extends CI_Model {

	public function tampil_data(){
		return $this->db->get('tb_barang');
	}
	
	public function tambah_barang($data,$table){
		$this->db->insert($table,$data);
	}

	public function hapusDataBarang($id){
		$this->db->delete('tb_barang', ['id' => $id]);
	}

	public function getBarangById($id){
		return $this->db->get_where('tb_barang', ['id' => $id])->row_array();
	}

	public function ubahDataBarang(){
		$data = [
			"nama_produk" => $this->input->post('nama_produk'),
			"spesifikasi_produk" => $this->input->post('spesifikasi_produk'),
			"harga_produk" => $this->input->post('harga_produk'),
			"warna_produk" => $this->input->post('warna_produk'),
			"stok" => $this->input->post('stok')
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tb_barang', $data);
		redirect('admin/Admin');	
	}
}