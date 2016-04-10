<?php

/*
 * Author   :   Arjun Paudel
 * Email    :   hobo2rist@gmail.com
 * Date     :   9/5/14 4:16 PM
 * File     :   reviewsmodel.php
 * Project  :   grasshopit
 * Copyright (c) Author
 */

class reviewmodel extends CI_Model
{

    private $_table, $_row;

    public function __construct()
    {
        parent::__construct();
    }

    public function prepareTable($alpha, $row)
    {
        if (!$alpha or ! $row)
            return false;
        $alpha = strtolower($alpha);
        $this->_table = 'reviews_' . $alpha;
        $this->_row = $row;
        return true;
    }

    public function getReviews()
    {

        $this->db->start_cache();

        $count = 0;

        $res = array();

        for ($i = 97; $i <= 122; $i++)
        {

            $j = chr($i);

            $query = "SELECT COUNT(sno) as count FROM `reviews_{$j}` WHERE rating < 3";

            $result = $this->db->query($query);

            $con = $result->row()->count;

            $count = $count + $con;

            $res[$j] = $con;
            //print_r($res);
            //exit;
        }

        $this->db->stop_cache();

        $res['total'] = $count;

        return $res;
    }

    public function getAllReviews()
    {
        $this->db->start_cache();

        $count = 0;

        $res = array();

        for ($i = 97; $i <= 122; $i++)
        {

            $j = chr($i);

            $query = "SELECT COUNT(sno) as count FROM `reviews_{$j}`";

            $result = $this->db->query($query);

            $con = $result->row()->count;

            $count = $count + $con;

            $res[$j] = $con;
            //print_r($res);
            //exit;
        }

        $this->db->stop_cache();

        $res['total'] = $count;

        return $res;
    }

    public function getAllReviewsByAlpha($alpha)
    {
        if (strlen($alpha) > 1)
            return false;
        $table = 'reviews_' . strtolower($alpha);
        $result = $this->db->query("SELECT * FROM {$table}");
        if ($result->num_rows() == 0)
            return false;
        return $result->result_array();
    }

    public function getBestReviews()
    {
        //$this->db->select_max('rating');

        $this->db->where('business_id', $this->_row)->where('is_published', '1');
        //$this->db->order_by('sno','DESC');
        $result = $this->db->get($this->_table)->result_object();
        foreach ($result as $key => $res)
        {
            $result[$key]->username = $this->getUser($res->user_id);
        }
        //return $this->db->last_query();
        return $result;
    }

    public function getRating()
    {
        $this->db->select('rating');
        $this->db->from($this->_table);
        $this->db->where($this->_table)->where('is_published', 1);
        $total = $this->db->get_sum('rating');
        if ($total)
            return $total / 5;
        return 0;
    }

    public function writeReview($params = array())
    {
        if ($params['rating'] and $params['rating'] < 3)
            $params['is_published'] = 0;
        else
            $params['is_published'] = 1;
        $this->db->insert($this->_table, $params);
        return $this->db->insert_id();
    }

    public function getUser($id)
    {
        $this->db->where('sno', $id);
        $this->db->select('name');
        return $this->db->get('app_users')->row()->name;
    }

    public function countAddedReviews()
    {

        $this->db->start_cache();

        $count = 0;

        $res = array();

        for ($i = 97; $i <= 122; $i++)
        {

            $j = chr($i);

            $query = "SELECT COUNT(sno) as count FROM `reviews_{$j}`";

            $result = $this->db->query($query);

            $con = $result->row()->count;

            $count = $count + $con;

            $res[$j] = $con;
        }

        $this->db->stop_cache();

        $res['total'] = $count;

        return $res;
    }

    public function getReviewsByAlpha($alpha)
    {
        if (strlen($alpha) > 1)
        {
            return false;
        }

        $review = 'reviews_' . strtolower($alpha);

        $business = 'business_' . strtolower($alpha);

        $result = $this->db->query("SELECT * FROM users LEFT JOIN {$business} ON {$review}.business_id={$business}.sno LEFT JOIN app_users ON {$review}.user_id=app_users.sno WHERE {$review}.rating < 3 ORDER BY date DESC");

        if ($result->num_rows() == 0)
        {
            return false;
        }
        
        return $result->result_array();
    }

    public function removeReview($id, $alpha)
    {
        $table = 'reviews_' . strtolower($alpha);
        $this->db->where('MD5(sno)', $id);
        return $this->db->delete($table);
    }

    public function getReview($alpha)
    {
        if (strlen($alpha) > 1)
            return false;
        $table = 'reviews_' . strtolower($alpha);
        $result = $this->db->query("SELECT * FROM {$table}");
        if ($result->num_rows() == 0)
            return false;
        return $result->result_array();
    }

    public function publishReviews($alpha, $id)
    {
        $table = 'reviews_' . strtolower($alpha);
        $this->db->where('MD5(sno)', $id);
        return $this->db->update($table, array('is_published' => 1));
    }

    public function unpublishReviews($alpha, $id)
    {
        $table = 'reviews_' . strtolower($alpha);
        $this->db->where('MD5(sno)', $id);
        return $this->db->update($table, array('is_published' => 0));
    }

}
