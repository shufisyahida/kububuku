<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Pencarian extends CI_Controller
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
        
        public function buku()
        {
            $this->load->view('head_view');
             $username = $this->session->userdata('username');
            
            $this->load->model('admin_model');   
            $isAdmin = $this->admin_model->isAdmin($username);    
            
            
            if($isAdmin)
            {
                $this->load->view('navbar_admin_view');
            }
            else
            {
                $this->load->view('navbar_view');
            }
            $this->load->model('admin_model');   
            $isAdmin = $this->admin_model->isAdmin($username); 
            $data['isAdmin']=$isAdmin;
            $this->load->view('search_book_view', $data);
            $this->load->view('foot_view');
        }

        public function pengguna()
        {
            $this->load->view('head_view');
             $username = $this->session->userdata('username');
            
            $this->load->model('admin_model');   
            $isAdmin = $this->admin_model->isAdmin($username);    
            
            
            if($isAdmin)
            {
                $this->load->view('navbar_admin_view');
            }
            else
            {
                $this->load->view('navbar_view');
            }
            $this->load->model('admin_model');   
            $isAdmin = $this->admin_model->isAdmin($username); 
            $data['isAdmin']=$isAdmin;
            $this->load->view('search_user_view', $data);
            $this->load->view('foot_view');
        }

        public function hasil_buku()
        { 
            $judulPengarang = $this->input->post('keyword');
            $kategori = $this->input->post('kategori');
            $genre = $this->input->post('genre');

            // $this->load->model('search_model');
            $this->load->model('buku_model');
            $this->load->model('non_admin');

            if($judulPengarang!=null)
            {
                $keyword=$judulPengarang;
            }
            else
            {
                $keyword=$genre;
            }
             
            if($kategori!=null && $keyword!=null)
            {
                $result = $this->buku_model->searchBook($keyword,$kategori);
             
                if($result==false)
                {
                    $data['notFound'] = "Maaf, hasil tidak ditemukan";
                    $data['resultSearchBuku'] = null;
                    $data['notMatch'] = null;
                }
                else
                {
                    $data['resultSearchBuku'] = $result;
                    $data['notFound'] = null;
                    $data['notMatch'] = null;

                    // $username = $this->session->userdata('username');

                    $adaDiKoleksi=array();
                    $adaDiWishlist=array();
                    foreach ($result as $key => $value)
                    {
                        $username = $this->session->userdata('username');
                        // $this->load->model('pinjaman');
                        // $isRequested = $this->pinjaman->isRequested($username, $user[0]->username, $value->isbn);
                        $this->load->model('koleksi_model');
                        $adaInCollection = $this->koleksi_model->isInCollection($username, $value->isbn);
                        $adaDiKoleksi[$key] = $adaInCollection;
                        $this->load->model('wishlist_model');
                        $adaInWishlist = $this->wishlist_model->isInWishlist($username, $value->isbn);
                        $adaDiWishlist[$key] = $adaInWishlist;
                    }

                    $data['adaDiKoleksi']= $adaDiKoleksi;
                    $data['adaDiWishlist']= $adaDiWishlist;
                    $data['username']= $username;
                } 
            }            
            else if($kategori==null)
            {
                $data['notMatch'] = "Pilih kategori";
                $data['resultSearchBuku'] = null;
                $data['notFound'] = null;
            }
            else if($keyword==null)
            {
                $data['notMatch'] = "Masukkan kata kunci";
                $data['resultSearchBuku'] = null;
                $data['notFound'] = null;
            }

            $this->load->view('head_view');

            $username = $this->session->userdata('username');
            
            $this->load->model('admin_model');   
            $isAdmin = $this->admin_model->isAdmin($username);    
            
            
            if($isAdmin)
            {
                $this->load->view('navbar_admin_view');
            }
            else
            {
                $this->load->view('navbar_view');
            }
            $this->load->model('admin_model');   
            $isAdmin = $this->admin_model->isAdmin($username); 
            $data['isAdmin']=$isAdmin;
            $this->load->view('search_book_view2',$data);
            $this->load->view('foot_view');
        }

        public function hasil_pengguna()
        {       
            $nama = $this->input->post('keyword');
            $kategori = $this->input->post('kategori');
            $location = $this->input->post('location');
            $status = $this->input->post('status');
            $faculty = $this->input->post('faculty');
            // $this->load->model('search_model');
            $this->load->model('buku_model');
            $this->load->model('non_admin');

            if($nama!=null)
            {
                $keyword=$nama;
            }
            else if($location!=null)
            {
                $keyword=$location;
            }
            else if($status!=null)
            {
                $keyword=$status;
            }
            else
            {
                $keyword=$faculty;
            }

            if($kategori!=null && $keyword!=null)
            {
                $result = $this->non_admin->searchUser($keyword,$kategori);

                if($result==false)
                {
                    $data['notFound'] = "Maaf, hasil tidak ditemukan";
                    $data['resultSearchPengguna'] = null;
                    $data['notMatch'] = null;
                    $data['kategori'] = $kategori;
                    $data['keyword'] = $keyword;  
                }
                else
                {
                    //var_dump($result);
                    $this->load->model('non_admin');
                    $this->load->model('fakultas'); 
                    $koleksi = array();
                    $wishlist = array();
                    foreach ($result as $key => $value)
                    {
                        
                        $username = $value->username;
                        //get Faculty
                        $idFak = $value->fakultas;
                        $namaFak = $this->fakultas->getFaculty($idFak);                       
                        $value->fakultas = $namaFak;

                         //getStatus
                        $statusUser = $this->non_admin->getStatus($username);                      
                        $value->status = $statusUser;

                        //getStatus
                        $statusUser = $this->non_admin->getStatus($username);                      
                        $value->status = $statusUser;

                        //get sex
                        $jenisKelamin = $this->non_admin->getSex($username);
                        $value->jenis_kelamin = $jenisKelamin;

                        //get number of collection
                        $this->load->model('koleksi_model');
                        $koleksi[$username]= $this->koleksi_model->getNumOfKoleksi($username);
                        $this->load->model('wishlist_model');
                        $wishlist[$username]= $this->wishlist_model->getNumOfWishlist($username);
                    }
                
                    $data['resultSearchPengguna'] = $result;
                    $data['koleksi']= $koleksi;
                    $data['wishlist']= $wishlist;
                    $data['notFound'] = null;
                    $data['notMatch'] = null;
                } 
            }
            else if($kategori==null)
            {
                $data['notMatch'] = "Pilih Kategori";
                $data['resultSearchPengguna'] = null;
                $data['notFound'] = null;
            }
            else if($keyword==null)
            {
                $data['notMatch'] = "Masukkan Kategori";
                $data['resultSearchPengguna'] = null;
                $data['notFound'] = null;
            }
            
            $this->load->view('head_view');

            $username = $this->session->userdata('username');
            
            $this->load->model('admin_model');   
            $isAdmin = $this->admin_model->isAdmin($username);    
            
            
            if($isAdmin)
            {
                $this->load->view('navbar_admin_view');
            }
            else
            {
                $this->load->view('navbar_view');
            }
            $this->load->model('admin_model');   
            $isAdmin = $this->admin_model->isAdmin($username); 
            $data['isAdmin']=$isAdmin;
            $this->load->view('search_user_view2',$data);
            $this->load->view('foot_view');          
        }

    } // end of Search

?>