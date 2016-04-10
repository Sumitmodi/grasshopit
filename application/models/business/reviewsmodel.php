<?php
/*
 * Author   :   Arjun Paudel
 * Email    :   hobo2rist@gmail.com
 * Date     :   9/5/14 4:16 PM
 * File     :   reviewsmodel.php
 * Project  :   grasshopit
 * Copyright (c) Author
 */
 class reviewsmodel extends CI_Model{
     private $_table,$_row;

     public function __construct(){
         parent::__construct();
     }

     public function prepareTable($alpha,$row){
         if(!$alpha or !$row)
             return false;
         $alpha = strtolower($alpha);
         $this->_table = 'reviews_'.$alpha;
         $this->_row = $row;
         return true;
     }
     public function getReviews(){
         $this->db->where('business_id',$this->_row)->where('is_published','1');
         $this->db->order_by('sno','DESC');
         $result = $this->db->get($this->_table)->result_object();
         foreach($result as $key=>$res){
             $result[$key]->username = $this->getUser($res->user_id);
         }
         //return $this->db->last_query();
         return $result;
     }
     public function getRating(){
         $this->db->select('rating');
         $this->db->from($this->_table);
         $this->db->where($this->_table)->where('is_published',1);
         $total = $this->db->get_sum('rating');
         if($total)
             return $total/5;
         return 0;
     }
     public function writeReview($params = array()){
         if($params['rating'] and $params['rating']<3)
             $params['is_published'] = 0;
         else
             $params['is_published']=1;
         $this->db->insert($this->_table,$params);
         return $this->db->insert_id();
     }
     public function getUser($id){
         $this->db->where('sno',$id);
         $this->db->select('name');
         return $this->db->get('app_users')->row()->name;
     }
 }