<?php
    class Edit_Profile extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $username = $this->session->userdata('username');
            if(!$this->session->userdata(''.$username))
            {
                redirect(base_url('index.php/login'));
            }
        }
        
        public function index()
        {
            // $data['page_title'] = "CI Hello World App!";
            $username = $this->session->userdata('username');

            $this->load->model('non_admin');
            $user = $this->non_admin->getUser($username) ;
            $data=$user[0];
            $data->nameErr='';
            $data->domisiliErr='';
            $data->facultyErr='';
            $data->genderErr='';
            $data->statusErr='';
            $data->birthdayErr='';       


        	 $this->load->view('head_view');
           $this->load->view('navbar_view');
           $this->load->view('edit_profile_view', $data);
           $this->load->view('foot_view');
        }

        public function edit()
        {
            if(isset($_POST))
            {
                $username = $this->session->userdata('username');

                $this->load->model('non_admin');
                $user = $this->non_admin->getUser($username) ;
                $data=$user[0];
                $password = $data->password;
                $email = $data->email;
                $rank_pemilik = $data->rank_pemilik;
                $rank_peminjam = $data->rank_peminjam;

                $name = $this->input->post('name');
                $faculty = $this->input->post('faculty');
                $status = $this->input->post('status');
                $domisili = $this->input->post('domisili');
                $photo = $this->input->post('pic');
                $gender = $this->input->post('gender');
                $birthday = $this->input->post('birth');
                $facebook = $this->input->post('facebook');
                $twitter = $this->input->post('twitter');
                $line = $this->input->post('line');
                $hp = $this->input->post('hp');
                $bbm = $this->input->post('bbm');
                $wa = $this->input->post('whatsapp');              
                $mail = $this->input->post('mail');

                $data1 = array(
                      'username' => $username,
                       'password' => $password,
                       'nama' => $name,
                       'email' => $email,
                       'domisili' => $domisili,
                       'fakultas' => $faculty,
                       'jenis_kelamin' => $gender,
                       'status' => $status,
                       'rank_pemilik' => $rank_pemilik,
                       'rank_peminjam' => $rank_peminjam,
                       'foto' => $photo,
                       'tanggal_lahir' => $birthday,
                       'email_kontak' => $mail,
                       'fb' => $facebook,
                       'twitter' => $twitter,
                       'line_id' =>  $line,
                       'hp' => $hp,
                       'bbm' => $bbm,
                       'wa' => $wa,
                       'nameErr' => '',
                       'domisiliErr' => '',
                       'facultyErr' => '',
                       'genderErr' => '',
                       'statusErr' => '',
                       'birthdayErr' => ''
                       );

                

                $error = false;
                if($name == '')
                {
                  $data1['nameErr'] = "Name should not blank";
                  $error = true;
                }
                if($domisili == '')
                {
                  $data1['domisiliErr'] = "Domisili should not blank";
                  $error = true;
                }
                if($faculty == '')
                {
                  $data1['facultyErr'] = "Faculty should not blank";
                  $error = true;
                }
                if($gender == '')
                {
                  $data1['genderErr'] = "Gender should not blank";
                  $error = true;
                }
                if($status == '')
                {
                  $data1['statusErr'] = "Status should not blank";
                  $error = true;
                }
                if($birthday == '')
                {
                  $data1['birthdayErr'] = "Birthday should not blank";
                  $error = true;
                }

                if($error)
                {
                  $this->load->view('head_view');
                  $this->load->view('navbar_view');
                  $this->load->view('edit_profile_view', $data1);
                  $this->load->view('foot_view');
                }
                else
                {
                    $data = array(
                       'nama' => $name,
                       'domisili' => $domisili,
                       'fakultas' => $faculty,
                       'jenis_kelamin' => $gender,
                       'status' => $status,
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

                    $username = $this->session->userdata('username');
                    $this->db->where('username', $username);
                    $this->db->update('non_admin', $data); 

                    redirect(base_url('index.php/Profile/profile/'.$username));

                    }   
            }
        }
    }
?>