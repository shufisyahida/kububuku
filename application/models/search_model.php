<?php

class Search_model extends CI_Model
{

  function searchBuku($keyword,$kategori)
  {
        $this->db->select('*');
        $this->db->from('buku');
        $this->db->like($kategori, $keyword);   
        $query = $this->db->get();
        return $resultSearchBuku = $query->result();
      
  }

  function searchPengguna($keyword,$kategori)
  {
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
        
  
  }

  
}


?>