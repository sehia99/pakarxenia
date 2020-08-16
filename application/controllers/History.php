<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {
	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('history_model','',TRUE);
		$this->load->helper(array('form','url'));
		// proteksi halaman
		
	}
	
	// data history
	public function index()
	{
		$username = $this->session->userdata('username');
		$history = $this->history_model->listing($username);

		$data = array( 	'title' 	=> 'Halaman History',
						'history'	=> $history,
						'isi'		=> 'history/list',
						);
		$this->load->view('history/wrapper', $data); 

		// echo json_encode($history);
	}
	

	// $this->load->model('mjoin', '', TRUE);
 // $this->load->helper(array('form', 'url'));
 // }

 // public function index()
 // {
 //  $data['title'] = "Join CodeIgniter"; 

 //    // query memanggil function duatable di model
 //    $data['join2'] = $this->mjoin->duatable(); 
 //  $this->load->view('nong',$data); 
	// public function Tampilhistory()
	// {
	//     $data['hasil']=$this->history_model->Tampilhistory();
	// 	$this->load->view('history/list',$data);
	// }


	// // tambah history
	// public function tambah()
	// {
	// 	// validasi input
	// 	$valid = $this->form_validation;


	// 	$valid->set_rules('history','Nama history','required', 
	// 		array( 'required'  => '%s harus diisi'));


	// 	if($valid->run()===FALSE) {
	// 	// end validasi

	// 	$data = array( 'title' => 'Tambah History',
	// 					'isi'	=> 'history/tambah'
	// 				);
	// 	$this->load->view('history/list', $data, FALSE);
	// 	// masuk database
	// 	}else{
	// 		$i = $this->input;
	// 		$data = array( 	'id_penyakit'=> $i->post('id_penyakit'),
	// 						'id_gejala'   => $i->post('id_gejala')
	// 					 );
	// 		$this->history_model->tambah($data);
	// 		$this->session->set_flashdata('sukses','Data telah ditambah');
	// 		redirect(base_url('history/list'),'refresh');
	// 	}
	// 	// end masuk database
	// }

	// // edit history
	// public function edit($id_history)
	// {
	// 	$history = $this->history_model->detail($id_history);
	// 	// validasi input
	// 	$valid = $this->form_validation;


	// 	$valid->set_rules('gejala','Nama gejala','required', 
	// 		array( 'required'  => '%s harus diisi'));

	
	// 	if($valid->run()===FALSE) {
	// 	// end validasi

	// 	$data = array( 	'title' 		=> 'Edit History',
	// 					'history' 		=> $history,
	// 				   	'isi'   		=> 'history/edit');
	// 	$this->load->view('history/list', $data, FALSE);
	// 	// masuk database
	// 	}else{
	// 		$i = $this->input;
	// 		$data = array( 	'id_history'	=> $id_history,
	// 						'gejala'   	=> $i->post('gejala')
	// 						);
	// 		$this->history_model->edit($data);
	// 		$this->session->set_flashdata('sukses','Data telah diedit');
	// 		redirect(base_url('history/list'),'refresh');
	// 	}
	// 	// end masuk database
	// }
	// // delete history
	// public function delete($id)
	// {
	// 	$data = array('id' => $id);
	// 	$this->history_model->delete($data);
	// 	$this->session->set_flashdata('sukses','Data telah dihapus');
	// 	redirect(base_url('history/list'),'refresh');
	// }
}

/* End of file Gejala.php */
/* Location: ./application/controllers/admin/Gejala.php */