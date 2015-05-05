<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Collection extends CI_Controller
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

		public function add($buku, $non_admin)
		{
			if(isset($_POST))
			{
				//$non_admin = $this->input->post('$non_admin');
				//$buku = $this->input->post('buku');	

				$this->load->model('koleksi');
				$this->koleksi->addKoleksi($non_admin,$buku);
				redirect(base_url('index.php/Collection'));
			}
			else
			{
				$this->session->set_userdata('error_login_'.$username,true);
				redirect(base_url('index.php/Login'));
				//masuk form create buku lalalla
			}				
		}
    	
		public function borrow()
		{
			// var_dump($this->input->post('username'));
			$peminjam = $this->session->userdata('username');
			$pemilik = $this->input->post('username');
			$isbn_buku = $this->input->post('isbn');
			$durasi_pinjam = $this->input->post('duration');
			$data = array(
				'username_peminjam'=>$peminjam,
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
				// <div class="container">
				// 		<div id="cp-login" class="card-panel red white-text">
				// 			Already requested.
				// 		</div>
				// 	</div>
				redirect('index.php/Profile/showProfile/'.$pemilik);
			}	
			else
			{
				//tampilkan notifikasi sukses
				redirect('index.php/Profile/showProfile/'.$pemilik);
				// echo '
				// 	<a class="btn" onload="Materialize.toast("Borrowing success", 4000)"></a>
				// ';
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

				$this->load->model('koleksi');
				$this->koleksi->deleteKoleksi($username,$isbn);
				redirect(base_url('index.php/Collection'));
			}
			else
			{
				//$this->session->set_userdata('error_login_'.$username,true);
				redirect(base_url('index.php/Collection'));
				//belom betul, ini masih copas else nya wkwkwk
			}
		}

		public function index()
		{
			$username = $this->session->userdata('username');
			$this->load->model('koleksi');
			$data['resultAvailable'] = $this->koleksi->getKoleksiAvailable($username);
			//$this->load->model('koleksi');
			$data['resultBorrowed'] = $this->koleksi->getKoleksiBorrowed($username);
			$this->load->view('head_view');
			$this->load->view('navbar_view');
			$this->load->view('collection_view', $data);
			//$this->load->view('collection_view', $data2);
			$this->load->view('foot_view');
		}

	} // end of Koleksi

?>