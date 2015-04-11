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
        $data['resultOwner']= $this->buku->getOwner($isbn,true);
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
}
?>