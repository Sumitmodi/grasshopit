<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/15 12:46:10 PM
 * File     :   admin.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/adminmodel', 'model', true);
    }

    public function dashboard()
    {
        try
        {
            $this->load->library('session');

            $logged = $this->session->userdata('login_type');

            if ($logged != 'admin' && $logged != 'superadmin')
            {

                $this->header('login/?type=admin');
            }

            $this->data['base'] = BASE;

            $this->data['title'] = 'Admin :: ' . ucfirst(DOMAIN);

            $tab = $this->input->get('tab');

            if (empty($tab))
            {

                $this->data['lists'] = $this->model->getRegisteredComapanies();
            } else
            {

                $tab = strtolower($tab);

                $control = $this->load->controller(ucfirst($tab), 'admin/' . $tab);

                $control->set('model', $this->model);

                $control->entry();

                $data = $control->get('data');

                $page = $control->get('page');

                if (!empty($data))
                    foreach ($data as $key => $val)
                        $this->data[$key] = $val;
            }

            $this->load->view('admin/head-contents', $this->data);

            $this->load->view('admin/header', $this->data);

            $this->load->view('admin/menus', $this->data);

            if (empty($tab))
            {
                $this->load->view('admin/page-dashboard', $this->data);
            }

            if (!empty($page))
            {
                $this->load->view('admin/' . $page, $this->data);
            }
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    public function login()
    {
        try
        {

            $this->load->library('session');

            $logged = $this->session->userdata('login_type');

            if (!empty($logged))
            {
                $this->header('');
            }

            if ($logged == 'admin' || $logged == 'superadmin')
            {
                $this->header('superadmin');
            }

            $this->data['title'] = 'Admin Login :: ' . ucfirst(DOMAIN);

            $data = $this->input->post(NULL, TRUE);

            if (empty($data))
            {
                $home = $this->load->controller('homecontroller', 'homecontroller');
                
                $home->_page = "login";
                
                $home->loadCommonHeader('reg');
                
                $this->data['fixedFooter'] = true;
                
                $this->load->view('admin/login', $this->data);
                
                $home->loadFooter();
                
                return $this;
            }

            $username = $data['spadmin_name'];

            $password = $data['spadmin_pass'];

            if (empty($username) || empty($password))
            {
                $this->header('login?type=admin');
            }

            //TODO

            if ($username != 'damitri' && $password != 'london')
            {
                $this->data['error'] = 'Username or Password do not match.';

                $this->load->view('admin/login', $this->data);

                return $this;
            }

            $this->session->set_userdata('login_type', 'admin');

            $this->session->set_userdata('name', $username);

            $this->session->set_userdata('username', $username);

            $this->session->set_userdata('email', 'ioesandeep@gmail.com'); //currently

            $this->session->set_userdata('logged_in', true);

            $this->header('superadmin');
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    public function logout()
    {
        try
        {
            $this->load->library('session');
            
            $this->session->set_userdata('logged_in', false);
            
            $this->session->unset_userdata('login_type');
            
            $this->session->unset_userdata('name');
            
            $this->session->unset_userdata('username');
            
            $this->session->unset_userdata('email');
            
            $this->session->unset_userdata('logged_in');

            $this->session->sess_destroy();
            
            $this->header('superadmin');
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

}
