<?php

	class Pesan_model extends CI_Model
	{

		// public function getPesan()
		// {
		// 	$this->db->select('*');
		// 	$this->db->from('pesan');
		// 	$this->db->order_by("waktu", "desc");
		// 	$query = $this->db->get()->result();

		// 	return $query;

		// }

		public function getListPesan($limit, $start) {
	        $this->db->limit($limit, $start);
	        $query = $this->db->get("pesan");
	 
	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
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

		public function pesanCount() 
		{
	        return $this->db->count_all('pesan');
	    }
	}
?>
