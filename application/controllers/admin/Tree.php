 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tree extends CI_Controller {

	// LOAD MODEL
	public function __construct()
	{
		parent::__construct();
		$this->load->model('tree_model');
		//proteksi halaman admin dengan fungsi cek login
		$this->simple_login->cek_login();
	}

	// DATA tree
	public function index()
	{
		$tree = $this ->tree_model->listing();

		$data = array(	'title' => 'Data Tree',
						'tree'	=> $tree,
						'isi'	=> 'admin/tree/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);	
	}

	// TAMBAH Tree
	public function tambah()
	{
		// VALIDASI INPUT
		$valid = $this->form_validation;

		$valid->set_rules('id','ID Tree','required',
			array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('id_gejala','ID Gejala','required',
			array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('ifyes','If Yes','required',
			array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('ifno','If No','required',
			array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('hasil','Hasil','required',
			array( 'required'	=> '%s harus diisi'));

		

		

		if($valid->run()===FALSE) {
		// END VALIDASI

		$data = array(	'title' => 'Tambah Tree',
						'isi'	=> 'admin/tree/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		// MASUK DATABASE
	}else{
		$i = $this->input;
		$data = array(	'id'				=>$i->post('id'),
						'id_gejala'			=>$i->post('id_gejala'),
						'ifyes'				=>$i->post('ifyes'),
						'ifno'				=>$i->post('ifno'),
						'hasil'				=>$i->post('hasil'));
		$this->tree_model->tambah($data);
		$this->session->set_flashdata('sukses', 'Data telah ditambahkan');
		redirect(base_url('admin/tree'),'refresh');
		
	}
	// END DATABASE

	}

	// EDIT tree
	public function edit($id)
	{
		$tree = $this->tree_model->detail($id);

		// VALIDASI INPUT
		$valid = $this->form_validation;
		$valid->set_rules('id','ID Tree','required',
			array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('id_gejala','ID Gejala','required',
			array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('ifyes','If Yes','required',
			array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('ifno','If No','required',
			array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('hasil','Hasil','required',
			array( 'required'	=> '%s harus diisi'));
		
		if($valid->run()===FALSE) {
		// END VALIDASI

		$data = array(	'title' => 'Edit Tree',
						'tree'	=> $tree,
						'isi'	=> 'admin/tree/edit'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		// MASUK DATABASE
	}else{
		$i = $this->input;
		$data = array(	'id'				=>$i->post('id'),
						'id_gejala'			=>$i->post('id_gejala'),
						'ifyes'				=>$i->post('ifyes'),
						'ifno'				=>$i->post('ifno'),
						'hasil'				=>$i->post('hasil'));
		$this->tree_model->edit($data);
		$this->session->set_flashdata('sukses', 'Data telah diedit');
		redirect(base_url('admin/tree'),'refresh');
		
	}
	// END DATABASE

	}

	// DELETE tree
	public function delete($id)
	{
		$data = array('id' => $id);
		$this->tree_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('admin/tree','refresh'));
	}

}

/* End of file tree.php */
/* Location: ./application/controllers/admin/tree.php */
