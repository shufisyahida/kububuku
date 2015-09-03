<?php

	class Buku_model extends CI_Model
	{

		function addBook($data)
		{
			$this->db->insert('buku',$data);
		}

		function getAllBook()
		{
			$this->db->select('*');
			$this->db->from('buku');
			$this->db->order_by("tanggal_buat", "desc");
			$query = $this->db->get()->result();
			return $query;
		}

		function getListBook($limit, $start) 
		{
	        $this->db->select('*');
			$this->db->from('buku');
			$this->db->order_by("tanggal_buat", "desc");
			 $this->db->limit($limit, $start);
			$query = $this->db->get();
	       
	        
	 
	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
	   }

		function getBook($isbn)
		{
			$this->db->select('*');
			$this->db->from('buku');
			$this->db->where('isbn',$isbn);

			$query=$this->db->get();

			return $resultBook = $query->result();
		}

		function getJudul($isbn)
		{
			$this->db->select('judul');
			$this->db->from('buku');
			$this->db->where('isbn',$isbn);
			$judul = $this->db->get()->result();
			$result = '';
			foreach ($judul as $key => $value)
            {
                $result = $value->judul;
            }

			return $result;
		}

		function getSampul($isbn)
		{
			$this->db->select('sampul');
			$this->db->from('buku');
			$this->db->where('isbn',$isbn);
			$sampul = $this->db->get()->result();
			$result = '';
			foreach ($sampul as $key => $value)
            {
                $result = $value->sampul;
            }

			return $result;
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

		function getListOwner($limit, $start, $isbn) 
		{
	        $this->db->select("*");
			$this->db->from('non_admin');
			$this->db->join('koleksi', 'koleksi.username = non_admin.username');
			$this->db->where('koleksi.isbn',$isbn);

	        $this->db->limit($limit, $start);
	        $query = $this->db->get();
	 
	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
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


		public function deleteBook($isbn)
		{
			$this->db->where('isbn',$isbn);
			$this->db->delete('buku');
		}

		public function updateBook($isbn, $data)
		{
			$this->db->where('isbn', $isbn);
            $this->db->update('buku', $data); 
		}

	} // end of Buku

?>