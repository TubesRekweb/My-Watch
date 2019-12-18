<?php

class Model_kategori extends CI_Model {
	public function data_man(){
		return $this->db->get_where("tb_barang",array('kategori_produk' => 'Man'));
	}

	public function data_woman(){
		return $this->db->get_where("tb_barang",array('kategori_produk' => 'Woman'));
	}

	public function data_couple(){
		return $this->db->get_where("tb_barang",array('kategori_produk' => 'Couple'));
	}
}