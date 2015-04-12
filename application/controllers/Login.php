<?php
    class Login extends CI_Controller{
        public function index()
        {
        	$username = $this->session->userdata('username');
          $loggedin = $this->session->userdata(''.$username);
          // $email = $this->session->userdata('email');
           
           if($loggedin)
           {
           		// redirect(base_url('index.php/Dashboard'));
              redirect(base_url('index.php/Request_in'));
           }
           else
           {
              $this->load->view('head_view');
            	$this->load->view('login_view');
            	$this->load->view('foot_view');
           }
           // elseif ($this->session->set_userdata('error_login_'.$email,true)) {
           //    redirect(base_url('index.php/login'));
           // }        	
        }

        public function login_failed()
        {
          $this->load->view('head_view');
          $this->load->view('login_view');
          $this->load->view('foot_view');
          echo '
            <div class="container">
              <div id="cp-login" class="card-panel red white-text">
                Login failed. Try again!
              </div>
            </div>
          ';
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
    }
?>