<?php

	class Admin_model extends CI_Model
	{

		function isMember($username,$password)
		{
			$this->db->select('password');
			$this->db->from('admin');
			$this->db->where('username',$username);

			$query= $this->db->get()->result();			
			
			foreach ($query as $key => $value) 
			{
				$realPass=$value->password;
			}
			
			if(!is_null($realPass))
			{
				if($realPass==$password)
				{
					return true;
				}	
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}

		function isAdmin($username)
		{
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where('username',$username);

			$query= $this->db->get()->result();		

			

			if(!empty($query))
				return true;
			else
				return false;	
		}

		

	} // end of Non_admin

?>


