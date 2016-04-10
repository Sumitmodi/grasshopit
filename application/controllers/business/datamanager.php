<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/12 2:49:24 PM
 * File     :   datamanager.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */


class DataManager extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
    }
    
    public function enter(){
        $target = $this->input->get('target');
        if(!empty($target))
            $this->{$target}();
    }
    
    protected function info(){
        
    }
}
