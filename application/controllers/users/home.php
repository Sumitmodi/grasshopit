<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/11 12:45:21 PM
 * File     :   home.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */


class Home extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('users/usermodel','model',true);
    }
    
    public function main(){
        try{
            
            $this->data['title'] = 'Grasshopit :: Home';

            $this->load->view('welcome_message',$this->data);
            
        }catch(Exception $e){
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }
    
}
