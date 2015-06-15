<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Request_admin extends CI_Controller
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
                redirect(base_url('index.php/Admin'));
            }
            elseif(!$isAdmin)
            {
                redirect(base_url('index.php/Request_in'));    
            }

        }

        public function index() {
            $this->load->model('permintaan_ubah_hapus');
            $deleteRequest = $this->permintaan_ubah_hapus->getDeleteRequest();
            $updateRequest = $this->permintaan_ubah_hapus->getUpdateRequest();

            $deleteJudul=array();
            $deleteSampul=array();
            $updateJudul=array();
            $updateSampul=array();

            foreach($deleteRequest as $key=>$value)
            {
                $this->load->model('buku');
                $judul = $this->buku->getJudul($value->isbn);
                $sampul = $this->buku->getSampul($value->isbn);
                $deleteJudul[$key] = $judul;
                $deleteSampul[$key] = $sampul;
            }
            foreach($updateRequest as $key=>$value)
            {
                $this->load->model('buku');
                $judul = $this->buku->getJudul($value->isbn);
                $sampul = $this->buku->getSampul($value->isbn);
                $updateJudul[$key] = $judul;
                $updateSampul[$key] = $sampul;
            }

            $data['deleteRequest'] = $deleteRequest;
            $data['updateRequest'] = $updateRequest;
            $data['deleteJudul'] = $deleteJudul;
            $data['deleteSampul'] = $deleteSampul;
            $data['updateJudul'] = $updateJudul;
            $data['updateSampul'] = $updateSampul;          

            $this->load->view('head_view');
            $this->load->view('navbar_admin_view');
            // $this->load->view('admin');
            $this->load->view('request_view', $data);
            $this->load->view('foot_view');
        }

        // public function createDeleteRequest($isbn)
        // {
        //     $data = array(
        //         'username'=>$this->session->userdata('username'),
        //         'isbn'=>$isbn,
        //         'kategori'=> 0,
        //         'perubahan'=> '',
        //         'is_accepted'=> 0,
        //         'is_notified'=> 0
        //     );
        //     $this->load->model('permintaan_ubah_hapus');
        //     $this->permintaan_ubah_hapus->createPermintaan($data);
        //     redirect(base_url('index.php/Book/book_info/'.$isbn));    
        // }

        // public function showUpdateBook($isbn)
        // {
        //     $this->load->model('buku');
        //     $book = $this->buku->getBook($isbn) ;
        //     $data=$book[0];
        //     $data->isbnErr='';
        //     $data->judulErr='';
        //     $data->pengarangErr='';
        //     $data->genreErr='';
        //     $this->load->view('head_view');
        //     $this->load->view('navbar_view');
        //     $this->load->view('update_book_view', $data);
        //     $this->load->view('foot_view');
        // }
        // public function createUpdateRequest($isbn)
        // {
        //     if(isset($_POST))
        //     {
        //         $isbnNew = $this->input->post('isbn');
        //         $judul = $this->input->post('judul');
        //         $pengarang = $this->input->post('pengarang');
        //         $deskripsi = $this->input->post('deskripsi');
        //         $genre = $this->input->post('genre');
        //         $penerbit = $this->input->post('penerbit');
        //         $tahun_terbit = $this->input->post('tahun_terbit');
        //         $jumlah_halaman = $this->input->post('jumlah_halaman');
        //         $sampul = $this->input->post('sampul');
        //         $data = array(
        //             'isbn' => $isbn,
        //             'judul' => $judul,
        //             'pengarang' => $pengarang,
        //             'deskripsi' => $deskripsi,
        //             'genre' => $genre,
        //             'penerbit' => $penerbit,
        //             'tahun_terbit' => $tahun_terbit,
        //             'jumlah_halaman' => $jumlah_halaman,
        //             'sampul' => $sampul,
        //             'isbnErr' => '',
        //             'judulErr' => '',
        //             'pengarangErr' => '',
        //             'genreErr' => ''
        //         );
        //         $error = false;
        //         $this->load->model('buku');
        //         //perlu ini ga?
        //         $isbnSudahAda = $this->buku->isRegisteredBook($isbnNew);
        //         if ($isbnSudahAda && $isbn != $isbnNew) 
        //         {
        //             $data['isbnErr'] = "Book is already in use";
        //             $error = true;
        //         }
        //         //
        //         if($isbn == '')
        //         {
        //           $data['isbnErr'] = "ISBN should not be blank";
        //           $error = true;
        //         }
        //         if($judul == '')
        //         {
        //           $data['judulErr'] = "Title should not be blank";
        //           $error = true;
        //         }
        //         if($pengarang == '')
        //         {
        //           $data['pengarangErr'] = "Author should not be blank";
        //           $error = true;
        //         }
        //         if($genre == '')
        //         {
        //           $data['genreErr'] = "Genre should not be blank";
        //           $error = true;
        //         }
        //         if($error)
        //         {
        //           $this->load->view('head_view');
        //           $this->load->view('navbar_view');
        //           $this->load->view('update_book_view', $data);
        //           $this->load->view('foot_view');
        //         }
        //         else
        //         {
        //             if($sampul == '')
        //             {
        //                 $sampul = base_url('assets/img/default-cover.jpg');
        //             }

        //             $book = $this->buku->getBook($isbn);
        //             $book1 = $book[0];                                        
        //             $perubahan = "$book1->isbn,$isbnNew,$book1->judul,$judul,$book1->pengarang,$pengarang,$book1->deskripsi,$deskripsi,$book1->genre,$genre,$book1->penerbit,$penerbit,$book1->tahun_terbit,$tahun_terbit,$book1->jumlah_halaman,$jumlah_halaman,$book1->sampul,$sampul";
                    
        //             $data = array(
        //                 'username'=>$this->session->userdata('username'),
        //                 'isbn'=>$isbn,
        //                 'kategori'=> 1,
        //                 // http://php.net/manual/en/function.date.php
        //                 // 'waktu'=> date("D, d F Y, h:i A"),
        //                 'perubahan'=> $perubahan,
        //                 'is_accepted'=> 0,
        //                 'is_notified'=> 0
        //             );
        //             $this->load->model('permintaan_ubah_hapus');
        //             $this->permintaan_ubah_hapus->createPermintaan($data);
        //             redirect(base_url('index.php/Book/book_info/'.$isbn));               
        //         }       
        //     }
        //     else
        //     {
        //         $this->session->set_userdata('error_login_'.$email,true);
        //         redirect(base_url('index.php/Login'));
        //     }

        // }

        public function acceptDeleteBook($isbn)
        {
            $this->load->model('buku');
            $this->buku->deleteBook($isbn);

            // $this->load->model('permintaan_ubah_hapus');
            // $this->permintaan_ubah_hapus->delete($username, $isbn, 0);

            redirect(base_url('index.php/Request_admin'));  
        }

        public function declineRequest($id)
        {
            $this->load->model('permintaan_ubah_hapus');
            $this->permintaan_ubah_hapus->delete($id);

            redirect(base_url('index.php/Request_admin'));  
        }

        public function acceptUpdateBook($id, $isbn)
        {
            $this->load->model('permintaan_ubah_hapus');
            $perubahan = $this->permintaan_ubah_hapus->getPerubahan($id);
            list($isbn, $isbnNew, $judul, $judulNew, $pengarang, $pengarangNew, $deskripsi, $deskripsiNew, $genre, $genreNew, $penerbit, $penerbitNew, $tahun_terbit, $tahun_terbitNew, $jumlah_halaman, $jumlah_halamanNew, $sampul, $sampulNew) = explode(",", $perubahan);
            $data = array(
                'isbn' => $isbnNew,
                'judul' => $judulNew,
                'pengarang' => $pengarangNew,
                'deskripsi' => $deskripsiNew,
                'genre' => $genreNew,
                'penerbit' => $penerbitNew,
                'tahun_terbit' => $tahun_terbitNew,
                'jumlah_halaman' => $jumlah_halamanNew,
                'sampul' => $sampulNew
            );

            $this->load->model('buku');
            $this->buku->updateBook($isbn, $data);
            $this->permintaan_ubah_hapus->delete($id);            

            redirect(base_url('index.php/Request_admin')); 
        }



    } // end of Book

?>