<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Request_in extends CI_Controller
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
        }
        
        public function accept($id,$isbn)
        {
            //$id = $this->uri->segment(3);
            $username=$this->session->userdata('username');
            
            $this->load->model('pinjaman');
            $this->pinjaman->accept($id);

            $this->load->model('koleksi');
            $this->koleksi->setStatus($username,$isbn,0);

            redirect(base_url('index.php/Request_in'));            
        }

        public function confirmReturn()
        {
            //$id = $this->uri->segment(3);
            $id = $this->input->post('idPinjaman');
            $isbn= $this->input->post('isbn');
            $rank = $this->input->post('borrower-rank');
            $borrower = $this->input->post('borrower');

            $username=$this->session->userdata('username');
            
            $this->load->model('pinjaman');
            $this->pinjaman->confirmReturn($id);

            $this->load->model('koleksi');
            $this->koleksi->setStatus($username,$isbn,1);

            $this->load->model('non_admin');
            $this->non_admin->giveRank($borrower,$rank,true);

            redirect(base_url('index.php/Request_in'));
        }

        public function decline()
        {
            $id = $this->uri->segment(3);
            
            $this->load->model('pinjaman');
            $this->pinjaman->decline($id);

            redirect(base_url('index.php/Request_in'));
        }

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

    } // end of Request_in

?>
