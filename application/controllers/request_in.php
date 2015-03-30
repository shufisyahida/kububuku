<?php
    class Request_in extends CI_Controller
    {
        
        public function index()
        { 
            $username = $this->session->userdata('username');

            $this->load->model('pinjaman');
            $pinjamanMasuk = $this->pinjaman->getRequestIn($username);
            //var_dump($pinjamanMasuk);

            $book=array();
            $user=array();

            $this->load->model('non_admin');
            $this->load->model('buku');

            foreach($pinjamanMasuk as $key=>$value)
            {                             
                $resPengguna = $this->non_admin->getUser($value->username_peminjam) ;
                $user[] = $resPengguna;
                
                $resBuku = $this->buku->getBook($value->isbn);
                $book[]= $resBuku;

                $durasi[]=$value->durasi;
                $id[]=$value->id;
            }

            $data['book']=$book;
            $data['user']=$user;
            $data['durasi']=$durasi;
            $data['idPinjaman']=$id;
            
            //redirect(base_url('index.php/Dashboard/request_in/data)));
            
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('request_in_view',$data);
            $this->load->view('foot_view');
            
            //var_dump($book);
            //var_dump($user);
            //var_dump($durasi);
            //var_dump($id);

         //   echo $book->0;



        }
    }
?>