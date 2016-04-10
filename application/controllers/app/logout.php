<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/11 6:39:40 PM
 * File     :   logout.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

class Logout extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function leave(){
        try{
            
            $this->load->library('session');
            
            $this->session->unset_userdata('login_type');
            
            $this->session->unset_userdata('name');
            
            $this->session->unset_userdata('email');
            
            $this->session->unset_userdata('username');

            $this->session->unset_userdata('logged_in');

            $this->session->set_userdata('logged_in',false);


            $this->header('');
            
        }catch(Exception $e){
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }
}
