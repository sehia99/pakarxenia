<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solusi_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// listing all solusi
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('solusi');
		$this->db->join('kerusakan', 'kerusakan.id_kerusakan = solusi.id_kerusakan', 'left');
		$this->db->order_by('id_solusi', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// detail solusi
	public function detail($id_solusi)
	{
		$this->db->select('*');
		$this->db->from('solusi');
		$this->db->where('id_solusi', $id_solusi);
		$this->db->order_by('id_solusi', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// tambah
	public function tambah($data)
	{
		$this->db->insert('solusi', $data);
	}

	// edit
	public function edit($data)
	{
		$this->db->where('id_solusi', $data['id_solusi']);
		$this->db->update('solusi',$data);
	}

	// delete
	public function delete($data)
	{
		$this->db->where('id_solusi', $data['id_solusi']);
		$this->db->delete('solusi',$data);
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */