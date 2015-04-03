<?php
    class Search extends CI_Controller
    {
        
        public function cariBuku()
        { 
             $filters['keyword'] = $this->input->post('keyword', TRUE);
             $filters['kategori'] = $this->input->post('kategori', TRUE);
             $data = $this->search_model->search($filters);
         

            
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('searchBuku_view',$data);
            $this->load->view('foot_view');


                        
        }

        public function cariPengguna()
        { 
             $filters['keyword'] = $this->input->post('keyword', TRUE);
             $filters['kategori'] = $this->input->post('kategori', TRUE);
             $data = $this->search_model->search($filters);
         

            
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('searchPengguna_view',$data);
            $this->load->view('foot_view');


                        
        }
    }
?>