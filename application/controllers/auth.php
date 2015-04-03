<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	
	public function login()
	{
		if(isset($_POST))
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');	

			$this->load->model('non_admin');
			$isMember = $this->non_admin->isMember($email,$password);

			

			if ($isMember) 
			{
				$username = $this->non_admin->getUsername($email);
				$this->session->set_userdata('username',$username);
				$this->session->set_userdata(''.$username,true);
				
				redirect(base_url('index.php/Dashboard'));		
			}	
			else
			{
				$this->session->set_userdata('email',$email);
				$this->session->set_userdata('error_login_'.$email,true);
				redirect(base_url('index.php/login'));
				
			}		
		}
		else
		{
			$this->session->set_userdata('email',$email);
			$this->session->set_userdata('error_login_'.$email,true);
			redirect(base_url('index.php/login'));

		}
			

	}

	public function logout()
	{
		
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
		
	}


}


?>