<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/11 1:18:27 PM
 * File     :   registermodel.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */


class BusinessModel extends CI_Model{
    
    
    public function __construct() {
        parent::__construct();
    }
    
    public function register($insert){
        
        $table = strtolower($insert['name'][0]);
        
        $table = 'business_'.$table;
        
        $inserted = $this->db->insert($table,$insert);
        
        return $inserted;
    }
    
    public function preregister($insert){
        
        return $this->db->insert('business_login',$insert);
    }
    
    public function checkPreregister($name,$email){
        $result = $this->db->query("SELECT pin FROM business_login WHERE name = '{$name}' and email = '{$email}'");
        if($result->num_rows() == 0)
            return false;
        return $result->row()->pin;
    }
    
    public function takenUsername($user){
        $result = $this->db->query("SELECT * FROM business_login WHERE username = '{$user}'");
        if($result->num_rows() > 0)
            return true;
        return false;
    }
    
    public function login($user,$pass){
        $result = $this->db->query("SELECT * FROM business_login WHERE username = '{$user}' and password = '{$pass}'");
        if($result->num_rows() == 0)
            return false;
        return $result->row();
    }
    
}
