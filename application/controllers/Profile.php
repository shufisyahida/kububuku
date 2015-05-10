<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Profile extends CI_Controller
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

        public function cropimage()
        {
            $this->load->model('non_admin');
            $image = $this->non_admin->upload_image();  
            $res['img']= base_url()."uploads/".$image;
            $this->session->set_userdata('foto',$res['img']);           
            $this->load->view('head_view');
            $this->load->view("edit_profile_picture_view",$res);
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
                $photo = $data->foto;
                $rank_pemilik = $data->rank_pemilik;
                $rank_peminjam = $data->rank_peminjam;
                $name = $this->input->post('name');
                $faculty = $this->input->post('faculty');
                $status = $this->input->post('status');
                $domisili = $this->input->post('domisili');
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
                    'birthdayErr' => '',
                    'mailErr' => ''
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

                if($mail == '')
                {
                    $data1['mailErr'] = "Mail should not blank";
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

                    redirect(base_url('index.php/Profile/showProfile/'.$username));
                }
            }
        }

        public function editPicture()
        {
            // $data['page_title'] = "CI Hello World App!";
            $username = $this->session->userdata('username');
            $this->load->model('non_admin');
            $user = $this->non_admin->getUser($username) ;
            $data['user']=$user[0];
            $data['img']= $this->session->userdata('foto');
            //$this->session->set_userdata('foto',base_url()."uploads/".$res['img']);
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('edit_profile_picture_view', $data);
            $this->load->view('foot_view');
        }

        public function editProfile()
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
            $data->mailErr='';
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('edit_profile_view', $data);
            $this->load->view('foot_view');
        }

        public function finish()
        {
            redirect('index.php/Request_in');
        }
        
        function showProfile($username)
        {
            $Myusername = $this->session->userdata('username');
            $this->load->model('non_admin');
            $user = $this->non_admin->getUser($username);
            $this->load->model('koleksi');
             $this->load->model('wishlist_model');
            $koleksiAvailable = $this->koleksi->getKoleksiAvailable($username);
            $koleksiBorrowed = $this->koleksi->getKoleksiBorrowed($username);
            if($Myusername==$username){
                $data['MyWishlist'] = $this->wishlist_model->getAllWishlist($Myusername);
            }
            else {
                $data['nama']= $username;
                $data['OtherWishlist'] = $this->wishlist_model->getAllWishlist($username);
            }
            $bookAvailable=array();
            $bookBorrowed=array();
            
            //get Faculty
            $this->load->model('fakultas');
            $idFak = $user[0]->fakultas;
            $namaFak = $this->fakultas->getFaculty($idFak);                       
            $user[0]->fakultas = $namaFak;

            //getStatus
            $statusUser = $this->non_admin->getStatus($username);                      
            $user[0]->status = $statusUser;

            //get sex
            $jenisKelamin = $this->non_admin->getSex($username);
            $user[0]->jenis_kelamin = $jenisKelamin;

            $data['user']=$user[0];
              
            $data['koleksiBorrowed']=$koleksiBorrowed;

            $requested=array();

            foreach ($koleksiAvailable as $key => $value)
            {
                $username = $this->session->userdata('username');
                $this->load->model('pinjaman');
                $isRequested = $this->pinjaman->isRequested($username, $user[0]->username, $value->isbn);
                $requested[$key] = $isRequested;
            }          
            // $data['wishlist']=$wishlist;

            // var_dump($koleksiAvailable);
            $data['koleksiAvailable']=$koleksiAvailable;
            $data['requested']=$requested; 
            
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('profil_view', $data);
            $this->load->view('foot_view');
        }

        public function updatecropimage()
        {
            $img['imgpath']=$this->non_admin->upload_thumbnail();
            //$this->session->set_userdata('foto',base_url()."uploads/".$img['imgpath']);
            echo $img=$img['imgpath'];
        }

        public function deleteUser($username)
        {
            $this->load->model('non_admin');
            $this->non_admin->deleteUser($username);
            redirect(base_url('index.php/ManageUser'));
        }

    } // end of Profile

?>