<?php

	class Pesan extends CI_Model
	{

		function createPesan($data)
		{
			$this->db->set('time', 'NOW()', FALSE);
			$this->db->insert('pesan',$data);
		}

		
	} // end of Pesan

?>