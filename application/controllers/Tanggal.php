<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// HALAMAN UTAMA WEBSIT - HomePage
	public function index()
	{
		$data =  array('title' => 'Sistem pakar diagnosis kerusakan xenia',
						'isi' => 'home/list' );
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */