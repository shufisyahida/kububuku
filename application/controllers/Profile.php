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

            $this->load->model('koleksi');
            $koleksi = $this->pinjaman->getKoleksi($username);

            $book=array();
            $wishlist=array();

            $this->load->model('buku');

            foreach($koleksi as $key=>$value)
            {                             
                $resBuku = $this->buku->getBook($value->isbn);
                $book[]= $resBuku;
            }

            $data['user']=$user;
            $data['koleksi']=$koleksi;            
            $data['wishlist']=$wishlist;

          
         
            
           

            
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            //$this->load->view('request_in_view',$data);
            $this->load->view('foot_view');
        }
?>