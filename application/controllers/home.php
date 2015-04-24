<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Home extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $username = $this->session->userdata('username');
            $hasLoggedIn = $this->session->userdata($username);
            if(!empty($hasLoggedIn) && $hasLoggedIn)
            {
                redirect(base_url('index.php/request_in'));
            }
        }
        
        public function index()
        {
            // $data['page_title'] = "CI Hello World App!";
        	$this->load->view('home_view');
        }

    } // end of Home

?>