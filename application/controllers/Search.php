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
/*
        public function cariBuku()
        { 
             $filters['keyword'] = $this->input->post('keyword', TRUE);
             $filters['kategori'] = $this->input->post('kategori', TRUE);
             $data = $this->search_model->searchBuku($filters);
         

            
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('search_book_view',$data);
            $this->load->view('foot_view');


                        
        }*/

        public function cariPengguna()
        { 
            if(isset($_POST))
        {
             $keyword = $this->input->post('keyword');
             //$kategori = $this->input->post('password');
             $kategori = $this->input->post('kategori');
            //$location = $this->input->post('location-radio');
             //$status = $this->input->post('status-radio');
             //$faculty = $this->input->post('faculty-radio');
           /* if($name!=null){
                $kategori=$name;
            }                
            else if($name!=null){
                $kategori=$location;
            }
            else if($name!=null){
                $kategori=$status;
            }
            else{
                $kategori=$faculty;
            }*/
             $this->load->model('search_model');
             $data['resultSearchPengguna'] = $this->search_model->searchPengguna($keyword,$kategori);
            /* $this->load->library('table');
             $this->load->helper('html'); 
             $nama1 = $nama;
             $this->load->model('search_model');
             $data['query'] = $this->search_model->searchPengguna($nama1);
             echo json_encode($data);*/

          
        }
        else{
            $data = "tidak ada";
    }

          
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('search_user_view2',$data);
            $this->load->view('foot_view');          
        }
    }
?>