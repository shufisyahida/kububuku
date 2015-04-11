<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Koleksi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $username = $this->session->userdata('username');
        if(!$this->session->userdata(''.$username))
        {
            redirect(base_url('index.php/login'));
        }
    }
	
	public function delete($isbn)
	{
		if(isset($_POST))
		{
			//$username = $this->input->post('username');
			$username = $this->session->userdata('username'); 

			//$isbn = $this->input->post('isbn');
			//$isbn = $this->session->userdata('isbn'); 
			// $isbn = $this->input->get('isbn');

			$this->load->model('koleksi_model');
			$this->koleksi_model->deleteKoleksi($username,$isbn);
			redirect(base_url('index.php/dashboard/collection'));		
	
		}
		else
		{
			//$this->session->set_userdata('error_login_'.$username,true);
			redirect(base_url('index.php/dashboard/collection'));
			//belom betul, ini masih copas else nya wkwkwk

		}
			

	}

	public function add($buku, $non_admin)
	{
		if(isset($_POST))
		{
			//$non_admin = $this->input->post('$non_admin');
			//$buku = $this->input->post('buku');	

			$this->load->model('koleksi_model');
			$this->koleksi_model->addKoleksi($non_admin,$buku);
			redirect(base_url('index.php/book/book_info/'.$buku));		
	
		}
		else
		{
			$this->session->set_userdata('error_login_'.$username,true);
			redirect(base_url('index.php/login'));
			//masuk form create buku lalalla

		}
			
	}

	public function pinjam()
	{
		// var_dump($this->input->post('username'));
		$peminjam = $this->session->userdata('username');
		$pemilik = $this->input->post('username');
		$isbn_buku = $this->input->post('isbn');
		$durasi_pinjam = $this->input->post('duration');
		$data = array('username_peminjam'=>$peminjam,
		'username_pemilik'=> $pemilik,
		'isbn'=>$isbn_buku,
		'status'=>1,
		// 'durasi'=>5,
		'durasi'=>$durasi_pinjam,
		'pesan' => NULL,
		'is_notified' => false
		);	

		$this->load->model('pinjaman');
		$success = $this->pinjaman-> add($data);

		if(!$success)
		{
			//tampilkan notifikasi gagal
		}	
		else
		{
			//tampilkan notifikasi sukses
			redirect('index.php/Profile/profile/'.$pemilik);
		}	

		
	}



}


?>