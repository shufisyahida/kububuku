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

		public function getAllTanggapan($username){
			$this->db->select('*');
			$this->db->from('tanggapan');
			$this->db->join('wishlist', 'wishlist.id = tanggapan.id_wishlist');
			$this->db->where('wishlist.username', $username)->where('tanggapan.is_notified',false);
			$this->db->set('tanggapan.is_notified', true);

			
		}
		
	} // end of Tanggapan

?>