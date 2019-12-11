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
}