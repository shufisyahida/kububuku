<?php

	class Tanggapan extends CI_Model
	{

		public function addTanggapan($username,$isbn)
		{			
			// $this->db->where('username',$non_admin)->where('isbn',$buku);
			$this->db->select("id");
			$this->db->from('wishlist');
			$this->db->where('username', $username)->where('isbn',$isbn);
			$id= $this->db->get();
			$this->db->set('username',$username);
			$this->db->set('idWishlist',$id);
			$this->db->set('isNotified',true);
			$this->db->insert('wishlist');
		}

		/*public function deleteWishlist($username,$isbn)
		{
			$this->db->where('username',$username)->where('isbn',$isbn);
			$this->db->delete('wishlist');
		}


		public function getAllKoleksi($username)
		{
			 $this->db->select("buku.judul, buku.sampul, buku.deskripsi, buku.pengarang, buku.isbn, buku.genre");
	  		 $this->db->from('buku');
	  		 $this->db->join('wishlist', 'wishlist.isbn = buku.isbn');
	  		 $this->db->where('username',$username);
	  		 $query = $this->db->get();
	  		 return $resultWishlist = $query->result();
		}*/
		
	} // end of Tanggapan

?>