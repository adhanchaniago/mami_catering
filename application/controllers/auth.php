<?php 

class Auth extends CI_Controller {

 public function login()
 {

  $data['title'] = 'Login Mami Catering';
  $this->form_validation->set_rules('email','Email','required',['required' => 'Email wajib diisi!']);
  $this->form_validation->set_rules('password','Password','required',['required' => 'Password wajib diisi!']);
  if ($this->form_validation->run() == FALSE)
  {
   $this->load->view('templates/header',$data);
   $this->load->view('form_login');
   $this->load->view('templates/footer');
  }else {
   // //validasinya sukses
   // $this->_login();


   $auth = $this->model_auth->cek_login();

   if($auth == FALSE)
   {
    $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Email atau Password Anda Salah!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>');
    redirect('auth/login');
   }else {
    $this->session->set_userdata('email',$auth->email);
    $this->session->set_userdata('role_id',$auth->role_id);

    switch($auth->role_id){
     case 1 : redirect('admin/dashboard_admin');
        break;
     case 2 : redirect('welcome');
        break;
     default: break;
    }

   }
  }
 }


 // private function _login()
 // {
 //  $email = $this->input->post('email');
 //  $password = $this->input->post('password');

 //  $mc_user = $this->db->get_where('mc_user', ['email' => $email])->row_array();
  
 //  //usernya ada
 //  if($mc_user) {
 //   //jika usernya aktif
 //   if($mc_user['is_active'] == 1){
 //    // cek password
 //    if (password_verify($password, $user['password'])) {
 //     $data = [
 //      'email' => $mc_user['email'],
 //      'role_id' => $mc_user ['role_id']
 //     ];
 //     $this->session->set_userdata($data);
 //     redirect('admin/dashboard_admin');
 //     redirect('welcome');
     
 //    }else {
 //     $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password Salah!
 //     </div>');
 //     redirect('auth/login');
 //    }

 //   }else {
 //    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Email Belum Aktif
 //    </div>');
 //    redirect('auth/login');
 //   }

 //  }else{
 //   $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Email Tidak Teregistrasi!
 //    </div>');
 //   redirect('auth/login');
 //  }
 // }

 public function logout()
 {
  $this->session->sess_destroy();
  redirect('auth/login');
 }
}