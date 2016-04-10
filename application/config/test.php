<?php

class Dashboard extends CI_Controller {

    private $_bizIndex, $_userId, $_table, $_businessId, $_username;
    private $title = "Dashboard";

    public function __construct() {
        echo "Test 2 <br/>";
        parent::__construct();

        $this->load->library('session');
        $this->load->model('business/businessmodel', 'model', true);
        $this->load->model('business/activitiesmodel', 'activity', true);

        $this->_userId = $this->session->userdata('userId');
        $this->_bizIndex = $this->session->userdata('bizId');
        $this->_username = $this->session->userdata('username');
        $this->_email = $this->session->userdata('email');

        if (!empty($this->_bizIndex) or ($this->_bizIndex) == "") {
            $bizIndex = explode("_", $this->_bizIndex);
            if (!empty($bizIndex)) {
                $this->_table = $bizIndex[0];
                $this->_businessId = $bizIndex[1];
            }
        }

    }

    //Creating HTML title for each tab
    public function generateTitle($tab = null) {
        if ($tab != null or $tab != '') {
            $this->title = ucfirst($tab) . " :: " . ucfirst($this->session->userdata('username')) . " - " . ucfirst(DOMAIN);
        }
    }

    //preparing and displaying the business dashboard
    public function prepare() {
        try {
            $this->data['username'] = $this->session->userdata('username');

            $this->data['email'] = $this->session->userdata('email');

            $this->data['name'] = $this->session->userdata('name');

            $this->data['login_type'] = $this->session->userdata('login_type');

            $this->data['title'] = $this->title;

            $basicParams = $this->model->getBusinessInfo($this->_table, $this->_businessId);

            $this->data['bizName'] = $basicParams->name;
            $this->data['status'] = $basicParams->is_suspended;
            $this->data['published'] = $basicParams->is_published;
            $this->data['regDate'] = $basicParams->date_added;

            $this->load->view('business/dashboard', $this->data);
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    //Loading the tab contents at page center
    public function loadTab($tab=home) {
        if ($tab != null or $tab != '') {
            $tabExistence = method_exists($this, $tab);
            if ($tabExistence) {
                $this->{$tab}();
            } else {
                $this->invalidTab();
            }
        }
    }

    //loading footer
    public function footer() {
        $this->load->view('business/dash_footer');
    }

    //following are the tab controllers
    public function dashboard() {

    }

    public function dataManager() {
        try {

            if (method_exists($this, 'info'))
                $this->info();
            else
                show_404();
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    public function info() {
        $this->data['title'] = $this->title;
        $data['info'] = $this->model->getBusinessInfo($this->_table, $this->_businessId);
        $this->load->view('business/dashboard/info', $data);
    }

    public function logo() {
        try {

            $this->data['title'] = $this->title;

            $table = $this->_table;

            $bid = $this->_businessId;

            $this->data['table'] = $table;

            $this->data['bid'] = $bid;
            $this->data['logo'] = $this->model->getBusinessLogo($table, $bid);

            $this->load->view('business/dashboard/logo', $this->data);
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    public function images() {
        try {

            $this->data['title'] = $this->title;

            $table = $this->_table;

            $bid = $this->_businessId;

            $this->data['table'] = $table;

            $this->data['bid'] = $bid;

            $this->data['images'] = $this->model->getBusinessImages($table, $bid);

            $this->load->view('business/dashboard/images', $this->data);
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    public function videos() {
        try {

            $this->data['title'] = $this->title;

            $biz = $this->_businessId;

            $child = $this->model->getChildTableRowNo($biz);

            if ($child != false) {
                $child = explode('_', $child);
                $this->data['table'] = $table = $child[0];
                $this->data['bid'] = $bid = $child[1];
                $videos = $this->model->getBusinessVideos($table, $bid);
                if ($videos == false)
                    $this->data['videos'] = $videos;
            }

            $this->load->view('business/dashboard/videos', $this->data);
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    public function account() {
        try {
            $this->data['title'] = $this->title;

            $bid = $this->_businessId;

            $data = $this->model->getAccountInfo($bid);

            if ($data != false)
                $this->data['accounts'] = $data;

            $this->load->view('business/dashboard/account', $this->data);
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    public function finance() {
        try {

            $this->data['title'] = $this->title;
            $data['finance'] = ''; //$this->model->getUniqueData($this->_table,$this->_businessId,'finance');
            $this->load->view('business/dashboard/finance', $data);
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    public function package() {
        try {

            $this->data['title'] = $this->title;

            $bid = $this->_businessId;

            $package = $this->model->getBusinessPackage($bid);

            if ($package != false) {
                switch ((int) $package) {
                    case 1:
                        $this->data['package'] = 'Founder';
                        break;
                    case 2:
                        $this->data['package'] = 'Adopter';
                        break;
                    case 3:
                        $this->data['package'] = 'Ambassador';
                        break;
                }
            }

            $this->load->view('business/dashboard/package', $this->data);
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    public function email() {
        try {

            $data = $this->input->post(NULL, TRUE);

            $ajax = $this->input->is_ajax_request();

            $this->load->library('session');

            if ($ajax) {

                if (empty($data))
                    throw new Exception('Enough data has not been supplied.', '900');

                $email = isset($data['email']) ? $data['email'] : NULL;

                $pass = isset($data['password']) ? $data['password'] : NULL;

                if (empty($email))
                    throw new Exception('Email field cannot be empty.', '900');

                if (empty($pass))
                    throw new Exception('Password cannot be empty.');

                if ($email == $this->session->userdata('email'))
                    throw new Exception('Current email cannot be supplied.', '900');

                $this->load->helper('email');

                $valid = valid_email($email);

                if (!$valid)
                    throw new Exception('Email supplied is not valid.', '900');

                $match = $this->model->verifyPassword($this->session->userdata('userId'), $pass);

                if ($match == false)
                    throw new Exception('Password did not match with the existing password.', '900');

                $pin = $this->generatePin();

                $update = array(
                    'email' => $email,
                    'pin' => $pin,
                    'verified' => '0',
                );

                $update = $this->model->updateBusiness($sno, $pass, $update);

                if (!$update)
                    throw new Exception('Email could not be updated. Please try later.', '900');

                $user = $this->session->userdate('username');

                $file = APPPATH . 'views' . DS . 'fragments' . DS . 'mails' . DS . 'emailchange.php';

                if (!file_exists($file)) {
                    //admin need to be notified that mail responding file is missin
                    throw new Exception('Could not send email now. Please try later.');
                }

                ob_start();
                @require_once $file;
                $message = ob_get_contents();
                ob_end_clean();

                $this->load->library('email');

                $this->email->from('support@grasshopit.com', 'Grasshopit :: Support');
                $this->email->to($email);
                $this->email->subject('Grasshopit :: Email Verficationa');
                $this->email->message($message);

                $sent = $this->email->send();

                if (!$sent)
                    throw new Exception('Email has been changed but a verification email could not be sent. It will be sent next time you login.', '900');

                //Notify the admin here, that a user has attempted to change his/her business email

                $this->header = '200';
                $this->message = 'Email has been changed but it needs to be verified. Please check your email.';
                $this->ajaxResponse();
                exit;
            } else {

                $this->data['title'] = $this->title;

                $data['email'] = $this->session->userdata('email');

                $this->load->view('business/dashboard/email', $data);
            }
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
            $this->ajaxResponse();
            exit;
        }
    }

    public function username() {
        try {

            $this->load->library('session');

            if (empty($this->session->userdata('userId')))
                header('login?type=business');

            if ($this->session->userdata('login_type') == 'user')
                header('');

            $ajax = $this->input->is_ajax_request();

            if (!$ajax) {
                $this->data['title'] = $this->title;
                $this->load->view('business/dashboard/username');
                return $this;
            } else {

                if (empty($this->session->userdata('userId')))
                    exit;

                if ($this->session->userdata('login_type') == 'user')
                    exit;

                $data = $this->input->post(NULL, TRUE);

                $action = $data['action'];

                $action = strtolower($action);

                if ($action == 'check') {
                    $now = $data['ignore'];

                    $new = $data['username'];

                    $taken = $this->model->checkAvailability($new, $now);

                    if ($taken) {
                        echo 'Username already taken.';
                    } else {
                        echo 'Username is available.';
                    }
                    exit;
                }

                if ($action == 'change') {

                    $now = $this->session->userdata('username');

                    $new = $data['username'];

                    $taken = $this->model->checkAvailability($new, $now);

                    if ($taken) {
                        echo 'Username is already in use.';
                        exit;
                    }

                    $uid = $this->session->userdata('userId');

                    $pass = $this->input->post('password', TRUE);

                    $match = $this->model->verifyPassword($uid, $pass);

                    if ($match == false) {
                        echo 'Password did not match with the existing password.';
                        exit;
                    }

                    $changed = $this->model->changeUsername($uid, $new);

                    if ($changed) {
                        $activity = $this->load->controller('Activity', 'app/activity');
                        $activity->set('table', strtolower($this->_table))->
                            set('id', $uid);
                        $activity->
                            user($this->_username)->
                            action('changed')->
                            param('username to')->
                            value($new)->
                            date()->
                            compile();
                        if ((int) $activity->get('header') == 200)
                            $activity->write();
                        echo 'Username successfully changed to :: ' . $new . '. It will take effect next time you login.';
                    } else {
                        echo 'There was some error while updating the username. Please try later.';
                    }
                    exit;
                }
                exit;
            }
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    public function password() {
        $this->data['title'] = $this->title;
        $data['logo'] = ''; //$this->model->getUniqueData($this->_table,$this->_businessId,'logo',false);
        $this->load->view('business/dashboard/password', $data);
    }

    public function notifications() {
        $this->data['title'] = $this->title;
        $data['notifications'] = ''; //$this->model->getUniqueData($this->_table,$this->_businessId,'notifications',false);
        $this->load->view('business/dashboard/notifications', $data);
    }
    public function categories(){
        $this->data['title'] = $this->title;
        $data['categories'] = $this->model->getUniqueData($this->_table,$this->_businessId,'categories');
        $this->load->view('business/dashboard/category', $data);

    }

    public function reviews() {
        try {
            $this->data['title'] = $this->title;

            $bid = $this->_businessId;

            $child = $this->model->getChildTableRowNo($bid);

            if ($child != false) {

                $child = explode('_', $child);

                $table = $child[0];

                $biz = $child[1];

                $reviews = $this->model->getBusinessReviews($table, $biz);

                if ($reviews != false) {

                    foreach ($reviews as $k => $r) {
                        $user = (int) $r['user_id'];
                        $user_info = $this->model->getUserInfo($user);
                        if ($user_info == false)
                            continue;
                        $name = $user_info['name'];

                        $username = $user_info['username'];

                        $reviews[$k][$r]['username'] = $username;

                        $reivews[$k][$r]['name'] = $name;
                    }

                    $this->data['reviews'] = $reviews;
                }
            }
            $this->load->view('business/dashboard/reviews', $this->data);
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    public function activities() {
        $this->load->model('business/activitiesmodel', 'activity', true);
        $this->data['title'] = $this->title;
        $this->activity->prepareBusinessActivity($this->_table, $this->_businessId);
        $data['activities'] = $this->activity->readActivities();
        $this->load->view('business/dashboard/activities', $data);
    }

    public function invalidTab() {
        $this->data['title'] = $this->title;
        $this->load->view('invalid_tab');
    }

    //handling ajax requests
    public function ajax() {
        if(!$this->session->userdata('logged_in') or $this->session->userdata('login_type')!='business'){
            echo 'Illegal Attempt';
            return false;
        }
        $incoming = $this->input->post(NULL, TRUE);
        $ajax = $this->load->controller('Ajax', 'business/ajax');
        if ($ajax->setUpAjax($this->_table, $this->_businessId, $this->_userId, $this->_username)) {
            if ($ajax->parseAjaxData($incoming)) {
                $data = $ajax->updateData();
                if(is_array($data)){
                    echo json_encode($data);
                    return true;
                }
                if (gettype($data) != 'boolean') {
                    echo json_encode($data);
                } else {
                    echo json_encode('success');
                }
                return true;
            }
            echo json_encode('Error 500');
            return false;
        }
        echo json_encode('Error 400');
        return false;
    }

    /*
     * Random Pin number generator
     */

    private function generatePin() {
        $min = '111111';
        $max = '999999';
        return (int) rand($min, $max);
    }

    /*
     * Ajax responsder
     */

    private function ajaxResponse() {
        $header = (int) $this->header;
        if ($header == 200) {
            //echo "<p class='success'>{$this->message} :: Reload you page to see effect.</p>";
        } else {
            //echo "<p class='error'>{$this->message}</p>";
        }
    }

}