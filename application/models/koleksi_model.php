<?php

class Koleksi_model extends CI_Model
{

	function getKoleksiAvailable($username)
	{
		 $this->db->select("buku.judul, buku.sampul, buku.deskripsi, buku.pengarang, buku.isbn, buku.genre");
  		 $this->db->from('buku');
  		 $this->db->join('koleksi', 'koleksi.isbn = buku.isbn');
  		 $this->db->where('username',$username)->where('is_available','0');
  		 $query = $this->db->get();
  		 return $resultAvailable = $query->result();
	}

	function getKoleksiBorrowed($username)
	{

		 $this->db->select("buku.judul, buku.sampul, buku.deskripsi, buku.pengarang, buku.isbn, buku.genre");
  		 $this->db->from('buku');
  		 $this->db->join('koleksi', 'koleksi.isbn = buku.isbn');
  		 $this->db->where('username',$username)->where('is_available','1');
  		 $query = $this->db->get();
  		 return $resultBorrowed = $query->result();
	}


	function deleteKoleksi($username,$isbn)
	{
		$this->db->where('username',$username)->where('isbn',$isbn);
		$this->db->delete('koleksi');
	}

	function addKoleksi($non_admin,$buku)
	{
		
		// $this->db->where('username',$non_admin)->where('isbn',$buku);
		$this->db->set('username',$non_admin);
		$this->db->set('isbn',$buku);
		$this->db->set('is_available',false);

		$this->db->insert('koleksi');

	}


}


?>