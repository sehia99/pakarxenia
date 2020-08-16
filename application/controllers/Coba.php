<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Model_coba');

	}
	

	public function index()
	{ 

		$data =  array('title' => 'Sistem pakar diagnosis kerusakan xenia',
            'isi' => 'home/list',
            'gejala' =>$this->Model_coba->Coba()->result() );
    
        $this->load->view('pertanyaan/wrapper', $data, FALSE);

	}

	// public function coba($id=''){
	// 	if ($id == '') {
	// 		$data2['coba'] = $this->Model_coba->coba('1');
	// 	}elseif ($id == '99') {
	// 		redirect('coba/hasil');
	// 	}else{
	// 		$data2['coba'] = $this->Model_coba->coba($id);
	// 		if ($data2['coba']->hasil != null) {
	// 			$data2['hasil'] = $data2['coba']->hasil;
			

	// 	$data =  array('title' => 'Sistem pakar diagnosis kerusakan xenia',
 //            'isi' => 'home/list',
 //            'gejala' =>$this->Model_coba->getCoba()->result() );
	// 	$this->load->view('pertanyaan/wrapper',$data,$data2, FALSE);
	// 	}

	// 	}

	// 	public function hasil($hasil=''){
	// 	if ($hasil=='') {
	// 		echo 'tidak terdeteksi';
	// 	}else{
	
	// 		$data2['hasil'] = $this->Model_coba->hasil($hasil);
	// 		$data2['solusi'] = $this->Model_coba->solusi($data2['hasil']->id_kerusakan);

	// 		// $data['content']=$this->load->view('coba/pages/hasil',$data2,true);
	// 		$this->load->view('pertanyaan/wrapper',$data);
			
	// 	}
}
