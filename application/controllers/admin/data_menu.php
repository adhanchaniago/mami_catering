<?php

class Data_menu extends CI_Controller{
	
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Anda Belum Login!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
				redirect('auth/login');
		}
	}
	
	public function index()
	{
		$data['menu'] = $this->model_menu->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_menu',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$nama_menu			= $this->input->post('nama_menu');
		$keterangan			= $this->input->post('keterangan');
		$kategori			= $this->input->post('kategori');
		$harga				= $this->input->post('harga');
		// $now				= date('Y-m-d H:i:s');
		$gambar				= $_FILES['gambar']['name'];
		if ($gambar			=''){}else{
			$config ['upload_path'] = './upload/menu';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar Gagag diUpload";
			}else {
				$gambar=$this->upload->data('file_name');
			}
		}

		$data = array (
			'nama_menu'		=> $nama_menu,
			'keterangan'	=> $keterangan,
			'kategori'		=> $kategori,
			'harga'			=> $harga,
			'waktu'			=> time(),
			'gambar'		=> $gambar,
		);

		$this->model_menu->tambah_menu($data, 'mc_menu');
		redirect('admin/data_menu/index');
	}

	public function edit($id)
	{
		$where = array('id_menu' =>$id);
		$data['menu'] = $this->model_menu->edit_menu($where, 'mc_menu')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_menu',$data);
		$this->load->view('templates_admin/footer');                                              
	}

	public function update(){
		$id 			= $this->input->post('id_menu');
		$nama_menu 		= $this->input->post('nama_menu');
		$keterangan 	= $this->input->post('keterangan');
		$kategori 		= $this->input->post('kategori');
		$harga 			= $this->input->post('harga');

		$data = array(

			'nama_menu' 	=> $nama_menu,
			'keterangan'	=> $keterangan,
			'kategori'		=> $kategori,
			'harga'			=> $harga,

		);

		$where = array(
			'id_menu' => $id
		);

		$this->model_menu->update_data($where,$data,'mc_menu');
		redirect('admin/data_menu/index');
	}

	public function hapus ($id)
	{
		$where = array('id_menu' => $id);
		$this->model_menu->hapus_data($where, 'mc_menu');
		redirect('admin/data_menu/index');
	}
}