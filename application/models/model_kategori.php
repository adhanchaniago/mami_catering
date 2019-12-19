<?php 

class Model_kategori extends CI_Model{
	
	public function data_minuman(){
		return $this->db->get_where("mc_menu",array('kategori' => 'minuman'));
	}

	public function data_coffee_and_snack(){
		return $this->db->get_where("mc_menu",array('kategori' => 'coffee and snack'));
	}

	public function data_tradisional(){
		return $this->db->get_where("mc_menu",array('kategori' => 'tradisional'));
	}

	public function data_chinese(){
		return $this->db->get_where("mc_menu",array('kategori' => 'chinese'));
	}

	public function data_modern(){
		return $this->db->get_where("mc_menu",array('kategori' => 'modern'));
	}
}