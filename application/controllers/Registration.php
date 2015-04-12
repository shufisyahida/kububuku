<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Registration extends CI_Controller
    {
        
        public function step_one()
        {
            // $data['page_title'] = "CI Hello World App!";
          $data = array(
                       'username' => '',
                       'password' => '',
                       'nama' => '',
                       'email' => '',
                       'domisili' => '',
                       'fakultas' => '',
                       'jenis_kelamin' => '',
                       'status' => '',
                       'rank_pemilik' => '0',
                       'rank_peminjam' => '0',
                       'foto' => '',
                       'tanggal_lahir' => '',
                       'email_kontak' => '',
                       'fb' => '',
                       'twitter' => '',
                       'line_id' =>  '',
                       'hp' => '',
                       'bbm' => '',
                       'wa' => '',
                       'nameErr' => '',
                       'emailErr' => '',
                       'usernameErr' => '',
                       'passwordErr' => '',
                       'domisiliErr' => '',
                       'facultyErr' => '',
                       'genderErr' => '',
                       'statusErr' => '',
                       'birthdayErr' => ''
                    );
        	$this->load->view('head_view');
            $this->load->view('registration_one_view', $data);
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
                //$photo = $this->input->post('pic');
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
                       'foto' => '',
                       'tanggal_lahir' => $birthday,
                       'email_kontak' => $mail,
                       'fb' => $facebook,
                       'twitter' => $twitter,
                       'line_id' =>  $line,
                       'hp' => $hp,
                       'bbm' => $bbm,
                       'wa' => $wa,
                       'nameErr' => '',
                       'emailErr' => '',
                       'usernameErr' => '',
                       'passwordErr' => '',
                       'domisiliErr' => '',
                       'facultyErr' => '',
                       'genderErr' => '',
                       'statusErr' => '',
                       'birthdayErr' => ''
                    );

                $error = false;
                $this->load->model('non_admin');
                $emailSudahAda = $this->non_admin->emailSudahAda($email);
                $usernameSudahAda = $this->non_admin->usernameSudahAda($username);
                if ($emailSudahAda) 
                {
                  $data['emailErr'] = "Email is already in use";
                  $error = true;
                }
                if ($usernameSudahAda) 
                {
                  $data['usernameErr'] = "Username is already in use";
                  $error = true;
                }
                if($name == '')
                {
                  $data['nameErr'] = "Name should not be blank";
                  $error = true;
                }
                if($email == '')
                {
                  $data['emailErr'] = "Email should not be blank";
                  $error = true;
                }
                if($username == '')
                {
                  $data['usernameErr'] = "Username should not be blank";
                  $error = true;
                }
                if($password == '')
                {
                  $data['passwordErr'] = "Password should not be blank";
                  $error = true;
                }
                if($domisili == '')
                {
                  $data['domisiliErr'] = "Location should not be blank";
                  $error = true;
                }
                if($faculty == '')
                {
                  $data['facultyErr'] = "Faculty should not be blank";
                  $error = true;
                }
                if($gender == '')
                {
                  $data['genderErr'] = "Gender should not be blank";
                  $error = true;
                }
                if($status == '')
                {
                  $data['statusErr'] = "Status should not be blank";
                  $error = true;
                }
                if($birthday == '')
                {
                  $data['birthdayErr'] = "Birthday should not be blank";
                  $error = true;
                }
               
                if($error)
                {
                  //$data['jenis_kelamin'] = "M";
                  // $data['fakultas'] = 1;
                  $this->load->view('head_view');
                  $this->load->view('foot_view');
                  $this->load->view('registration_one_view', $data);
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
                    redirect(base_url('index.php/Registration/step_two'));

                }       
            }
            else
            {
                $this->session->set_userdata('error_login_'.$email,true);
                redirect(base_url('index.php/login'));

            }              

        }
        // public function addPhoto()
        // {
        //   if(isset($_POST))
        //   {
        //       $photo = $this->input->post('pic');
        //       $username = $this->session->userdata('username');

        //       $this->load->model('non_admin');
        //       $this->non_admin->setPhoto($username,$photo);

        //       redirect(base_url('index.php/Dashboard'));


        //   }
        //   else
        //   {
        //       $this->session->set_userdata('error_login_'.$email,true);
        //       redirect(base_url('index.php/login'));

        //   }
        }
    }
?>