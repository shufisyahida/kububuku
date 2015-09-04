<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Home extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $username = $this->session->userdata('username');
            $hasLoggedIn = $this->session->userdata($username);

            $this->load->model('admin_model');   
            $isAdmin = $this->admin_model->isAdmin($username); 

            if(!empty($hasLoggedIn) && $hasLoggedIn)
            {
                if($isAdmin)
                    redirect(base_url('pesan'));
                else
                    redirect(base_url('permintaan_masuk'));
            }
        }
        
        public function index()
        {
            // $data['page_title'] = "CI Hello World App!";
        	$this->load->view('home_view');
        }

    } // end of Home

?>