<?php
/*
 * Author   :   Arjun Paudel
 * Email    :   hobo2rist@gmail.com
 * Date     :   10/15/14 5:11 PM
 * File     :   MY_Smtp.php
 * Project  :   grasshopit
 * Copyright (c) Author
 */
class My_Controller extends Controller {
    public function My_Controller(){
        parent::Controller();
        $this->load->library('My_PHPMailer');
    }
    function sendEmail(){
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->Mailer = 'smtp';
        $mail->SMTPDebug = 1;
        $mail->Port = '465';
        $mail->From = "arjun10c@hotmail.com";
        $mail->FromName = "Arjun";

        $mail->Username = "arjun10c@hotmail.com";
        $mail->Password = "";
        $mail->Subject = "Hello";
        $mail->Body = "Sent from PHPMailer";
        $mail->AltBody = "Sent from PHPMailer";
        $mail->addAddress("sinuna.chaudhary@gmail.com","sinuna");

        if($mail->send()){
            //print_r($mail);
            $mail->clearAddresses();
            return true;
        } else {
            //print_r($mail);
            $mail->clearAddresses();
            return false;
        }
    }

}
