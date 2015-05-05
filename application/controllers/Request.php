<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Book extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $username = $this->session->userdata('username');
            if(!$this->session->userdata(''.$username))
            {
                redirect(base_url('index.php/Login'));
            }
        }

        public function confirmDeleteBook($username, $isbn)
        {
            $this->load->model('permintaan_ubah_hapus');
            $this->permintaan_ubah_hapus->confirm($username, $isbn, 0, true);

            $this->load->model('buku');
            $this->buku->deleteBook($isbn);

            redirect(base_url('index.php/Request'));  
        }

        public function confirmUpdateBook($username, $isbn)
        {
            $this->load->model('permintaan_ubah_hapus');
            $this->permintaan_ubah_hapus->confirm($username, $isbn, 1, true);
            $perubahan = $this->permintaan_ubah_hapus->getPerubahan($username, $isbn);

            $this->load->model('buku');
            $this->buku->updateBook($isbn, $perubahan);

            redirect(base_url('index.php/Request')); 
        }

    } // end of Book

?>