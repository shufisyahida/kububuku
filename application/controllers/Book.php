<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Book extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            
            $username = $this->session->userdata('username');
            $isLoggedIn = $this->session->userdata(''.$username);
            
            $this->load->model('buku');   
            // $isAdmin = $this->admin_model->isAdmin($username); 
            
            $this->load->model('admin_model');   
            $isAdmin = $this->admin_model->isAdmin($username); 
            
            if(!$isLoggedIn)
            {
                redirect(base_url('index.php/Login'));
            }
            
        }

        public function addBook()
        {        
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
                $this->load->model('buku');
                $isbnSudahAda = $this->buku->isRegisteredBook($isbn);
                if ($isbnSudahAda) 
                {
                  $data['isbnErr'] = "Book is already in use";
                  $error = true;
                }
                if($isbn == '')
                {
                  $data['isbnErr'] = "ISBN should not be blank";
                  $error = true;
                }
                if (!preg_match("/^[0-9]*$/", $isbn))
                {
                   //var_dump($name);
                   $data['isbnErr'] = "ISBN number should be numeric ";
                    $error = true;
                }
                 if (!preg_match("/^[0-9]*$/", $tahun_terbit))
                {
                   //var_dump($name);
                   $data['tahun_terbitErr'] = "Published Year should be numeric ";
                    $error = true;
                }
                if (!(strlen($tahun_terbit)==4))
                {
                   
                   $data['tahun_terbitErr'] = "Published Year format is not valid";
                    $error = true;
                }
                if (!preg_match("/^[0-9]*$/", $jumlah_halaman))
                {
                   //var_dump($name);
                   $data['jumlah_halamanErr'] = "Number of Page should be numeric ";
                    $error = true;
                }
                if($judul == '')
                {
                  $data['judulErr'] = "Title should not be blank";
                  $error = true;
                }
                if($pengarang == '')
                {
                  $data['pengarangErr'] = "Author should not be blank";
                  $error = true;
                }
                if($genre == '')
                {
                  $data['genreErr'] = "Genre should not be blank";
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
                    $this->load->model('buku');
                    $this->buku->addBook($data);
                    $username = $this->session->userdata('username');
                    $this->load->model('koleksi');
                    $this->koleksi->addKoleksi($username, $isbn);
                    redirect(base_url('index.php/Collection'));
                }       
            }
            else
            {
                $this->session->set_userdata('error_login_'.$email,true);
                redirect(base_url('index.php/Login'));
            }
        }
      
        public function showAddBook()
        {
            // $data['page_title'] = "CI Hello World App!";
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

        public function book_info($isbn)
        {
            //$isbn = $this->session->userdata('isbn');
            $this->load->model('buku');
            $data['resultBook'] = $this->buku->getBook($isbn);
            $data['resultOwner']= $this->buku->getOwner($isbn,true);
            $username = $this->session->userdata('username');
            $this->load->model('wishlist_model');
            $adaDiWishlist = $this->wishlist_model->IsInWishlist($username,$isbn);
            $data['adaDiWishlist']= $adaDiWishlist;
            $this->load->model('koleksi');
            $adaDiKoleksi = $this->koleksi->isInCollection($username, $isbn);        
            $data['adaDiKoleksi']= $adaDiKoleksi;


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
            
            $this->load->view('book_info_view', $data);
            $this->load->view('foot_view');
        }
      
        public function show_owner($isbn)
        {
            $this->load->model('buku');
            $this->load->model('non_admin');
            $this->load->model('fakultas');

            $user = $this->buku->getListOwner(3,0,$isbn);
            
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
            

            $data['resultOwner']= $user;
            $data['resultBook'] = $this->buku->getBook($isbn);

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
            //$thePage = intval($page);
             $this->load->model('non_admin');
            $this->load->model('fakultas');
            $data = array();
            $page = $_GET['page'];
            $isbn = $_GET['isbn'];
            $user = $this->buku->getListOwner(3, $page, $isbn);

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

        //     $this->load->model('buku');
        //     $this->buku->deleteBook($isbn);
        //     redirect(base_url('index.php/ManageBook'));
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
        //     $this->load->model('buku');
        //     $this->buku->updateBook($isbn, $data);
        //     redirect(base_url('index.php/ManageBook'));
        // }
            

    } // end of Book

?>