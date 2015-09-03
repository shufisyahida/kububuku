<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Admin extends CI_Controller
    {
        
        public function __construct()
        {
            parent:: __construct();
            
            $username = $this->session->userdata('username');
            $isLoggedIn = $this->session->userdata(''.$username);
            
            $this->load->model('admin_model');   
            $isAdmin = $this->admin_model->isAdmin($username); 

            // $email = $this->session->userdata('email');

            if($isLoggedIn&&$isAdmin)
            {
                // redirect(base_url('index.php/Dashboard'));
                redirect(base_url('index.php/Message'));
            }
            else if ($isLoggedIn&&!$isAdmin)
            {
                redirect(base_url('index.php/permintaan_masuk'));
            }
            // else
            // {
            //      $this->load->view('head_view');
            //     $this->load->view('login_admin_view');
            //     $this->load->view('foot_view');
            // }
        }

        public function index()
        {
        	
                $this->load->view('head_view');
                $this->load->view('login_admin_view');
                $this->load->view('foot_view');
         
        }

        public function loginAdmin_failed()
        {
            $data['notif'] = '
                <div id="cp-login" class="error">
                <span>Login failed. Try again!</span>
                </div>
            ';
            $this->load->view('head_view');
            $this->load->view('login_admin_view', $data);
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

        public function isAdmin()
        {
            $username = $this->session->userdata('username');
            
            if(isset($username))
            {
                $this->load->model('admin_model');   
                return $this->admin_model->isAdmin($username);    
            }
            else
            {
                return false;
            }
            
            
        }

    } // end of Login

?>