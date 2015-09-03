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
                redirect(base_url('Admin'));
            }
            elseif(!$isAdmin)
            {
                redirect(base_url('permintaan_masuk'));    
            }

            $this->load->model('non_admin');
            $this->load->model('buku_model');
            
        }


		public function index()
		{
			//$user = $this->non_admin->getAllUser();
			//$buku = $this->buku_model->getAllBook();

            $user = $this->non_admin->getListUser(5,0);
            $buku = $this->buku_model->getListBook(5,0);

   	           $data['user']=$user;
   	           $data['buku']=$buku;

			$this->load->view('head_view');
			$this->load->view('navbar_admin_view');
            // $this->load->view('admin');
            $this->load->view('manage_view',$data);
            $this->load->view('foot_view');
		}

        public function getList()
        {
            //$thePage = intval($page);
            $data = array();
            $page = $_GET['page'];
            $data["user"] = $this->non_admin->getListUser(5, $page);
            $data["buku"] = $this->buku_model->getListBook(5, $page);
            echo json_encode($data);
        }

        public function deleteUser($username)
        {
            $this->non_admin->deleteUser($username);
            redirect(base_url('Manage'));
        }

        public function deleteBook($isbn)
        {
            $this->buku_model->deleteBook($isbn);
            redirect(base_url('Manage'));
        }

        public function deleteUserFromSearch($username)
        {
            $this->non_admin->deleteUser($username);
            redirect(base_url('pencarian/pengguna'));
        }

        public function deleteBookFromSearch($isbn)
        {
            $this->buku_model->deleteBook($isbn);
            redirect(base_url('pencarian/hasil_buku'));
        }
	}