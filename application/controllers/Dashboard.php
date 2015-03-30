<?php
    class Dashboard extends CI_Controller{
        
        public function __construct()
        {
            parent::__construct();
            $username = $this->session->userdata('username');
            if(!$this->session->userdata(''.$username))
            {
                redirect(base_url('index.php/login'));
            }
        }


        function index()
        {
        	// $data['page_title'] = "CI Hello World App!";
        	$this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('dashboard_view');
            $this->load->view('foot_view');
        }

        function request_in()
        {
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('request_in_view');
            $this->load->view('foot_view');
        }

        function request_out()
        {
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('request_out_view');
            $this->load->view('foot_view');
        }

        function collection()
        {
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('collection_view');
            $this->load->view('foot_view');
        }

        function wishlist()
        {
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('wishlist_view');
            $this->load->view('foot_view');
        }
    }
?>