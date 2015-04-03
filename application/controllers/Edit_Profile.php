<?php
    class Edit_Profile extends CI_Controller{
        public function index()
        {
            // $data['page_title'] = "CI Hello World App!";
            $username = $this->session->userdata('username');

            $this->load->model('non_admin');
            $user = $this->non_admin->getUser($username) ;
            $data['user']=$user[0];

        	$this->load->view('head_view');
            $this->load->view('navbar_view');
            $this->load->view('edit_profile_view', $data);
            $this->load->view('foot_view');
        }

        public function edit()
        {
            if(isset($_POST))
            {
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

                $data = array(
                   'nama' => $name,
                   'fakultas' => $faculty,
                   'status' => $status,
                   'domisili' => $domisili,
                   'foto' => $photo,                   
                   'jenis_kelamin' => $gender,
                   'tanggal_lahir' => $birthday,
                   'fb' => $facebook,
                   'twitter' => $twitter,
                   'line_id' =>  $line,
                   'hp' => $hp,
                   'bbm' => $bbm,
                   'wa' => $wa,
                   'email_kontak' => $mail
                );

                $username = $this->session->userdata('username');
                $this->db->where('username', $username);
                $this->db->update('non_admin', $data); 

                redirect(base_url('index.php/Profile'));

                       
            }
        }
    }
?>