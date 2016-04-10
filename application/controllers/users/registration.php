<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/11 6:55:16 PM
 * File     :   registration.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

class Registration extends CI_Controller
{

    private $data;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users/usermodel', 'model', true);
    }

    public function register()
    {
        try
        {

            $data = $this->input->post(NULL, TRUE);

            $this->data['title'] = 'New User Registration :: ' . DOMAIN;

            $this->load->library('session');

            $logged = $this->session->userdata('login_type');

            if (!empty($logged))
            {
                $this->header('');

                return $this;
            }

            if (empty($data))
            {

                $header = $this->session->userdata('header');

                $message = $this->session->userdata('message');

                if (!empty($header) && !empty($message))
                {

                    $this->data['header'] = $header;

                    $this->data['message'] = $message;
                }

                $this->session->unset_userdata('header');

                $this->session->unset_userdata('message');

                $home = $this->load->controller('homecontroller', 'homecontroller');

                $home->loadCommonHeader('reg');

                $this->load->view('users/form/registration', $this->data);

                $home->loadHomeFooter();

                return $this;
            }

            $name = isset($data['name']) ? $data['name'] : NULL;

            $email = isset($data['email']) ? $data['email'] : NULL;

            $user = isset($data['username']) ? $data['username'] : NULL;

            $pass_1 = isset($data['pass_1']) ? $data['pass_1'] : NULL;

            $pass_2 = isset($data['pass_2']) ? $data['pass_2'] : NULL;

            if (empty($name))
            {
                throw new Exception('Name cannot be empty.', '900');
            }

            if (empty($user))
            {
                throw new Exception('Username cannot be empty.', '900');
            }

            if (empty($email))
            {
                throw new Exception('Email cannot be empty.', '900');
            }

            if (empty($pass_1) || empty($pass_2))
            {
                throw new Exception('Passwords cannot be empty.', '900');
            }

            if ($pass_1 != $pass_2)
            {
                throw new Exception('Passwords do not match.', '900');
            }

            if (strlen($pass_1) < 6)
            {
                throw new Exception('Password length must be at least 6 characters.', '900');
            }

            //Check if a user associated with this email is already registered or not
            $exist = $this->model->takenEmail($email);

            if ((bool) $exist == true)
            {
                throw new Exception('User with this email is already registered.' . $test, '900');
            }

            //Check if the username is taken or not
            $taken = $this->model->takenUsername($user);

            if ($taken)
            {
                throw new Exception('Username is already taken.', '900');
            }
            
            $pins = $this->model->select('app_users','pin');
            
            $exclude = array();
            
            if(false != $pins)
            {
                foreach($pins as $p)
                {
                    $exclude[] = $p['pin'];
                }
            }
            
            $this->load->library('pin');
            
            $this->pin->excludes($exclude);
            
            $pin = $this->pin->generate();

            $insert = array(
                'name' => $name,
                'username' => $user,
                'password' => md5($pass_1),
                'email' => $email,
                'pin' => $pin
            );

            //Now we can register the user
            $done = $this->model->register($insert);

            if (!$done)
            {
                throw new Exception('User could not be registered.', '900');
            }

            $this->header = 200;
            $this->message = 'You have been registered successfully.';

            $this->session->set_userdata('header', $this->header);
            $this->session->set_userdata('message', $this->message);

            $this->header('login/?type=user');
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();

            $this->load->library('session');

            $this->session->set_userdata('header', $this->header);
            $this->session->set_userdata('message', $this->message);

            $this->header('register?type=user');
        }
    }

}
