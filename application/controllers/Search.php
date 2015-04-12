<?php
    class Search extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $username = $this->session->userdata('username');
            if(!$this->session->userdata(''.$username))
            {
                redirect(base_url('index.php/login'));
            }
        }
        
        public function homeBuku(){
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('search_book_view');
            $this->load->view('foot_view');
        }

        public function homeUser(){
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('search_user_view');
            $this->load->view('foot_view');
        }

        public function cariBuku()
        { 
             $filters['keyword'] = $this->input->post('keyword', TRUE);
             $filters['kategori'] = $this->input->post('kategori', TRUE);
             $data = $this->search_model->searchBuku($filters);
         

            
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('search_book_view',$data);
            $this->load->view('foot_view');


                        
        }

        public function cariPengguna()
        { 
             $filters['keyword'] = $this->input->post('keyword', TRUE);
             $filters['kategori'] = $this->input->post('kategori', TRUE);
             $data = $this->search_model->searchPengguna($filters);
         

            
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('search_user_view',$data);
            $this->load->view('foot_view');


                        
        }
    }
?>