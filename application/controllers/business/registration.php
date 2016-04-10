<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/11 12:57:52 PM
 * File     :   registration.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

class Registration extends CI_Controller
{

    protected $insert;

    public function __construct()
    {
        parent::__construct();
        $this->insert = array();
        $this->load->model('business/businessmodel', 'model', true);
    }

    public function register()
    {
        try
        {
            $data = $this->input->post(NULL, TRUE);

            $this->data['header'] = $this->session->userdata('header');
            $this->data['message'] = $this->session->userdata('message');

            $this->session->unset_userdata('header');
            $this->session->unset_userdata('message');


            $this->data['title'] = 'New Business Registration :: Grasshopit';

            if (empty($data))
            {
                $home = $this->load->controller('homecontroller', 'homecontroller');
                $home->_page = "register business";
                $home->loadHomeHeader('busireg');
                $step = $this->input->get('step', TRUE);
                if (empty($step))
                {
                    $this->load->view('business/form/preregister', $this->data);
                }
                if ($step == 2)
                {
                    $this->load->view('business/form/registration', $this->data);
                }
                $home->loadFooter();
            }

            //$this->start($data);
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function start($data)
    {
        try
        {

            if (isset($data['name']))
            {
                $name = $data['name'];
            } else
            {
                throw new Exception('Name of the business cannot be empty.', '900');
            }

            if (empty($name))
            {
                throw new Exception('Name of the business cannot be empty.', '900');
            }

            if (isset($data['street']))
            {
                $street = $data['street'];
            }

            if (isset($data['city']))
            {
                $city = $data['city'];
            }

            if (isset($data['state']))
            {
                $state = $data['state'];
            }

            if (isset($data['country']))
            {
                $country = $data['country'];
            }

            if (isset($data['phone']))
            {
                $phone = is_array($data['phone']) ? implode(',', $data['phone']) : $data['phone'];
            }

            if (isset($data['telephone']))
            {
                $tel = is_array($data['telephone']) ? implode(',', $data['telephone']) : $data['phone'];
            }

            if (isset($data['fax']))
            {
                $fax = is_array($data['fax']) ? implode(',', $data['fax']) : $data['fax'];
            }

            if (isset($data['postal']))
            {
                $postal = is_array($data['postal']) ? implode(',', $data['postal']) : $data['postal'];
            }

            if (isset($data['email']))
            {
                $email = is_array($data['email']) ? implode(',', $data['email']) : $data['email'];
            }

            if (!isset($data['categories']))
            {
                throw new Exception('Please select at least one category.', '900');
            }

            $cats = is_array($data['categories']) ? implode(',', $data['categories']) : $data['categories'];

            if (!isset($data['tags']))
            {
                throw new Exception('Please select at least one tag.', '900');
            }

            $tags = is_array($data['tags']) ? implode(',', $data['tags']) : $data['tags'];

            if (!isset($data['about']))
            {
                throw new Exception('Please enter something about the company.', '900');
            }

            $about = $data['about'];

            $range = $data['range'];

            $website = $data['website'];

            $by = $this->session->userdata('login_type') == false ? 0 : 1;

            $this->add('name', $name);

            if (isset($street))
            {
                if (!empty($street))
                {
                    $this->add('street', $street);
                }
            }

            if (isset($city))
            {
                if (!empty($city))
                {
                    $this->add('city', $city);
                }
            }

            if (isset($state))
            {
                if (!empty($state))
                {
                    $this->add('state', $state);
                }
            }

            if (isset($country))
            {
                if (!empty($country))
                {
                    $this->add('country', $country);
                }
            }

            if (isset($phone))
            {
                if (!empty($phone))
                {
                    $this->add('mobile', $phone);
                }
            }

            if (isset($tel))
            {
                if (!empty($tel))
                {
                    $this->add('telephone', $tel);
                }
            }

            if (isset($fax))
            {
                if (!empty($fax))
                {
                    $this->add('fax', $fax);
                }
            }

            if (isset($postal))
            {
                if (!empty($postal))
                {
                    $this->add('postal', $postal);
                }
            }

            if (isset($email))
            {
                if (!empty($email))
                {
                    $this->add('email', $email);
                }
            }

            if (!empty($cats))
            {
                $this->add('categories', $cats);
            }

            if (!empty($tags))
            {
                $this->add('tags', $tags);
            }

            if (!empty($about))
            {
                $this->add('about', $about);
            }

            if (isset($range))
            {
                if (!empty($range))
                {
                    $this->add('price_range', $range);
                }
            }

            if (isset($website))
            {
                if (!empty($website))
                {
                    $this->add('website', $website);
                }
            }

            if (isset($by))
            {
                if (!empty($by))
                {
                    $this->add('admin_added', $by == 0 ? 1 : 0);
                }
            }

            $this->add('date_added', 'NOW()');
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function add($index, $value)
    {

        if (empty($value))
        {
            return false;
        }

        $this->insert[$index] = $value;
    }

    protected function insert()
    {
        try
        {
            if (count($this->insert) == 0)
            {
                throw new Exception('Data to be inserted not found.', '900');
            }

            $registered = $this->model->register($this->insert);
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    public function entry()
    {
        try
        {
            $step = $this->input->get('step');

            $this->load->library('session');

            switch ((int) $step) {

                case 1:
                    $this->preregister();

                    break;

                case 2:
                    $pkg = $this->input->get('package', TRUE);

                    if (empty($pkg))
                    {
                        $this->register();
                    } else
                    {
                        $this->package();

                        if ($this->header == 903)
                        {
                            $this->response();
                        }
                    }
                    break;

                case 3:
                    $this->payment();

                    break;
                case 4:
                    $this->data['title'] = 'New Business Registration :: ' . DOMAIN;

                    $this->preregister();

                    break;
                default:
                    $this->register();
            }
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function payment()
    {
        try
        {
            $method = $this->input->get('method');

            if (empty($method))
            {
                $this->data['package'] = $this->input->get('package');

                $this->data['title'] = 'Payment Method';

                $this->loader->view('_layouts/header', $this->data);

                $this->loader->view('payment/selector', $this->data);

                return $this;
            }

            $this->session->set_userdata('method', strtolower($method));

            switch (strtolower($method)) {
                case 'bluepay':
                    $control = $this->load->controller('BluepayPayment', 'payment/bluepaypayment');

                    $control->index();

                    break;

                case 'paypal':
                    $this->load->library('paypal');

                    $this->paypal->data('package', $this->session->userdata('package'));

                    $this->paypal->data('amount', $this->parseAmt());

                    $this->paypal->business_pay();

                    break;
                default:
                    show_404();
            }

            return $this;
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    private function parseAmt()
    {
        return $this->pkgInfo()->price;
    }

    private function pkgInfo()
    {
        return $this->model->select('business_packages', '*', array('nickname' => $this->session->userdata('package')), NULL, 1);
    }

    protected function package()
    {
        try
        {
            $this->load->library('session');

            $package = $this->input->get('package');

            if (empty($package))
            {
                $package = $this->session->userdata('package');

                if (empty($package))
                {
                    throw new Exception('Package name cannot be empty.', '903');
                }
            }

            switch (strtolower($package)) {

                case 'founder':
                case 'adopter':
                case 'ambassador':

                    $this->header = '902';

                    $this->message = 'Package selected :: ' . ucfirst($package);

                    $this->session->set_userdata('package', strtolower($package));

                    break;
                default:
                    throw new Exception('Package selected is invalid.', '903');
            }


            $this->header('register?type=business&step=3');
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    public function response()
    {
        $this->load->library('session');

        switch ((int) $this->header) {

            case 902:
                $this->session->set_userdata('message', $this->message);

                $this->header('register/?type=business&step=2');

                break;

            case 903:
                $this->session->set_userdata('message', $this->message);

                $this->header('register/?type=business');
                break;
        }
    }

    protected function preregister()
    {
        try
        {

            $data = $this->input->post(NULL, TRUE);

            $business = isset($data['name']) ? $data['name'] : NULL;

            $email = isset($data['email']) ? $data['email'] : NULL;

            $user = isset($data['username']) ? $data['username'] : NULL;

            $pass_1 = isset($data['pass_1']) ? $data['pass_1'] : NULL;

            $pass_2 = isset($data['pass_2']) ? $data['pass_2'] : NULL;

            $category = isset($data['category']) ? $data['category'] : NULL;

            if (empty($business))
            {
                throw new Exception('Business name cannot be empty.', '900');
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

            $phone = $data['phone'];

            if (empty($phone))
            {
                throw new Exception('Please provide you phone number', '900');
            }

            $address = $data['address'];

            if (empty($address))
            {
                throw new Exception('Please provide you address.', '900');
            }

            //Check if a business associated with this email is already registered or not

            $exist = $this->model->checkPreregister($business, $email);

            if ((bool) $exist == true)
            {
                throw new Exception('Business associated with this email is already registered.', '900');
            }

            //Check if the username is taken or not
            $taken = $this->model->takenUsername($user);

            if ($taken)
            {
                throw new Exception('Username is already taken.', '900');
            }

            $this->add('name', $business);

            $this->add('username', $user);

            $this->add('password', md5($pass_1));

            $this->add('email', $email);

            if (count($this->insert) == 0)
            {
                throw new Exception('Data to be inserted is empty.', '900');
            }
            $pins = $this->model->select('business_login', 'pin');

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

            $this->add('pin', $pin);

            //$this->add('date_added', 'NOW()');

            $this->add('validated', '1');

            $insert = array();

            $insert['name'] = $business;

            $insert['telephone'] = $phone;

            $insert['address'] = $address;

            $insert['email'] = $email;

            $insert['is_published'] = 1;

            $insert['package_id'] = $this->pkgInfo()->sno;

            if ($category)
            {
                $cat_temp = explode("#", $category);

                $category = $cat_temp[0];

                $category = str_replace(" ", "-", $category);

                $insert['categories'] = $category;
            }

            $busInsId = $this->model->register($insert);

            $id = $this->db->insert_id();

            $this->session->set_userdata('bus', strtolower($business[0]));

            $this->session->set_userdata('bus_id', $id);

            if (!$busInsId)
            {
                throw new Exception('Some error encountered. Please try again.', '900');
            }

            $businessId = $business[0] . '_' . $busInsId;

            $businessId = strtolower($businessId);

            $this->add('business_id', $businessId);

            $this->add('package', $insert['package_id']);

            $entered = $this->model->preregister($this->insert);

            if (!$entered)
            {
                throw new Exception('Some error encountered. Please try again.', '900');
            }

            if ($category)
            {
                $key = strtolower($business[0]);

                $table = $key . "_" . $id;

                $this->load->model('business/businessmodel', 'category_model', true);

                $this->category_model->uniqueCategory($category, $table);
            }

            $this->session->set_userdata('business_id', md5($businessId));

            $this->session->set_userdata('business_name', $business);

            $this->header('register?type=business&step=2');
        } catch (Exception $e)
        {
            $this->header = $e->getCode();

            $this->message = $e->getMessage();

            $this->session->set_userdata('header', $this->header);

            $this->session->set_userdata('message', $this->message);

            $this->header('register/?type=business');
        }
    }

}
