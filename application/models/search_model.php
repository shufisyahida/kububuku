<?php

class Search_model extends CI_Model
{

<<<<<<< HEAD
	function searchBuku($keyword,$kategori)
	{
=======
  function searchBuku($keyword,$kategori)
  {
<<<<<<< HEAD
>>>>>>> 6e124e192a664c31661f84c17ce76000ec7ddff5
        $this->db->select('*');
        $this->db->from('buku');
        $this->db->like($kategori, $keyword);   
        $query = $this->db->get();
        return $resultSearchBuku = $query->result();
<<<<<<< HEAD
		 	
  }

	function searchPengguna($keyword,$kategori)
	{
=======
=======
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
>>>>>>> 74cf88d4ed7cb32b2e65f3fb4187a9e568e9e616
      
  }

  function searchPengguna($keyword,$kategori)
  {
<<<<<<< HEAD
>>>>>>> 6e124e192a664c31661f84c17ce76000ec7ddff5
        $this->db->select('*');
        $this->db->from('non_admin');
        $this->db->like($kategori, $keyword);   
        $query = $this->db->get();
        return $resultSearchPengguna = $query->result();
<<<<<<< HEAD
	
	}
=======
=======
        if($kategori == 'fakultas')
        {
          $this->db->select('*');
          $this->db->from('non_admin');
          $this->db->where($kategori, $keyword);   
          $query = $this->db->get();
          return $resultSearchPengguna = $query->result();
        }
        else
        {
          $this->db->select('*');
          $this->db->from('non_admin');
          $this->db->like($kategori, $keyword);   
          $query = $this->db->get();
          return $resultSearchPengguna = $query->result();
        }
        
>>>>>>> 74cf88d4ed7cb32b2e65f3fb4187a9e568e9e616
  
  }
>>>>>>> 6e124e192a664c31661f84c17ce76000ec7ddff5

  
}


?>