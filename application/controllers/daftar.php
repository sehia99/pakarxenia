
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function index()
	{
		$this->load->model('User_model');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		if($this->form_validation->run()){
			$i = $this->input;
			$data = array(
				'username' => $i->post('username'),
				'nama'		=> $i->post('nama'),
				'email' 	=> $i->post('email'),
				'password'  => sha1($i->post('password')),
				'akses_level' => 'user'
			);

			$this->User_model->tambah($data);
			redirect('login');
		}else{
			$this->load->view('daftar/daftar');
		}		
	}

}

/* End of file daftar.php */
/* Location: ./application/controllers/daftar.php */