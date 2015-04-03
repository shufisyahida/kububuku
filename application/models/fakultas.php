<?php

class Fakultas extends CI_Model
{

	public function getFaculty($id)
	{
		$this->db->select('nama');
		$this->db->from('fakultas');
		$this->db->where('id',$id);

		$namaFak = $this->db->get()->result();

		 $fak='';
         foreach ($namaFak as $key => $value)
         {
            $fak = $value->nama;
         }
		return $fak;
	}
}