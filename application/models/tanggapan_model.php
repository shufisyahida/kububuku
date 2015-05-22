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

		public function getNotifTanggapan($username)
		{
			$this->db->select('*');
			$this->db->from('tanggapan');
			$this->db->join('wishlist', 'wishlist.id = tanggapan.id_wishlist');
			$this->db->where('wishlist.username', $username)->where('tanggapan.is_notified',false);
			
			$query=$this->db->get();	 
	        if ($query->num_rows() > 0) {
	            return true;
	        }
	        else {
	        	return false;
	        }
		}

		public function setTanggapan($username, $id)
		{
			$data=array('tanggapan.is_notified'=>true);
			$this->db->where('wishlist.username', $username)->where('is_notified',false)->where('tanggapan.id_wishlist', $id);
			$this->db->update('tanggapan join wishlist on tanggapan.id_wishlist=wishlist.id',$data);
		}

		public function getAllTanggapan($username){
			$this->db->select("tanggapan.username as user, buku.judul as judul, non_admin.foto as foto, tanggapan.id_wishlist as id");
			$this->db->from('tanggapan');
			$this->db->join('wishlist', 'wishlist.id = tanggapan.id_wishlist');
			$this->db->join('buku', 'wishlist.isbn = buku.isbn');
			$this->db->join('non_admin', 'non_admin.username = tanggapan.username');
			$this->db->where('wishlist.username', $username)->where('tanggapan.is_notified',false);
			
			$query=$this->db->get();
			return $resultTanggapan = $query->result();

		}
		
	} // end of Tanggapan

?>