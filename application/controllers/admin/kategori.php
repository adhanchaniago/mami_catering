<?php 

class Kategori extends CI_Controller{
	public function minuman()
	{
		$data['minuman'] = $this->model_kategori->data_minuman()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('minuman',$data);
		$this->load->view('templates/footer');
	}
}