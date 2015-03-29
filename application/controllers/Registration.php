<?php
    class Registration extends CI_Controller{
        public function index()
        {
            // $data['page_title'] = "CI Hello World App!";
        	$this->load->view('head_view');
            // $this->load->view('registration_view');
            $this->load->view('foot_view');
        }
    }
?>