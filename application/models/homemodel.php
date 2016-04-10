<?php

/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/18/14
 * Time: 3:14 PM
 */
class HomeModel extends CI_Model
{

    private $_tableIndex = NULL, $_id = null, $_table;

    public function __construct()
    {
        parent::__construct();
    }

    public function prepareBusiness($index)
    {
        if (is_null($index) || trim($index) == '' || !$index)
        {
            return false;
        }
        $split = explode('_', $index);
        if (count($split) < 2)
            return false;
        $table = $split[0];
        $id = $split[1];
        $this->_tableIndex = $table;
        $this->_id = $id;
        return true;
    }

    private function prepareTable($type = 'business', $prepare = true)
    {
        if ($prepare)
        {
            if (is_null($type) || $type == '')
            {
                return false;
            }
            $table = $type . "_" . $this->_tableIndex;
            $this->_table = $table;
            return true;
        } else
        {
            if (!is_bool($prepare))
            {
                return false;
            }
            $this->_table = $type;
            return true;
        }
        return false;
    }

    public function getBusinessBox()
    {
        $this->prepareTable();
    }

    public function getBusinessDetail($params = array(), $limit = NULL)
    {
        if (!is_array($params))
            return false;
        $this->prepareTable();
        if (empty($params))
            $params['sno'] = $this->_id;
        //$params['is_published'] = '1';
        $params['is_suspended'] = '0';
        $query = $this->db->get_where($this->_table, $params);
        return $query->result_object();
    }

    public function getBusinessLogo()
    {
        $this->prepareTable();
    }

    public function getBusinessImages($limit = false)
    {
        $this->prepareTable('media');
        $this->db->where('business_id', $this->_id);
        $this->db->order_by('sno', 'DESC');
        if ($limit)
        {
            $this->db->limit($limit);
        }
        $res = $this->db->get($this->_table)->result();
        return $res;
    }

    public function getBusinessRating()
    {
        $this->prepareTable('reviews');
    }

    public function getbusinessReviews()
    {
        $this->prepareTable(('reviews'));
        $this->db->where('business_id', $this->_id);
        $res = $this->db->get($this->_table)->result();
        return $res;
    }

    public function getBusinessViews()
    {
        $this->prepareTable('views');
    }

    public function getMostViewedBusinesses()
    {
        
    }

    public function getHighestRatedBusinesses()
    {
        
    }

    public function getRecentBusinesses($limit = false)
    {
        $recentBiz = array();
        $this->prepareTable('business_login', false);
        $sql = "SELECT business_id FROM {$this->_table} WHERE validated = 1 ORDER BY sno DESC ";
        if ($limit)
        {
            $sql.="LIMIT {$limit}";
        }
        $result = $this->db->query($sql);
        if ($result->num_rows())
        {
            $businessId = $result->result_object();
            foreach ($businessId as $id)
            {
                if ($this->prepareBusiness($id->business_id))
                {
                    $businesses = $this->getBusinessDetail();
                    if (!empty($businesses))
                    {
                        $recentBiz[] = $businesses[0];
                    }
                }
            }
            return $recentBiz;
        }
        return false;
    }

    public function getFeaturedBusinesses()
    {
        
    }

    public function businessReviews()
    {
        $chars = "abcdefghijklmnopqrstuvwxyz";
        $key_index = mt_rand(0, 25);
        $table = "business_" . $chars[$key_index];
        $this->db->where('is_published', 1)->where('package_id >', 0);
        $reviews = $this->db->get($table)->result_object();
        if (count($reviews) and is_array($reviews))
        {
            $row_index = mt_rand(0, count($reviews) - 1);
            $reviews = $reviews[$row_index];
            $reviews->media_path = $chars[$key_index] . "_" . $reviews->sno;
            return $reviews;
        } else
        {
            $reviews = $this->businessReviews();
        }
        return $reviews;
    }

    public function addBusinessViews($business_id)
    {
        $sql = "UPDATE business_login SET ";
        $sql.= "business_views = business_views+1 ";
        $sql.= "WHERE business_id = '{$business_id}'";
        $this->db->query($sql);
        if ($this->db->affected_rows())
            return true;
        return false;
    }

    public function popularCategories($limit = 3)
    {
        $popCats = array();
        $this->db->select('business_id')->from('business_login');
        if ($limit)
            $this->db->limit($limit);
        $this->db->order_by('business_views', 'DESC');
        $results = $this->db->get()->result_object();
        if (is_array($results))
            foreach ($results as $result)
            {
                if (!$result->business_id)
                    return $popCats;
                $keys = explode("_", $result->business_id);
                $this->db->select('sno')->select('name')->select('categories')->select('logo');
                $this->db->where('sno', $keys[1]);
                $popCats[] = $this->db->get('business_' . strtolower($keys[0]))->row();
            }
        return $popCats;
    }

    public function select($table, $select = '*', $where = null, $order = null, $limit = null)
    {

        if (is_array($select))
        {

            $this->db->select(implode(',', $select));
        } else
        {

            $this->db->select($select);
        }

        $this->db->from($table);

        if (!is_null($where))
        {

            $this->db->where($where);
        }

        if (!is_null($order))
        {

            if (is_array($order))
            {

                foreach ($order as $k => $v)
                {

                    $this->db->order_by($k, $v);
                }
            }
        }

        if (!is_null($limit))
        {

            $this->db->limit($limit);
        }

        $result = $this->db->get();

        if ($result->num_rows() == 0)
        {

            return false;
        }

        if (intval($limit) == 1)
        {

            return $result->row();
        }

        return $result->result_array();
    }

    public function getLimitCategoryInfo($limit = false)
    {

        $sql = 'SELECT * FROM `unique_category` ';

        $sql .= "WHERE image != '' ";

        $sql .= 'ORDER BY RAND() ';

        if ($limit)
        {
            $sql.="LIMIT {$limit} ";
        }

        $result = $this->db->query($sql);
        
        if ($result)
        {
            return $result->result_object();
        }
        return false;
    }

}
