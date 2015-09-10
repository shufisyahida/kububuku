<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Pendaftaran extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->library('encrypt');
            $this->load->model('non_admin');
           
          
            $username = $this->session->userdata('username');
            $hasLoggedIn = $this->session->userdata($username);

            $this->load->model('admin_model');   
            $isAdmin = $this->admin_model->isAdmin($username); 

            if(!empty($hasLoggedIn) && $hasLoggedIn)
            {
                if($isAdmin)
                    redirect(base_url('pesan'));
                else
                    redirect(base_url('permintaan_masuk'));
            }
          
        
        }
        
        public function potongGambar()
        {
            $res['img']=$this->non_admin->upload_image();  
            $this->session->set_userdata('foto',base_url()."uploads/".$res['img']);      
            $this->load->view('head_view');
            $this->load->view("registration_two_view",$res);
            $this->load->view('foot_view');             
        }
        
        public function selesai()
        {
            $username = $this->session->userdata('username');
            $this->session->set_userdata(''.$username,true);
            redirect('permintaan_masuk');
        }
    
        public function index()
        {
            $data['img']='lee.jpg';
            //$this->load->view('head_view');              
            $this->load->view('coba',$data);
        }
        
      


        

        public function daftar1()
        {
            if(isset($_POST))
            {
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $username = $this->input->post('username');                
                $password = $this->input->post('password');
                $verpassword = $this->input->post('verpassword');
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
                   'hpErr' => '',
                   'emailErr' => '',
                   'usernameErr' => '',
                   'passwordErr' => '',
                   'verpasswordErr' => '',
                   'domisiliErr' => '',
                   'mailErr' => '',
                   'facultyErr' => '',
                   'genderErr' => '',
                   'statusErr' => '',
                   'birthdayErr' => ''
                );
                $data['img']='lee.jpg'; 
                $error1 = false;
                $this->load->model('non_admin');
                $emailSudahAda = $this->non_admin->isRegisteredEmail($email);
                $usernameSudahAda = $this->non_admin->isRegisteredUsername($username);
                if ($emailSudahAda) 
                {
                    $data['emailErr'] = "Email sudah digunakan";
                    $error1 = true;
                }
                if ($usernameSudahAda) 
                {
                    $data['usernameErr'] = "Username sudah digunakan";
                    $error1 = true;
                }
                if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬\-\s]/', $username))
                {
                   //var_dump($name);
                   $data['usernameErr'] = "Username tidak boleh mengandung special character";
                    $error1 = true;
                }
                if($email == '')
                {
                    $data['emailErr'] = "Email tidak boleh kosong";
                    $error1 = true;
                }
                if($username == '')
                {
                    $data['usernameErr'] = "Username tidak boleh kosong";
                    $error1 = true;
                }
                if($password == '')
                {
                    $data['passwordErr'] = "Password tidak boleh kosong";
                    $error1 = true;
                }
                if($password != $verpassword)
                {
                    $data['verpasswordErr'] = "Password tidak sama";
                    $error1 = true;
                }
               
                if($error1)
                {
                    //$data['jenis_kelamin'] = "M";
                    // $data['fakultas'] = 1;
                    $this->load->view('head_view');
                    $this->load->view('registration_1_view', $data);
                    $this->load->view('foot_view');
                }
                else
                {

                    $this->load->view('head_view');
                    $this->load->view('registration_2_view', $data);
                    $this->load->view('foot_view');

                }                           
            }
            else
            {
                $this->session->set_userdata('error_login_'.$email,true);
                redirect(base_url('Login'));
            }              

        }

        public function daftar2()
        {
            if(isset($_POST))
            {
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $username = $this->input->post('username');                
                $password = $this->input->post('password');
                $verpassword = $this->input->post('verpassword');
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
                   'hpErr' => '',
                   'emailErr' => '',
                   'usernameErr' => '',
                   'passwordErr' => '',
                   'verpasswordErr' => '',
                   'domisiliErr' => '',
                   'mailErr' => '',
                   'facultyErr' => '',
                   'genderErr' => '',
                   'statusErr' => '',
                   'birthdayErr' => ''
                );
                $data['img']='lee.jpg'; 
                $error2 = false;
                $this->load->model('non_admin');
                $emailSudahAda = $this->non_admin->isRegisteredEmail($email);
                $usernameSudahAda = $this->non_admin->isRegisteredUsername($username);

                if($name == '')
                {
                    $data['nameErr'] = "Nama tidak boleh kosong";
                    $error2 = true;
                }
                if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬\-]/', $name))
                {
                   //var_dump($name);
                   $data['nameErr'] = "Nama tidak boleh mengandung special character";
                    $error2 = true;
                }
                if($domisili == '')
                {
                    $data['domisiliErr'] = "Domisili tidak boleh kosong";
                    $error2 = true;
                }
                if($faculty == '')
                {
                    $data['facultyErr'] = "Fakultas tidak boleh kosong";
                    $error2 = true;
                }
                if($gender == '')
                {
                    $data['genderErr'] = "Jenis kelamin tidak boleh kosong";
                    $error2 = true;
                }
                if($status == '')
                {
                    $data['statusErr'] = "Status tidak boleh kosong";
                    $error2 = true;
                }
                if($birthday == '')
                {
                    $data['birthdayErr'] = "Tanggal lahir tidak boleh kosong";
                    $error2 = true;
                }
               
                if($error2)
                {
                    //$data['jenis_kelamin'] = "M";
                    // $data['fakultas'] = 1;
                    $this->load->view('head_view');
                    $this->load->view('registration_2_view', $data);
                    $this->load->view('foot_view');
                }
                else{
                    $this->load->view('head_view');
                    $this->load->view('registration_3_view', $data);
                    $this->load->view('foot_view');
                }
            }
            else
            {
                $this->session->set_userdata('error_login_'.$email,true);
                redirect(base_url('Login'));
            }              

        }

        public function daftar3()
        {
            if(isset($_POST))
            {
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $username = $this->input->post('username');                
                $password = $this->input->post('password');
                $verpassword = $this->input->post('verpassword');
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
                   'hpErr' => '',
                   'emailErr' => '',
                   'usernameErr' => '',
                   'passwordErr' => '',
                   'verpasswordErr' => '',
                   'domisiliErr' => '',
                   'mailErr' => '',
                   'facultyErr' => '',
                   'genderErr' => '',
                   'statusErr' => '',
                   'birthdayErr' => ''
                );
                $data['img']='lee.jpg'; 
                $error3 = false;
                $this->load->model('non_admin');
                $emailSudahAda = $this->non_admin->isRegisteredEmail($email);
                $usernameSudahAda = $this->non_admin->isRegisteredUsername($username);
                
                if (!preg_match("/^[0-9]*$/", $hp))
                {
                   //var_dump($name);
                   $data['hpErr'] = "Nomor Telepon harus berbentuk angka ";
                    $error3 = true;
                }
                 if (!(strlen($hp)==10||strlen($hp)==11||strlen($hp)==12||strlen($hp)==0))
                {
                   
                   $data['hpErr'] = "Format nomor telepon salah";
                    $error3 = true;
                }
                if($mail == '')
                {
                    $data['mailErr'] = "Email tidak boleh kosong";
                    $error3 = true;
                }
               
                if($error3)
                {
                    //$data['jenis_kelamin'] = "M";
                    // $data['fakultas'] = 1;
                    $this->load->view('head_view');
                    $this->load->view('registration_3_view', $data);
                    $this->load->view('foot_view');
                }
                else
                {
                    $photo = base_url('assets/img/default-profpic.jpg');                  
                    $data = array(
                       'username' => $username,
                       'password' => md5($password),
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
                    //$this->session->set_userdata(''.$username,true);
                   
                    redirect(base_url('pendaftaran/daftar4'));
                }       
            }
            else
            {
                $this->session->set_userdata('error_login_'.$email,true);
                redirect(base_url('Login'));
            }              

        }

        public function langkah1()
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
               'hpErr' => '',
               'nameErr' => '',
               'emailErr' => '',
               'usernameErr' => '',
               'passwordErr' => '',
               'verpasswordErr' => '',
               'domisiliErr' => '',
               'mailErr' => '',
               'facultyErr' => '',
               'genderErr' => '',
               'statusErr' => '',
               'birthdayErr' => ''
            );
            $data['img']='lee.jpg'; 
            $this->load->view('head_view');
            $this->load->view('registration_1_view', $data);
            $this->load->view('foot_view');
        }

        public function daftar4()
        {
            // $data['page_title'] = "CI Hello World App!";
            $data['img']='lee.jpg';           
            $this->load->view('head_view');
            $this->load->view('registration_4_view',$data);
            $this->load->view('foot_view');
            $username = $this->session->userdata('username');
           // $this->session->set_userdata(''.$username,true);
        }

        public function perbaruiGambar()
        {
            $img['imgpath']=$this->non_admin->upload_thumbnail();
            //$this->session->set_userdata('foto',base_url()."uploads/".$img['imgpath']);
            echo $img=$img['imgpath'];
        }
    
        // public function addPhoto()
        // {
        //   if(isset($_POST))
        //   {
        //       $photo = $this->input->post('pic');
        //       $username = $this->session->userdata('username');

        //       $this->load->model('non_admin');
        //       $this->non_admin->setPhoto($username,$photo);

        //       redirect(base_url('Dashboard'));


        //   }
        //   else
        //   {
        //       $this->session->set_userdata('error_login_'.$email,true);
        //       redirect(base_url('Login'));

        //   }

        // }

    } // end of Registration

?>