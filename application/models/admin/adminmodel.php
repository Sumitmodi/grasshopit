<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/15 4:37:23 PM
 * File     :   adminmodel.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

class AdminModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function insert($table, $insert) {
        return $this->db->insert($table, $insert);
    }

    public function getRegisteredComapanies() {
        $this->
                db->
                select('*')->
                from('business_login')->
                order_by('date_added', 'DESC');

        $result = $this->db->get();

        return $result->result_array();
    }

    public function lastInsert() {

        return $this->db->insert_id();
    }

    public function catAdded($cat){
    
        $cat = strtolower($cat);
	
        $result = $this->db->query("select name,business_id from unique_category where LOWER(name)='{$cat}'");
	
        if($result->num_rows() == 0){
	
            return false;
	
            }
	
            return $result->row();
            
   }
   
   public function addCat($cat,$bid = false){
   
       $cat = strtolower($cat);
       
       $bid = strtolower($bid);
	
       return $this->db->query("insert into unique_category (name,business_id) values('{$cat}','{$bid}')");			
       
   }

   public function updateCat($cat,$bid = false){
   
       $cat = strtolower($cat);
       
       $bid= strtolower($bid);
	
       return $this->db->query("update unique_category set `business_id` =  concat(business_id,',{$bid}') where LOWER(name)='{$cat}'");
  	
  }

  public function updateCategory($name,$cat,$last){

      $name = strtolower($name);
      
      $cat = strtolower($cat);
	
      $cats = explode(',',$cat);
	
      foreach($cats as $c){
	
          $add = $this->catAdded($c);
	
          if(is_numeric($name[0])){
	
              $check = 'numeric_'.$last;
		
              } else {
		
                  $check = $name[0].'_'.$last;
		
                  }
		
                  $c = rtrim(ltrim($c,' '),' ');
		
                  if($add == false){
		
                      $this->addCat($c,$check);
			
                      continue;
			
                  }
			
                  $add = explode(',',$add->business_id);
		
                  if(!in_array($check,$add)){
		
                      $this->updateCat($c,$check);
			
                  }	
                  
		}
                
	}
	
    public function countAddedCompanies() {

        $this->db->start_cache();

        $count = 0;

        $res = array();

        for ($i = 97; $i <= 122; $i++) {

            $j = chr($i);

            $query = "SELECT COUNT(sno) as count FROM `business_{$j}`";

            $result = $this->db->query($query);

            $con = $result->row()->count;

            $count = $count + $con;

            $res[$j] = $con;
        }

        $this->db->stop_cache();

        $res['total'] = $count;

        return $res;
    }

    public function getCompaniesByAlpha($alpha) {
        
        if (strlen($alpha) > 1)
        
            return false;
        
        $table = 'business_' . strtolower($alpha);
        
        $result = $this->db->query("SELECT * FROM {$table} WHERE is_suspended = 0 ORDER BY date_added DESC");
        
        if ($result->num_rows() == 0)
        
            return false;
        
        return $result->result_array();
        
    }
    
    public function getCompanyInfo($alpha,$id) {
        
        if (strlen($alpha) > 1)
        
            return false;
        
        if(is_numeric($alpha)){
        
            $table = 'business_numeric';
        }
        
        else 
        
            $table = 'business_' . strtolower($alpha);
        
        //echo $table;
        
        $result = $this->db->query("SELECT * FROM {$table} WHERE sno = $id ORDER BY date_added DESC");
        
        if ($result->num_rows() == 0)
        
            return false;
        
        return $result->result_array();
    }
    
    public function getPayment($type=null) {
        
        if($type == 'received'){
        
            $type = 'R';
        }
        
        $table = 'transaction_info';
        
        $result = $this->db->query("SELECT * FROM {$table} WHERE payment_status = '$type' ORDER BY pay_time DESC");
        
        if ($result->num_rows() == 0)
        
            return false;
        
        return $result->result_array();
    }
    
    public function getUserInfo($userType = null, $type = null) {
        
        $where = null;
        
        if($userType == 'regular'){
        
            $table = 'app_users';
        }
        
        else $table = 'app_users';
        
        if($type == 'active'){
            
            $where = "WHERE status = 'A'";
        }
        
        elseif($type == 'inactive'){
            
            $where = "WHERE status = 'W'";
        }
        
        else $where = "WHERE status = 'B'";
        
        
        $result = $this->db->query("SELECT * FROM {$table} $where ORDER BY date_added DESC");
        
        if ($result->num_rows() == 0)
        
            return false;
        
        return $result->result_array();
    }

    public function getBulkUpdateAction($name) {
        
        $table = 'business_' . strtolower($name[0]);
        
        if(is_numeric($name[0])){
        
            $table =  'business_numeric';
        }
        
        $name = strtolower($name);
        
        $result = $this->db->query("SELECT sno FROM `{$table}` WHERE LOWER(name) = '{$name}' LIMIT 0,1");
        
        if ($result->num_rows() == 0)
        
            return 0;
        
        return $result->row()->sno;
    }

    public function insertBusiness($name, $data) {
        
        $table = 'business_' . strtolower($name[0]);
        
        if(is_numeric($name[0])){
        
            $table =  'business_numeric';
        }
        
        return $this->db->insert($table, $data);
    }

    public function updateBusiness($name, $data) {
        
        $table = 'business_' . strtolower($name[0]);
        
        if(is_numeric($name[0])){
        
            $table =  'business_numeric';
        }
        
        $this->db->where('name', $name);
        
        return $this->db->update($table, $data);
    }
    
    public function updateUserInfo($userType, $type, $company) {
        
        $where = null;
        
        if($userType == 'regular'){
        
            $table = 'app_users';
        }
        
        else $table = 'app_users';
        
        if($type == 'active'){
            
            $update_data = array(
                'status'=> 'A'
            );
        }
        
        elseif($type == 'inactive'){
            
            $update_data = array(
                'status'=> 'W'
            );

        }
        
        else $update_data = array(
                'status'=> 'B'
            );

        $this->db->where('md5(sno)', $company);
        
        return $this->db->update($table, $update_data);
    }

    public function publishBusiness($alpha, $id) {
        
        $table = 'business_' . strtolower($alpha);
        
        $this->db->where('MD5(sno)', $id);
        
        return $this->db->update($table, array('is_published' => 1));
    }

    public function unpublishBusiness($alpha, $id) {
        
        $table = 'business_' . strtolower($alpha);
        
        $this->db->where('MD5(sno)', $id);
        
        return $this->db->update($table, array('is_published' => 0));
    }

    public function suspendBusiness($alpha, $id) {
        
        $table = 'business_' . strtolower($alpha);
        
        $this->db->where('MD5(sno)', $id);
        
        return $this->db->update($table, array('is_suspended' => 1));
    }

    public function unsuspendBusiness($alpha, $id) {
        
        $table = 'business_' . strtolower($alpha);
        
        $this->db->where('MD5(sno)', $id);
        
        return $this->db->update($table, array('is_suspended' => 0));
    }

    public function removeBusiness($alpha, $id) {
        
        $table = 'business_' . strtolower($alpha);
        
        $this->db->where('MD5(sno)', $id);
        
        return $this->db->delete($table);
    }
    
    public function removePost($id) {
        
        $table = 'admin_post';
        
        $this->db->where('MD5(sno)', $id);
        
        return $this->db->delete($table);
    }
    
    
    public function updatePackage($alpha, $id, $package) {
        
        $table = 'business_' . strtolower($alpha);
        
        $this->db->where('MD5(sno)', $id);
        
        if ($package <= 0 || $package > 3)
        
            $package = 1;
        
        return $this->db->update($table, array('package_id' => $package));
    }

    public function getSuspendedCompanies() {        
        
        $res = array();
        
        for ($i = 97; $i <= 122; $i++) {

            $j = chr($i);
            
            $query = "SELECT sno,name FROM `business_{$j}` WHERE is_suspended = 1 ORDER BY date_added DESC";

            $result = $this->db->query($query);

            if (count($result->num_rows() > 0))
            
                foreach ($result->result_array() as $row)
                
                    $res[] = $row;
        }
        
        if(count($res) == 0)
        
            return false;
        
        return $res;
    }
    
    public function getCategory(){
        
        $query = "SELECT * FROM unique_category ORDER BY date_modified DESC";
        
        $result = $this->db->query($query);
        
        if($query){
            
            return $result->result_array();
            
        }
        
        else return false;
    }
    
    public function getPost(){
        
        $query = "SELECT * FROM admin_post ORDER BY date_added DESC";
        
        $result = $this->db->query($query);
        
        if($query){
            
            return $result->result_array();
            
        }
        
        else return false;
    }
    
}