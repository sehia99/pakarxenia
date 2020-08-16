<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kerusakan extends CI_Controller {

	// LOAD MODEL
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kerusakan_model');
		//proteksi halaman admin dengan fungsi cek login
		$this->simple_login->cek_login();
	}

	// DATA kerusakan
	public function index()
	{
		$kerusakan = $this ->kerusakan_model->listing();

		$data = array(	'title' => 'Data Kerusakan',
						'kerusakan'	=> $kerusakan,
						'isi'	=> 'admin/kerusakan/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);	
	}

	// TAMBAH Kerusakan
	public function tambah()
	{
		// VALIDASI INPUT
		$valid = $this->form_validation;
		$valid->set_rules('id_kerusakan','ID Kerusakan','required',
			array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('nama_kerusakan','Nama Kerusakan','required',
			array( 'required'	=> '%s harus diisi'));
		

		if($valid->run()===FALSE) {
		// END VALIDASI

		$data = array(	'title' => 'Tambah Kerusakan',
						'isi'	=> 'admin/kerusakan/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		// MASUK DATABASE
	}else{
		$i = $this->input;
		$data = array(	'id_kerusakan'				=>$i->post('id_kerusakan'),
						'nama_kerusakan'				=>$i->post('nama_kerusakan'),
						'status'					=>'1');  
		$this->kerusakan_model->tambah($data);
		$this->session->set_flashdata('sukses', 'Data telah ditambahkan');
		redirect(base_url('pakar/kerusakan'),'refresh');
		
	}
	// END DATABASE

	}

	// EDIT kerusakan
	public function edit($id_kerusakan)
	{
		$kerusakan = $this->kerusakan_model->detail($id_kerusakan);

		// VALIDASI INPUT
		$valid = $this->form_validation;
		$valid->set_rules('id_kerusakan','ID Kerusakan','required',
			array( 'required'	=> '%s harus diisi'));	
		$valid->set_rules('nama_kerusakan','Nama Kerusakan','required',
			array( 'required'	=> '%s harus diisi'));
		
		
		if($valid->run()===FALSE) {
		// END VALIDASI

		$data = array(	'title' => 'Edit Kerusakan',
						'kerusakan'	=> $kerusakan,
						'isi'	=> 'admin/kerusakan/edit'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		// MASUK DATABASE
	}else{
		$i = $this->input;
		$data = array(	'id_kerusakan'		=>$id_kerusakan,
						'nama_kerusakan'		=>$i->post('nama_kerusakan'));
						
		$this->kerusakan_model->edit($data);
		$this->session->set_flashdata('sukses', 'Data telah diedit');
		redirect(base_url('admin/kerusakan'),'refresh');
		
	}
	// END DATABASE

	}

	// DELETE kerusakan
	public function delete($id_kerusakan)
	{
		$data = array('id_kerusakan' => $id_kerusakan);
		$this->kerusakan_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('admin/kerusakan','refresh'));
	}

	public function konfirmasi($id_kerusakan)
	{
		$data = array('id_kerusakan' => $id_kerusakan, 
						'status' => '2'
	);
		$this->kerusakan_model->edit($data);
		$this->session->set_flashdata('sukses', 'Data telah dikonfirmasi');
		redirect(base_url('admin/kerusakan'),'refresh');
	}

}

/* End of file kerusakan.php */
/* Location: ./application/controllers/admin/kerusakan.php */
