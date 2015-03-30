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

	function isMember($username,$password)
	{
		$query='select * from non_admin where username ='.$username.'';
		$row = $this->db->query($squery)->result();

		if(!is_null($row))
		{
			$realPass = $row->password;
			if($realPass==$password)
				return true;
			else
				return false;
		}
		else
			return false;
	}
}

?>