<?php

	class Permintaan_ubah_hapus extends CI_Model
	{

		function getPerubahan($id)
		{
			$this->db->select('perubahan');
			$this->db->from('permintaan_ubah_hapus');
			$this->db->where('id',$id);

			$perubahan = $this->db->get()->result();
			$result = '';
			foreach ($perubahan as $key => $value)
            {
                $result = $value->perubahan;
            }

			return $result;
		}

		function getDeleteRequestList($limit, $start)
		{
			$this->db->select('*');
			$this->db->from('permintaan_ubah_hapus');
			$this->db->where('kategori',0);

			$this->db->limit($limit, $start);
			$query = $this->db->get();
	 
	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
		}

		function getUpdateRequestList($limit, $start)
		{
			$this->db->select('*');
			$this->db->from('permintaan_ubah_hapus');
			$this->db->where('kategori',1);

			$this->db->limit($limit, $start);
			$query = $this->db->get();
	 
	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
		}

		function createPermintaan($data)
		{
			$this->db->insert('permintaan_ubah_hapus',$data);
		}

		function delete($id)
		{
			$this->db->where('id',$id);	
			$this->db->delete('permintaan_ubah_hapus');
		}

	} // end of Buku

?>