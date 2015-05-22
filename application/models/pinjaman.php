<?php

	class Pinjaman extends CI_Model
	{
		
		function accept($id)
		{
			$data = array('status'=>2);
			$this->db->where('id',$id);
			$this->db->update('pinjaman',$data);
		}
		
		function add($data)
		{
			$result = $this->db->insert('pinjaman',$data);
			if(!$result)
			{
				return false;
			}
			else
			{
				return true;
			}
		}
		
		function confirmReturn($id)
		{
			$this->db->delete('pinjaman',array('id'=>$id));
			/*$data = array('status'=>4);
			$this->db->where('id',$id);
			$this->db->update('pinjaman',$data);*/
		}
		
		function decline($id)
		{
			$data = array('status'=>5);
			$this->db->where('id',$id);
			$this->db->update('pinjaman',$data);
		}

		function getRequestIn($username)
		{
			$this->db->select('id,username_peminjam, isbn, durasi,status');
			$this->db->from('pinjaman');

			$status=array(1,2,3);
			$this->db->where('username_pemilik',$username)->where_in('status',$status);
			
			
			$query= $this->db->get()->result();
			return $query;
		}

		function getRequestOut($username)
		{
			$this->db->select('id,username_pemilik, isbn, durasi,status');
			$this->db->from('pinjaman');

			$status=array(1,2,3);
			$this->db->where('username_peminjam',$username)->where_in('status',$status);
			
			
			$query= $this->db->get()->result();
			return $query;
		}

		function getNotifRequest($username)
		{
			$this->db->select('*');
			$this->db->from('pinjaman');
			$this->db->where('username_pemilik',$username)->where('is_notified',false)->where('status','1');
			$query=$this->db->get();	 
	        if ($query->num_rows() > 0) {
	            return true;
	        }
	        else {
	        	return false;
	        }
		}
		function getNotifReturn($username)
		{
			$this->db->select('*');
			$this->db->from('pinjaman');
			$this->db->where('username_pemilik',$username)->where('is_notified',false)->where('status','3');
			$query=$this->db->get();	 
	        if ($query->num_rows() > 0) {
	            return true;
	        }
	        else {
	        	return false;
	        }
		}

		function getNotifAccept($username)
		{
			$this->db->select('*');
			$this->db->from('pinjaman');
			$this->db->where('username_peminjam',$username)->where_in('is_notified',false)->where('status','2');
			$query=$this->db->get();	 
	        if ($query->num_rows() > 0) {
	            return true;
	        }
	        else {
	        	return false;
	        }
		}

		function getNotifDecline($username)
		{
			$this->db->select('*');
			$this->db->from('pinjaman');
			$this->db->where('username_peminjam',$username)->where_in('is_notified',false)->where('status','5');
			$query=$this->db->get();	 
	        if ($query->num_rows() > 0) {
	            return true;
	        }
	        else {
	        	return false;
	        }
		}

		public function setRequest($username, $user, $isbn)
		{
			$data=array('pinjaman.is_notified'=>true);
			$this->db->where('username_pemilik',$username)->where('username_peminjam',$user)->where('isbn',$isbn)->where('is_notified',false)->where('status','1');
			$this->db->update('pinjaman',$data);
		}

		public function setAccept($username, $user, $isbn)
		{
			$data=array('pinjaman.is_notified'=>true);
			$this->db->where('username_peminjam',$username)->where('username_pemilik',$user)->where('isbn',$isbn)->where('is_notified',false)->where('status','2');
			$this->db->update('pinjaman',$data);
		}

		public function setDecline($username, $user, $isbn)
		{
			$data=array('pinjaman.is_notified'=>true);
			$this->db->where('username_peminjam',$username)->where('username_pemilik',$user)->where('isbn',$isbn)->where('is_notified',false)->where('status','5');
			$this->db->update('pinjaman',$data);
		}
		public function setReturn($username, $user, $isbn)
		{
			$data=array('pinjaman.is_notified'=>true);
			$this->db->where('username_pemilik',$username)->where('username_peminjam',$user)->where('isbn',$isbn)->where('is_notified',false)->where('status','3');
			$this->db->update('pinjaman',$data);
		}
		function notifRequest($username)
		{
			$this->db->select('username_peminjam as user, buku.judul as judul, non_admin.foto as foto, buku.isbn as isbn');
			$this->db->from('pinjaman');
			$this->db->join('buku','pinjaman.isbn=buku.isbn');
			$this->db->join('non_admin', 'non_admin.username = pinjaman.username_peminjam');
			$this->db->where('username_pemilik',$username)->where('is_notified',false)->where('pinjaman.status','1');
			$query=$this->db->get();	 
	        return $resultRequest = $query->result();
		}

		function notifAccept($username)
		{
			$this->db->select('username_pemilik as user, buku.judul as judul, non_admin.foto as foto, buku.isbn as isbn');
			$this->db->from('pinjaman');
			$this->db->join('buku','pinjaman.isbn=buku.isbn');
			$this->db->join('non_admin', 'non_admin.username = pinjaman.username_pemilik');
			$this->db->where('username_peminjam',$username)->where('is_notified',false)->where('pinjaman.status','2');
			$query=$this->db->get();	 
	        return $resultAccept = $query->result();
		}

		function notifDecline($username)
		{
			$this->db->select('username_pemilik as user, buku.judul as judul, non_admin.foto as foto, buku.isbn as isbn');
			$this->db->from('pinjaman');
			$this->db->join('buku','pinjaman.isbn=buku.isbn');
			$this->db->join('non_admin', 'non_admin.username = pinjaman.username_pemilik');
			$this->db->where('username_peminjam',$username)->where('is_notified',false)->where('pinjaman.status','5');
			$query=$this->db->get();	 
	        return $resultDecline = $query->result();
		}

		function notifReturn($username)
		{
			$this->db->select('username_peminjam as user, buku.judul as judul, non_admin.foto as foto, buku.isbn as isbn');
			$this->db->from('pinjaman');
			$this->db->join('buku','pinjaman.isbn=buku.isbn');
			$this->db->join('non_admin', 'non_admin.username = pinjaman.username_peminjam');
			$this->db->where('username_pemilik',$username)->where('is_notified',false)->where('pinjaman.status','3');
			$query=$this->db->get();	 
	        return $resultReturn = $query->result();
		}


		
		
		function isRequested($peminjam, $pemilik, $isbn)
		{
			$this->db->select('*');
			$this->db->from('pinjaman');
			$this->db->where('username_peminjam',$peminjam)->where('username_pemilik',$pemilik)->where('isbn',$isbn);		
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

		function returnBook($id)
		{
			$data = array('status'=>3);
			$this->db->where('id',$id);
			$this->db->update('pinjaman',$data);
		}

	} // end of Pinjaman

?>