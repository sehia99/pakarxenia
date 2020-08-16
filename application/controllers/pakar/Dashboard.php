<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	//load model
	public function __construct()
	{
		parent::__construct();
		//proteksi halaman admin dengan fungsi cek login
		// $this->simple_login->cek_login();
	}

	public function index()
	{
		$data  = array('title' => 'Selamat Datang Pakar' ,
						'isi'  => 'Pakar/dashboard/list'
						);
		$this->load->view('pakar/layout/wrapper', $data, FALSE);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */