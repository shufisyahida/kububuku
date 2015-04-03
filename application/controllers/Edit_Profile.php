<?php
    class Edit_Profile extends CI_Controller{
        public function index()
        {
            // $data['page_title'] = "CI Hello World App!";
        	$this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('edit_profile_view');
            $this->load->view('foot_view');
        }
    }
?>