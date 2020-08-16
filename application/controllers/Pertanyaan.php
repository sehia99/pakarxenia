<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Relasi_model');
		$this->load->helper('url_helper');
	}
	

	
	public function index($id='')
  	{
  				if ($id == '') {
			$data2['pertanyaan'] = $this->Relasi_model->pertanyaan('1');
		}elseif ($id == '99') {
			redirect('pertanyaan/hasil');
		}else{
			$data2['pertanyaan'] = $this->Relasi_model->pertanyaan($id);
			if ($data2['pertanyaan']->hasil != null) {
				$data2['hasil'] = $data2['pertanyaan']->hasil;
			}


    $data =  array('title' => 'Sistem pakar diagnosis kerusakan xenia',
            'isi' => 'home/list',$data2);
    // $data3 = $this->load->view($data,$data2);
        $this->load->view('pertanyaan/wrapper', $data, FALSE);
    }
}
}
	