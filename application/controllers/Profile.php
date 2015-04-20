<?php
    class Profile extends CI_Controller{
        
        public function __construct()
        {
            parent::__construct();
            $username = $this->session->userdata('username');
            if(!$this->session->userdata(''.$username))
            {
                redirect(base_url('index.php/login'));
            }
        }


        function profile($username)
        {
           // $username = $this->session->userdata('username');
        	$this->load->model('non_admin');
            $user = $this->non_admin->getUser($username) ;

            $this->load->model('koleksi_model');
            $koleksiAvailable = $this->koleksi_model->getKoleksiAvailable($username);
            $koleksiBorrowed = $this->koleksi_model->getKoleksiBorrowed($username);
            

            $bookAvailable=array();
            $bookBorrowed=array();
         

    
           //get Faculty
            $this->load->model('fakultas');
            $idFak = $user[0]->fakultas;
            $namaFak = $this->fakultas->getFaculty($idFak);                       
            $user[0]->fakultas = $namaFak;

            //getStatus
            $statusUser = $this->non_admin->getStatus($username);                      
            $user[0]->status = $statusUser;

            //get sex
            $jenisKelamin = $this->non_admin->getSex($username);
            $user[0]->jenis_kelamin = $jenisKelamin;

            $data['user']=$user[0];
              
            $data['koleksiBorrowed']=$koleksiBorrowed;

            $requested=array();

            foreach ($koleksiAvailable as $key => $value) {
                $username = $this->session->userdata('username');
                $this->load->model('pinjaman');
                $isRequested = $this->pinjaman->isRequested($username, $user[0]->username, $value->isbn);
                $requested[$key] = $isRequested;

            }          
           // $data['wishlist']=$wishlist;

            // var_dump($koleksiAvailable);
            $data['koleksiAvailable']=$koleksiAvailable;
            $data['requested']=$requested; 
            
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('profil_view', $data);
            $this->load->view('foot_view');
        }
    }
?>