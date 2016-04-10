<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/15 4:59:05 PM
 * File     :   company.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

class Users extends CI_Controller
{

    protected $data;
    protected $page;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('imageuploader');

        $this->load->library('session');
    }

    public function entry()
    {
        try
        {

            $target = $this->input->get('target');

            $action = $this->input->get('action');

            $company = $this->input->get('company');

            if ($target != '')
            {

                $this->userList($target);
            }

            if ($action != '')
            {

                $this->action($action, $company);
            }
        } catch (Exception $e)
        {

            $this->header = $e->getCode();

            $this->message = $e->getMessage();
        }
    }

    protected function userList($target)
    {
        try
        {

            if ($target == 'activeRusers')
            {

                $userType = 'regular';

                $type = 'active';
            } elseif ($target == 'inactiveRusers')
            {

                $userType = 'regular';

                $type = 'inactive';
            } elseif ($target == 'suspendedRusers')
            {

                $userType = 'regular';

                $type = 'suspended';
            } elseif ($target == 'activeBusers')
            {

                $userType = 'business';

                $type = 'active';
            } elseif ($target == 'inactiveBusers')
            {

                $userType = 'business';

                $type = 'inactive';
            } elseif ($target == 'suspendedBusers')
            {

                $userType = 'business';

                $type = 'suspended';
            }

            $list = $this->model->getUserInfo($userType, $type);

            $this->data['userType'] = $userType;

            $this->data['target'] = $type;

            $this->session->set_userdata('target', $type);


            if ($list == false)
            {

                $this->data['error'] = 'No records found.';
            } else
            {

                $page = $this->input->get('page') == false ? 1 : $this->input->get('page');

                $limit = 20;


                $this->data['pages'] = ceil(count($list) / $limit);

                $lists = array();

                for ($i = ($page - 1) * $limit; $i < $page * $limit; $i++)
                {
                    if (isset($list[$i]))
                    {
                        array_push($lists, $list[$i]);
                    }
                }

                $this->data['total'] = count($list);

                $this->data['lists'] = $lists;
            }

            $this->page = 'users';
        } catch (Exception $e)
        {

            $this->header = $e->getCode();

            $this->message = $e->getMessage();
        }
    }

    protected function action($action, $company)
    {
        try
        {

            if ($action == 'activateRusers')
            {

                $userType = 'regular';

                $type = 'active';
            } elseif ($action == 'inactivateRusers')
            {

                $userType = 'regular';

                $type = 'inactive';
            } elseif ($action == 'suspendRusers')
            {

                $userType = 'regular';

                $type = 'suspended';
            } elseif ($action == 'activateBusers')
            {

                $userType = 'business';

                $type = 'active';
            } elseif ($action == 'inactivateBusers')
            {

                $userType = 'business';

                $type = 'inactive';
            } else
            {

                $userType = 'business';

                $type = 'suspended';
            }

            $update = $this->model->updateUserInfo($userType, $type, $company);

            $posted_type = $this->session->userdata('target');

            $this->session->unset_userdata('target');


            $list = $this->model->getUserInfo($userType, $posted_type);

            $this->data['userType'] = $userType;

            $this->data['target'] = $type;

            if ($list == false)
            {

                $this->data['error'] = 'No records found.';
            } else
            {

                $page = $this->input->get('page') == false ? 1 : $this->input->get('page');

                $limit = 20;

                $this->data['pages'] = ceil(count($list) / $limit);

                $lists = array();

                for ($i = ($page - 1) * $limit; $i < $page * $limit; $i++)
                {
                    if (isset($list[$i]))
                    {
                        array_push($lists, $list[$i]);
                    }
                }

                $this->data['total'] = count($list);

                $this->data['lists'] = $lists;
            }

            $this->page = 'users';
        } catch (Exception $e)
        {

            $this->header = $e->getCode();

            $this->message = $e->getMessage();
        }
    }

}
