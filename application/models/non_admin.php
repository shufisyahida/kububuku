<?php

	class Non_admin extends CI_Model
	{

		function createUser($data)
		{
			$this->db->insert('non_admin',$data);
		}

		function getAllUser()
		{
			$this->db->select('*');
			$this->db->from('non_admin');
			$this->db->order_by("tanggal_buat", "desc");
			$query = $this->db->get()->result();
			return $query;
		}

		function getListUser($limit, $start) 
		{
	       	 $this->db->select('*');
			$this->db->from('non_admin');
			$this->db->order_by("tanggal_buat", "desc");
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

		function getContact($username)
		{
			$this->db->select('email_kontak,fb,twitter,line_id,hp,bbm,wa');
			$this->db->from('non_admin');
			$this->db->where('username',$username);		
			$query= $this->db->get()->result();

			return $query;
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

           // var_dump($foto);

           return $foto;
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
            {
            	return 'Male';
            }				
			elseif($jk=='F')
			{
				return 'Female';
			}
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
			{
				return 'Student';
			}	
			elseif($stat==2)
			{
				return 'Lecturer';
			}	
			elseif($stat==3)
			{
				return 'Staff';
			}
			else{
				return 'Alumnus';
			}				

			return $stat;
		}

		function getUser($username)
		{
			$this->db->select('*');
			$this->db->from('non_admin');
			$this->db->where('username',$username);
			$query=$this->db->get();

			return $user = $query->result();
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

		function giveRank($username,$rank,$isBorrower)
		{
			if($isBorrower)
			{
				$this->db->select('rank_peminjam');
				$this->db->from('non_admin');
				$this->db->where('username',$username);

				$lama = $this->db->get()->result();

				$rankLama='';

	            foreach ($lama as $key => $value)
	            {
	                $rankLama = $value->rank_peminjam;
	            }          

	            $rankBaru = round(($rankLama+$rank)/2.00);

	            $data=array('rank_peminjam'=>$rankBaru);
	            $this->db->where('username',$username);
	            $this->db->update('non_admin',$data);
			}
			else
			{
				$this->db->select('rank_pemilik');
				$this->db->from('non_admin');
				$this->db->where('username',$username);

				$lama = $this->db->get()->result();

				$rankLama='';

	            foreach ($lama as $key => $value)
	            {
	                $rankLama = $value->rank_pemilik;
	            } 

	            $rankBaru = round(($rankLama+$rank)/2.00);

	            $data=array('rank_pemilik'=>$rankBaru);
	            $this->db->where('username',$username);
	            $this->db->update('non_admin',$data);
			}
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

		function isRegisteredEmail($email)
		{
			$this->db->select('*');
			$this->db->from('non_admin');
			$this->db->where('email',$email);		
			$query= $this->db->get()->result();

			if(sizeof($query)!=0)
			{				
				return true;
			}
			else
			{
				return false;
			}
		}

		function isRegisteredUsername($username)
		{
			$this->db->select('*');
			$this->db->from('non_admin');
			$this->db->where('username',$username);

			$query= $this->db->get()->result();

			if(sizeof($query)!=0)
			{				
				return true;
			}
			else
			{
				return false;
			}
		}

		function searchUser($keyword,$kategori)
		{
			if($kategori == 'fakultas')
			{
				$this->db->select('*');
				$this->db->from('non_admin');
				$this->db->where($kategori, $keyword);   
				$query = $this->db->get();
				return $resultSearchPengguna = $query->result();
			}
			else
			{
				$this->db->select('*');
				$this->db->from('non_admin');
				$this->db->like($kategori, $keyword);   
				$query = $this->db->get();
				return $resultSearchPengguna = $query->result();
			}
		}

		// function setPhoto($username, $photo)
		// {
		// 	$data=array('foto' => $photo);
		// 	$this->db->where('username',$username);
		// 	$this->db->update('non_admin',$data);
		// }

		public function upload_image()
		{
			$config['upload_path']='./uploads/';
			$config['allowed_types']='gif|jpg|png|jpeg';
			$config['max_size']='1024';
			$config['max_width']='1024';
			$config['max_height']='1024';

			$this->load->library('upload',$config);

			if(!$this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
				return 0;
			}
			else
			{
				$data = $this->upload->data();
				$filename=$data['file_name'];
				$path = base_url()."uploads/".$filename;
				$user= $this->session->userdata('username');
				$result=array('foto'=>$path);
				$this->db->where('username',$user);
				$insertstatus=$this->db->update('non_admin',$result);
				return $filename;
			}

		}

		public function upload_thumbnail()
		{
			$this->load->helper('string');
			$rand = random_string('alnum',4);
			$w = $this->input->post('thumb_width');
			$h = $this->input->post('thumb_height');
			$x1 = $this->input->post('x_axis');
			$y1 = $this->input->post('y_axis');
			$img = $this->input->post('img');
			$new_name = "small".$rand.".jpg";
			$path = "./uploads/";
			list($joe,$alto)=getimagesize($path.$img);
			$ratio = $joe/500;
			$x1 = ceil($x1*$ratio);
			$y1 = ceil($y1*$ratio);
			$wd = ceil($w*$ratio);
			$ht = ceil($h*$ratio);
			$nw = 100;
			$nh = 100;
			$nimg = imagecreatetruecolor($nw,$nh);
			$img_src=imagecreatefromjpeg($path.$img);
			imagecopyresampled($nimg, $img_src, 0, 0, $x1, $y1, $nw, $nh, $wd, $ht);
			imagejpeg($nimg,$path.$new_name,90);

			$result = array('foto'=>base_url()."uploads/".$new_name);
			$user = $this->session->userdata('username');
			$this->db->where('username',$user);
			$insertstatus=$this->db->update('non_admin',$result);
			return $new_name;
		}

		public function deleteUser($username)
		{
			$this->db->where('username',$username);
			$this->db->delete('non_admin');
		}

	} // end of Non_admin

?>


