<?php

class Koleksi_model extends CI_Model
{

	function getAllKoleksi($username)
	{
		$this->db->select("isbn,is_available");
 		$this->db->from('koleksi');
 		$this->db->where('username',$username);
  		$query = $this->db->get();
  		return $result = $query->result();
	}

	function deleteKoleksi($username,$isbn)
	{
		$this->db->where('username',$username)->where('isbn',$isbn);
		$this->db->delete('koleksi');
	}

	function addKoleksi($non_admin,$buku)
	{
		
		$this->db->where('username',$non_admin)->where('isbn',$buku);
		$this->db->set('username',$non_admin);
		$this->db->set('isbn',$buku);
		$this->db->set('is_available',true);

		$this->db->insert('koleksi');


	}

}


?>