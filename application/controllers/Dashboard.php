<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Dashboard extends CI_Controller
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
                redirect(base_url('index.php/Login'));
            }
            elseif($isAdmin)
            {
                redirect(base_url('index.php/Message'));    
            }
        }

        public function index()
        {
            // $username = $this->session->userdata('username');
            // $this->load->model('koleksi');
            // $data['resultAvailable'] = $this->koleksi->getKoleksiAvailable($username);
            // //$this->load->model('koleksi');
            // $data['resultBorrowed'] = $this->koleksi->getKoleksiBorrowed($username);
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('dashboard_view');
            //$this->load->view('collection_view', $data2);
            $this->load->view('foot_view');
        }

    } // end of Dashboard

?>