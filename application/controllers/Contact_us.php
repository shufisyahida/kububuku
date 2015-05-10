<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Contact_us extends CI_Controller
    {        
        public function __construct()
        {
            parent::__construct();
            $username = $this->session->userdata('username');
            if(!$this->session->userdata(''.$username))
            {
                redirect(base_url('index.php/Login'));
            }
        }

        public function index()
        {
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('contact_us_view');
            $this->load->view('foot_view');
        }

    } // end of Contact_us

?>