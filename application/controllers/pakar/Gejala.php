 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends CI_Controller {

	// LOAD MODEL
	public function __construct()
	{
		parent::__construct();
		$this->load->model('gejala_model');
		//proteksi halaman pakar dengan fungsi cek login
		$this->simple_login->cek_login();
	}

	// DATA gejala
	public function index()
	{
		$gejala = $this ->gejala_model->listing();

		$data = array(	'title' => 'Data Gejala',
						'gejala'	=> $gejala,
						'isi'	=> 'pakar/gejala/list'
					);
		$this->load->view('pakar/layout/wrapper', $data, FALSE);	
	}

	// TAMBAH Gejala
	public function tambah()
	{
		// VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('id_gejala','ID Gejala','required',
			array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('nama_gejala','Nama Gejala','required',
			array( 'required'	=> '%s harus diisi'));

		

		

		if($valid->run()===FALSE) {
		// END VALIDASI

		$data = array(	'title' => 'Tambah Gejala',
						'isi'	=> 'pakar/gejala/tambah'
					);
		$this->load->view('pakar/layout/wrapper', $data, FALSE);

		// MASUK DATABASE
	}else{
		$i = $this->input;
		$data = array(	'id_gejala'				=>$i->post('id_gejala'),
						'nama_gejala'			=>$i->post('nama_gejala'));
		$this->gejala_model->tambah($data);
		$this->session->set_flashdata('sukses', 'Data telah ditambahkan');
		redirect(base_url('pakar/gejala'),'refresh');
		
	}
	// END DATABASE

	}

	// EDIT gejala
	public function edit($id_gejala)
	{
		$gejala = $this->gejala_model->detail($id_gejala);

		// VALIDASI INPUT
		$valid = $this->form_validation;
		$valid->set_rules('id_gejala','ID Gejala','required',
			array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('nama_gejala','Nama Gejala','required',
			array( 'required'	=> '%s harus diisi'));
		
		if($valid->run()===FALSE) {
		// END VALIDASI

		$data = array(	'title' => 'Edit Gejala',
						'gejala'	=> $gejala,
						'isi'	=> 'pakar/gejala/edit'
					);
		$this->load->view('pakar/layout/wrapper', $data, FALSE);

		// MASUK DATABASE
	}else{
		$i = $this->input;
		$data = array(	'id_gejala'		=>$i->post('id_gejala'),
						'nama_gejala'	=>$i->post('nama_gejala'));
		$this->gejala_model->edit($data);
		$this->session->set_flashdata('sukses', 'Data telah diedit');
		redirect(base_url('pakar/gejala'),'refresh');
		
	}
	// END DATABASE

	}

	// DELETE gejala
	public function delete($id_gejala)
	{
		$data = array('id_gejala' => $id_gejala);
		$this->gejala_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('pakar/gejala','refresh'));
	}

}

/* End of file gejala.php */
/* Location: ./application/controllers/pakar/gejala.php */
