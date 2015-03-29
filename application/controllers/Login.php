<?php
    class Login extends CI_Controller{
        public function index()
        {
            // $data['page_title'] = "CI Hello World App!";
        	$this->load->view('head_view');
            $this->load->view('login_view');
            $this->load->view('foot_view');
        }
    }
?>