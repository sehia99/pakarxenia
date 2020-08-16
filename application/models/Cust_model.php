<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cust_model extends CI_Model {

public function __construct()
	{
		parent::__construct();
		$this->load->database(); 
	}	
	//listing all customer

	public function listing()

{
	$this->db->select('*');
	$this->db->from('hasil_analisa');
	$this->db->join('customer','customer.id_customer=hasil_analisa.id_kerusakan');
	$query = $this->db->get();
	return $query->result();
}

//detail customer
public function detail($id_customer)

{
	$this->db->select('*');
	$this->db->from('customer');
	$this->db->where('id_customer', $id_customer);
	$this->db->order_by('id_customer', 'desc');
	$query = $this->db->get();
	return $query->row();
}
	//tambah
	public function tambah($data)
	{
	$this->db->insert('customer',$data);
	}

	// edit
	public function edit($data)
	{
		$this->db->where('id_customer',$data['id_customer']);
		$this->db->update('customer',$data);
	}

	// delete
	public function delete($data)
	{
		$this->db->where('id_customer',$data['id_customer']);
		$this->db->delete('customer',$data);
	}
}

/* End of file customer_model.php */
/* Location: ./application/models/customer_model.php */