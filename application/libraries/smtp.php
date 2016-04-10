<?php
/*
 * Author   :   Arjun Paudel
 * Email    :   hobo2rist@gmail.com
 * Date     :   10/15/14 5:09 PM
 * File     :   smtp.php
 * Project  :   grasshopit
 * Copyright (c) Author
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_PHPMailer {
    public function My_PHPMailer() {
        require_once('smtp/PHPMailerAutoload.php');
    }
}