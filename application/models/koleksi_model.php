<?php

class Koleksi_model extends CI_Model
{

	function getAllKoleksi()
	{
		return $this->db->get('koleksi')->result();
	}

	function deleteKoleksi($username,$isbn)
	{
		$this->db->where('username',$username)->where('isbn',$isbn);
		$this->db->delete('koleksi');
	}

}

?>