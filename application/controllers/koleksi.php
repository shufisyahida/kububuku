<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Koleksi extends CI_Controller {
	
	public function delete()
	{
		if(isset($_POST))
		{
			$username = $this->input->post('username');
			$isbn = $this->input->post('isbn');	

			$this->load->model('koleksi_model');
			$this->koleksi_model->deleteKoleksi($username,$isbn);
			redirect(base_url('index.php/Dashboard'));		
	
		}
		else
		{
			$this->session->set_userdata('error_login_'.$username,true);
			redirect(base_url('index.php/login'));
			//belom betul, ini masih copas else nya wkwkwk

		}
			

	}

	public function add()
	{
		if(isset($_POST))
		{
			$non_admin = $this->input->post('$non_admin');
			$buku = $this->input->post('buku');	

			$this->load->model('koleksi_model');
			$this->koleksi_model->addKoleksi($non_admin,$buku);
			redirect(base_url('index.php/Dashboard'));		
	
		}
		else
		{
			$this->session->set_userdata('error_login_'.$username,true);
			redirect(base_url('index.php/login'));
			//masuk form create buku lalalla

		}
			
	}



}


?>