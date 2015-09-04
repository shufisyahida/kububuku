<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Notifikasi extends CI_Controller
    {        
        public function __construct()
        {
            parent::__construct();
            $username = $this->session->userdata('username');
            if(!$this->session->userdata(''.$username))
            {
                redirect(base_url('Login'));
            }
        }

      /*  public function index()
        {
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('notification_view');
            $this->load->view('foot_view');
        }*/

         public function chk_notif()
        {
            $username = $this->session->userdata('username');
            $data = array();
            //$page = $_GET['page'];
            $this->load->model('tanggapan_model');
            $this->load->model('pinjaman');
            $data["tanggapan"] = $this->tanggapan_model->getNotifTanggapan($username);
            $data["request"] = $this->pinjaman->getNotifRequest($username);
            $data["accept"] = $this->pinjaman->getNotifAccept($username);
            $data["decline"] = $this->pinjaman->getNotifDecline($username);
            $data["return"] = $this->pinjaman->getNotifReturn($username);
            echo json_encode($data);            
        }

        public function index(){
            $username = $this->session->userdata('username');
            $this->load->model('tanggapan_model');
            $this->load->model('pinjaman');
            $data['resultTanggapan'] = $this->tanggapan_model->getAllTanggapan($username);
            $data['resultRequest'] = $this->pinjaman->notifRequest($username);
            $data['resultAccept'] = $this->pinjaman->notifAccept($username);
            $data['resultDecline'] = $this->pinjaman->notifDecline($username);
            $data['resultReturn'] = $this->pinjaman->notifReturn($username);
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('notification_view', $data);
            
            $this->load->view('foot_view');

        }

        public function lookInform($id,$OtherUsername){
            //$username = $this->session->userdata('username');
            $this->load->model('tanggapan_model');
            //$this->tanggapan_model->setTanggapan($username, $id);
            $this->tanggapan_model->deleteTanggapan($id,$OtherUsername);

<<<<<<< HEAD
            redirect(base_url('profil/lihatProfil/'.$OtherUsername));
=======
            redirect(base_url(''.$OtherUsername));
>>>>>>> cdbdbd16cb0674ba072e4cf8f054c5356006c5ac
        }

        public function lookRequest($user, $isbn){
            $username = $this->session->userdata('username');
            $this->load->model('pinjaman');
            $this->pinjaman->setRequest($username, $user, $isbn);
            redirect(base_url('permintaan_masuk'));
        }

        public function lookAccept($user, $isbn){
            $username = $this->session->userdata('username');
            $this->load->model('pinjaman');
            $this->pinjaman->setAccept($username, $user, $isbn);
            redirect(base_url('permintaan_keluar'));
        }

        public function lookDecline($user, $isbn){
            $username = $this->session->userdata('username');
            $this->load->model('pinjaman');
            $this->pinjaman->setDecline($username, $user, $isbn);
            redirect(base_url('permintaan_keluar'));
        }

        public function lookReturn($user, $isbn){
            $username = $this->session->userdata('username');
            $this->load->model('pinjaman');
            $this->pinjaman->setReturn($username, $user, $isbn);
            redirect(base_url('permintaan_masuk'));
        }
    } // end of Notification

?>