<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class dashboard extends CI_Controller
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
                redirect(base_url('Login'));
            }
            elseif($isAdmin)
            {
                redirect(base_url('pesan'));    
            }
        }

        public function index()
        {
            
            /*$this->load->model('buku_model');
            $this->load->model('koleksi_model');
            $data['resultBukuPopuler'] = $this->koleksi_model->getBukuPopuler(5,0);
            $data['resultBukuBaru'] = $this->buku_model->getBukuBaru(5,0);*/

            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('dashboard_view');
            //$this->load->view('dashboard_view, $data);
            $this->load->view('foot_view');
        }


    } // end of Dashboard

?>