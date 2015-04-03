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


        function index()
        {
        	$username = $this->session->userdata('username');

            $this->load->model('non_admin');
            $user = $this->non_admin->getUser($username) ;

            $this->load->model('koleksi_model');
            $koleksiAvailable = $this->koleksi_model->getKoleksiAvailable($username);
            $koleksiBorrowed = $this->koleksi_model->getKoleksiBorrowed($username);
            

            $bookAvailable=array();
            $bookBorrowed=array();
            $wishlist=array();


            $data['user']=$user[0];
            $data['koleksiAvailable']=$koleksiAvailable;   
            $data['koleksiBorrowed']=$koleksiBorrowed;          
            $data['wishlist']=$wishlist;

            var_dump($user);
            
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('profil_view', $data);
            $this->load->view('foot_view');
        }
    }
?>