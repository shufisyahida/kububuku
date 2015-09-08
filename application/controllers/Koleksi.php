<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class koleksi extends CI_Controller
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

		public function tambah($buku, $non_admin)
		{
			if(isset($_POST))
			{
				//$non_admin = $this->input->post('$non_admin');
				//$buku = $this->input->post('buku');	

				$this->load->model('koleksi_model');
				$this->koleksi_model->addKoleksi($non_admin,$buku);
				redirect(base_url('koleksi'));
			}
			else
			{
				$this->session->set_userdata('error_login_'.$username,true);
				redirect(base_url('Login'));
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
			$data = array(
				'username_peminjam'=>$peminjam,
				'username_pemilik'=> $pemilik,
				'isbn'=>$isbn_buku,
				'status'=>1,
				'durasi'=>$durasi_pinjam,
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
				redirect(''.$pemilik);
			}	
			else
			{
				//tampilkan notifikasi sukses
				redirect(''.$pemilik);
				// echo '
				// 	<a class="btn" onload="Materialize.toast("Borrowing success", 4000)"></a>
				// ';
			}			
		}
	
		public function hapus($isbn)
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
				redirect(base_url('koleksi'));
			}
			else
			{
				//$this->session->set_userdata('error_login_'.$username,true);
				redirect(base_url('koleksi'));
				//belom betul, ini masih copas else nya wkwkwk
			}
		}

		public function index()
		{
			$username = $this->session->userdata('username');
			$this->load->model('koleksi_model');
			$data['resultAvailable'] = $this->koleksi_model->getKoleksiAvailable($username);
			//$this->load->model('koleksi_model');
			$data['resultBorrowed'] = $this->koleksi_model->getKoleksiBorrowed($username);
			$this->load->view('head_view');
			$this->load->view('navbar_view');
			$this->load->view('collection_view', $data);
			//$this->load->view('collection_view', $data2);
			$this->load->view('foot_view');
		}

	} // end of Koleksi

?>