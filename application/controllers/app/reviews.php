<?php

/*
 * Author   :   Arjun Paudel
 * Email    :   hobo2rist@gmail.com
 * Date     :   9/5/14 4:15 PM
 * File     :   reviews.php
 * Project  :   grasshopit
 * Copyright (c) Author
 */

class Reviews extends CI_Controller
{

    private $_userId = false;
    private $_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ__01234567890__ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('business/reviewsmodel', 'rmodel', TRUE);
        $this->load->library('session');
        $this->_userId = $this->checkAuth();
    }

    public function checkAuth()
    {
        if ($this->session->userdata('logged_in') == true and $this->session->userdata('login_type') == 'user')
            return $this->session->userdata('userId');
        return false;
    }

    public function getReviews()
    {
        
    }

    public function writeReview()
    {
        /*if (!$this->getPostData('post'))
        {
            $this->header('');
        }*/

        if (!$this->_userId)
        {
            $message = "You are logged out. Please login to continue.";

            $this->session->set_flashdata('error', $message);

            $this->header('login?type=user');

            return false;
        }

        if (!$this->getPostData('comment') and ! $this->getPostData('rating') and ! $this->getFileData('file'))
        {
            $message = "You cannot post an empty review.";
        } else
        {
            $bus_id = $this->getPostData('bus-id');

            $bus_name = $this->getPostData('bus-name');

            if (!$bus_id or ! $bus_name)
            {
                $message = "There was an error while posting your review. Please try again.";

                $this->session->set_flashdata('error', $message);

                return false;
            }

            $this->rmodel->prepareTable(is_numeric($bus_name[0]) ? 'numeric' :$bus_name[0], $bus_id);

            $review = array();

            $review['user_id'] = $this->_userId;

            $review['business_id'] = $bus_id;

            $review['comment'] = $this->getPostData('comment');

            $review['rating'] = $this->getPostData('rating');
            
            //print_r($review);

            if ($this->getFileData('file'))
            {
                $upload = $this->uploadReviewFiles($bus_name[0], $bus_id);
                if ($upload['status'] == true)
                {
                    $review[$upload['type'] . "s"] = $upload['name'];
                } else
                {
                    $this->session->set_flashdata('error', $upload['message']);
                }
            }

            $status = $this->rmodel->writeReview($review);

            if ($status)
            {
                if ($review['rating'] and $review['rating'] < 3)
                {
                    $message = "Your review is pending for admin approval to be published publicly.";
                } else
                {
                    $message = "Your review has been submitted successfully.";
                }
            } else
            {
                $message = "There was an error while posting your review. Please try again.";
            }
        }

        $this->session->set_flashdata('success', $message);

        header("Location:" . $_SERVER['HTTP_REFERER'] . "#redirect");

        return $message;
    }

    public function getPostData($key)
    {
        /*if (isset($_POST[$key]))
        {
            return $_POST[$key];
        }
        return "";*/
        return $this->input->post($key,TRUE);
    }

    public function getFileData($key)
    {
        if (isset($_FILES[$key]['name']) and $_FILES[$key]['name'])
        {
            return $_FILES[$key]['name'];
        }
        return false;
    }

    public function uploadReviewFiles($alpha, $id)
    {
        $data = array();
        $data['status'] = false;
        $imageUpload = $this->load->controller('upload', 'business/upload');
        if (!$imageUpload->checkFiles($_FILES))
        {
            $data['message'] = "No valid files are selected";
        } else
        {
            $directory = $alpha . "_" . $id;
            $imageUpload->createDirectory($directory);
            $target_path = "assets/uploads/" . $directory . "/reviews/";
            if ($_FILES['file']['error'] == UPLOAD_ERR_OK)
            {
                $type = explode("/", $_FILES['file']['type']);
                if ($type[0] == 'image' or $type[0] == 'video')
                {
                    $data['type'] = $type[0];
                    $ext = $_FILES['file']['name'];
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
                    $data['name'] = $name;
                    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_path . $name))
                    {
                        $message = "File uploaded successfully.";
                        $data['status'] = true;
                    } else
                    {
                        $message = "There was an error while uploading file.";
                    }
                } else
                {
                    $message = "Your upload is invalid. Please upload only valid image or video.";
                }
            } else
            {
                $message = "There was an error while uploading file.";
            }
        }
        $data['message'] = $message;
        return $data;
    }

    private function getName()
    {
        $chars = $this->_chars;
        $default = 'grasshopit_';
        $str = $default;
        for ($i = 0; $i < 59 - strlen($default); $i++)
        {
            $str .= $chars[rand(0, strlen($chars) - 1)];
        }
        return $str;
    }

}
