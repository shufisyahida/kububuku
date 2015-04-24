<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Sso extends CI_Controller
    {
        
        public function login()
        { 
            $hasLoggedIn=SSO\SSO::check();
            if($hasLoggedIn)
            {
                redirect(base_url('index.php/Registration/step_one'));
            } 
            else
            {
                $isMember = SSO\SSO::authenticate();
                if($isMember)
                   redirect(base_url('index.php/Registration/step_one'));
            }
        }

        public function logout()
        {
             SSO\SSO::logout();
        }

    } // end of Sso

?>