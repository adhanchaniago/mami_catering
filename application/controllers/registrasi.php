<?php

class Registrasi extends CI_Controller{

	public function index()
	{
		$this->form_validation->set_rules('nama','Nama','required', [
			'required'	=>	'Nama wajib di isi'
		]);
		$this->form_validation->set_rules('email','Email','required', [
			// 'is_unique' => 	'Email Sudah terdaftar'
			'required'	=>	'Email wajib di isi'
		]);
		$this->form_validation->set_rules('password_1','Password','required|matches[password_2]', [
			'required'	=>	'password wajib di isi',
			'matches'	=>	'password tidak cocok'

		]);
		$this->form_validation->set_rules('password_2',' Password','required|matches[password_1]');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('registrasi');
			$this->load->view('templates/footer');
		} else {
			$data = [
				'id'		=> '',
				'nama'		=> htmlspecialchars($this->input->post('nama',true)),
				'email'		=> htmlspecialchars($this->input->post('email',true)),
				'password'	=> $this->input->post('password_1'),
				'role_id'	=> 2,
				'is_active'	=> 0,
				'date_created' => time()
			];

			$this->db->insert('mc_user', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat! Akun Anda Telah Terdaftar. Silahkan Login
				</div>');
			redirect('auth/login');
		}
		
	}
}