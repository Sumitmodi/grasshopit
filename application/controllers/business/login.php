<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/11 5:09:22 PM
 * File     :   login.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('business/businessmodel', 'model', true);

        $this->load->library('session');
    }

    public function enter()
    {
        try
        {
            $data = $this->input->post(NULL, TRUE);

            $this->data['title'] = 'Login :: ' . DOMAIN;

            if (empty($data))
            {

                $header = $this->session->userdata('header');

                $message = $this->session->userdata('message');

                if (!empty($header) && !empty($message))
                {
                    $this->data['header'] = $header;
                    $this->data['message'] = $message;
                }

                $home = $this->load->controller('homecontroller', 'homecontroller');

                $home->_page = "login";

                $this->data['fixedFooter'] = true;

                $home->loadCommonHeader('reg');

                $this->load->view('business/form/login', $this->data);

                $home->loadFooter();

                return $this;
            }

            $user = $data['username'];

            $passRaw = $data['password'];

            $pass = md5($passRaw);

            $login = $this->model->login($user, $pass);

            if ($login == false)
            {
                throw new Exception('Username or Password is not correct.', '900');
            }

            if ((int) $login->validated == 0)
            {
                $this->session->userdata('invalid',true);
                
                $this->session->set_userdata('type','business');
                
                $this->session->set_userdata('username',$login->username);
                
                $this->session->set_flashdata('message','Business email does not seem to be verified.');
                
                $this->header('activate?type=business');
                
                return $this;
                //throw new Exception('Business email does not seem to be verified.', '903');
            }

            $this->session->set_userdata('login_type', 'business');

            $this->session->set_userdata('name', $login->name);

            $this->session->set_userdata('username', $login->username);

            $this->session->set_userdata('userId', $login->sno);

            $this->session->set_userdata('bizId', $login->business_id);

            $this->session->set_userdata('email', $login->email);

            $this->session->set_userdata('logged_in', true);

            $this->header('dashboard');
        } catch (Exception $e)
        {
            $this->header = $e->getCode();

            $this->message = $e->getMessage();

            $this->load->library('session');

            $this->session->set_userdata('header', $this->header);

            $this->session->set_userdata('message', $this->message);

            $home = $this->load->controller('homecontroller', 'homecontroller');
            
            $home->_page = "login";
            
            $home->loadCommonHeader('reg');
            
            $this->data['fixedFooter'] = true;
            
            $this->header('login/?type=business');
            
            $home->loadFooter();
        }
    }

}
