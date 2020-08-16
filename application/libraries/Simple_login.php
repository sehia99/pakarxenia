<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();

        $this->CI->load->model('user_model');

	}
	//fungsi login
	public function login($username,$password)
	{
		$check = $this->CI->user_model->login($username,$password);
		if($check){
				$id_user	= $check->id_user;
				$nama		= $check->nama;
				$akses_level= $check->akses_level;
				//create session
				$this->CI->session->set_userdata('id_user',$id_user);
				$this->CI->session->set_userdata('nama',$nama);
				$this->CI->session->set_userdata('username',$username);
				$this->CI->session->set_userdata('akses_level',$akses_level);
				//redirect ke halaman admin yang diproteksi
			if ($akses_level=='Admin') {
				# code...
			redirect(base_url('admin/dashboard'),'refresh');
			}else{
				redirect(base_url('pakar/dashboard'),'refresh');
			}
		}else{
			//kalau tidak ada, maka suruh login lagi
			$this->CI->session->set_flashdata('warning', 'username atau password salah');
			redirect(base_url('login'),'refresh');
		}
	}
	//fungsi cek login
	public function cek_login()

	{
		//memeriksa apakah session sudah ada atau belum jika belum redirect hal login
		if ($this->CI->session->userdata('username')=="") {
			$this->CI->session->set_flashdata('warning', 'anda belum login');
			redirect(base_url('login'),'refresh');

			}

	}
	//fungsi logout
	public function logout()
	{
			// membuang semua session pada ssaat login
				$this->CI->session->unset_userdata('id_user');
				$this->CI->session->unset_userdata('nama');
				$this->CI->session->unset_userdata('username');
				$this->CI->session->unset_userdata('akses_level');
				//setelah session dibuang maka redirect ke login

				$this->CI->session->set_flashdata('sukses', 'anda berasil logout');
			redirect(base_url('home'),'refresh');

	}

}

/* End of file Simple_login.php */
/* Location: ./application/libraries/Simple_login.php */
