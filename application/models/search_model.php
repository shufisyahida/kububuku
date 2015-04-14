<?php

class Search_model extends CI_Model
{

<<<<<<< HEAD
	function searchBuku($keyword,$kategori)
	{
=======
  function searchBuku($keyword,$kategori)
  {
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
      
  }

  function searchPengguna($keyword,$kategori)
  {
>>>>>>> 6e124e192a664c31661f84c17ce76000ec7ddff5
        $this->db->select('*');
        $this->db->from('non_admin');
        $this->db->like($kategori, $keyword);   
        $query = $this->db->get();
        return $resultSearchPengguna = $query->result();
<<<<<<< HEAD
	
	}
=======
  
  }
>>>>>>> 6e124e192a664c31661f84c17ce76000ec7ddff5

  
}


?>