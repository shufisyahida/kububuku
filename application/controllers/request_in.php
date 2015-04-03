<?php
    class Request_in extends CI_Controller
    {
        
        public function index()
        { 
            $username = $this->session->userdata('username');

            $this->load->model('pinjaman');
            $pinjamanMasuk = $this->pinjaman->getRequestIn($username);


            $book=array();
            $user=array();
            $durasi=array();
            $id=array();
            $status=array();
            $kontak=array();

            $this->load->model('non_admin');
            $this->load->model('buku');

            foreach($pinjamanMasuk as $key=>$value)
            {                             
                $resPengguna = $this->non_admin->getUser($value->username_peminjam) ;
                $user[] = $resPengguna;
                
                // var_dump($value->isbn);
                $resBuku = $this->buku->getBook($value->isbn);
                $book[]= $resBuku;

                $durasi[]=$value->durasi;
                $id[]=$value->id;
                $status[]=$value->status;
                $kontak[]=$this->non_admin->getContact($value->username_peminjam);
            }

            $data['book']=$book;
            $data['user']=$user;
            $data['durasi']=$durasi;
            $data['idPinjaman']=$id;
            $data['status']=$status;
            $data['kontak']=$kontak;
            
          
          /*  $count=0;
            foreach ($book as $kunci => $nilai ) 
            {
                foreach($nilai as $key=>$value)
                {
                   // var_dump($value);
                   
                    //echo $count;
                    //echo('\n');
                    echo $value->judul;    
                    echo $value->isbn;
                    echo 'hai';
                    $coba = $user[$count];
                   // var_dump($coba);
                    echo $coba[0]->username;
                    echo 'hoi';
                    $count=$count+1;
                }
                //var_dump($value);
            }*/

            
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('request_in_view',$data);
            $this->load->view('foot_view');


                        
        }

        public function accept()
        {
            $id = $this->uri->segment(3);
            
            // var_dump($id);
        }

        public function decline()
        {
            $id = $this->uri->segment(3);
             //var_dump($id);
        }
    }
