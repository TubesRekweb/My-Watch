<?php

class Model_women extends CI_Model {

	public function getAllWomen(){
		return $this->db->get('perempuan')->result_array();
	}
	
	public function getWomenById($id){
		return $this->db->get('perempuan')->row_array();
	}

	public function hapusDataBarang($id){
		$this->db->delete('tb_barang', ['id' => $id]);
	}
}