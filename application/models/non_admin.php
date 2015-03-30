<?php

class Non_admin extends CI_Model
{
	function createUser($data)
	{
		$this->db->insert('non_admin',$data);
	}

	function getAllUser()
	{
		return $this->db->get('non_admin')->result();
	}

	function isMember($email,$password)
	{
		$this->db->select('password');
		$this->db->from('non_admin');
		$this->db->where('email',$email);
		
		$query= $this->db->get()->result();
		
		foreach ($query as $key => $value) 
		{
			$realPass=$value->password;
		}

		
		if(!is_null($realPass))
		{
			
			if($realPass==$password)
				return true;
			else
				return false;
		}
		else
			return false;
	}

	function getUsername($email)
	{
		$this->db->select('username');
		$this->db->from('non_admin');
		$this->db->where('email',$email);
		
		$query= $this->db->get()->result();
		
		foreach ($query as $key => $value) 
		{
			$username=$value->username;
		}

		return $username;
	}
}

?>