<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Notification extends CI_Controller
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
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('notification_view');
            $this->load->view('foot_view');
        }

         public function chk_notif()
        {
            $username = $this->session->userdata('username');
            $data = array();
            //$page = $_GET['page'];
            $this->load->model('tanggapan_model');
            $this->load->model('pinjaman');
            $data["tanggapan"] = $this->tanggapan_model->getNotifTanggapan($username);
            $data["pinjaman"] = $this->pinjaman->getNotifDipinjam($username);
            $data["pinjaman2"] = $this->pinjaman->getNotifMeminjam($username);
            echo json_encode($data);            
        }

        public function showNotif(){
            $username = $this->session->userdata('username');
        }
    } // end of Notification

?>