<?php

	class Pesan_model extends CI_Model
	{

		public function getPesan()
		{
			$this->db->select('*');
			$this->db->from('pesan');
			$this->db->order_by("waktu", "desc");
			$query = $this->db->get()->result();

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


		public function createPesan($data){
			$this->db->insert('pesan', $data);
		}
	}
?>
