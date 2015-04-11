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

	function getOwner($isbn,$limited)
	{

		 //$this->db->select("non_admin.foto,non_admin.username");
		$this->db->select("*");
  		 $this->db->from('non_admin');
  		 $this->db->join('koleksi', 'koleksi.username = non_admin.username');
  		 $this->db->where('koleksi.isbn',$isbn);

  		 if($limited)
  			 $this->db->limit(6);

  		 $query = $this->db->get();
  		 return $resultOwner = $query->result();
		
	}

	// function searchBook($terms)
	// {
		
	// }

}

	

?>