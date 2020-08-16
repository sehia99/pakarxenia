<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$data =  array(	'title'		 => 'Selamat datang Admin',
						'customer'	 => $customer,
						'isi'		 => 'admin/customer/list'
						 );


		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */