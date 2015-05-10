<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Message extends CI_Controller
	{
		public function __construct()
        {
            parent::__construct();
            // $username = $this->session->userdata('username');
            // if(!$this->session->userdata(''.$username))
            // {
            //     redirect(base_url('index.php/Login'));
            // }

            $this->load->model('pesan');
            
        }

		public function index()
		{
			
			$this->load->model('pesan');
			$pesan = $this->pesan->getPesan();

   	           $data['pesan']=$pesan;

			$this->load->view('head_view');
			$this->load->view('navbar_view');
            $this->load->view('admin');
            $this->load->view('pesan_view',$data);
            $this->load->view('foot_view');
		}

	}
?>