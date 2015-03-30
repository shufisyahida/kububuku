<?php

class Buku extends CI_Model
{
	function getBook($isbn)
	{

		$this->db->select('*');
		$this->db->from('buku');
		$this->db->where('isbn',$isbn);

		$query=$this->db->get()->result();

		return $query;
		
	}
}

?>