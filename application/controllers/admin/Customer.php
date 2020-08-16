<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	//load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cust_model','', TRUE);
		$this->load->helper(array('form','url'));
	}

	//data customer
	public function index()
	{
		$customer = $this->cust_model->listing();
		$data =  array(	'title'		 => 'Data Customer',
						'customer'	 => $customer,
						'isi'		 => 'admin/customer/list'
						 );


		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

// TAMBAH Customer
	public function tambah()
	{
		// VALIDASI INPUT
		$valid = $this->form_validation;
		// $valid->set_rules('username_cust','Username Customer','required',
		// 	array( 'required'	=> '%s harus diisi'));
		// $valid->set_rules('password','Password Customer','required',
		// 	array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('nama_customer','Nama Customer','required',
			array( 'required'	=> '%s harus diisi'));
		// $valid->set_rules('email','Email Customer','required',
		// 	array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('type','Type Mobil','required',
			array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('tahun','Tahun Mobil','required',
			array( 'required'	=> '%s harus diisi'));
		

		if($valid->run()===FALSE) {
		// END VALIDASI

		$data = array(	'title' => 'Tambah Customer',
						'isi'	=> 'admin/customer/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		// MASUK DATABASE
	}else{
		$username = $this->session->userdata('username');
		$i = $this->input;
		$data = array(	
						// 'username_cust'		=>$i->post('username_cust'),
						// 'password'			=>sha1($i->post('password')),
						'nama_customer'		=>$i->post('nama_customer'),
						// 'email'				=>$i->post('email'),
						'type'				=>$i->post('type'),
						'tahun'				=>$i->post('tahun'),
						'username' 			=>$username );

		$this->cust_model->tambah($data);
		$this->session->set_flashdata('sukses', 'Data telah ditambahkan');
		redirect(base_url('user/pertanyaan'));
		
	}
	// END DATABASE

	}

	// EDIT customer
	public function edit($id_customer)
	{
		$customer = $this->cust_model->detail($id_customer);

		// VALIDASI INPUT
		$valid = $this->form_validation;
		
		// $valid->set_rules('username_cust','Username Customer','required',
		// 	array( 'required'	=> '%s harus diisi'));
		// $valid->set_rules('password','Password Customer','required',
		// 	array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('nama_customer','Nama Customer','required',
			array( 'required'	=> '%s harus diisi'));
		// $valid->set_rules('email','Email Customer','required',
		// 	array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('type','Type Mobil','required',
			array( 'required'	=> '%s harus diisi'));
		$valid->set_rules('tahun','Tahun Mobil','required',
			array( 'required'	=> '%s harus diisi'));
		
		if($valid->run()===FALSE) {
		// END VALIDASI

		$data = array(	'title' => 'Edit Customer',
						'customer'	=> $customer,
						'isi'	=> 'admin/customer/edit'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		// MASUK DATABASE
	}else{
		$i = $this->input;
		$data = array(	
						// 'username_cust'		=>$i->post('username_cust'),
						// 'password'			=>sha1($i->post('password')),
						'nama_customer'		=>$i->post('nama_customer'),
						// 'email'				=>$i->post('email'),
						'type'				=>$i->post('type'),
						'tahun'				=>$i->post('tahun'));
						
		$this->cust_model->edit($data);
		$this->session->set_flashdata('sukses', 'Data telah diedit');
		redirect(base_url('admin/customer'),'refresh');
		
	}
	// END DATABASE

	}

	// DELETE customer
	public function delete($id_customer)
	{
		$data = array('id_kerusakan' => $id_kerusakan);
		$this->customer_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('admin/customer','refresh'));
	}

}


/* End of file Customer.php */
/* Location: ./application/controllers/admin/Customer.php */