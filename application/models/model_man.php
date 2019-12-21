<?php

class model_man extends CI_Model {

	public function getAllMan(){
		return $this->db->get('laki_laki')->result_array();
	}
	
	public function getManById($id){
		return $this->db->get('laki_laki')->row_array();
	}

	public function hapusDataBarang($id){
		$this->db->delete('tb_barang', ['id' => $id]);
	}

	public function find($id)
	{
		$result = $this->db->where('id', $id)
				->limit(1)
				->get('laki_laki');
		if($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();

		}
		
	}

}
