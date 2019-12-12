<?php

class model_couple extends CI_Model 
{
    public function getAllCouple()
    {
        return $this->db->get('couple')->result_array();
    }
}