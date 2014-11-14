<?php

class Mautocomplete extends CI_Model{
    
    public function GetRow($keyword) {        
        $this->db->order_by('id', 'DESC');
        $this->db->like("name", $keyword);
        return $this->db->get('autocomplete')->result_array();
    }
}