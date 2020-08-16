<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	// HALAMAN TENTANG WEBSIT - HomePage
	public function index()
	{
		$data =  array('title' => 'Sistem pakar diagnosis kerusakan xenia',
						'isi' => 'about/list' );
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */