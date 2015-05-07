<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Wishlist extends CI_Controller
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

	    public function index()
	    {
	    	$username = $this->session->userdata('username');
			$this->load->model('wishlist_model');
			$data['resultWishlist'] = $this->wishlist_model->getAllWishlist($username);
 			$this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('wishlist_view', $data);
            $this->load->view('foot_view');
	    	
	    }
	    
	    public function add($isbn)
		{
			if(isset($_POST))
			{
				//$non_admin = $this->input->post('$non_admin');
				//$buku = $this->input->post('buku');	
				$username = $this->session->userdata('username');
				$this->load->model('wishlist_model');
				$this->wishlist_model->addWishlist($username,$isbn);
				redirect(base_url('index.php/Wishlist'));
				

			}
			else
			{
				$this->session->set_userdata('error_login_'.$username,true);
				redirect(base_url('index.php/Login'));
				//masuk form create buku lalalla
			}				
		}

		public function delete($isbn)
		{
			if(isset($_POST))
			{
				//$username = $this->input->post('username');
				$username = $this->session->userdata('username'); 
				$this->load->model('wishlist_model');
				$this->wishlist_model->deleteWishlist($username,$isbn);
				redirect(base_url('index.php/Wishlist'));
			}
			else
			{
				//$this->session->set_userdata('error_login_'.$username,true);
				redirect(base_url('index.php/Collection'));
				//belom betul, ini masih copas else nya wkwkwk
			}
		}
	} // end of Wishlist

?>