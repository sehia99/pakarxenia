<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relasi_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// listing all relasi
	public function listing()
	{
		$this->db->select('kerusakan.*,gejala.*');
		$this->db->from('relasi');
		$this->db->order_by('id_relasi', 'desc');
		$this->db->join('kerusakan','kerusakan.id_kerusakan=relasi.id_kerusakan');
		$this->db->join('gejala','gejala.id_gejala=relasi.id_gejala');
		$query = $this->db->get();
		return $query->result();
	}

	public function diagnosa($id)
	{	
		


		$this->db->select('id_kerusakan');
		$this->db->from('relasi');

		
		$this->db->where('id_gejala','G01 AND G02');
		


		$query = $this->db->get();
		return $query->result();
	}

	public function pertanyaan($id)
	{
		$this->db->select('gejala.nama_gejala, tree.ifyes, tree.ifno,tree.hasil');
		$this->db->from('tree');
		$this->db->join('gejala','gejala.id_gejala = tree.id_gejala');
		$this->db->where('tree.id',$id);
		$query = $this->db->get();
		return $query->row();
	}

	public function hasil($hasil)
	{	
		
		$this->db->where('id_kerusakan',$hasil);
		$query = $this->db->get('kerusakan');
		return $query->row();
	}

	public function solusi($id_kerusakan)
	{

		$this->db->where('id_kerusakan',$id_kerusakan);
		$query = $this->db->get('solusi');
		return $query->result();
	}
	// detail relasi
	public function detail($id_relasi)
	{
		$this->db->select('*');
		$this->db->from('relasi');
		$this->db->where('id_relasi', $id_relasi);
		$this->db->order_by('id_relasi', 'desc');
		$query = $this->db->get();
		return $query->row();
	}


	
	// tambah
	public function tambah($data)
	{
		$this->db->insert('relasi', $data);
	}

	// edit
	public function edit($data)
	{
		$this->db->where('id_relasi', $data['id_relasi']);
		$this->db->update('relasi',$data);
	}

	// delete
	public function delete($data)
	{
		$this->db->where('id_relasi', $data['id_relasi']);
		$this->db->delete('relasi',$data);
	}

	public function tambah_hasil($data)
	{
	$this->db->where('id_kerusakan',$id_kerusakan);
	$query = $this->db->get('solusi');
	return $query->result();
	$this->db->insert('hasil_analisa',$data);

	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */