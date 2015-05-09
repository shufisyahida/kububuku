<?php

	class Pesan extends CI_Model
	{
		public function getPesan()
		{
			$this->db->select('*');
			$this->db->from('pesan');
			$query = $this->db->get()->result();

			//var_dump($query);
			return $query;

		}

		public function read($id)
		{
			$this->db->select('*');
			$this->db->from('pesan');
			$this->db->where('id',$id);		
			$query= $this->db->get()->result();

			return $query;
		}

		public function delete($id)
		{
			$this->db->where('id',$id);
			$this->db->delete('pesan');
		}
	}
?>
