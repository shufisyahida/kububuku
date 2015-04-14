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
             $judulPengarang = $this->input->post('keyword');
             $kategori = $this->input->post('kategori');
             $genre = $this->input->post('genre');
           
             $this->load->model('search_model');

             if($judulPengarang!=null){
                $keyword=$judulPengarang;
             }
             else{
                $keyword=$genre;
             }
             

             if($kategori!=null && $keyword!=null){
                 $result = $this->search_model->searchBuku($keyword,$kategori);
                


                   if($result==false) {
                       $data['notFound'] = "Sorry, no records found";
                       $data['resultSearchBuku'] = null;
                        $data['notMatch'] = null;
                      
                    }
                    else {
                      $data['resultSearchBuku'] = $result;
                      $data['notFound'] = null;
                      $data['notMatch'] = null;
                    } 
             }
             else if($kategori==null)
             {
                   $data['notMatch'] = "Choose Category";
                     $data['resultSearchBuku'] = null;
                      $data['notFound'] = null;
             }
               else if($keyword==null)
             {
                   $data['notMatch'] = "Enter keyword";
                     $data['resultSearchBuku'] = null;
                      $data['notFound'] = null;
             }

            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('search_book_view2',$data);
            $this->load->view('foot_view'); 


                        
        }
       
        public function cariPengguna()
        { 
       
             $nama = $this->input->post('keyword');
             $kategori = $this->input->post('kategori');
             $location = $this->input->post('location');
             $status = $this->input->post('status');
             $faculty = $this->input->post('faculty');
             $this->load->model('search_model');

             if($nama!=null){
                $keyword=$nama;
             }
             else if($location!=null){
                $keyword=$location;
             }
             else if($status!=null){
                $keyword=$status;
             }
             else {
                $keyword=$faculty;
             }

             if($kategori!=null && $keyword!=null){
                 $result = $this->search_model->searchPengguna($keyword,$kategori);

                    if($result==false) {
                       $data['notFound'] = "Sorry, no records found";
                       $data['resultSearchPengguna'] = null;
                        $data['notMatch'] = null;
                        $data['kategori'] = $kategori;
                        $data['keyword'] = $keyword;
                      
                    }
                    else {

                        //var_dump($result);
                        $this->load->model('non_admin');
                        $this->load->model('fakultas'); 
                        $koleksi = array();
                        foreach ($result as $key => $value)
                        {
                            
                            $username = $value->username;
                            //get Faculty
                            $idFak = $value->fakultas;
                            $namaFak = $this->fakultas->getFaculty($idFak);                       
                            $value->fakultas = $namaFak;

                             //getStatus
                            $statusUser = $this->non_admin->getStatus($username);                      
                            $value->status = $statusUser;

                            //getStatus
                            $statusUser = $this->non_admin->getStatus($username);                      
                            $value->status = $statusUser;

                            //get sex
                            $jenisKelamin = $this->non_admin->getSex($username);
                            $value->jenis_kelamin = $jenisKelamin;

                            //get number of collection
                            $this->load->model('koleksi_model');
                            $koleksi[$username]= $this->koleksi_model->getNumOfKoleksi($username);
                        }
                    
                      $data['resultSearchPengguna'] = $result;
                      $data['koleksi']= $koleksi;
                      $data['notFound'] = null;
                      $data['notMatch'] = null;
                    } 
             }
             else if($kategori==null)
             {
                   $data['notMatch'] = "Choose Category";
                     $data['resultSearchPengguna'] = null;
                      $data['notFound'] = null;
             }
               else if($keyword==null)
             {
                   $data['notMatch'] = "Enter keyword";
                     $data['resultSearchPengguna'] = null;
                      $data['notFound'] = null;
             }




          
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('search_user_view2',$data);
            $this->load->view('foot_view');          
        }
    }
?>