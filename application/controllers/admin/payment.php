<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/15 4:59:05 PM
 * File     :   company.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

class Payment extends CI_Controller {

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
                $this->received();
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

    protected function received() {
        try {
            
            $list = $this->model->getPayment('received');
            
            //echo'<pre>'; print_r($list); return;
            if (count($list) == 0) {
            
                $this->data['error'] = 'No records found.';
                
                } else {
                
                    $list_array = array();
                    
                    foreach($list as $lists){
                        
                        $alpha = substr($lists['bid'], 0, 1);
                        
                        $id = substr($lists['bid'],2);
                        //echo $id."    "; //return;
                        
                        if($alpha != "" && $id !=""){
                        
                          $b_info = $this->model->getCompanyInfo($alpha, $id);
                          
                          $list_array[] = array(
                              'lists'=>$lists,
                              'b_info'=>$b_info
                          );
                    }
                        
                     else $this->data['error'] = "There is no any data in business";
                     
                        $this->data['result'] = $list_array;
                 
                        //echo'<pre>'; print_r($list_array);// return;
                        }
                        
                }
                
               
                        $this->page = '/payment';
                        
        } catch (Exception $e) {
            
            $this->header = $e->getCode();
            
            $this->message = $e->getMessage();
        }
    }

    
}
