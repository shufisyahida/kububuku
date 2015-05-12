<?php

	class Pesan_model extends CI_Model
	{
<<<<<<< HEAD:application/models/pesan_model.php
		/*public function read(id)
=======
		public function getPesan()
		{
			$this->db->select('*');
			$this->db->from('pesan');
			$query = $this->db->get()->result();

			//var_dump($query);
			return $query;

		}

		public function read($id)
>>>>>>> 4b9b18f3d39712c6e7be5b378595ea0cba5f9a56:application/models/pesan.php
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
		}*/
		public function createPesan($data){
			$this->db->insert('pesan', $data);
		}
	}
?>
