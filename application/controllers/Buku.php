<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Buku extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            
            // $username = $this->session->userdata('username');
            // $isLoggedIn = $this->session->userdata(''.$username);
            
            $this->load->model('buku_model');   
            // $isAdmin = $this->admin_model->isAdmin($username); 
            
            $this->load->model('admin_model');   
            // $isAdmin = $this->admin_model->isAdmin($username); 
            
            // if(!$isLoggedIn)
            // {
            //     redirect(base_url('Login'));
            // }
            
        }

        public function tambah()
        {        
           //check if user has logged in
            $username = $this->session->userdata('username');
            if(!$this->session->userdata(''.$username))
            {
                redirect(base_url('Login'));
            }

            if(isset($_POST))
            {
                $isbn = $this->input->post('isbn');
                $judul = $this->input->post('judul');
                $pengarang = $this->input->post('pengarang');
                $deskripsi = $this->input->post('deskripsi');
                $genre = $this->input->post('genre');
                $penerbit = $this->input->post('penerbit');
                $tahun_terbit = $this->input->post('tahun_terbit');
                $jumlah_halaman = $this->input->post('jumlah_halaman');
                $sampul = $this->input->post('sampul');
                $data = array(
                    'isbn' => $isbn,
                    'judul' => $judul,
                    'pengarang' => $pengarang,
                    'deskripsi' => $deskripsi,
                    'genre' => $genre,
                    'penerbit' => $penerbit,
                    'tahun_terbit' => $tahun_terbit,
                    'jumlah_halaman' => $jumlah_halaman,
                    'sampul' => $sampul,
                    'jumlah_halamanErr' => '',
                    'tahun_terbitErr' => '',
                    'isbnErr' => '',
                    'judulErr' => '',
                    'pengarangErr' => '',
                    'genreErr' => ''
                );
                $error = false;
                $this->load->model('buku_model');
                $isbnSudahAda = $this->buku_model->isRegisteredBook($isbn);
                if ($isbnSudahAda) 
                {
                  $data['isbnErr'] = "Buku sudah ada";
                  $error = true;
                }
                if($isbn == '')
                {
                  $data['isbnErr'] = "ISBN tidak boleh kosong";
                  $error = true;
                }
                if (!preg_match("/^[0-9]*$/", $isbn))
                {
                   //var_dump($name);
                   $data['isbnErr'] = "ISBN harus berbentuk angka ";
                    $error = true;
                }
                 if (!preg_match("/^[0-9]*$/", $tahun_terbit))
                {
                   //var_dump($name);
                   $data['tahun_terbitErr'] = "Tahun Terbit harus berbentuk angka ";
                    $error = true;
                }
                if (!(strlen($tahun_terbit)==4))
                {
                   
                   $data['tahun_terbitErr'] = "Format Tahun Terbit salah";
                    $error = true;
                }
                if (!preg_match("/^[0-9]*$/", $jumlah_halaman))
                {
                   //var_dump($name);
                   $data['jumlah_halamanErr'] = "Jumlah Halaman harus berbentuk angka ";
                    $error = true;
                }
                if($judul == '')
                {
                  $data['judulErr'] = "Judul tidak boleh kosong";
                  $error = true;
                }
                if($pengarang == '')
                {
                  $data['pengarangErr'] = "Pengarang tidak boleh kosong";
                  $error = true;
                }
                if($genre == '')
                {
                  $data['genreErr'] = "Genre tidak boleh kosong";
                  $error = true;
                }
                if($error)
                {
                  $this->load->view('head_view');
                  $this->load->view('navbar_view');
                  $this->load->view('add_book_view', $data);
                  $this->load->view('foot_view');
                }
                else
                {
                    if($sampul == '')
                    {
                        $sampul = base_url('assets/img/default-cover.jpg');
                    }
                    $data = array(
                        'isbn' => $isbn,
                        'judul' => $judul,
                        'pengarang' => $pengarang,
                        'deskripsi' => $deskripsi,
                        'genre' => $genre,
                        'penerbit' => $penerbit,
                        'tahun_terbit' => $tahun_terbit,
                        'jumlah_halaman' => $jumlah_halaman,
                        'sampul' => $sampul
                    );
                    $this->load->model('buku_model');
                    $this->buku_model->addBook($data);
                    $username = $this->session->userdata('username');
                    $this->load->model('koleksi_model');
                    $this->koleksi_model->addKoleksi($username, $isbn);
                    redirect(base_url('koleksi'));
                }       
            }
            else
            {
                $this->session->set_userdata('error_login_'.$email,true);
                redirect(base_url('Login'));
            }
        }
      
        public function tambah_baru()
        {
           
            //check if user has logged in
            $username = $this->session->userdata('username');
            if(!$this->session->userdata(''.$username))
            {
                redirect(base_url('Login'));
            }

            $data = array(
                'isbn' => '',
                'judul' => '',
                'pengarang' => '',
                'deskripsi' => '',
                'genre' => '',
                'penerbit' => '',
                'tahun_terbit' => '',
                'jumlah_halaman' => '',
                'sampul' => '',
                'isbnErr' => '',
                'tahun_terbitErr' => '',
                'jumlah_halamanErr' => '',
                'judulErr' => '',
                'pengarangErr' => '',
                'genreErr' => ''
            );
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
            
            $this->load->view('add_book_view', $data);
            $this->load->view('foot_view');
        }

        public function info($isbn)
        {
            //$isbn = $this->session->userdata('isbn');
            $this->load->model('buku_model');
            $data['resultBook'] = $this->buku_model->getBook($isbn);
            $data['resultOwner']= $this->buku_model->getOwner($isbn,true);
            $username = $this->session->userdata('username');
            $this->load->model('wishlist_model');
            $adaDiWishlist = $this->wishlist_model->IsInWishlist($username,$isbn);
            $data['adaDiWishlist']= $adaDiWishlist;
            $this->load->model('koleksi_model');
            $adaDiKoleksi = $this->koleksi_model->isInCollection($username, $isbn);        
            $data['adaDiKoleksi']= $adaDiKoleksi;


        	$this->load->view('head_view');
            
            $username = $this->session->userdata('username');              
            $isAdmin = $this->admin_model->isAdmin($username);    
            
            $isLoggedIn = $this->session->userdata(''.$username); 
            
            if(!$isLoggedIn)
                $this->load->view('navbar_x_view');      
            else if($isAdmin)
            {
                $this->load->view('navbar_admin_view');
            }
            else
            {
                $this->load->view('navbar_view');
            }
             
           
            $data['isAdmin']=$isAdmin;
            
            $this->load->view('book_info_view', $data);
            $this->load->view('foot_view');
        }
      
        public function pemilik($isbn)
        {
            //check if user has logged in
            $username = $this->session->userdata('username');
            if(!$this->session->userdata(''.$username))
            {
                redirect(base_url('Login'));
            }

            $this->load->model('buku_model');
            $this->load->model('non_admin');
            $this->load->model('fakultas');

            $user = $this->buku_model->getListOwner(3,0,$isbn);
            
            if(!empty($user))
            {
                for($i=0;$i<sizeof($user);$i++)
                {
                    //get Faculty
                $idFak = $user[$i]->fakultas;
                $namaFak = $this->fakultas->getFaculty($idFak);                       
                $user[$i]->fakultas = $namaFak;

                //getStatus
                $username= $user[$i]->username;
                $statusUser = $this->non_admin->getStatus($username);                      
                $user[$i]->status = $statusUser;

                //get sex
                $jenisKelamin = $this->non_admin->getSex($username);
                $user[$i]->jenis_kelamin = $jenisKelamin;
                }    
            }
            
            

            $data['resultOwner']= $user;
            $data['resultBook'] = $this->buku_model->getBook($isbn);

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
            
            $this->load->view('book_owners',$data);
            $this->load->view('foot_view');
        }

         public function getList()
        {
            //check if user has logged in
            $username = $this->session->userdata('username');
            if(!$this->session->userdata(''.$username))
            {
                redirect(base_url('Login'));
            }


             $this->load->model('non_admin');
            $this->load->model('fakultas');
            $data = array();
            $page = $_GET['page'];
            $isbn = $_GET['isbn'];
            $user = $this->buku_model->getListOwner(3, $page, $isbn);

             for($i=0;$i<sizeof($user);$i++)
            {
                //get Faculty
            $idFak = $user[$i]->fakultas;
            $namaFak = $this->fakultas->getFaculty($idFak);                       
            $user[$i]->fakultas = $namaFak;

            //getStatus
            $username= $user[$i]->username;
            $statusUser = $this->non_admin->getStatus($username);                      
            $user[$i]->status = $statusUser;

            //get sex
            $jenisKelamin = $this->non_admin->getSex($username);
            $user[$i]->jenis_kelamin = $jenisKelamin;
            }

            $data['resultOwner'] = $user;
            //var_dump($data);
            echo json_encode($data);
        }

        // public function deleteBook($isbn)
        // {

        //     $this->load->model('buku_model');
        //     $this->buku_model->deleteBook($isbn);
        //     redirect(base_url('kelolaBook'));
        // }

        // public function updateBook($isbn, $perubahan)
        // {
        //     list($isbn, $isbnNew, $judul, $judulNew, $pengarang, $pengarangNew, $deskripsi, $deskripsiNew, $genre, $genreNew, $penerbit, $penerbitNew, $tahun_terbit, $tahun_terbitNew, $jumlah_halaman, $jumlah_halamanNew, $sampul, $sampulNew) = explode(",", $perubahan);
        //     $data = array(
        //         'isbn' => $isbnNew,
        //         'judul' => $judulNew,
        //         'pengarang' => $pengarangNew,
        //         'deskripsi' => $deskripsiNew,
        //         'genre' => $genreNew,
        //         'penerbit' => $penerbitNew,
        //         'tahun_terbit' => $tahun_terbitNew,
        //         'jumlah_halaman' => $jumlah_halamanNew,
        //         'sampul' => $sampulNew
        //     );
        //     $this->load->model('buku_model');
        //     $this->buku_model->updateBook($isbn, $data);
        //     redirect(base_url('kelolaBook'));
        // }
            

    } // end of Book

?>