<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solusi extends CI_Controller {

	// LOAD MODEL
	public function __construct()
	{
		parent::__construct();
		$this->load->model('solusi_model');
		//proteksi halaman pakar dengan fungsi cek login
		$this->simple_login->cek_login();
	}

	// DATA solusi
	public function index()
	{
		$solusi = $this ->solusi_model->listing();

		$data = array(	'title' => 'Data Solusi',
						'solusi'	=> $solusi,
						'isi'	=> 'pakar/solusi/list'
					);
		$this->load->view('pakar/layout/wrapper', $data, FALSE);	
	}

	// TAMBAH Solusi
	public function tambah()
	{
		// VALIDASI INPUT
		$valid = $this->form_validation;
		$valid->set_rules('id_solusi','ID Solusi','required',
			array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('id_kerusakan','ID Kerusakan','required',
			array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('solusi','Solusi','required',
			array( 'required'	=> '%s harus diisi'));
		

		if($valid->run()===FALSE) {
		// END VALIDASI

		$data = array(	'title' => 'Tambah Solusi',
						'isi'	=> 'pakar/solusi/tambah'
					);
		$this->load->view('pakar/layout/wrapper', $data, FALSE);

		// MASUK DATABASE
	}else{
		$i = $this->input;
		$data = array(	'id_solusi'					=>$i->post('id_solusi'),
						'id_kerusakan'				=>$i->post('id_kerusakan'),
						'solusi'					=>$i->post('solusi'));
		$this->solusi_model->tambah($data);
		$this->session->set_flashdata('sukses', 'Data telah ditambahkan');
		redirect(base_url('pakar/solusi'),'refresh');
		
	}
	// END DATABASE

	}

	// EDIT solusi
	public function edit($id_solusi)
	{
		$solusi = $this->solusi_model->detail($id_solusi);

		// VALIDASI INPUT
		$valid = $this->form_validation;
		$valid->set_rules('id_solusi','ID Solusi','required',
			array( 'required'	=> '%s harus diisi'));	
		$valid->set_rules('id_kerusakan','ID Kerusakan','required',
			array( 'required'	=> '%s harus diisi'));	
		$valid->set_rules('solusi','Solusi','required',
			array( 'required'	=> '%s harus diisi'));
		
		
		if($valid->run()===FALSE) {
		// END VALIDASI

		$data = array(	'title' => 'Edit Solusi',
						'solusi'	=> $solusi,
						'isi'	=> 'pakar/solusi/edit'
					);
		$this->load->view('pakar/layout/wrapper', $data, FALSE);

		// MASUK DATABASE
	}else{
		$i = $this->input;
		$data = array(	'id_solusi'		=>$id_solusi,
						'id_kerusakan'	=>$i->post('id_kerusakan'),
						'solusi'		=>$i->post('solusi'));
						
		$this->solusi_model->edit($data);
		$this->session->set_flashdata('sukses', 'Data telah diedit');
		redirect(base_url('pakar/solusi'),'refresh');
		
	}
	// END DATABASE

	}

	// DELETE solusi
	public function delete($id_solusi)
	{
		$data = array('id_solusi' => $id_solusi);
		$this->solusi_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('pakar/solusi','refresh'));
	}

}

/* End of file solusi.php */
/* Location: ./application/controllers/pakar/solusi.php */
