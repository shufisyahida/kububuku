<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Book extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $username = $this->session->userdata('username');
            if(!$this->session->userdata(''.$username))
            {
                redirect(base_url('index.php/login'));
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
                    'isbnErr' => '',
                    'judulErr' => '',
                    'pengarangErr' => '',
                    'genreErr' => ''
                );
                $error = false;
                $this->load->model('buku');
                $isbnSudahAda = $this->buku->isbnSudahAda($isbn);
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
                    $this->load->model('koleksi_model');
                    $this->koleksi_model->addKoleksi($username, $isbn);
                    redirect(base_url('index.php/Dashboard/collection'));
                }       
            }
            else
            {
                $this->session->set_userdata('error_login_'.$email,true);
                redirect(base_url('index.php/login'));
            }
        }
      
        public function addBookIndex()
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
                'judulErr' => '',
                'pengarangErr' => '',
                'genreErr' => ''
            );
            $this->load->view('head_view');
            $this->load->view('navbar_view');
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
            $this->load->model('koleksi');
            $adaDiKoleksi = $this->koleksi_model->adaDiKoleksi($username, $isbn);        
            $data['adaDiKoleksi']= $adaDiKoleksi;
        	$this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('book_info_view', $data);
            $this->load->view('foot_view');
        }
      
        public function show_owner($isbn)
        {
            $this->load->model('buku');
            $this->load->model('non_admin');
            $this->load->model('fakultas');

            $user = $this->buku->getOwner($isbn,false);
            
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
            $this->load->view('navbar_view');
            $this->load->view('book_owners',$data);
            $this->load->view('foot_view');
        }

    } // end of Book

?>