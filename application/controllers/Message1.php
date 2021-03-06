<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Message1 extends CI_Controller
	{
		public function __construct()
        {
            parent::__construct();
            $this->load->helper("url");
            $this->load->model("pesan_model");
            $this->load->library("pagination");
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

        }

        public function index()
		{
            
			$this->load->view('head_view');
			$this->load->view('navbar_view');
            $this->load->view('admin');
            $this->load->view('pesan_view');
            $this->load->view('foot_view');
		}

        public function getList()
        {
            
        }

		/*public function __construct()
        {
            parent::__construct();
            $username = $this->session->userdata('username');
            if(!$this->session->userdata(''.$username))
            {
                redirect(base_url('Login'));
            }

            $this->load->model('pesan');
        }*/

		

		 public function createPesan()
        {        
            if(isset($_POST))
            {
                $username = $this->session->userdata('username');
                $kategori = $this->input->post('kategori');
                $isi = $this->input->post('isi');
             
                $data = array(
                    'username' => $username,
                    'kategori' => $kategori,
                    'isi' => $isi,
                    'is_notified' => false,
                    'kategoriErr' => '',
                    'isiErr' => ''
                );
                $error = false;
                
                if($kategori == '')
                {
                  $data['kategoriErr'] = "Category should not be blank";
                  $error = true;
                }
                if($isi == '')
                {
                  $data['isiErr'] = "Message should not be blank";
                  $error = true;
                }
               
                if($error)
                {
                  $this->load->view('head_view');
                  $this->load->view('navbar_view');
                  $this->load->view('contactUs', $data);
                  $this->load->view('foot_view');
                }
                else
                {
                   
                    $data = array(
                        'username' => $username,
                        'kategori' => $kategori,
                        'isi' => $isi,
                        'is_notified' => false,
                    );
                    $this->load->model('pesan');
                    $this->pesan->createPesan($data);
                    redirect(base_url('koleksi'));
                }       
            }
            else
            {
                $this->session->set_userdata('error_login_'.$email,true);
                redirect(base_url('Login'));
            }
        }
      

	}
?>