<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien2_model extends CI_Model {

public function __construct()
	{
		parent::__construct();
		$this->load->database(); 
	}	
	//listing all pasien

	public function listing()

{
	$this->db->select('*');
	$this->db->from('pasien');
	$this->db->order_by('id_pasien', 'desc');
	$query = $this->db->get();
	return $query->result();
}

//detail pasien
public function detail($id_pasien)

{
	$this->db->select('*');
	$this->db->from('pasien');
	$this->db->where('id_pasien', $id_pasien);
	$this->db->order_by('id_pasien', 'desc');
	$query = $this->db->get();
	return $query->row();
}
	//tambah
	public function tambah($data)
	{
	$this->db->insert('pasien',$data);
	}

	// edit
	public function edit($data)
	{
		$this->db->where('id_pasien',$data['id_pasien']);
		$this->db->update('pasien',$data);
	}

	// delete
	public function delete($data)
	{
		$this->db->where('id_pasien',$data['id_pasien']);
		$this->db->delete('pasien',$data);
	}
}

/* End of file pasien_model.php */
/* Location: ./application/models/pasien_model.php */