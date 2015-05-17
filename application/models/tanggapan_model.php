<?php

	class Tanggapan_model extends CI_Model
	{

		public function getId($username,$isbn)
		{			
			// $this->db->where('username',$non_admin)->where('isbn',$buku);
			$this->db->select('id');
			$this->db->from('wishlist');
			$this->db->where('username', $username)->where('isbn',$isbn);
			$query=$this->db->get();

			$idResult = $query->row();
			//$str = implode(" ", $idResult);
			$str = (string)$idResult->id;
			return $str_int = intval($str);
		}

		public function addTanggapan($data)
		{			
			// $this->db->where('username',$non_admin)->where('isbn',$buku);
			
			/*$this->db->set('username',$username);
			$this->db->set('id_wishlist',$id);
			$this->db->set('is_notified',true);*/
			$this->db->insert('tanggapan', $data);
		}

		public function IsInTanggapan($id, $username){

			$this->db->select('*');
	        $this->db->from('tanggapan');
	        $this->db->where('id_wishlist',$id)->where('username',$username);    
	        $query= $this->db->get()->result();

	        if(sizeof($query)!=0)
	        {       
	          	return true;
	        }
	        else
	        {
	        	return false;
	        }
		
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