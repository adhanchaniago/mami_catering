<?php

class Periode_menu extends CI_Controller{

    public function index()
	{
		// $data['periode'] = $this->model_periode->tampil_data();
		$data['menu'] = $this->model_menu->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/periode_menu', $data);
		$this->load->view('templates_admin/footer');
	}

}

?>