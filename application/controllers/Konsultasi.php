<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi extends CI_Controller {
	

	
	public function index()
  	{
    $data =  array('title' => 'Sistem pakar diagnosis kerusakan xenia');
            // 'isi' => 'konsultasi/list' );
        $this->load->view('konsultasi/wrapper', $data, FALSE);
	// Pertanyaan

	
		

		
	}
	
}
