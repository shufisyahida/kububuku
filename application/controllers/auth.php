<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	// public function __construct()
 //     {
 //            parent::__construct();
 //            $username = $this->session->userdata('username');
 //            if(!$this->session->userdata(''.$username))
 //            {
 //                redirect(base_url('index.php/login'));
 //            }
 //     }
	public function __construct() {
        parent:: __construct();
        // Load form helper
        // $this->load->helper('form');
        // Load encryption library
        $this->load->library('encrypt');
        // Load form validation library
        // $this->load->library('form_validation');
    }
	


	public function login()
	{
		if(isset($_POST))
		{
			$email = $this->input->post('email');
			$key = md5($this->input->post('password'));
			$password = substr($key, 0, 30);

			$this->load->model('non_admin');
			$isMember = $this->non_admin->isMember($email,$password);

			

			if ($isMember) 
			{
				$username = $this->non_admin->getUsername($email);
				$this->session->set_userdata('username',$username);

				$foto = $this->non_admin->getPicture($username);
				$this->session->set_userdata(''.$username,true);
				$this->session->set_userdata('foto',$foto);
				
				// redirect(base_url('index.php/Dashboard'));
				redirect(base_url('index.php/Request_in'));


			}	
			else
			{
				$this->session->set_userdata('email',$email);
				$this->session->set_userdata('error_login_'.$email,true);
				redirect(base_url('index.php/login/login_failed'));
			}		
		}
		else
		{
			$this->session->set_userdata('email',$email);
			$this->session->set_userdata('error_login_'.$email,true);
			redirect(base_url('index.php/login/login_failed'));

		}
			

	}

	public function logout()
	{
		
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
		
	}


}


?>