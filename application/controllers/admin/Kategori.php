<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	// LOAD MODEL
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kategori_model');
		//proteksi halaman admin dengan fungsi cek login
		$this->simple_login->cek_login();
	}

	// DATA USER
	public function index()
	{
		$kategori = $this ->kategori_model->listing();

		$data = array(	'title' => 'Data Kategori Gejala',
						'kategori'	=> $kategori,
						'isi'	=> 'admin/kategori/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);	
	}

	// TAMBAH USER
	public function tambah()
	{
		// VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('nama','Nama Lengkap','required',
			array( 'required'	=> '%s harus diisi'));

		$valid->set_rules('email','Email','required|valid_email',
			array( 'required'	 => '%s harus diisi',
				   'valid_email' => '%s tidak valid'));

		$valid->set_rules('kategoriname','Kategoriname','required|min_length[5]|max_length[32]|is_unique[kategoris.kategoriname]',
			array( 'required'	=> '%s harus diisi',
				   'min_length' => '%s minimal 5 karakter',
				   'max_length' => '%s maksimal 32 karakter',
				   'is_unique'  => '%s sudah ada. Buat kategoriname baru.'));

		$valid->set_rules('password','Password','required',
			array( 'required'	=> '%s harus diisi'));

		if($valid->run()===FALSE) {
		// END VALIDASI

		$data = array(	'title' => 'Tambah Kategori Gejala',
						'isi'	=> 'admin/kategori/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		// MASUK DATABASE
	}else{
		$i = $this->input;
		$data = array(	'nama'			=>$i->post('nama'),
						'email'			=>$i->post('email'),
						'kategoriname'		=>$i->post('kategoriname'),
						'password'		=>SHA1 ($i->post('password')),
						'akses_level'	=>$i->post('akses_level')
				);
		$this->kategori_model->tambah($data);
		$this->session->set_flashdata('sukses', 'Data telah ditambahkan');
		redirect(base_url('admin/kategori'),'refresh');
		
	}
	// END DATABASE

	}

	// EDIT USER
	public function edit($id_kategori)
	{
		$kategori = $this->kategori_model->detail($id_kategori);

		// VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('nama','Nama Lengkap','required',
			array( 'required'	=> '%s harus diisi'));

		$valid->set_rules('email','Email','required|valid_email',
			array( 'required'	 => '%s harus diisi',
				   'valid_email' => '%s tidak valid'));

		$valid->set_rules('password','Password','required',
			array( 'required'	=> '%s harus diisi'));

		if($valid->run()===FALSE) {
		// END VALIDASI

		$data = array(	'title' => 'Edit Kategori Gejala',
						'kategori'	=> $kategori,
						'isi'	=> 'admin/kategori/edit'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		// MASUK DATABASE
	}else{
		$i = $this->input;
		$data = array(	'id_kategori'		=>$id_kategori,
						'nama'			=>$i->post('nama'),
						'email'			=>$i->post('email'),
						'kategoriname'		=>$i->post('kategoriname'),
						'password'		=>SHA1 ($i->post('password')),
						'akses_level'	=>$i->post('akses_level')
				);
		$this->kategori_model->edit($data);
		$this->session->set_flashdata('sukses', 'Data telah diedit');
		redirect(base_url('admin/kategori'),'refresh');
		
	}
	// END DATABASE

	}

	// DELETE USER
	public function delete($id_kategori)
	{
		$data = array('id_kategori' => $id_kategori);
		$this->kategori_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('admin/kategori','refresh'));
	}

}

/* End of file Kategori.php */
/* Location: ./application/controllers/admin/Kategori.php */
