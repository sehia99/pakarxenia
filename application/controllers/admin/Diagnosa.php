<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa extends CI_Controller {
// LOAD MODEL
	public function __construct()
	{
		parent::__construct();
		$this->load->model('diagnosa_model');
		//proteksi halaman admin dengan fungsi cek login
		

  // HALAMAN Diagnosa WEBSIT - HomePage
  public function index()
  {
    $data =  array('title' => 'Sistem Pakar Deteksi Dini Penyakit Stroke',
            'isi' => 'Admin/diagnosa/list' );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

}

/* End of file Diagnosa.php */
/* Location: ./application/controllers/Diagnosa.php */