<?php
    class Registration extends CI_Controller
    {
        
        public function __construct()
        {
            parent::__construct();
            $isMember = SSO\SSO::authenticate();
            var_dump($isMember);
            
        }

        public function step_one()
        {
            // $data['page_title'] = "CI Hello World App!";
        	$this->load->view('head_view');
            $this->load->view('registration_one_view');
            $this->load->view('foot_view');
        }

        public function step_two()
        {
            // $data['page_title'] = "CI Hello World App!";
        	$this->load->view('head_view');
            $this->load->view('registration_two_view');
            $this->load->view('foot_view');
        }
    }
?>