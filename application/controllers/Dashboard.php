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

        /*function request_in($data)
        {
            var_dump($data);
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('request_in_view');
            $this->load->view('foot_view');
        }*/

     /*   function request_out()
        {
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('request_out_view');
            $this->load->view('foot_view');
        }*/

        function collection()
        {
            $username = $this->session->userdata('username'); 

            $this->load->model('koleksi_model');
            $data['resultAvailable'] = $this->koleksi_model->getKoleksiAvailable($username);
            //$this->load->model('koleksi_model');
            $data['resultBorrowed'] = $this->koleksi_model->getKoleksiBorrowed($username);
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('collection_view', $data);
            //$this->load->view('collection_view', $data2);
            $this->load->view('foot_view');
        }

        // function search()
        // {
        //      $filters['keyword'] = $this->input->post('keyword', TRUE);
        //      $filters['kategori'] = $this->input->post('kategori', TRUE);
        //      $data = $this->yourmodel->search($filters);
        //      $this->load->view('view_file', $data);
        // }

        function wishlist()
        {
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('wishlist_view');
            $this->load->view('foot_view');
        }
    }
?>