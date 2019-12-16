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

		public function find($id)
	{
		$result = $this->db->where('id', $id)
				->limit(1)
				->get('perempuan');
		if($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();

		}
		
	}
}