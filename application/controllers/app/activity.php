<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/19 1:16:31 PM
 * File     :   activity.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

class Activity extends CI_Controller {

    protected $user;
    protected $action;
    protected $param;
    protected $date;
    
    protected $activity;
    
    protected $table,$id;
    
    public function __construct() {
        parent::__construct();
        $this->header = '200';
        $this->load->model('business/activitiesmodel', 'writer', true);
    }        
    
    public function user($user) {
        try {
            $this->user = $user;
            return $this;
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->mesage = $e->getMessage();
        }
    }

    public function action($action) {
        try {
            $this->action = $action;
            return $this;
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->mesage = $e->getMessage();
        }
    }

    public function param($param) {
        try {
            $this->param = $param;
            return $this;
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->mesage = $e->getMessage();
        }
    }

    public function value($value) {
        try {
            $this->value = $value;
            return $this;
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->mesage = $e->getMessage();
        }
    }

    public function date() {
        try {
            $this->date = date('Y/m/d H:i:s');
            return $this;
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->mesage = $e->getMessage();
        }
    }

    public function compile() {
        try {
            $this->activity = null;

            if (empty($this->user))
                throw new Exception('Username is not defined.', '900');

            $this->activity .= '<span class="actinguser"> ' . $this->user . ' </span>';

            if (empty($this->action))
                throw new Exception('Action of activity not defined.', '900');

            $this->activity .= $this->action;

            if (!empty($this->param))
                $this->activity .= '<span class="actingparam"> ' . $this->param . ' </span>';

            if (empty($this->value))
                throw new Exception('Activity not defined.', '900');

            $this->activity .= '<span class="actingvalue"> ' . $this->value . ' </span>';

            if (!empty($this->date))
                $this->activity .= ' on ' . $this->date;
            else
                $this->activity .= ' on ' . date('Y/m/d H:i:s');
            
            $this->header = '200';
            $this->message = 'Activity has been compiled.';
            
            return $this;
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->mesage = $e->getMessage();
        }
    }
    
    public function write(){
        try{
            
            if(empty($this->activity))
                    throw new Exception('Activity has not been defined.','900');
            
            $this->writer->prepareBusinessActivity($this->table,$this->id);
            
            $written = $this->writer->writeActivities($this->activity);
            
            if(!$written)
                throw new Exception('There was some error while saving activity.','900');
            
            $this->header = '200';
            $this->message = 'Activity saved successfully.';
            
            return $this;
        }catch(Exception $e){
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }
    
    public function get($item) {
        if (isset($this->{$item}))
            return $this->{$item};
    }

}
