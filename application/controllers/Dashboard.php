<?php
    class Dashboard extends CI_Controller{
        function index()
        {
        	// $data['page_title'] = "CI Hello World App!";
        	$this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('dashboard_view');
            $this->load->view('foot_view');
        }
    }
?>