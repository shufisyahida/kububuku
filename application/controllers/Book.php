<?php
    class Book extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $username = $this->session->userdata('username');
        if(!$this->session->userdata(''.$username))
        {
            redirect(base_url('index.php/login'));
        }
    }


        public function book_info()
        {
            $isbn = $this->session->userdata('isbn');
            $this->load->model('buku');
            $data['result'] = $this->buku->getBook($isbn);
        	$this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('book_info_view', $data);
            $this->load->view('foot_view');
        }
    }
?>