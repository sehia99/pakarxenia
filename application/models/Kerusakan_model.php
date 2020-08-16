<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kerusakan_model extends CI_Model {

public function __construct()
	{
		parent::__construct();
		$this->load->database(); 
	}	
	//listing all kerusakan

	public function listing()

{
	$this->db->select('*');
	$this->db->from('kerusakan');
	$this->db->order_by('id_kerusakan', 'desc');
	$query = $this->db->get();
	return $query->result();
}

//detail kerusakan
public function detail($id_kerusakan)

{
	$this->db->select('*');
	$this->db->from('kerusakan');
	$this->db->where('id_kerusakan', $id_kerusakan);
	$this->db->order_by('id_kerusakan', 'desc');
	$query = $this->db->get();
	return $query->row();
}
	//tambah
	public function tambah($data)
	{
	$this->db->insert('kerusakan',$data);
	}

	// edit
	public function edit($data)
	{
		$this->db->where('id_kerusakan',$data['id_kerusakan']);
		$this->db->update('kerusakan',$data);
	}

	// delete
	public function delete($data)
	{
		$this->db->where('id_kerusakan',$data['id_kerusakan']);
		$this->db->delete('kerusakan',$data);
	}
}

/* End of file kerusakan_model.php */
/* Location: ./application/models/kerusakan_model.php */