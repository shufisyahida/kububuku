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

		function emailSudahAda($email)
		{
			$this->db->select('*');
			$this->db->from('non_admin');
			$this->db->where('email',$email);		
			$query= $this->db->get()->result();

			if(sizeof($query)!=0) {				
				return true;
			}
			else {
				return false;
			}
		}

		function usernameSudahAda($username)
		{
			$this->db->select('*');
			$this->db->from('non_admin');
			$this->db->where('username',$username);		
			$query= $this->db->get()->result();

			if(sizeof($query)!=0) {				
				return true;
			}
			else {
				return false;
			}
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

		function getUser($username)
		{
			$this->db->select('*');
			$this->db->from('non_admin');
			$this->db->where('username',$username);

			$query=$this->db->get();

			return $user = $query->result();
		}

		function getContact($username)
		{

		$this->db->select('email_kontak,fb,twitter,line_id,hp,bbm,wa');
		$this->db->from('non_admin');
		$this->db->where('username',$username);
		
		$query= $this->db->get()->result();

		return $query;
		}

		function getStatus($username)
		{
	
			$this->db->select('status');
			$this->db->from('non_admin');
			$this->db->where('username',$username);

			$statusUser = $this->db->get()->result();

			$stat='';

            foreach ($statusUser as $key => $value)
            {
                $stat = $value->status;
            }

            if($stat==1)
				return 'Student';
			elseif($stat==2)
				return 'Lecturer';
			elseif($stat==3)
				return 'Staff';

			return $stat;
		}

		function getSex($username)
		{
			$this->db->select('jenis_kelamin');
			$this->db->from('non_admin');
			$this->db->where('username',$username);

			$jenisKelamin = $this->db->get()->result();

			$jk='';

            foreach ($jenisKelamin as $key => $value)
            {
                $jk = $value->jenis_kelamin;
            }

            if($jk=='M')
				return 'Male';
			elseif($jk=='F')
				return 'Female';

			return $jk;
		}

		function getPicture($username)
		{
			$this->db->select('foto');
			$this->db->from('non_admin');
			$this->db->where('username',$username);

			$gambar = $this->db->get()->result();
			

			$foto='';

            foreach ($gambar as $key => $value)
            {
                $foto = $value->foto;
            }

            var_dump($foto);

           return $foto;
		}

		function setPhoto($username, $photo)
		{
			$data=array('foto' => $photo);
			$this->db->where('username',$username);
			$this->db->update('non_admin',$data);
		}

	}


	





?>
