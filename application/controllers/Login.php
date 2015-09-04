<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Login extends CI_Controller
    {
        
        public function __construct()
        {
            parent::__construct();
            $username = $this->session->userdata('username');
            $hasLoggedIn = $this->session->userdata($username);

            $this->load->model('admin_model');   
            $isAdmin = $this->admin_model->isAdmin($username); 

            if(!empty($hasLoggedIn) && $hasLoggedIn)
            {
                if($isAdmin)
                    redirect(base_url('Message'));
                else
                    redirect(base_url('permintaan_masuk'));
            }
        }
        

        public function index()
        {
        	$username = $this->session->userdata('username');
            $loggedin = $this->session->userdata(''.$username);
            // $email = $this->session->userdata('email');

            if($loggedin)
            {
                // redirect(base_url('Dashboard'));
                redirect(base_url('permintaan_masuk'));
            }
            else
            {
                $this->load->view('head_view');
                $this->load->view('login_view');
                $this->load->view('foot_view');
            }
            // elseif ($this->session->set_userdata('error_login_'.$email,true)) {
            //    redirect(base_url('Login'));
            // }        	
        }

       
        public function login_failed()
        {
            $data['notif'] = '
                <div id="cp-login" class="error">
                <span>Login failed. Try again!</span>
                </div>
            ';
            $this->load->view('head_view');
            $this->load->view('login_view', $data);
            $this->load->view('foot_view');

            // echo '
            //   <span class="badge badge-property">Login failed. Try again!</span>
            // ';
            // echo '
            //   <script type="text/javascript">
            //     Materialize.toast("Login failed", 4000)
            //   </script>
            // ';
        }

        // public function login_error()
        // {
        //   $this->load->view('head_view');
        //   $this->load->view('login_view');
        //   echo '
        //     <span class="badge badge-property">Please fill out the field.</span>
        //   ';
        //   $this->load->view('foot_view');
        //   // echo '
        //   //   <script type="text/javascript">
        //   //     Materialize.toast("Login failed", 4000)
        //   //   </script>
        //   // ';
        // }

    } // end of Login

?>