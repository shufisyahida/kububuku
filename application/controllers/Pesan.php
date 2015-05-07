<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Pesan extends CI_Controller
	{
		public function index()
		{
			$this->load->view('head_view');
			$this->load->view('navbar_view');
            $this->load->view('admin');
            $this->load->view('pesan_view');
            $this->load->view('foot_view');
		}

		/*public function __construct()
        {
            parent::__construct();
            $username = $this->session->userdata('username');
            if(!$this->session->userdata(''.$username))
            {
                redirect(base_url('index.php/Login'));
            }

            $this->load->model('pesan');
        }*/

		public function read($id)
		{
			$data = $this->pesan->read($id);

			$this->load->view('pesan',$data);
		}

		public function delete($id)
		{
			$this->pesan->delete($id);
			redirect(base_url('index.php/Pesan'));
		}


	}
?>