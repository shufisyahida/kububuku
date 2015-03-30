<?php
    class Book extends CI_Controller{
        public function book_info()
        {
            // $data['page_title'] = "CI Hello World App!";
        	$this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('book_info_view');
            $this->load->view('foot_view');
        }
    }
?>