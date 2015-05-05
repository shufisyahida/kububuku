<?php

	class Wishlist_model extends CI_Model
	{

		public function addWishlist($username,$isbn)
		{			
			// $this->db->where('username',$non_admin)->where('isbn',$buku);
			$this->db->set('username',$username);
			$this->db->set('isbn',$isbn);
			$this->db->insert('wishlist');
		}

		public function deleteWishlist($username,$isbn)
		{
			$this->db->where('username',$username)->where('isbn',$isbn);
			$this->db->delete('wishlist');
		}


		public function getAllWishlist($username)
		{
			 $this->db->select("buku.judul, buku.sampul, buku.pengarang, buku.isbn, buku.genre");
	  		 $this->db->from('buku');
	  		 $this->db->join('wishlist', 'wishlist.isbn = buku.isbn');
	  		 $this->db->where('username',$username);
	  		 $query = $this->db->get();
	  		 return $resultWishlist = $query->result();
		
		}
		
	} // end of Wishlist

?>