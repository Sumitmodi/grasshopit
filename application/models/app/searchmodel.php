<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/12 5:23:09 PM
 * File     :   searchmodel.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

class SearchModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function isCat($c) {

        $this->db->select('name');

        $this->db->from('unique_category');

        $this->db->where('LOWER(name)', strtolower($c));

        $this->db->limit(1);

        $result = $this->db->get();

        if ($result->num_rows() > 0)
            return true;

        return false;
    }

    public function businessByCat($cat) {
        $cat = strtolower($cat);
        $cat = str_replace('-',' ',$cat);

        $this->db->select('business_id')->from('unique_category');
        $this->db->where('LOWER(name)', $cat);
        //->limit(1);
        $result = $this->db->get();

        if ($result->num_rows() == 0)
            return false;
//echo $result->num_rows();
        $ids = $result->result_array();
		$temp = array();
		foreach($ids as $id){
			$temp[] = $id['business_id'];
		}
        return implode(',',$temp);
    }

    public function fetchTableRow($table, $row) {
        $this->db->
                select('*')->
                from($table)->
                where('sno', $row)->
                where('is_published', '1')->
                where('is_suspended', '0')->
                limit(1);

        $result = $this->db->get();

        if ($result->num_rows() == 0) {
            return false;
        }
        
        return $result->row();
    }

    public function tableRows($table, $rows, $place = null) {
        $this->db->cache_delete_all();
        //$this->db->start_cache();

        /*$this->db->select('*');

        $this->db->from($table);*/
        //$this->db->like('LOWER(name)',strtolower($rows[0]));
        //array_shift($rows);
        $like = '(';
        foreach ($rows as $row) {
            //$this->db->or_like('LOWER(name)',strtolower($row));
            $like = $like . "LOWER(name) LIKE '%{$row}%' OR ";
        }

        $like = rtrim($like, 'OR ');

        $like = $like . ')';

        /*$this->db->where($like);*/
        
        $sql = "SELECT * FROM {$table} WHERE {$like} ";
        
        if (!empty($place)) {
           // $this->db->where('city', $place);
            $sql .= "and city = '{$place}'";
        }

       /* $this->db->where('is_published', '1');

        $this->db->where('is_suspended', '0');*/
        
        $sql .= " and is_published = 1 and is_suspended = 0";               

        //$this->db->stop_cache();
        
        $result = $this->db->query($sql);
        
        //$result = $this->db->get();

        return $result->result_array();
    }


}
