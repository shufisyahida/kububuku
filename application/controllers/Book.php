<?php
    class Book extends CI_Controller{
        public function book_info($isbn)
        {
            //$isbn = $this->session->userdata('isbn');
            $this->load->model('buku');
            $data['resultBook'] = $this->buku->getBook($isbn);
            $data['resultOwner']= $this->buku->getOwner($isbn);
        	$this->load->view('head_view');
            $this->load->view('navbar_view');

            $this->load->view('book_info_view', $data);
            $this->load->view('foot_view');
        }
    }
?>