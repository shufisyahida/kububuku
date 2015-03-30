<?php

class Buku extends CI_Model
{
	// function retrieveBuku($isbn)
	// {
 // 		$this->db->where('isbn',$isbn);
 //  		$query = $this->db->get('buku');
 //  		return $result = $query->result();
	// }

	

/*	function deleteKoleksi($username,$isbn)
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
*/

}

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