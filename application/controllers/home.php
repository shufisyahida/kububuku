<?php
    class Home extends CI_Controller{
        public function index()
        {
            // $data['page_title'] = "CI Hello World App!";
        	$this->load->view('home_view');
        }

        // public function login()
        // {
        //     $this->load->view('head_view');
        //     $this->load->view('login_view');
        //     $this->load->view('foot_view');
        // }
    }
?>