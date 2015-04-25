<?php

	class Koleksi extends CI_Model
	{

		public function addKoleksi($non_admin,$buku)
		{			
			// $this->db->where('username',$non_admin)->where('isbn',$buku);
			$this->db->set('username',$non_admin);
			$this->db->set('isbn',$buku);
			$this->db->set('is_available',true);
			$this->db->insert('koleksi');
		}

		public function deleteKoleksi($username,$isbn)
		{
			$this->db->where('username',$username)->where('isbn',$isbn);
			$this->db->delete('koleksi');
		}

		public function getKoleksiAvailable($username)
		{
			 $this->db->select("buku.judul, buku.sampul, buku.deskripsi, buku.pengarang, buku.isbn, buku.genre");
	  		 $this->db->from('buku');
	  		 $this->db->join('koleksi', 'koleksi.isbn = buku.isbn');
	  		 $this->db->where('username',$username)->where('is_available','1');
	  		 $query = $this->db->get();
	  		 return $resultAvailable = $query->result();
		}

		public function getKoleksiBorrowed($username)
		{
			 $this->db->select("buku.judul, buku.sampul, buku.deskripsi, buku.pengarang, buku.isbn, buku.genre");
	  		 $this->db->from('buku');
	  		 $this->db->join('koleksi', 'koleksi.isbn = buku.isbn');
	  		 $this->db->where('username',$username)->where('is_available','0');
	  		 $query = $this->db->get();
	  		 return $resultBorrowed = $query->result();
		}

		public function getNumOfKoleksi($username)
		{
			$this->db->select('*');
			$this->db->from('koleksi');
			$this->db->where('username',$username);
			$query = $this->db->get();
			return sizeOf($query->result());
		}

		function isInCollection($username, $isbn)
		{
			$this->db->select('*');
	        $this->db->from('koleksi');
	        $this->db->where('username',$username)->where('isbn',$isbn);    
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

		public function setStatus($username,$isbn,$isAvailable)
		{
			$data=array('is_available'=>$isAvailable);
			$this->db->where('username',$username)->where('isbn',$isbn);
			$this->db->update('koleksi',$data);

			// $data = array('status'=>2);
			// $this->db->where('id',$id);
			// $this->db->update('pinjaman',$data);
		}

	} // end of Koleksi

?>