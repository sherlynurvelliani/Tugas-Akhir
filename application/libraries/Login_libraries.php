<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_libraries
{
	protected $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
        //load data model admin
		$this->CI->load->model('Admin_model');
	}

	// fungsi login
	public function login($username,$password)
	{
		$check = $this->CI->Admin_model->login($username,$password);
		//jika ad data admin, maka create session login
		if($check){
			$id_admin 	 	= $check->id_admin;
			$level    = $check->level;
			// create session
			$this->CI->session->set_userdata('id_admin',$id_admin);
			$this->CI->session->set_userdata('username',$username);
			$this->CI->session->set_userdata('level',$level);
			// redirect ke halaman admin yang telah diproteksi
			redirect(base_url('admin/dashboard'),'refresh');
		}
		else{
			// jika username dan pw kosong atau salah
			$this->CI->session->set_flashdata('warning', 'Username atau Password salah');
			redirect(base_url('login'),'refresh');
		}
	}

	// fungsi cek login
	public function cek_login()
	{
		// memeriksa session sdh ada atau blm, jika blm arahkan ke halaman login
		if($this->CI->session->userdata('username') == ""){
			$this->CI->session->set_flashdata('warning', 'Anda belum Login');
			redirect(base_url('login'),'refresh');
		}
	}

	// fungsi cek logout
	public function logout()
	{
		// membuang semua session yang telah di set pada login
		$this->CI->session->unset_userdata('id_admin');
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('level');
		// setalh session dibuang, maka redirect ke login
		$this->CI->session->set_flashdata('sukses', 'Anda berhasil Logout');
		redirect(base_url('login'),'refresh');
	}


}

/* End of file Login_libraries.php */
/* Location: ./application/libraries/Login.php */
