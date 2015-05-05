<?php

	class Permintaan_ubah_hapus extends CI_Model
	{

		function getPerubahan($username, $isbn)
		{
			$this->db->select('perubahan');
			$this->db->from('permintaan_ubah_hapus');
			$this->db->where('username',$username)->where('isbn',$isbn)->where('kategori',1);

			$query=$this->db->get();

			return $result = $query->result();
		}

		function createPermintaan($data)
		{
			$this->db->insert('permintaan_ubah_hapus',$data);
		}

		function confirm($username, $isbn, $kategori, $is_accepted)
		{
			$data = array('is_accepted'=>$is_accepted);
			$this->db->where('username',$username)->where('isbn',$isbn)->where('kategori',$kategori);	
			$this->db->update('permintaan_ubah_hapus',$data);
		}

	} // end of Buku

?>