<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/15/14
 * Time: 2:32 PM
 */
class activitiesmodel extends CI_Model{

    private $_table, $_bizId;

    public function __construct(){
        parent::__construct();
    }
    public function prepareBusinessActivity($index,$id){
        $this->_table = 'activities_'.$index;
        $this->_bizId = $id;
        return true;
    }

    public function readActivities($limit=null,$offset=null){
        $sql = "SELECT * FROM {$this->_table} WHERE business_id = {$this->_bizId} ";
        if(!is_null($limit)){
            $sql .= "LIMIT {$limit} ";
        }
        $sql .= "ORDER BY sno DESC";
        $result = $this->db->query($sql);
        if($result->num_rows() == 0)
            return false;
        return $result->result_array();
    }
    
    public function writeActivities($activity){
        if(is_null($activity)){
            return $this->_table." ---".$this->_bizId;
        }
        $activity = ($activity);
        $sql = "INSERT INTO {$this->_table}(business_id,activity) VALUES ('$this->_bizId', ?)";
        $this->db->query($sql,$activity);
        if(!$this->db->affected_rows()){
            return false;
        }
        return true;
    }    
}
