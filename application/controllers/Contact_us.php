<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Contact_us extends CI_Controller
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
<<<<<<< HEAD
                redirect(base_url('pesan'));    
=======
                redirect(base_url('Message'));    
>>>>>>> aa7fe68d208827e9a7a4a04466d9fb86915065ea
            }
        }

        public function index()
        {
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('contact_us_view');
            $this->load->view('foot_view');
        }

    } // end of Contact_us

?>