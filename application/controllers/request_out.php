<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Request_out extends CI_Controller
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
        
        public function cancel($id)
        {
            $this->db->where('id',$id);
            $this->db->delete('pinjaman');
            redirect(base_url('index.php/Request_out'));
        }

        public function index()
        { 
            $username = $this->session->userdata('username');
            $this->load->model('pinjaman');
            $pinjamanKeluar = $this->pinjaman->getRequestOut($username);
            $book=array();
            $user=array();
            $durasi=array();
            $id=array();
            $status=array();
            $kontak=array();
            $this->load->model('non_admin');
            $this->load->model('buku');
            foreach($pinjamanKeluar as $key=>$value)
            {                             
                $resPengguna = $this->non_admin->getUser($value->username_pemilik) ;
                $user[] = $resPengguna;
                
                // var_dump($value->isbn);
                $resBuku = $this->buku->getBook($value->isbn);
                $book[]= $resBuku;

                $durasi[]=$value->durasi;
                $id[]=$value->id;
                $status[]=$value->status;
                $kontak[]=$this->non_admin->getContact($value->username_pemilik);
            }

            $data['book']=$book;
            $data['user']=$user;
            $data['durasi']=$durasi;
            $data['idPinjaman']=$id;
            $data['status']=$status;
            $data['kontak']=$kontak;         
                               
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('request_out_view',$data);
            $this->load->view('foot_view');                        
        }

        public function returnBook()
        {
            //$id = $this->uri->segment(3);

            $id = $this->input->post('idPinjaman');
            $rank = $this->input->post('owner-rank');
            $owner = $this->input->post('owner');
          
            
            $this->load->model('pinjaman');
            $this->pinjaman->returnBook($id);

            $this->load->model('non_admin');
            $this->non_admin->giveRank($owner,$rank,false);

            redirect(base_url('index.php/Request_out'));
        }

    } // end of Request_out

?>