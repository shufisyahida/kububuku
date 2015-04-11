<?php
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



    public function book_info($isbn)
    {
        //$isbn = $this->session->userdata('isbn');
        $this->load->model('buku');
        $data['resultBook'] = $this->buku->getBook($isbn);
        $data['resultOwner']= $this->buku->getOwner($isbn);
    	$this->load->view('head_view');
        $this->load->view('navbar_view');

        $this->load->view('book_info_view', $data);
        $this->load->view('foot_view');
    }

    public function addBook()
    {        
        if(isset($_POST))
        {
            $isbn = $this->input->post('isbn');
            $judul = $this->input->post('name');
            $pengarang = $this->input->post('pengarang');
            $deskripsi = $this->input->post('deskripsi');
            $genre = $this->input->post('genre');
            $penerbit = $this->input->post('penerbit');
            $tahun_terbit = $this->input->post('tahun_terbit');
            $jumlah_halaman = $this->input->post('jumlah_halaman');
            $sampul = $this->input->post('jumlah_halaman');

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
                'genreErr' => '',
                'penerbitErr' => '',
                'tahun_terbitErr' => '',
                'jumlah_halamanErr' => ''
            );

            $error = false;
            $this->load->model('buku');
            $isbnSudahAda = $this->buku->isbnSudahAda($isbn);
            if ($isbnSudahAda) 
            {
              $data['isbnErr'] = "Book already in use";
              $error = true;
            }
            if($isbn == '')
            {
              $data['isbnErr'] = "ISBN should not blank";
              $error = true;
            }
            if($judul == '')
            {
              $data['judulErr'] = "Judul should not blank";
              $error = true;
            }
            if($pengarang == '')
            {
              $data['pengarangErr'] = "Pengarang should not blank";
              $error = true;
            }
            if($genre == '')
            {
              $data['genreErr'] = "Genre should not blank";
              $error = true;
            }
            if($penerbit == '')
            {
              $data['penerbitErr'] = "Penerbit should not blank";
              $error = true;
            }
            if($tahun_terbit == '')
            {
              $data['tahun_terbitErr'] = "Tahun terbit should not blank";
              $error = true;
            }
            if($jumlah_halaman == '')
            {
              $data['jumlah_halamanErr'] = "jumlah halaman should not blank";
              $error = true;
            }

            if($error)
            {
              $this->load->view('head_view');
              $this->load->view('foot_view');
              $this->load->view('add_book_view', $data);
            }
            else
            {
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

                redirect(base_url('index.php/Book/book_info'));

            }       
        }
        else
        {
            $this->session->set_userdata('error_login_'.$email,true);
            redirect(base_url('index.php/login'));
        }
        

    
}
?>