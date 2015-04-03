<?php
    class Registration extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $username = $this->session->userdata('username');
            if(!$this->session->userdata(''.$username))
            {
                redirect(base_url('index.php/login'));
            }
        }
        
        public function step_one()
        {
            // $data['page_title'] = "CI Hello World App!";
        	$this->load->view('head_view');
            $this->load->view('registration_one_view');
            $this->load->view('foot_view');
        }

        public function step_two()
        {
            // $data['page_title'] = "CI Hello World App!";
        	$this->load->view('head_view');
            $this->load->view('registration_two_view');
            $this->load->view('foot_view');
        }

        public function register()
        {
            if(isset($_POST))
            {
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $username = $this->input->post('username');
                $password = $this->input->post('password'); 
                $photo = $this->input->post('pic');
                $gender = $this->input->post('gender');
                $faculty = $this->input->post('faculty');
                $domisili = $this->input->post('domisili');
                $status = $this->input->post('status');
                $birthday = $this->input->post('birth');
                $facebook = $this->input->post('facebook');
                $hp = $this->input->post('hp');
                $line = $this->input->post('line');
                $twitter = $this->input->post('twitter');
                $wa = $this->input->post('whatsapp');
                $bbm = $this->input->post('bbm');
                $mail = $this->input->post('mail');


                $this->load->model('non_admin');
                $sudahAda = $this->non_admin->sudahAda($email,$username);
                


                if ($sudahAda) 
                {
                    echo "username atau email sudah digunakan";
                }   
                else
                {
                    $data = array(
                       'username' => $username,
                       'password' => $password,
                       'nama' => $name,
                       'email' => $email,
                       'domisili' => $domisili,
                       'fakultas' => $faculty,
                       'jenis_kelamin' => $gender,
                       'status' => $status,
                       'rank_pemilik' => '0',
                       'rank_peminjam' => '0',
                       'foto' => $photo,
                       'tanggal_lahir' => $birthday,
                       'email_kontak' => $mail,
                       'fb' => $facebook,
                       'twitter' => $twitter,
                       'line_id' =>  $line,
                       'hp' => $hp,
                       'bbm' => $bbm,
                       'wa' => $wa
                    );
                    $this->load->model('non_admin');
                    $this->non_admin->createUser($data);

                    $this->session->set_userdata('username',$username);
                    $this->session->set_userdata(''.$username,true);
                    redirect(base_url('index.php/Dashboard'));

                }       
            }
            // else
            // {
                // $this->session->set_userdata('error_login_'.$email,true);
                // redirect(base_url('index.php/login'));

            // }
                

        }
    }
?>