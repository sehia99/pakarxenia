<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

public function __construct()
	{
		parent::__construct();
		$this->load->database(); 
	}	
	//listing all user

	public function listing()

{
	$this->db->select('*');
	$this->db->from('users');
	$this->db->order_by('id_user', 'desc');
	$query = $this->db->get();
	return $query->result();
}

//detail user
public function detail($id_user)

{
	$this->db->select('*');
	$this->db->from('users');
	$this->db->where('id_user', $id_user);
	$this->db->order_by('id_user', 'desc');
	$query = $this->db->get();
	return $query->row();
}
//login user
public function login($username,$password)

{
	$this->db->select('*');
	$this->db->from('users');
	$this->db->where(array( 'username'=> $username,
							'password'=> SHA1($password)));
	$this->db->order_by('id_user', 'desc');
	$query = $this->db->get();
	return $query->row();
}


	//tambah
	public function tambah($data)
	{
	$this->db->insert('users',$data);
	}

	// edit
	public function edit($data)
	{
		$this->db->where('id_user',$data['id_user']);
		$this->db->update('users',$data);
	}

	// delete
	public function delete($data)
	{
		$this->db->where('id_user',$data['id_user']);
		$this->db->delete('users',$data);
	}

	public function tambah_hasil($data)
	{
	$this->db->insert('hasil_analisa',$data);
	}
	// public function hasil3($hasil)
	// {	
	// 	$this->db->select('kerusakan.*,history.*');
	// 	$this->db->join('kerusakan','kerusakan.id_kerusakan = history.hasil');
	// 	$this->db->where('id',$hasil);
	// 	$query = $this->db->get('history');
	// 	return $query->row();

/*	public function login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', sha1($password));
		$row = $this->db->get('users');
		if($row->num_rows() >0){
			return $row->result();
		}else{
			return false;
		}
	} */
}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */