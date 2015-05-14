<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Manage extends CI_Controller
	{
		public function __construct()
        {
            parent::__construct();

            $username = $this->session->userdata('username');
            $isLoggedIn = $this->session->userdata(''.$username);
            
            $this->load->model('admin_model');   
            $isAdmin = $this->admin_model->isAdmin($username); 
            
            if(!$isLoggedIn)
            {
                redirect(base_url('index.php/Admin'));
            }
            elseif(!$isAdmin)
            {
                redirect(base_url('index.php/Request_in'));    
            }

            $this->load->model('non_admin');
            $this->load->model('buku');
            
        }


		public function index()
		{
			$user = $this->non_admin->getAllUser();
			$buku = $this->buku->getAllBook();

   	           $data['user']=$user;
   	           $data['buku']=$buku;

			$this->load->view('head_view');
			$this->load->view('navbar_admin_view');
            // $this->load->view('admin');
            $this->load->view('manage_view',$data);
            $this->load->view('foot_view');
		}

        public function deleteUser($username)
        {
            $this->non_admin->deleteUser($username);
            redirect(base_url('index.php/Manage'));
        }

        public function deleteBook($isbn)
        {
            $this->buku->deleteBook($isbn);
            redirect(base_url('index.php/Manage'));
        }
	}