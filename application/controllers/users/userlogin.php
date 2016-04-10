<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/11 5:09:22 PM
 * File     :   login.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

class userlogin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users/usermodel', 'umodel', true);
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
                
                $this->data['fixedFooter'] = true;
                
                $home->_page = 'login';

                $home->loadCommonHeader('reg');

                $this->load->view('users/form/login', $this->data);

                $home->loadFooter();

                return $this;
            }

            $user = $data['username'];

            $passRaw = $data['password'];

            $pass = md5($passRaw);

            $login = $this->umodel->login($user, $pass);

            if ($login == false)
            {
                throw new Exception('Username or Password is not correct.', '900');
            }

            if ((int) $login->verified == 0)
            {
                //throw new Exception('Your email does not seem to be verified.', '903');
            }

            $this->session->set_userdata('login_type', 'user');

            $this->session->set_userdata('name', $login->name);

            $this->session->set_userdata('username', $login->username);

            $this->session->set_userdata('userId', $login->sno);

            $this->session->set_userdata('email', $login->email);

            $this->session->set_userdata('logged_in', true);

            redirect($_SERVER['HTTP_REFERER']);
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();

            $this->data['header'] = $this->header;
            $this->data['message'] = $this->message;

            $home = $this->load->controller('homecontroller', 'homecontroller');
            $home->_page = "login";
            $this->data['fixedFooter'] = true;

            $home->loadCommonHeader('reg');

            $this->load->view('users/form/login', $this->data);

            //$home->loadFooter();

            return $this;
        }
    }

}
