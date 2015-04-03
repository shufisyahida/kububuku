<?php

class Search_model extends CI_Model
{

	function searchBuku($filters)
	{
		 if($kategori=='genre'){
		 	$this->db->select(*);
  		 	$this->db->from('buku');
  		 	$this->db->like('genre', $keyword);   
  		 	$query = $this->db->get();
  		 	return $resultSearchBuku = $query->result();
  			}
  		else if($kategori=='judul'){
		 	$this->db->select(*);
  		 	$this->db->from('buku');
  		 	$this->db->like('judul', $keyword);   
  		 	$query = $this->db->get();
  		 	return $resultSearchBuku = $query->result();
  		}
  		else {
		 	$this->db->select(*);
  		 	$this->db->from('buku');
  		 	$this->db->like('pengarang', $keyword);   
  		 	$query = $this->db->get();
  		 	return $resultSearchBuku = $query->result();
  		
  		}
	}

	function searchPengguna($filters)
	{
		 if($kategori=='nama'){
		 	$this->db->select(*);
  		 	$this->db->from('non_admin');
  		 	$this->db->like('nama', $keyword);   
  		 	$query = $this->db->get();
  		 	return $resultSearchPengguna = $query->result();
  			}
  		else if($kategori=='fakultas'){
		 	$this->db->select(*);
  		 	$this->db->from('non_admin');
  		 	$this->db->like('fakultas', $keyword);   
  		 	$query = $this->db->get();
  		 	return $resultSearchPengguna = $query->result();
  		}
  		else if($kategori=='domisili') {
		 	$this->db->select(*);
  		 	$this->db->from('non_admin');
  		 	$this->db->like('domisili', $keyword);   
  		 	$query = $this->db->get();
  		 	return $resultSearchPengguna = $query->result();
  		
  		}
  		else {
		 	$this->db->select(*);
  		 	$this->db->from('non_admin');
  		 	$this->db->like('status', $keyword);   
  		 	$query = $this->db->get();
  		 	return $resultSearchPengguna = $query->result();
  		
  		}
	}

}


?>