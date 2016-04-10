<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/18 10:37:57 AM
 * File     :   ajax.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

class Ajax extends CI_Controller
{

    private $_type = NULL, $_params = array(), $_table, $_bizId, $_userId, $_userName;

    public function __construct()
    {

        parent::__construct();

        $this->load->model('business/businessmodel', 'ajaxmodel', true);

        $this->load->model('business/activitiesmodel', 'activity', true);

        $this->load->library('session');
    }

    public function setUpAjax($table, $businessId, $userId, $userName)
    {

        $this->_userName = $userName;

        $this->_table = $table;

        $this->_bizId = $businessId;

        $this->_userId = $userId;

        return true;
    }

    public function parseAjaxData($data)
    {
        $this->ajaxData = $data;

        $this->_type = $data['type'];

        $this->activity->prepareBusinessActivity($this->_table, $this->_bizId);

        if ($this->_type == trim('info'))
        {
            $this->_params['key'] = $data['key'];

            $this->_params['value'] = $data['value'];

            return true;
        }

        if ($this->_type == 'account')
        {
            if ($data['key'] == 'username')
            {
                $this->_params['key'] = $data['key'];

                $this->_params['value'] = 'value';
            }

            if ($data['key'] == 'email')
            {
                $this->_params['value'] = 'value';

                $this->_params['key'] = $data['key'];
            }

            if ($data['key'] == 'password')
            {
                $this->_params['key'] = $data['key'];

                $this->_params['value_old'] = $data['value_old'];

                $this->_params['value_new'] = $data['value'];

                $this->_params['value_re'] = $data['value_re'];

                if ($this->_params['value_new'] != $this->_params['value_re'])
                {
                    return false;
                }

                //check old password
                $passRaw = $this->_params['value_old'];

                $pass = md5($passRaw . $this->config->config['global_key']);

                $passCheck = $this->ajaxmodel->login($this->_userName, $pass);

                if ($passCheck)
                {
                    $this->_params['value'] = md5($this->_params['value_new'] . $this->config->config['global_key']);

                    return true;
                }
                return false;
            }

            if ($data['key'] == 'package')
            {
                $this->_params['key'] = $data['key'];

                $this->_params['value'] = 'value';

                return true;
            }
        }

        if ($this->_type == 'category')
        {
            $this->_params['key'] = $data['key'];

            $this->_params['value'] = isset($data['value']) ? $data['value'] : NULL;

            $this->_params['action'] = $data['action'];

            $this->_params['value_old'] = isset($data['value_old']) ? $data['value_old'] : false;

            return true;
        }

        if ($this->_type == 'notifications')
        {
            return true;
        }

        if ($this->_type == 'reviews')
        {
            $this->_params['value'] = isset($data['value']) ? $data['value'] : NULL;

            $this->_params['action'] = $data['action'];

            return true;
        }

        if ($this->_type == 'activities')
        {
            return true;
        }

        if ($this->_type == 'media' || $this->_type == 'logo')
        {
            $this->_params['key'] = $data['key'];

            $this->_params['value'] = NULL;

            return true;
        }
        return false;
    }

    public function prepareActivity($action, $value = null)
    {
        $key = $this->_params['key'];

        $key = str_replace("_", " ", $key);

        $key = ucfirst($key);

        $activity = "<span class='actinguser'>" . ucfirst($this->_userName) . "</span> ";

        $activity .= $action;

        $activity .= " <span class='actingparam'> " . $key . " </span>";

        if (!is_null($value))
        {
            $activity.= " to " . "<span class='actingvalue'>" . $value . " </span>";
        }

        return $activity;
    }

    public function updateData()
    {
        if ($this->_type == 'info')
        {
            if ($this->ajaxmodel->updateBusinessInfo($this->_table, $this->_bizId, $this->_params))
            {
                $activity = $this->prepareActivity('changed', $this->_params['value']);

                $this->activity->writeActivities($activity);

                return true;
            }
            return false;
        }

        if ($this->_type == 'media' || $this->_type == 'logo')
        {
            /*
             * TODO : limit number of images to upload according to the selected package.
             */

            $user = $this->model->select('business_login', 'package', array('sno' => $this->session->userdata('userId')), NULL, 1);

            if (false == $user)
            {

                return 'You have not selected any package.';
            }

            $pkg = $this->model->select('business_packages', 'images,videos', array('sno' => $user->package), NULL, 1);

            if ($pkg == false)
            {

                return 'You have not selected any package';
            }

            $user = explode('_', $this->session->userdata('bizId'));

            $table = is_numeric($user[0]) ? 'media_numeric' : 'media_' . strtolower($user[0]);

            $image = $this->model->select($table, 'media_name', array('media_type' => strtolower($this->_type) == 'media' ? 'images' : (strtolower($this->_type) == 'video' ? 'videos' : 'logo'), 'business_id' => $user[1]));

            $images = $image != false ? count($image) : 0;

            if (strtolower($this->_type) != 'logo')
            {
                if (strtolower($this->_type) == 'media')
                {
                    $rem = $pkg->images - $images;
                }

                if (strtolower($this->_type) == 'video')
                {
                    $rem = $pkg->videos - $images;
                }
            }

            $success = 0;

            $errors = 0;

            $result = null;

            $imageUpload = $this->load->controller('upload', 'business/upload');

            if (!$imageUpload->checkFiles($_FILES))
            {
                return "No valid files are selected";
            }

            $directory = $this->_table . "_" . $this->_bizId;

            $imageUpload->createDirectory($directory);

            $data = array();

            foreach ($_FILES["images"]["error"] as $key => $error)
            {
                if (strtolower($this->_type) != 'logo')
                {
                    if ($key >= $rem)
                    {
                        $errors++;

                        continue;
                    }
                }

                if ($this->_type == 'media')
                {
                    $target_path = "assets/uploads/" . $directory . "/images/";
                }

                if ($this->_type == 'logo')
                {
                    $target_path = "assets/uploads/" . $directory . "/logo/";
                }

                if ($error == UPLOAD_ERR_OK)
                {
                    $ext = $_FILES['images']['name'][$key];

                    $ext = explode('.', $ext);

                    $ext = end($ext);

                    $name = null;

                    while (1)
                    {
                        $name = $this->getName() . '.' . $ext;

                        if (!file_exists($target_path . $name . '.' . $ext))
                        {
                            break;
                        }
                    }

                    if (move_uploaded_file($_FILES["images"]["tmp_name"][$key], $target_path . $name))
                    {
                        $data[] = $name;

                        $success++;
                    }
                } else
                {
                    $errors++;
                }
            }

            //TODO : a hole exists here
            if ($success)
            {
                if ($this->_type == 'media')
                {
                    if ($this->ajaxmodel->updateMediaInfo($this->_table, $this->_bizId, $data))
                    {
                        $result = "{$success}" . " Images uploaded.";

                        if ($errors > 0)
                        {

                            $result .= ' ' . $errors . ' images faild to upload. Probably, you may have reached your upload limit.';
                        }
                    }
                }

                if ($this->_type == 'logo')
                {
                    if ($this->ajaxmodel->updateBusinessLogo($this->_table, $this->_bizId, $name))
                    {
                        $result = "Logo Updated";
                    }
                }
            }

            if ($errors)
            {
                $result = null;

                if ($success > 0)
                {
                    $result = $success . ' images uploaded successfully.';
                }
                
                $result .= " {$errors} Images failed to upload. Refresh page to see changes. Probably, you may have reached your upload limit.";
            }

            return $result;
        }

        if ($this->_type == 'category')
        {
            $action = $this->_params['action'];

            $package = $this->ajaxmodel->getUniqueData($this->_table, $this->_bizId, 'package_id');

            if (!$package)
            {
                $message = 'This business hasn\'t adopted any Package. Please upgrade account to have full access.';
            }

            $business = $this->_table . '_' . $this->_bizId;

            $categories = $this->ajaxmodel->getUniqueData($this->_table, $this->_bizId, 'categories');

            $categories = explode('#', $categories);

            $newCats = strtolower($this->_params['value']);

            if (strlen($newCats) < 3)
            {
                return "Invalid Category name supplied.";
            }

            $testCats = explode('#', $newCats);

            if ($action == 'add')
            {
                foreach ($testCats as $n => $c)
                {
                    if (!in_array($c, $categories))
                    {
                        $categories[] = $c;
                    }
                }

                if (!$package and count($categories) > 1)
                {
                    return 'Maximum of 1 categories are allowed. Please upgrade your Package to add more Categories.';
                }

                if ($package == 1 and count($categories) > 1)
                {
                    return 'Maximum of 1 category are allowed. Please upgrade your Package to add more Categories.';
                }

                if ($package == 2 and count($categories) > 3)
                {
                    return 'Maximum of 3 categories are allowed. Please upgrade your Package to add more Categories.';
                }

                if ($package == 3 and count($categories) > 4)
                {
                    return 'The Category Limit is Full.';
                }

                $upCatsFinal = implode('#', $categories);

                $message = "Business Categories Updated.";
            }
            if ($action == 'edit')
            {
                $upCats = array();

                $valueOld = $this->_params['value_old'];

                if (!$valueOld)
                {
                    return 'An error occured.';
                }

                $valueOld = strtolower($valueOld);

                if (count($testCats) > 1)
                {
                    return 'Invalid category name.';
                }

                if ($categories)
                {
                    foreach ($categories as $key => $cat)
                    {
                        $k = strtolower($cat);

                        if ($k == $valueOld)
                        {
                            $k = $newCats;
                        }

                        $upCats[] = $k;
                    }
                }

                if (empty($upCats))
                {
                    return "Category name already exists.";
                }

                $upCatsFinal = implode('#', $upCats);

                $message = "Successfully edited a category.";
            }
            if ($action == 'del')
            {
                $upCats = array();

                if (count($testCats) > 1)
                {
                    return 'An Error Occured.';
                }

                if ($categories)
                {
                    foreach ($categories as $key => $cat)
                    {
                        $k = strtolower($cat);

                        if ($k != $newCats)
                        {
                            $upCats[] = $k;
                        }
                    }
                }

                $upCatsFinal = implode('#', $upCats);

                $message = "Category <i>{$newCats}</i> is deleted successfully.";
            }

            if ($this->ajaxmodel->updatebusinessInfo(
                            $this->_table, $this->_bizId, array('key' => 'categories', 'value' => $upCatsFinal)
                    ))
            {
                if ($action == 'add')
                {
                    if ($categories)
                    {
                        foreach ($categories as $t => $tc)
                        {
                            $uCats = $this->ajaxmodel->getUniqueCategory($tc);

                            $uBiz = array();

                            if ($uCats)
                            {
                                $uBiz = explode(',', $uCats->business_id);
                            }

                            if (!in_array($business, $uBiz))
                            {
                                $uCat = $this->ajaxmodel->uniqueCategory($tc, $business);
                            }
                        }
                    }
                }

                if ($action == 'del')
                {
                    $uCats = $this->ajaxmodel->getUniqueCategory($newCats);

                    $ucCats = explode(',', $uCats->business_id);

                    $nuCats = array();

                    foreach ($ucCats as $u => $c)
                    {
                        if ($c != $business)
                        {
                            $nuCats[] = $c;
                        }

                        $nucFinal = implode(',', $nuCats);

                        $uCat = $this->ajaxmodel->uniqueCategory($newCats, $nucFinal, TRUE);
                    }
                }
                return array('success', $message);
            }
            return 'An Error Occured. Make sure the category doesn\'t exist already';
        }

        if ($this->_type == 'account')
        {
            if ($this->ajaxmodel->updateAccountInfo($this->_table, $this->_userId, $this->_params))
            {
                if ($this->_params['key'] == 'password')
                {
                    $value = null;
                } else
                {
                    $value = $this->_params['value'];
                }

                $activity = $this->prepareActivity('changed', $value);

                $this->activity->writeActivities($activity);

                return true;
            }
            return false;
        }

        if ($this->_type == 'media')
        {
            if ($this->ajaxmodel->updateMediaInfo($this->_table, $this->_bizId, $this->_params))
            {
                return true;
            }

            return false;
        }

        if ($this->_type == 'activities')
        {
            if ($this->ajaxmodel->clearActivities($this->_table, $this->_bizId, $this->_params))
            {
                return true;
            }
            return false;
        }
        if ($this->_type == 'reviews')
        {
            if ($this->_params['action'] == 'publish')
            {
                if ($this->ajaxmodel->updateReviews($this->_table, $this->_params['value'], array('is_published' => 1)))
                {
                    return true;
                }
            }
            if ($this->_params['action'] == 'hide')
            {
                if ($this->ajaxmodel->updateReviews($this->_table, $this->_params['value'], array('is_published' => 0)))
                {
                    return true;
                }
            }
            if ($this->_params['action'] == 'delete')
            {
                if ($this->ajaxmodel->deleteReviews($this->_table, $this->_params['value']))
                {
                    return true;
                }
            }
            return "Cannot perform the requested action.";
        }

        if ($this->_type == 'notifications')
        {
            if ($this->ajaxmodel->updateNotifications($this->_table, $this->_bizId, $this->_params))
            {
                return true;
            }
            return false;
        }
        return false;
    }

    private function getName()
    {
        $chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ__01234567890__ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $default = 'grasshopit_';

        $str = $default;

        for ($i = 0; $i < 59 - strlen($default); $i++)
        {
            $str .= $chars[rand(0, strlen($chars) - 1)];
        }

        return $str;
    }

}
