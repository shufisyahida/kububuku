<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Tanggapan extends CI_Controller
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

	    public function add($isbn)
		{
			if(isset($_POST))
			{
				//$non_admin = $this->input->post('$non_admin');
				//$buku = $this->input->post('buku');
			    $username = $this->session->userdata('username');
				$this->load->model('tanggapan_model');
				$idResult= $this->tanggapan_model->getId($username,$isbn);
				
            		$this->load->model('tanggapan_model');
            		$data = array(
                       'username' => $username,
                       'id_wishlist' => $idResult,
                       'is_notified' => false
                    );
					$this->tanggapan_model->addTanggapan($data);
					redirect(base_url('index.php/Wishlist'));
				
			}
			else
			{
				$this->session->set_userdata('error_login_'.$username,true);
				redirect(base_url('index.php/Login'));
				//masuk form create buku lalalla
			}				
		}

	
	    
	} // end of Wishlist

?>