<?php

class model_man extends CI_Model {

	public function getAllMan(){
		return $this->db->get('laki_laki')->result_array();
	}
	
	public function getManById($id){
		return $this->db->get('laki_laki')->row_array();
	}

}