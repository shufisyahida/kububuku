<?php

	class Pesan extends CI_Model
	{
		public function read(id)
		{
			$this->db->select('*');
			$this->db->from('pesan');
			$this->db->where('id',$id);		
			$query= $this->db->get()->result();

			return $query;
		}

		public function delete(id)
		{
			$this->db->where('id',$id);
			$this->db->delete('pesan');
		}
	}
?>
