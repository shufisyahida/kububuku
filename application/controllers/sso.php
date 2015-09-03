<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Sso extends CI_Controller
    {
        
        public function login()
        { 
            $hasLoggedIn=SSO\SSO::check();
            if($hasLoggedIn)
            {
                redirect(base_url('index.php/pendaftaran/langkah1'));
            } 
            else
            {
                $isMember = SSO\SSO::authenticate();
                if($isMember)
                   redirect(base_url('index.php/pendaftaran/langkah1'));
            }
        }

        public function logout()
        {
             SSO\SSO::logout();
        }

    } // end of Sso

?>