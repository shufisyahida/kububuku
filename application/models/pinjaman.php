<?php

class Pinjaman extends CI_Model
{
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

	function accept($id)
	{
		$data = array('status'=>2);
		$this->db->where('id',$id);
		$this->db->update('pinjaman',$data);
		echo 'wah';
	}

	function decline($id)
	{
		$data = array('status'=>5);
		$this->db->where('id',$id);
		$this->db->update('pinjaman',$data);
	}

	function returnBook($id)
	{
		$data = array('status'=>3);
		$this->db->where('id',$id);
		$this->db->update('pinjaman',$data);
	}

	function confirmReturn($id)
	{
		$data = array('status'=>4);
		$this->db->where('id',$id);
		$this->db->update('pinjaman',$data);
	}
}

?>