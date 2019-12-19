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

	public function coffee_and_snack()
	{
		$data['coffee_and_snack'] = $this->model_kategori->data_coffee_and_snack()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('coffee_and_snack',$data);
		$this->load->view('templates/footer');
	}

	public function tradisional()
	{
		$data['tradisional'] = $this->model_kategori->data_tradisional()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('tradisional',$data);
		$this->load->view('templates/footer');
	}

	public function chinese()
	{
		$data['chinese'] = $this->model_kategori->data_chinese()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('chinese',$data);
		$this->load->view('templates/footer');
	}

	public function modern()
	{
		$data['modern'] = $this->model_kategori->data_modern()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('modern',$data);
		$this->load->view('templates/footer');
	}
}