<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa_model extends CI_Model {

public function __construct()
	{
		parent::__construct();
		$this->load->database(); 
	}	
	//listing all gejala

	public function listing()

{
	$this->db->select('*');
	$this->db->from('gejala');
	$this->db->order_by('id_gejala', 'desc');
	$query = $this->db->get();
	return $query->result();
}

//detail gejala
public function detail($id_gejala)

{
	$this->db->select('*');
	$this->db->from('gejala');
	$this->db->where('id_gejala', $id_gejala);
	$this->db->order_by('id_gejala', 'desc');
	$query = $this->db->get();
	return $query->row();
}
	//tambah
	public function tambah($data)
	{
	$this->db->insert('gejala',$data);
	}

	// edit
	public function edit($data)
	{
		$this->db->where('id_gejala',$data['id_gejala']);
		$this->db->update('gejala',$data);
	}

	// delete
	public function delete($data)
	{
		$this->db->where('id_gejala',$data['id_gejala']);
		$this->db->delete('gejala',$data);
	}
}

/* End of file gejala_model.php */
/* Location: ./application/models/gejala_model.php */