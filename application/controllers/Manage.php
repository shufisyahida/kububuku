<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Manage extends CI_Controller
	{
		public function index()
		{
			$this->load->view('head_view');
			$this->load->view('navbar_view');
            $this->load->view('admin');
            $this->load->view('manage_view');
            $this->load->view('foot_view');
		}
	}