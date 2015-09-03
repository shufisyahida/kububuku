<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Kontak_Kami extends CI_Controller
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

            //$this->load->model("pesan_model");
            //$this->load->library("pagination");

            $this->load->model('pesan_model');
            
        }

		// public function index()
		// {
  //           // $config = array();
  //           // $config["base_url"] = base_url() . "index.php/Message/index";
  //           // $config["total_rows"] = $this->pesan_model->pesanCount();
  //           // $config["per_page"] = 2;
  //           // $config["uri_segment"] = 3;
  //           // $choice = $config["total_rows"] / $config["per_page"];
  //           // $config["num_links"] = round($choice);
  //           // $config['next_tag_open'] = '<strong>';
  //           // $config['next_link'] = 'MORE';
  //           // $config['next_tag_close'] = '</strong>';
     
  //           // $this->pagination->initialize($config);
     
  //           // $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
  //           $data["pesan"] = $this->pesan_model->getListPesan(10, 0);
  //           // $jsona = json_encode($data);
  //           // var_dump($jsona);
            
		// 	//$this->load->model('pesan_model');
		// 	//$pesan = $this->pesan_model->getPesan();
		// 	// $pesan = $this->pesan->getPesan();
  //           //$data['pesan']=$pesan;
			
  //           $this->load->view('head_view');
		// 	$this->load->view('navbar_admin_view');
            
  //           // $this->load->view('admin');
            
  //           $this->load->view('pesan_view',$data);
  //           $this->load->view('foot_view');

		// }

  //       // public function read($id)
  //       // {
  //       //     $data = $this->pesan->read($id);

  //       //     $this->load->view('pesan',$data);
  //       // }

  //       public function getList()
  //       {
  //           //$thePage = intval($page);
  //           $data = array();
  //           $page = $_GET['page'];
  //           $data["pesan"] = $this->pesan_model->getListPesan(10, $page);
  //           echo json_encode($data);
  //       }

  //       public function delete($id)
  //       {
  //           $this->pesan_model->delete($id);
  //           redirect(base_url('index.php/Message'));
  //       }
        public function index()
        {
            // $data['page_title'] = "CI Hello World App!";
            $data = array(
               'kategori' => '',
               'subject' => '',
               'content' => '',
               'kategoriErr' => '',
               'subjekErr' => '',
               'kontenErr' => '',         
            );
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('contact_us_view', $data);
            $this->load->view('foot_view');
        }

        public function buat()
        {        
            if(isset($_POST))
            {
                $username = $this->session->userdata('username');
                $ktg = $this->input->post('kategori');
                $subjek = $this->input->post('subject');
                $konten = $this->input->post('content');
                if ($ktg=='report'){
                    $kategori=1;
                }
                else if($ktg=='suggestion'){
                    $kategori=2;
                }
                else{
                    $kategori=3;
                }
                $data = array(
                    'kategori' => $ktg,
                    'subject' => $subjek,
                    'content' => $konten,
                    'kategoriErr' => '',
                    'subjekErr' => '',
                    'kontenErr' => ''
                );
                $error = false;
                                
                if($ktg == '')
                {
                    $data['kategoriErr'] = "Kategori harus dipilih";
                    $error = true;
                }
                
                if($konten == '' || empty(ltrim(rtrim($konten))))
                {
                    $data['kontenErr'] = "Isi tidak boleh kosong";
                    $error = true;
                }
                if($subjek == '' || empty(ltrim(rtrim($subjek))))
                {
                    $data['subjekErr'] = "Judul tidak boleh kosong";
                    $error = true;
                }
                               
                if($error)
                {
                    //$data['jenis_kelamin'] = "M";
                    // $data['fakultas'] = 1;
                    $this->load->view('head_view');
                    $this->load->view('navbar_view');
                    $this->load->view('contact_us_view', $data);
                    $this->load->view('foot_view');
                }
                else
                {            
                    $data = array(
                    'username' => $username,
                    'kategori' => $kategori,
                    'is_notified' => false,
                    'judul' => $subjek,
                    'isi' => $konten
                );
                $this->load->model('pesan_model');
                $this->pesan_model->createPesan($data);
                redirect(base_url('index.php/permintaan_masuk'));
                }     
                   
                
                      
            }
            else
            {
                $this->session->set_userdata('error_login_'.$email,true);
                redirect(base_url('index.php/Login'));
            }
        }
	}
?>