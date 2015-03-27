<?php
    class Home extends CI_Controller{
        function index()
        {
            
            $data['page_title'] = "Kububuku | Home";
 
            $this->load->view('home_view',$data);
        }
    }
?>