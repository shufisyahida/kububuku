<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Tanggapan extends CI_Controller
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

	    public function add($isbn, $OtherUsername)
		{
			if(isset($_POST))
			{
				//$non_admin = $this->input->post('$non_admin');
				//$buku = $this->input->post('buku');
			    $username = $this->session->userdata('username');
				$this->load->model('tanggapan_model');
				$idResult= $this->tanggapan_model->getId($OtherUsername,$isbn);
				
            	$this->load->model('tanggapan_model');
            	$data = array(
                    'username' => $username,
                    'id_wishlist' => $idResult,
                    'is_notified' => false
                  	);
				$this->tanggapan_model->addTanggapan($data);
				redirect(base_url('profil/lihatProfil/'.$OtherUsername));
				
			}
			else
			{
				$this->session->set_userdata('error_login_'.$username,true);
				redirect(base_url('Login'));
				//masuk form create buku lalalla
			}				
		}

	
	    
	} // end of Wishlist

?>