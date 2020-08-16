<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_coba extends CI_Model {

	
	public function Coba()
	{
		
		$query = $this->db->query("SELECT * FROM gejala where id_gejala = 'G01'");
		return $query;

	}
}
