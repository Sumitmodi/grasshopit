<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/15 4:59:05 PM
 * File     :   company.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

class Post extends CI_Controller {

    protected $data;
    protected $page;

    public function __construct() {
        parent::__construct();
        
        $this->load->library('imageuploader');

        $this->load->model('admin/adminmodel', 'model1');
    }

    public function entry() {
        try {

            $target = $this->input->get('target');
            //echo $target;
            if (empty($target) || strtolower($target) == 'dashboard') {
                //Dashboard is loaded
                $this->post_list();
            } else {
              
                $target = strtolower($target);
                
                if (method_exists($this, $target)) {
                
                    $this->{$target}();
                    
                } else {
                    
                    show_404('company.php');
                    
                }
            }
        } catch (Exception $e) {
            
            $this->header = $e->getCode();
            
            $this->message = $e->getMessage();
        }
    }

    protected function post_list() {
        try {
            
            $list = $this->model->getPost();
        
            if (count($list) == 0) {
            
                $this->data['error'] = 'No records found.';
                
                } else {
                
                    $page = $this->input->get('page') == false ? 1: $this->input->get('page');
                    
                    $limit  = 20;
                    
                    $this->data['pages'] = ceil(count($list)/$limit);
                    
                    $lists = array();
                    
                    for($i = ($page -1)*$limit; $i<$page*$limit; $i++){
                    
                        if(isset($list[$i]))
                        {
                            array_push($lists,$list[$i]);
                        
                        }
                        
                     }
                     
                     $this->data['total']= count($list);
                     
                     $this->data['result'] = $lists;
                     
                     }
                        
                     $this->page = '/posts/posts';
        } catch (Exception $e) {
          
            $this->header = $e->getCode();
            
            $this->message = $e->getMessage();
        }
        
    }

    private function create()
    {
        try
        {
            $data = $this->input->post(NULL, TRUE);
            
            if (empty($data))
            {
                $this->page = '/posts/create';

                return;
            }

            $files = $_FILES;

            $exist = $this->model->select('admin_post', 'name', array('title' => $data['title']), NULL, '1');

            if ($exist == false)
            {
                /*
                 * Add a new category
                 */
                if (isset($files['post_image']))
                {
        
                    $this->imageuploader->
                            set('file', $files)->
                            set('name', 'post_image')->
                            set('uploadType', 'single')->
                            set('fileType', 'image')->
                            set('root', BASEDIR)->
                            set('directory', 'assets/uploads/posts')->
                            set('minWidth', 150)->
                            set('minHeight', 150);
                }
                
                if ($this->imageuploader->upload())
                {
                
                    $post_data = array(
                        'title' => $data['title'],
                        
                        'name' => $data['name'],
                        
                        'content' => $data['content'],
                        
                        'image' => $this->imageuploader->get('fileName'),
                        
                        'status' => 'B'
                    );
                    
                    $insert = $this->model1->insert('admin_post', $post_data);

                    if ($insert == false)
                    {
                        throw new Exception('Some error occurred while adding new post.', '900');
                    } else
                    {

                        $uri = base_url() . "superadmin?tab=post";
                        
                        redirect($uri);
                    }
                }
            } else
            {
              
                throw new Exception('Post <i>' . $data['name'] . '</i> already exists.', '900');
            }
        } catch (Exception $e)
        {
            
            $this->header = $e->getCode();
            
            $this->message = $e->getMessage();

            $this->page = 'admin/admin_post/create';

        }
    }

    
     protected function delete() {
        try {
            
            $source = $this->input->get('source', TRUE);

            $company = $this->input->get('company', TRUE);

            $alpha = $this->input->get('alpha', TRUE);

            if (strtolower($source) == 'options') {
            
                $result = $this->model->removePost($company);
                
                if ($result) {
                
                    $this->data['success'] = 'Business Removed Successfully.';
                    
                } 
                else {
                
                    $this->data['error'] = 'Business could not be Removed.';
                    
                }
                
            } 
            else {
                
                $this->data['error'] = 'You do not have valid previliages to perform this action.';
            }

            $list = $this->model->getPost();

            if ($list == 0) {
                
                $this->data['error'] = 'No records found.';
            } 
            else {
                
                $this->data['result'] = $list;
            }
            //if (strtolower($source) == 'options')
            
            $this->page = '/posts/posts';
            
        } catch (Exception $e) {
          
            $this->header = $e->getCode();
            
            $this->message = $e->getMessage();
        }
        
    }
    
    protected function modify() {
        try {
            
            $this->data['title'] = 'Category :: Edit';
            /*
             * Just get all the data in the post request
             */
            $data = $this->input->post(NULL, TRUE);
            
            $company = $this->input->get('company');
            
            $data1 = $this->input->post('name');

            $cat_item = array();
            
            $files = $_FILES;
            
            $post = $this->model->select('admin_post', '*', array('md5(sno)' => $company));
            
            if (empty($data))
            { //echo $id;
             
                if ($post == false)
                {
                
                    throw new Exception('Post does not exists.', '900');
                    
                }
                
                $this->data['result'] = $post;
                
                $this->page = '/posts/create';
                return;
            } 
            
            else
            {     //echo "here";
                $filename = BASEDIR . "/assets/uploads/admin/post/" . $post[0]['image'];
                //echo $filename;
                if (file_exists($filename))
                { //echo "here";
                    unlink($filename);
                }//return;
                if (isset($files['post_image']))
                {
                    $this->imageuploader->
                            set('file', $files)->
                            set('name', 'post_image')->
                            set('uploadType', 'single')->
                            set('fileType', 'image')->
                            set('root', BASEDIR)->
                            set('directory', 'assets/uploads/admin/post')->
                            set('minWidth', 150)->
                            set('minHeight', 150);

                    if ($this->imageuploader->upload())
                    {

                        $post_data = array(
                            'title' => $data['title'],
                            'name' => $data['name'],
                            'content' => $data['content'],
                            'image' => $this->imageuploader->get('fileName'),
                            'status' => 'B'
                        );
                        $post_update = $this->model->update('admin_post', $post_data, array('md5(sno)' => $company));

                        $uri = base_url() . "superadmin/?tab=post";
                        //echo $uri; return; 
                        redirect($uri);
                    }
                } else
                {
                    throw new Exception('Please select the image.', '900');
                    
                    return;
                }
            }
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    
}
