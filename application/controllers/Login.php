<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

// halaman login
	public function index()
	{ 
		//validasi
		$this->load->model('User_model');
		$this->form_validation->set_rules('username', 'Username', 'required',
				array(	'required' => '%s harus diisi'));

		$this->form_validation->set_rules('password', 'Password', 'required',
				array(	'required' => '%s harus diisi'));
		
		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			//proses ke simple login
			$run = $this->User_model->login($username,$password);
			if($run){
				
				if($run->akses_level == 'Admin'){
					$this->session->set_userdata('username', $run->username);
					redirect('admin/dashboard','refresh');
				}elseif($run->akses_level == 'Pakar'){
					$this->session->set_userdata('username', $run->username);
					redirect('pakar/Dashboard','refresh');
				}else{
					$this->session->set_userdata('username', $run->username);
					redirect('home','refresh');
				}	
			}
			
		}

		//end validasi
		$data  = array('title' => 'Login' );
		$this->load->view('login/list', $data, FALSE);
	}

	// fungsi logout
	public function logout()
	{
		//ambil fungs logut dr simple login
		$this->session->unset_userdata('username');
		//$this->session->session_destroy();
		redirect('home','refresh');

	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */