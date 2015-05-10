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

		function getDeleteRequest()
		{
			$this->db->select('*');
			$this->db->from('permintaan_ubah_hapus');
			$this->db->where('kategori',0);

			$query=$this->db->get();

			return $result = $query->result();
		}

		function getUpdateRequest()
		{
			$this->db->select('*');
			$this->db->from('permintaan_ubah_hapus');
			$this->db->where('kategori',1);

			$query=$this->db->get();

			return $result = $query->result();
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