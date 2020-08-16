<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	//load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pasien2_model');
	}

	//data pasien
	public function index()
	{
		$pasien = $this->pasien_model->listing();
		$data =  array(	'title'		 => 'Data Pasien',
						'pasien'	 => $pasien,
						'isi'		 => 'history/list'
						 );


		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

// TAMBAH Pasien
	public function tambah()
	{
		// VALIDASI INPUT
		$valid = $this->form_validation;
		
		$valid->set_rules('nama_pasien','Nama Pasien','required',
			array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('type','Type Mobil','required',
			array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('tahun','Tahun Mobil','required',
			array( 'required'	=> '%s harus diisi'));
		

		if($valid->run()===FALSE) {
		// END VALIDASI

		$data = array(	'title' => 'Tambah Pasien',
						'isi'	=> 'admin/pasien/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		// MASUK DATABASE
	}else{
		$i = $this->input;
		$data = array(	'id_pasien'			=>$i->post('id_pasien'),
						'nama_pasien'		=>$i->post('nama_pasien'),
						'type'				=>$i->post('type'),
						'tahun'				=>$i->post('tahun'));
		$this->pasien_model->tambah($data);
		$this->session->set_flashdata('sukses', 'Data telah ditambahkan');
		redirect(base_url('admin/pasien/tambah'),'refresh');
		
	}
	// END DATABASE

	}

	// EDIT pasien
	public function edit($id_pasien)
	{
		$pasien = $this->pasien_model->detail($id_pasien);

		// VALIDASI INPUT
		$valid = $this->form_validation;
		
		$valid->set_rules('nama_pasien','Nama Pasien','required',
			array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('type','Type Mobil','required',
			array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('tahun','Tahun Mobil','required',
			array( 'required'	=> '%s harus diisi'));
		
		if($valid->run()===FALSE) {
		// END VALIDASI

		$data = array(	'title' => 'Edit Pasien',
						'pasien'	=> $pasien,
						'isi'	=> 'admin/pasien/edit'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		// MASUK DATABASE
	}else{
		$i = $this->input;
		$data = array(	'id_pasien'		=>$id_pasien,
						'nama_pasien'	=>$i->post('nama_pasien'),
						'type'			=>$i->post('type'),
						'tahun'			=>$i->post('tahun'));
						
		$this->pasien_model->edit($data);
		$this->session->set_flashdata('sukses', 'Data telah diedit');
		redirect(base_url('admin/pasien'),'refresh');
		
	}
	// END DATABASE

	}

	// DELETE pasien
	public function delete($id_pasien)
	{
		$data = array('id_pasien' => $id_pasien);
		$this->pasien_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('admin/pasien','refresh'));
	}

}


/* End of file Pasien.php */
/* Location: ./application/controllers/admin/Pasien.php */