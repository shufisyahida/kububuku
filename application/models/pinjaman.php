<?php

class Pinjaman extends CI_Model
{
	function getRequestIn($username)
	{

		$this->db->select('id,username_peminjam, isbn, durasi');
		$this->db->from('pinjaman');
		$this->db->where('username_pemilik',$username)->where('status',1);
		
		$query= $this->db->get()->result();
		return $query;
		
	}
}

?>