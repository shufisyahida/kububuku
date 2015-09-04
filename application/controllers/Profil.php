<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Profil extends CI_Controller
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

        public function potongGambar()
        {
            $this->load->model('non_admin');
            $image = $this->non_admin->upload_image();  
            $res['img']= base_url()."uploads/".$image;
            $this->session->set_userdata('foto',$res['img']);           
            $this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view("edit_profile_picture_view",$res);
            $this->load->view('foot_view');
        }

        public function ubah()
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

<<<<<<< HEAD
                    redirect(base_url('profil/lihatProfil/'.$username));
=======
<<<<<<< HEAD
                    redirect(base_url('profil/lihatProfil/'.$username));
=======
                    redirect(base_url(''.$username));
>>>>>>> cdbdbd16cb0674ba072e4cf8f054c5356006c5ac
>>>>>>> b1ea0958e989272157a1a07999071226fdea9f93
                }
            }
        }

        public function ubahGambar()
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

        public function ubahProfile()
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

        public function selesai()
        {
            redirect('permintaan_masuk');
        }
        
        function lihatProfil($username)
        {
            // $Myusername = $this->session->userdata('username');
            $this->load->model('non_admin');
            $user = $this->non_admin->getUser($username);
            $this->load->model('koleksi_model');
            
            $koleksiAvailable = $this->koleksi_model->getKoleksiAvailable($username);
            $koleksiBorrowed = $this->koleksi_model->getKoleksiBorrowed($username);
            // if($Myusername==$username){
            //     $data['MyWishlist'] = $this->wishlist_model->getAllWishlist($Myusername);
            // }
            // else {
            //     $data['nama']= $username;
            //     $data['OtherWishlist'] = $this->wishlist_model->getAllWishlist($username);
            // }
            $this->load->model('wishlist_model');
            $wishlist = $this->wishlist_model->getAllWishlist($username);
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
            $informed=array();
            $isInCollection=array();

            foreach ($koleksiAvailable as $key => $value)
            {
                $username = $this->session->userdata('username');
                $this->load->model('pinjaman');
                $isRequested = $this->pinjaman->isRequested($username, $user[0]->username, $value->isbn);
                $requested[$key] = $isRequested;
            } 
            foreach ($wishlist as $key => $value)
            {
                $username = $this->session->userdata('username');
                $this->load->model('tanggapan_model');
                $isInformed = $this->tanggapan_model->isInTanggapan($value->id, $username);
                $informed[$key] = $isInformed;
                $isInCollection[$key] = $this->koleksi_model->isInCollection($username, $value->isbn);
            }         
            
            // var_dump($koleksiAvailable);
            $data['koleksiAvailable']=$koleksiAvailable;
            $data['requested']=$requested; 
            $data['wishlist']=$wishlist;
            $data['informed']=$informed;
            $data['isInCollection']=$isInCollection;
            
            $this->load->view('head_view');

            $username = $this->session->userdata('username');
            
            $this->load->model('admin_model');   
            $isAdmin = $this->admin_model->isAdmin($username);    
            
            
            if($isAdmin)
            {
                $this->load->view('navbar_admin_view');
            }
            else
            {
                $this->load->view('navbar_view');
            }

            $this->load->model('admin_model');   
            $isAdmin = $this->admin_model->isAdmin($username); 
            $data['isAdmin']=$isAdmin;
            
            $this->load->view('profil_view', $data);
            $this->load->view('foot_view');
        }

        public function perbaruiGambar()
        {
            $img['imgpath']=$this->non_admin->upload_thumbnail();
            //$this->session->set_userdata('foto',base_url()."uploads/".$img['imgpath']);
            echo $img=$img['imgpath'];
        }

        public function hapusPengguna($username)
        {
            $this->load->model('non_admin');
            $this->non_admin->deleteUser($username);
            redirect(base_url('kelolaUser'));
        }

    } // end of Profile

?>