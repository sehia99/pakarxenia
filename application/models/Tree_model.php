<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tree_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// listing all tree
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('tree');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// detail tree
	public function detail($id)
	{
		$this->db->select('*');
		$this->db->from('tree');
		$this->db->where('id', $id);
		$this->db->order_by('id', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// tambah
	public function tambah($data)
	{
		$this->db->insert('tree', $data);
	}

	// edit
	public function edit($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('tree',$data);
	}

	// delete
	public function delete($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->delete('tree',$data);
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */