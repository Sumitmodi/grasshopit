<?php

/*
 * Author : Sandeep Giri <ioesandeep@gmail.com>
 * 
 * Project : grasshopit 
 * 
 * File : activate.php 
 * 
 * Created : Nov 15, 2014
 */

/*
 *   <grasshopit>
 *   Copyright (C) <2014>  <Sandeep Giri>

 *   This program is free software: you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation, either version 3 of the License, or
 *   (at your option) any later version.

 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.

 *   You should have received a copy of the GNU General Public License
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.

 *   This program comes with ABSOLUTELY NO WARRANTY.
 *   This is free software, and you are welcome to redistribute it only if you 
 *   get permissions from the author or the distrubutor of this code.
 * 
 *   However do not expect any help or support from the author.
 */

class Activate extends CI_Controller
{

    public function __construct()
    {
        Parent::__construct();

        unset($this->model);

        $this->load->model('homemodel', 'model');
        
        $this->load->library('session');
    }

    public function enter()
    {
        try
        {
            $type = $this->input->get('type', true);

            if (!method_exists($this, strtolower($type)))
            {
                throw new Exception('Activation type selected is not valid.', '400');
            }

            $method = strtolower($type);

            $this->data['title'] = 'Account Activation';

            $this->$method();
        } catch (Exception $e)
        {
            show_error($e->getMessage(), $e->getCode());
        }
    }

    private function user()
    {
        try
        {
            $data = $this->input->post(NULL, TRUE);

            if (empty($data))
            {
                $control = $this->load->controller('HomeController', 'homecontroller');

                $this->data['message'] = $this->session->flashdata('message');

                $control->loadCommonHeader();

                $this->load->view('activation/pinform', $this->data);

                $control->loadFooter();

                return true;
            }

            $user = $this->session->userdata('username');

            $info = $this->model->select('app_users', '*', array('username' => $user), NULL, 1);

            if (false == $info)
            {
                throw new Exception('User does not exist.', '400');
            }

            if ($info->verified == 1)
            {
                throw new Exception('Account is already active. Your request cannot be accepted.', 400);
            }

            if ($info->pin != $data['pin'])
            {
                throw new Exception('Entered pin number is not valid.', 400);
            }

            $update = array('pin' => 0, 'verified' => '1');

            $accept = $this->model->update('app_users', $update, array('username' => $user, 'pin' => $data['pin']));

            if (!$accept)
            {
                throw new Exception('Some error occured while activating your account.', 400);
            }

            $this->session->unset_userdata('invalid');

            $this->session->unset_userdata('type');

            $this->session->unset_userdata('username');

            $this->session->unset_userdata('message');

            $this->session->set_flashdata('message', 'Account activated successfully. You are free to login.');

            $this->header('login?type=user');
        } catch (Exception $e)
        {
            $this->session->set_flashdata('message', $e->getMessage());

            $this->header('activate?type=user');
        }
    }
    
    
    private function business()
    {
        try
        {
            $data = $this->input->post(NULL, TRUE);
           
            if (empty($data))
            {
                $control = $this->load->controller('HomeController', 'homecontroller');

                $this->data['message'] = $this->session->flashdata('message');

                $control->loadCommonHeader();

                $this->load->view('activation/pinform', $this->data);

                $control->loadFooter();

                return true;
            }

            $user = $this->session->userdata('username');

            $info = $this->model->select('business_login', '*', array('username' => $user), NULL, 1);

            if (false == $info)
            {
                throw new Exception('User does not exist.', '400');
            }

            if ($info->validated == 1)
            {
                throw new Exception('Account is already active. Your request cannot be accepted.', 400);
            }

            if ($info->pin != $data['pin'])
            {
                throw new Exception('Entered pin number is not valid.', 400);
            }

            $update = array('pin' => 0, 'validated' => '1');

            $accept = $this->model->update('business_login', $update, array('username' => $user, 'pin' => $data['pin']));

            if (!$accept)
            {
                throw new Exception('Some error occured while activating your account.', 400);
            }

            $this->session->unset_userdata('invalid');

            $this->session->unset_userdata('type');

            $this->session->unset_userdata('username');

            $this->session->unset_userdata('message');

            $this->session->set_flashdata('message', 'Account activated successfully. You are free to login.');

            $this->header('login?type=business');
        } catch (Exception $e)
        {
            $this->session->set_flashdata('message', $e->getMessage());

            $this->header('activate?type=business');
        }
    }
}
