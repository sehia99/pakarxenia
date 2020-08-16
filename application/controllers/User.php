<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Konsultasi_model');
		$this->load->model('Cust_model');
		$this->load->model('Relasi_model');
		$this->load->model('User_model');
		

	}


	public function index()
	{
		$data['content']=$this->load->view('user/pages/home','',true);
		$this->load->view('user/default',$data);
	}
	
	public function tentang()
	{
		$data['content']=$this->load->view('user/pages/tentang','',true);
		$this->load->view('user/default',$data);
	}
	

	public function konsultasi()
	{
		$data2['gejala']=$this->Gejala_model->listing();
		// $data2['konsultasi']=$this->Konsultasi_model->listing();
		$data['content']=$this->load->view('user/pages/konsultasi',$data2,true);
		$this->load->view('user/default',$data);
	// echo json_encode($data2);
	}

	public function submit_konsultasi()
	{
		$id =$_POST['gejala'];
		

		$diagnosa = $this->Relasi_model->diagnosa($id);




		
		echo json_encode($diagnosa) ;
		
	}

	public function pertanyaan($id=''){
		if ($id == '') {
			$data2['pertanyaan'] = $this->Relasi_model->pertanyaan('1');
		}elseif ($id == '99') {
			redirect('user/hasil');
		}else{
			$data2['pertanyaan'] = $this->Relasi_model->pertanyaan($id);
			if ($data2['pertanyaan']->hasil != null) {
				$data2['hasil'] = $data2['pertanyaan']->hasil;
			}
			
		}

		$data['content']=$this->load->view('user/pages/pertanyaan',$data2,true);
		$this->load->view('user/default',$data);

		

		
	}

	public function hasil($hasil=''){
		if ($hasil=='') {

			// echo 'Kerusakan tidak terdeteksi';
			
			//$data['content']=$this->load->view('user/pages/gagal');
			//$this->load->view('user/default',$data);
			$data2['hasil'] = '';
			$data['content']=$this->load->view('user/pages/gagal',$data2,true);
			$this->load->view('user/default',$data);
		}else{
			
			$username = $this->session->userdata('username');
			$data2['hasil'] = $this->Relasi_model->hasil($hasil);
			$data2['solusi'] = $this->Relasi_model->solusi($data2['hasil']->id_kerusakan);
			$data2['username'] = $this->session->userdata('username');
			$data['content']=$this->load->view('user/pages/hasil',$data2,true);
			$i = $this->input;
			$datau = array(
					'username' => $username
			);
			$datai = array( 'tanggal'			=> date('Y-m-d H:i:s'),
							'nama_customer'		=> $i->post('nama_customer'),
							'type'				=> $i->post('type'),
							'tahun'				=> $i->post('tahun'),
							'nama_kerusakan'	=> $i->post('nama_kerusakan'),
							'solusi'			=> $i->post('solusi'),
							'username'			=> $username 
						);
			$datatry = array(
				'username' => $data2['username'],
				'nama_kerusakan' => $data2['hasil']->nama_kerusakan,
				//'nama_pasien' =>$i->post('nama_customer'),
					//		'type'				=> $i->post('type'),
						//	'tahun'				=> $i->post('tahun'),
				//'solusi' => $data2['solusi']
			);

			$this->User_model->tambah_hasil($datatry);
			//$this->User_model->tambah_hasil($data2['hasil'],['solusi'],$data,$datau);
			$this->load->view('user/default',$data);
			
		}
	

	
		

		
	}
	
}
