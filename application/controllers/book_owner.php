<?php
    class Book_Owner extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $username = $this->session->userdata('username');
            if(!$this->session->userdata(''.$username))
            {
                redirect(base_url('index.php/login'));
            }
        }

        public function show($isbn)
        {
            // $data['page_title'] = "CI Hello World App!";
        	$this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('book_owners_view');
            $this->load->view('foot_view');
        }
    }
?>