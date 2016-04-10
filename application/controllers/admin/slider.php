<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/15 4:59:05 PM
 * File     :   company.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

class Slider extends CI_Controller {

    protected $data;
    protected $page;

    public function __construct() {
        parent::__construct();
        
        $this->load->library('imageuploader');

        $this->load->model('admin/adminmodel', 'model1');
        
        $this->load->model('admin/sitemodel', 'smodel');
    }

    public function entry() {
        try {

            $target = $this->input->get('target');
            //echo $target;
            if (empty($target) || strtolower($target) == 'dashboard') {
                //Dashboard is loaded
                $this->slider_list();
                
                print_r($this->slider_list());
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

    protected function slider_list() {
        try {
            
            $list = $this->smodel->getSliderImages();
        
            if (count($list) == 0) {
            
                $this->data['error'] = 'No records found.';
                
                } 
                else {
                
                    $this->data['result'] = $list;
                    
                    }
                        
                     $this->page = 'slider';
        } catch (Exception $e) {
          
            $this->header = $e->getCode();
            
            $this->message = $e->getMessage();
        }
        
    }

    private function add()
    {
        try
        {
            $data = $this->input->post(NULL, TRUE);
            
            if (empty($data))
            {
                $this->page = 'add_slider';

                return;
            }

            $files = $_FILES;
                    
                    //echo '<pre>'; print_r($_FILES);

            if (isset($files['slider_image']))
                {
        
                    $this->imageuploader->
                            set('file', $files)->
                            set('name', 'slider_image')->
                            set('uploadType', 'multiple')->
                            set('fileType', 'image')->
                            set('root', BASEDIR)->
                            set('directory', 'assets/uploads/slider')->
                            set('minWidth', 150)->
                            set('minHeight', 150);
                }
                
                if ($this->imageuploader->upload())
                {
                
                    $uploaded = $this->imageuploader->get('fileName');
                    
                   // print_r($uploaded);
                    if (count($uploaded) > 1) {
                      
                        $upload_images = implode(',',$uploaded);
                    }
                    
                    //else $upload_images = 
                    
                    $post_data = array(
                        'title' => $data['title'],
                        
                        'description' => $data['description'],
                        
                        'image' => $upload_images
                       
                    );
                    
                    $insert = $this->model1->insert('site_sliders', $post_data);

                    if ($insert == false)
                    {
                        throw new Exception('Some error occurred while adding new post.', '900');
                    } else
                    {

                        $uri = base_url() . "superadmin?tab=slider";
                        
                        redirect($uri);
                    }
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
            
            $id = $this->input->get('slider', TRUE);

                $result = $this->smodel->removeSlider($id);
                
                if ($result) {
                
                    $this->data['success'] = 'Slider Removed Successfully.';
                    
                } 
                else {
                
                    $this->data['error'] = 'Slider could not be Removed.';
                    
                }
             

            $list = $this->smodel->getSliderImages();

            if ($list == 0) {
                
                $this->data['error'] = 'No records found.';
            } 
            else {
                
                $this->data['result'] = $list;
            }
            //if (strtolower($source) == 'options')
            
            $this->page = 'slider';
            
        } catch (Exception $e) {
          
            $this->header = $e->getCode();
            
            $this->message = $e->getMessage();
        }
        
    }
    
    
}
