<?php

class Buku extends CI_Model
{

	function getBook($isbn)
	{

		$this->db->select('*');
		$this->db->from('buku');
		$this->db->where('isbn',$isbn);
		$query=$this->db->get();
		return $resultBook = $query->result();
		
	}

	function getOwner($isbn)
	{

		 $this->db->select("non_admin.foto,non_admin.username");
  		 $this->db->from('non_admin');
  		 $this->db->join('koleksi', 'koleksi.username = non_admin.username');
  		 $this->db->where('koleksi.isbn',$isbn);
  		 $query = $this->db->get();
  		 return $resultOwner = $query->result();
		
	}

	function addBook($data)
	{
		$this->db->insert('buku',$data);
	}
	function isbnSudahAda($isbn)
	{
		$this->db->select('*');
		$this->db->from('buku');
		$this->db->where('isbn',$isbn);		
		$query= $this->db->get()->result();

		if(sizeof($query)!=0) {				
			return true;
		}
		else {
			return false;
		}
	}


	// function searchBook($terms)
	// {
		
	// }

}

	

?>