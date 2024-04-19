<?php

class Medis_model extends CI_Model
{
    public function get_all_user()
    {
        return $this->db->get('employees');
    }
    
    public function get()
     {
        
    }

    
}