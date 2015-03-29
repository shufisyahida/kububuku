<?php
    class Home extends CI_Controller{
        function index()
        {
        	$data['page_title'] = "CI Hello World App!";
        	$this->load->view('head_view');
            $this->load->view('header_view');
            $this->load->view('home_view');
            $this->load->view('foot_view');
        }
    }
?>