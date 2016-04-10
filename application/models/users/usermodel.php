<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/11 7:04:46 PM
 * File     :   usermodel.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

class UserModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function takenEmail($email) {
        $result = $this->db->query("SELECT * FROM app_users WHERE email = '{$email}' LIMIT 0,1");
        if ($result->num_rows() > 0)
            return true;
        return false;
    }

    public function takenUsername($username) {
        $result = $this->db->query("SELECT * FROM app_users WHERE username = '{$username}' LIMIT 0,1");
        if ($result->num_rows() > 0) {
            return true;
        }
        return false;
    }

    public function register($insert) {
        if (!is_array($insert) or empty($insert))
            return false;
        return $this->db->insert('app_users', $insert);
    }

    public function login($user, $pass) {
        $result = $this->db->query("SELECT * FROM app_users WHERE username = '{$user}' and password = '{$pass}'");
        if ($result->num_rows() == 0) {
            $result = $this->db->query("SELECT * FROM app_users WHERE email = '{$user}' and password = '{$pass}'");
            if ($result->num_rows() == 0)
                return false;
        }
        return $result->row();
    }

    public function addProfilePicture() {
        
    }

    public function changeProfilePicture() {
        
    }

    public function writeReview($businessId) {
        $review = $this->input->post('');
    }

    public function uploadImage($businessId) {
        
    }

    public function insert($table, $data) {
        return $this->db->insert($table, $data);
    }

}
