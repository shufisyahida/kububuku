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

		function getNotifDipinjam($username)
		{
			$this->db->select('*');
			$this->db->from('pinjaman');
			$this->db->where('username_pemilik',$username)->where_in('is_notified',false);
			$query=$this->db->get();	 
	        if ($query->num_rows() > 0) {
	            return true;
	        }
	        else {
	        	return false;
	        }
		}

		function getNotifMeminjam($username)
		{
			$this->db->select('*');
			$this->db->from('pinjaman');
			$this->db->where('username_peminjam',$username)->where_in('is_notified',false);
			$query=$this->db->get();	 
	        if ($query->num_rows() > 0) {
	            return true;
	        }
	        else {
	        	return false;
	        }
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