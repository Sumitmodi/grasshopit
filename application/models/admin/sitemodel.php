<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/20/14
 * Time: 12:55 PM
 */

class SiteModel extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function getSiteDetails(){
        $sql = 'SELECT * FROM `site_main` WHERE sno = 1';
        $result =$this->db->query($sql);
        if($result){
            return $result->row();
        }
        return false;
    }
    public function getLogo(){
        $sql = 'SELECT `logo` FROM `site_main` WHERE sno = 1';
        $result =$this->db->query($sql);
        if($result){
            return $result->row();
        }
        return false;
    }
    public function getEvents(){
        $sql = 'SELECT * FROM `site_events` ORDER BY sno DESC';
        $result =$this->db->query($sql);
        if($result){
            return $result->result_object();
        }
        return false;
    }
    public function getCoupon($id){
        $sql = 'SELECT * FROM `site_coupons` WHERE sno = `{$id}` ORDER BY sno DESC';
        $result =$this->db->query($sql);
        if($result){
            return $result->result_object();
        }
        return false;
    }
    public function getSliderImages($limit=false){
        $sql = 'SELECT * FROM `site_sliders` WHERE published = 1 ';
        if($limit){
            $sql.="LIMIT `{$limit}` ";
        }
        $sql .= 'ORDER BY sno DESC';
        $result =$this->db->query($sql);
        if($result){
            return $result->result_object();
        }
        return false;
    }


}