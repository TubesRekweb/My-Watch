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
			"kategori_produk" => $this->input->post('kategori_produk'),
			"harga_produk" => $this->input->post('harga_produk'),
			"warna_produk" => $this->input->post('warna_produk'),
			"stok" => $this->input->post('stok'),
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('tb_barang', $data);

		redirect('admin/product');	
	}

	public function find($id)
	{
		$result = $this->db->where('id', $id)
				->limit(1)
				->get('tb_barang');
		if($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();

		}
		
	}

	public function cariDataBarang(){
		$keyword = $this->input->post('keyword', true); 
		$this->db->like('nama_produk', $keyword);
		$this->db->or_like('spesifikasi_produk', $keyword);
		$this->db->or_like('kategori_produk', $keyword);
		$this->db->or_like('harga_produk', $keyword);
		$this->db->or_like('warna_produk', $keyword);
		return $this->db->get('tb_barang')->result();
	}
}