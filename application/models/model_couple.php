<?php

class model_couple extends CI_Model 
{
    public function getAllCouple()
    {
        return $this->db->get('couple')->result_array();
    }

    public function getManById($id){
		return $this->db->get('couple')->row_array();
	}

	public function hapusDataBarang($id){
		$this->db->delete('tb_barang', ['id' => $id]);
	}

	public function find($id)
	{
		$result = $this->db->where('id', $id)
				->limit(1)
				->get('couple');
		if($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();

		}
		
	}
}
