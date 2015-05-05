<?php

	class Buku extends CI_Model
	{

		function addBook($data)
		{
			$this->db->insert('buku',$data);
		}

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
			{
				$this->db->limit(6);
			}				

			$query = $this->db->get();

			return $resultOwner = $query->result();
		}

		function isRegisteredBook($isbn)
		{
			$this->db->select('*');
			$this->db->from('buku');
			$this->db->where('isbn',$isbn);

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

		function searchBook($keyword,$kategori)
		{
			if($kategori == 'genre')
			{
				$this->db->select('*');
				$this->db->from('buku');
				$this->db->where($kategori, $keyword);   
				$query = $this->db->get();
				return $resultSearchBuku = $query->result();
			}
			else
			{
				$this->db->select('*');
				$this->db->from('buku');
				$this->db->like($kategori, $keyword);   
				$query = $this->db->get();
				return $resultSearchBuku = $query->result();
			}
		}

<<<<<<< HEAD
		public function deleteBook($isbn)
=======
		function deleteBook($isbn)
>>>>>>> 1340c505fdf7f3f1d1b420043ebf80bef09bd184
		{
			$this->db->where('isbn',$isbn);
			$this->db->delete('buku');
		}

<<<<<<< HEAD
=======
		function updateBook($isbn, $perubahan)
		{
			$this->db->where('isbn', $isbn);
            $this->db->update('buku', $perubahan); 
		}

		


>>>>>>> 1340c505fdf7f3f1d1b420043ebf80bef09bd184
	} // end of Buku

?>