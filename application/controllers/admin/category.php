<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/15 4:59:05 PM
 * File     :   company.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

class Category extends CI_Controller {

    protected $data;
    protected $page;

    public function __construct() {
        parent::__construct();
        
        $this->load->library('imageuploader');

        //$this->load->model('common/common', 'model');
    }

    public function entry() {
        try {

            $target = $this->input->get('target');

            if (empty($target) || strtolower($target) == 'dashboard') {
                //Dashboard is loaded
                $this->category_list();
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

    protected function category_list() {
        try {
            
            $list = $this->model->getCategory();
            //echo '<pre>'; print_r($list);
//            $list;
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
                            $this->data['lists'] = $lists;
                        }
                        
                        $this->page = 'category';
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    
    protected function edit() {
        try {
            
            $id = $this->input->get('id');
            $data = $this->input->post(NULL, TRUE);
            
            $files = $_FILES;
            
            $category_info = $this->model->select('unique_category', '*', array('sno'=>$id), NULL, 1);
            if (empty($data))
            {
                if(empty($category_info)){
                    throw new Exception('Post does not exists.', '900');
                }
                
                $this->data['results'] = $category_info;
                
                $this->page = 'edit_category';
                
                
            }
            
            else {
            
                if($category_info->image != ""){
                    
                    $imagename = BASEDIR . "/assets/uploads/admin/category/images" . $category_info->image;

                    if ($imagename != "" && file_exists($imagename))
                    { 
                        echo "here";
                        
                        unlink($imagename);
                    
                    }//return;
                }
                
                if($category_info->image != ""){
                
                    $imagelogo = BASEDIR . "/assets/uploads/admin/category/logo" . $category_info->logo;
               
                    //echo $filename;
                
                    if ($imagelogo != "" && file_exists($imagelogo))
                    { //echo "here";
                   
                        unlink($imagelogo);
                
                    }
                }
                if (isset($files['image']))
                {
                    $this->imageuploader->
                            set('file', $files)->
                            set('name', 'image')->
                            set('uploadType', 'single')->
                            set('fileType', 'image')->
                            set('root', BASEDIR)->
                            set('directory', 'assets/uploads/admin/category/images')->
                            set('minWidth', 150)->
                            set('minHeight', 150);

                    $image_upload = $this->imageuploader->upload();
                    $imageFile = $this->imageuploader->get('fileName');
                }
                
                if (isset($files['logo']))
                {
                    $this->imageuploader->
                            set('file', $files)->
                            set('name', 'logo')->
                            set('uploadType', 'single')->
                            set('fileType', 'image')->
                            set('root', BASEDIR)->
                            set('directory', 'assets/uploads/admin/category/logo')->
                            set('minWidth', 150)->
                            set('minHeight', 150);

                    $logo_upload = $this->imageuploader->upload();
                    $logoFile = $this->imageuploader->get('fileName');                    
                }
                
                if($image_upload && $logo_upload){

                        $post_data = array(
                            'name'=>$data['name'],
                            'image'=>$imageFile,
                            'logo'=>$logoFile,
                            'icon_class'=>$data['class']
                        );
                        $post_update = $this->model->update('unique_category', $post_data, array('sno' => $id));

                        $uri = base_url() . "superadmin/?tab=category";
                        //echo $uri; return; 
                        redirect($uri);
                    }
                else
                {
                    throw new Exception('Please select the image.', '900');
                    $this->data['result'] = $post;
                    $this->page = 'edit_category';
                    
                    return;
                }
            }
            
            
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    
}
