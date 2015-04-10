<?php
    class Search extends CI_Controller
    {
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
             $keyword = $this->input->post('keyword');
             $name = $this->input->post('name-radio');
             $location = $this->input->post('location-radio');
             $status = $this->input->post('status-radio');
             $faculty = $this->input->post('faculty-radio');
             $this->load->model('search_model');
             $data['resultSearchPengguna'] = $this->search_model->searchPengguna($keyword,$name,$location,$status,$faculty);
         

            
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('search_user_view',$data);
            $this->load->view('foot_view');


                        
        }
    }
?>