<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// listing all relasi
	public function listing($username)
	{
		$this->db->select('*');
		$this->db->from('hasil_analisa');
		$this->db->join('customer','customer.username=hasil_analisa.username');
		//$this->db->group_by('hasil_analisa.username');
		$this->db->where('hasil_analisa.username',$username);
		$query = $this->db->get();
		return $query->result();
	}
  
//  public function duatable() {
//  $this->db->select('*');
//  $this->db->from('tbrakyat');
//  $this->db->join('tbsekolah','tbsekolah.id=tbrakyat.id');
//  $query = $this->db->get();
//  return $query->result();
// }


	public function simpan($data){
		$this->db->insert('history',$data);
	}

	public function diagnosa($id)
	{	
		// pake or

		// $this->db->select('count(*) as banyak , id_kerusakan');
		// $this->db->from('relasi');


		// $this->db->group_by('id_kerusakan');
		// $this->db->order_by('banyak','desc');
		// foreach ($id as $i) {
		// $this->db->or_where('id_gejala',$i);
		// }
		// $this->db->limit(1);
		// $query = $this->db->get();


		$this->db->select('id_kerusakan');
		$this->db->from('relasi');

		// foreach ($id as $i) {elas
		$this->db->where('id_gejala','G01 AND G02');
		// }


		$query = $this->db->get();
		return $query->result();
	}

	public function pertanyaan($id)
	{
		$this->db->select('gejala.gejala, tree.ifyes, tree.ifno,tree.hasil');
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

	public function hasil2($hasil)
	{	
		$this->db->select('kerusakan.*,history.*');
		$this->db->join('kerusakan','kerusakan.id_kerusakan = history.hasil');
		$this->db->where('id',$hasil);
		$query = $this->db->get('history');
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




// public function gejala($id_gejala)
	// {

	// 	$this->db->where('id_gejala',$id_gejala);
	// 	$query = $this->db->get('gejala');
	// 	return $query->result();
	// }


	// public function get_kerusakan(){
	// $query = $this->db->get('kerusakan');
 //    return $query->result_array();
	// }

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
		$this->db->where('id', $data['id']);
		$this->db->delete('history',$data);
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */
