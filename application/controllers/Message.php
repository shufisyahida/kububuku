<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Message extends CI_Controller
	{
		public function __construct()
        {
            parent::__construct();
            $username = $this->session->userdata('username');
            if(!$this->session->userdata(''.$username))
            {
                redirect(base_url('index.php/Admin'));
            }

            $this->load->model('pesan_model');
            
        }

		public function index()
		{			
			$this->load->model('pesan_model');
			$pesan = $this->pesan_model->getPesan();
			// $pesan = $this->pesan->getPesan();
            $data['pesan']=$pesan;
			$this->load->view('head_view');
			$this->load->view('navbar_admin_view');
            // $this->load->view('admin');
            $this->load->view('pesan_view',$data);
            $this->load->view('foot_view');
		}

        // public function read($id)
        // {
        //     $data = $this->pesan->read($id);

        //     $this->load->view('pesan',$data);
        // }

        public function delete($id)
        {
            $this->pesan->delete($id);
            redirect(base_url('index.php/Message'));
        }

        public function create()
        {        
            if(isset($_POST))
            {
                $username = $this->session->userdata('username');
                $ktg = $this->input->post('kategori');
                $judul = $this->input->post('subject');
                $isi = $this->input->post('content');
                if ($ktg=='report'){
                    $kategori=1;
                }
                else if($ktg=='suggestion'){
                    $kategori=2;
                }
                else{
                    $kategori=3;
                }
                $isi = $this->input->post('content');
             
                /*$data = array(
                    'username' => $username,
                    'kategori' => $kategori,
                    'judul' => $judul,
                    'isi' => $isi,
                    'is_notified' => false,
                    'isiErr' => ''
                );

                $error = false;
             
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
                  $this->load->view('contact_us_view', $data);
                  $this->load->view('foot_view');
                }
                else
                {*/
                   
                $data = array(
                    'username' => $username,
                    'kategori' => $kategori,
                    'is_notified' => false,
                    'judul' => $judul,
                    'isi' => $isi
                );
                $this->load->model('pesan_model');
                $this->pesan_model->createPesan($data);
                redirect(base_url('index.php/Wishlist'));
                      
            }
            else
            {
                $this->session->set_userdata('error_login_'.$email,true);
                redirect(base_url('index.php/Login'));
            }
        }
	}
?>