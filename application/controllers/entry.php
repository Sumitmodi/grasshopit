<?php

/*
 * Author   :   Arjun Paudel
 * Email    :   hobo2rist@gmail.com
 * Date     :   9/5/14 4:15 PM
 * File     :   reviews.php
 * Project  :   grasshopit
 * Copyright (c) Author
 */

class Entry extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
    }

    /*
     * User home main
     * Application home page
     */

    public function home()
    {
        $control = $this->load->controller('Home', 'users/home');

        $control->main();
    }

    /*
     * User writes a review
     */

    public function review()
    {
        $this->control = $this->load->controller('CompanyReviews', 'reviews', 'user/reviews');

        $this->control->review();
    }

    /*
     * Registration
     */

    public function registration()
    {
        $type = $this->input->get('type');

        switch (strtolower($type)) {

            case 'business':

                $control = $this->load->controller('Registration', 'business/registration');

                $control->entry();

                break;

            case 'user':

                $control = $this->load->controller('Registration', 'users/registration');

                $control->register();

                break;

            default:
                show_404('');
        }
    }

    /*
     * Login
     */

    public function login()
    {

        $type = $this->input->get('type');

        if (!$type)
        {
            $type = "user";
        }

        switch (strtolower($type)) {

            case 'business':
                if ($this->session->userdata('logged_in'))
                {
                    if ($this->session->userdata('login_type') == "business")
                    {
                        $this->header("dashboard");
                    } else
                    {
                        $this->header("");
                    }
                }

                $control = $this->load->controller('Login', 'business/login');

                $control->enter();

                break;

            case 'admin':
                if ($this->session->userdata('logged_in'))
                {
                    if ($this->session->userdata('login_type') == "admin")
                    {
                        $this->header("dashboard");
                    } else
                    {
                        $this->header('');
                    }
                }
                $control = $this->load->controller('Admin', 'admin/admin');

                $control->login();

                break;
            case 'superadmin':
                if ($this->session->userdata('logged_in'))
                {
                    if ($this->session->userdata('login_type') == "admin")
                    {
                        $this->header("dashboard");
                    } else
                    {
                        $this->header("");
                    }
                }
                $control = $this->load->controller('Admin', 'admin/admin');

                $control->login();

                break;

            case 'user':
                if ($this->session->userdata('logged_in'))
                {
                    if ($this->session->userdata('login_type') == "user")
                    {
                        $this->header("dashboard");
                    } else
                    {
                        $this->header("");
                    }
                }
                $control = $this->load->controller('userlogin', 'users/userlogin');

                $control->enter();

                break;

            default:
                show_404('');
        }
    }

    /*
     * Dashboard
     */

    public function dashboard()
    {
        $this->load->library('session');
        
        if (!$this->session->userdata('logged_in'))
        {
            $this->header("");

            return false;
        }

        $type = $this->session->userdata('login_type');

        if ($type == "user")
        {
            //show_404();
             $this->header("");

            return false;
        }

        $type = $this->session->userdata('login_type');

        $tab = $this->input->get('tab');

        switch (strtolower($type)) {

            case 'user':
                $this->header('');

                break;

            case 'business':
                $control = $this->load->controller('Dashboard', 'business/dashboard');

                $control->generateTitle($tab);

                $control->prepare();

                $control->loadTab($tab);

                $control->footer();
                break;
            case 'admin':
                break;
        }
    }

    /*
     * Logout
     */

    public function logout()
    {
        $control = $this->load->controller('Logout', 'app/logout');

        $this->session->set_userdata('logged_in', false);

        $control->leave();
    }

    /*
     * Search
     */

    public function search()
    {
        $control = $this->load->controller('Search', 'app/search');

        $control->start();
    }

    /*
     * Admin
     */

    public function admin()
    {
        $control = $this->load->controller('Admin', 'admin/admin');

        $control->dashboard();
    }

    public function forgotPassword()
    {
        $loginType = $this->input->get('type');

        $email = $this->input->post('email');

        switch (strtolower($loginType)) {
            case 'user':
                self::forgotForm($loginType);
                break;

            case 'business':
                self::forgotForm($loginType);
                break;

            case 'admin':
                self::forgotForm();
                break;

            default:

                show_404();
        }
    }

    public function adminLogout()
    {
        $control = $this->load->controller('Admin', 'admin/admin');

        $control->logout();
    }

    private function forgotForm($loginType = null)
    {
        $this->load->model('homemodel', 'model');

        $d = $this->input->post(NULL, TRUE);

        if ($loginType == null || $loginType == 'user')
        {
            $table = 'app_users';
        } else if ($loginType == 'business')
        {
            $table = 'business_login';
        } else
        {
            $table = 'app_admin';
        }

        if (!empty($d))
        {
            $user = $this->model->select($table, 'username', array('email' => $d['email']), NULL, 1);

            if (false == $user)
            {
                $data['message'] = 'Email was not found registered on the our site.';
            } else
            {
                $data['username'] = $user->username;

                $data['loginType'] = $loginType;

                $pins = $this->model->select('app_users', 'pin');

                $exclude = array();

                foreach ($pins as $p)
                {
                    $p = (object) $p;

                    if (empty($p->pin))
                    {
                        continue;
                    }

                    $exclude[] = $p->pin;
                }

                $this->load->library('pin');

                $this->pin->excludes($exclude);

                $pin = $this->pin->generate();

                $update = $this->model->update($table, array('pin' => $pin), array('email' => $d['email']));

                if (!$update)
                {
                    $data['message'] = 'Some internal error occured. Please try later.';
                } else
                {

                    $this->load->library('mailer');

                    $fileDir = VIEWDIR . DS . 'fragments' . DS . 'mails';

                    $this->mailer->set('error', false);

                    $headers = $this->mailer->activate('headers');

                    $d['pin'] = $pin;

                    $headers->
                            to($d['email'])->
                            from('info@grasshopit.com')->
                            subject('Account Recovery')->
                            mime()->
                            charset()->
                            content()->
                            reply('do not reply')->
                            xmailer('Grasshopit Mailer')->
                            process();

                    $message = $this->mailer->activate('message');

                    $message->
                            vars($d)->
                            read($fileDir, 'recover')->
                            process();

                    $sent = $this->mailer->mail();

                    if (!$sent)
                    {
                        $data['message'] = 'Sorry we could not send recovery email this time. Please try after sometime.';
                    } else
                    {
                        $data['message'] = 'We have sent you an activation email. Please enter the activation pin in the following form below.';

                        $home = $this->load->controller('homecontroller', 'homecontroller');

                        $home->_page = "forgot";

                        $data['fixedFooter'] = true;

                        $home->loadCommonHeader('reg');

                        $data['email'] = $d['email'];

                        $this->load->view('recovery-form', $data);

                        $home->loadFooter();

                        return;
                    }
                }
            }

            $data['email'] = $d['email'];
        }

        $home = $this->load->controller('homecontroller', 'homecontroller');

        $data['fixedFooter'] = true;

        $home->loadCommonHeader('reg');

        $this->load->view('forgot-password', $data);

        $home->loadFooter();
    }

    public function recover()
    {
        $this->load->model('homemodel', 'model');

        $data = $this->input->post(NULL, TRUE);

        $home = $this->load->controller('homecontroller', 'homecontroller');

        $home->_page = "forgot";

        $data['fixedFooter'] = true;

        $home->loadCommonHeader('reg');

        if (empty($data))
        {
            $d['title'] = 'Account recovery.';

            $d['message'] = 'Please enter the pin number sent to your email in this form below.';

            $this->load->view('recovery-form', $d);

            $home->loadFooter();

            return;
        }

        $user = $this->model->select('app_users', 'username', array('pin' => $data['pin']), NULL, TRUE);

        if (false == $user)
        {
            $d['message'] = 'This pin was not found associated with any account.';
        } else
        {
            $data['username'] = $user->username;

            $updated = $this->model->update('app_users', array('pin' => '0', 'verified' => '1'), array('pin' => $data['pin']));

            if (!$updated)
            {
                $data['message'] = 'Account could not be updated. Please try later.';
            } else
            {
                $this->load->view('reset', $data);

                $home->loadFooter();

                return;
            }
        }

        $this->load->view('recover-form', $data);

        $home->loadFooter();
    }

    public function reset()
    {
        $this->load->model('homemodel', 'model');

        $postedData = $this->input->post(NULL, TRUE);

        $loginType = $postedData['loginType'];

        if ($loginType == null || $loginType == 'user')
        {
            $table = 'app_users';

            $loginType = 'user';
        } else if ($loginType == 'business')
        {
            $table = 'business_login';

            $loginType = 'business';
        }

        $home = $this->load->controller('homecontroller', 'homecontroller');

        $home->_page = "forgot";

        $data['fixedFooter'] = true;

        $home->loadCommonHeader('reg');

        $data['title'] = 'Reset Account';

        if (isset($postedData['pin']))
        {

            if ($postedData['pin'] == "")
            {
                $this->load->view('no-request');

                $home->loadFooter();

                return;
            }
        }

        if (isset($postedData['pass_1']) && isset($postedData['pass_2']))
        {
            if ($postedData['pass_1'] != $postedData['pass_2'])
            {
                $data['message'] = 'Password entered do not match.';
            } elseif (strlen($postedData['pass_1']) < 6)
            {
                $data['message'] = 'Password must be at least 6 characters';
            } else
            {
                $update = $this->model->update($table, array('password' => md5($postedData['pass_1'])), array('username' => $postedData['username']));

                if (false != $update)
                {
                    $this->session->set_userdata('message', 'Your account has been set with new password.');

                    $this->header('login?type=' . $loginType);

                    return;
                }
            }
        } else
        {

            $data['username'] = $postedData['username'];

            $data['loginType'] = $loginType;
        }

        $this->load->view('reset', $data);

        $home->loadFooter();
    }

    public function contact()
    {
        $this->control = $this->load->controller('Contact', 'app/emails');

        $this->control->email();
    }

    public function activate()
    {
        $this->control = $this->load->controller('Activate', 'app/activate');

        $this->control->enter();
    }

}
