<?php

class Periode_menu extends CI_Model{
	public function tampil_data(){
        return $this->db->get('mc_menu');
        
    }
}

?>