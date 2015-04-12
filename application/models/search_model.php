<?php

class Search_model extends CI_Model
{

	// function searchBuku($filters)
	// {
	// 	 if($kategori=='genre'){
	// 	 	$this->db->select(*);
 //  		 	$this->db->from('buku');
 //  		 	$this->db->like('genre', $keyword);   
 //  		 	$query = $this->db->get();
 //  		 	return $resultSearchBuku = $query->result();
 //  			}
 //  		else if($kategori=='judul'){
	// 	 	$this->db->select(*);
 //  		 	$this->db->from('buku');
 //  		 	$this->db->like('judul', $keyword);   
 //  		 	$query = $this->db->get();
 //  		 	return $resultSearchBuku = $query->result();
 //  		}
 //  		else {
	// 	 	$this->db->select(*);
 //  		 	$this->db->from('buku');
 //  		 	$this->db->like('pengarang', $keyword);   
 //  		 	$query = $this->db->get();
 //  		 	return $resultSearchBuku = $query->result();
  		
 //  		}
	// }

	function searchPengguna($keyword,$kategori)
	{
        $this->db->select('*');
        $this->db->from('non_admin');
        $this->db->where($kategori, $keyword);   
        $query = $this->db->get();
        return $resultSearchPengguna = $query->result();
		/* if($name!=null){
		 	  $this->db->select('*');
  		 	$this->db->from('non_admin');
  		 	$this->db->where('nama', $keyword);   
  		 	$query = $this->db->get();
  		 	return $resultSearchPengguna = $query->result();
  			}
  		else if($faculty!=null){
		 	$this->db->select('*');
  		 	$this->db->from('non_admin');
  		 	$this->db->where('fakultas', $keyword); 
        var_dump($faculty); 
  		 	$query = $this->db->get();
  		 	return $resultSearchPengguna = $query->result();
  		}
  		else if($location!=null) {
		 	$this->db->select('*');
  		 	$this->db->from('non_admin');
  		 	$this->db->where('domisili', $keyword);
         var_dump($location);   
  		 	$query = $this->db->get();
  		 	return $resultSearchPengguna = $query->result();
  		
  		}
  		else {
		 	$this->db->select('*');
  		 	$this->db->from('non_admin');
  		 	$this->db->where('status', $keyword);   
  		 	$query = $this->db->get();
  		 	return $resultSearchPengguna = $query->result();
  		
  		}*/
	}

  /*function searchPengguna($nama){

    $this->load->database();
    $this->db->select('*');
    $this->db->from('non_admin');
    $nama= str_replace("%20", " ",$nama);
    //$this->db->where('nama',$keyword);
    $this->db->where('nama', $nama);
  
   
    $query = $this->db->get(); 
    return $query->result_array(); 


  }*/
}


?>