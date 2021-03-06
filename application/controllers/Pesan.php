<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Pesan extends CI_Controller
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
                redirect(base_url('admin'));
            }
            elseif(!$isAdmin)
            {
                redirect(base_url('permintaan_masuk'));    
            }

            //$this->load->model("pesan_model");
            //$this->load->library("pagination");
            $this->load->model('pesan_model');
           
            
        }

		public function index()
		{
            // $config = array();
            // $config["base_url"] = base_url() . "pesan/index";
            // $config["total_rows"] = $this->pesan_model->pesanCount();
            // $config["per_page"] = 2;
            // $config["uri_segment"] = 3;
            // $choice = $config["total_rows"] / $config["per_page"];
            // $config["num_links"] = round($choice);
            // $config['next_tag_open'] = '<strong>';
            // $config['next_link'] = 'MORE';
            // $config['next_tag_close'] = '</strong>';
     
            // $this->pagination->initialize($config);
             
            // $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data["pesan"] = $this->pesan_model->getListPesan(5, 0);
            // $jsona = json_encode($data);
            // var_dump($jsona);
            
			//$this->load->model('pesan_model');
			//$pesan = $this->pesan_model->getPesan();
			// $pesan = $this->pesan->getPesan();
            //$data['pesan']=$pesan;
			
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

        public function lihatDaftar()
        {
            //$thePage = intval($page);
            $data = array();
            $page = $_GET['page'];
            $data["pesan"] = $this->pesan_model->getListPesan(5, $page);
            echo json_encode($data);
        }

        public function hapus($id)
        {
            $this->pesan_model->delete($id);
            redirect(base_url('pesan'));
        }

        // public function create()
        // {        
        //     if(isset($_POST))
        //     {
        //         $username = $this->session->userdata('username');
        //         $ktg = $this->input->post('kategori');
        //         $judul = $this->input->post('subject');
        //         $isi = $this->input->post('content');
        //         if ($ktg=='report'){
        //             $kategori=1;
        //         }
        //         else if($ktg=='suggestion'){
        //             $kategori=2;
        //         }
        //         else{
        //             $kategori=3;
        //         }
        //         $isi = $this->input->post('content');
             
        //         $data = array(
        //             'username' => $username,
        //             'kategori' => $kategori,
        //             'judul' => $judul,
        //             'isi' => $isi,
        //             'is_notified' => false,
        //             'isiErr' => ''
        //         );

        //         $error = false;
             
        //         }
        //         if($isi == '')
        //         {
        //           $data['isiErr'] = "Message should not be blank";
        //           $error = true;
        //         }
               
        //         if($error)
        //         {
        //           $this->load->view('head_view');
        //           $this->load->view('navbar_view');
        //           $this->load->view('contact_us_view', $data);
        //           $this->load->view('foot_view');
        //         }
        //         else
        //         {
                   
        //         $data = array(
        //             'username' => $username,
        //             'kategori' => $kategori,
        //             'is_notified' => false,
        //             'judul' => $judul,
        //             'isi' => $isi
        //         );
        //         $this->load->model('pesan_model');
        //         $this->pesan_model->createPesan($data);
        //         redirect(base_url('wishlist'));
                      
        //     }
        //     else
        //     {
        //         $this->session->set_userdata('error_login_'.$email,true);
        //         redirect(base_url('Login'));
        //     }
        // }
	}
?>