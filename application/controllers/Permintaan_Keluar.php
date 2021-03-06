<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class permintaan_keluar extends CI_Controller
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
                redirect(base_url('Login'));
            }
            elseif($isAdmin)
            {
                redirect(base_url('pesan'));    
            }
        }
        
        public function batal($id)
        {
            $this->db->where('id',$id);
            $this->db->delete('pinjaman');
            redirect(base_url('permintaan_keluar'));
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
            $this->load->model('buku_model');
            foreach($pinjamanKeluar as $key=>$value)
            {                             
                $resPengguna = $this->non_admin->getUser($value->username_pemilik) ;
                $user[] = $resPengguna;
                
                // var_dump($value->isbn);
                $resBuku = $this->buku_model->getBook($value->isbn);
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
            $data['name'] = $this->non_admin->getName($username);         
                               
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('request_out_view',$data);
            $this->load->view('foot_view');                        
        }

        public function kembalikan()
        {
            //$id = $this->uri->segment(3);

            $id = $this->input->post('idPinjaman');
            $rank = $this->input->post('owner-rank');
            $owner = $this->input->post('owner');
          
            
            $this->load->model('pinjaman');
            $this->pinjaman->returnBook($id);

            $this->load->model('non_admin');
            $this->non_admin->giveRank($owner,$rank,false);

            redirect(base_url('permintaan_keluar'));
        }

    } // end of Request_out

?>