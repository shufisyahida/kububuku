<?php
    class Login extends CI_Controller{
        public function index()
        {
        	$username = $this->session->userdata('username');
          $loggedin = $this->session->userdata(''.$username);
          // $email="";
           
           if($loggedin)
           {
           		redirect(base_url('index.php/Dashboard'));
           }
           else
           {
           	 	$this->load->view('head_view');
            	$this->load->view('login_view');
            	$this->load->view('foot_view');
           }
           // elseif ($this->session->set_userdata('error_login_'.$email,true)) {
           //    redirect(base_url('index.php/login'));
           // }        	
        }
    }
?>