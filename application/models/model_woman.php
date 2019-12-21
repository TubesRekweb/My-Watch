<?php

class Model_woman extends CI_Model {

	public function getAllWoman(){
		return $this->db->get('perempuan')->result_array();
	}
	
	public function getWomanById($id){
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