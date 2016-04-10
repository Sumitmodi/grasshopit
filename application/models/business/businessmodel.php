<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/11 1:18:27 PM
 * File     :   registermodel.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

class BusinessModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function register($insert)
    {

        $table = is_numeric($insert['name'][0]) ? 'numeric' : strtolower($insert['name'][0]);

        $table = 'business_' . $table;

        $inserted = $this->db->insert($table, $insert);

        return $this->db->insert_id();
    }

    public function preregister($insert)
    {

        $this->db->insert('business_login', $insert);

        return $this->db->insert_id();
    }

    public function payrecord($insert)
    {
        return $this->db->insert('business_payments', $insert);
    }

    public function checkPreregister($name, $email)
    {
        $result = $this->db->query("SELECT pin FROM business_login WHERE name = '{$name}' and email = '{$email}'");
        if ($result->num_rows() == 0)
            return false;
        return $result->row()->pin;
    }

    public function takenUsername($user)
    {
        $result = $this->db->query("SELECT * FROM business_login WHERE username = '{$user}'");
        if ($result->num_rows() > 0)
            return true;
        return false;
    }

    public function login($user, $pass)
    {
        $pass = $pass;
        $result = $this->db->query("SELECT * FROM business_login WHERE username = '{$user}' and password = '{$pass}'");
        if ($result->num_rows() == 0)
            return false;
        return $result->row();
    }

    //getting all data of each business as business info
    public function getBusinessInfo($initial, $id)
    {
        $bizTable = 'business_' . strtolower($initial);
        $sql = "SELECT * FROM {$bizTable} WHERE `sno` = {$id}";
        $result = $this->db->query($sql);
        if ($result->num_rows() == 0)
            return false;
        return $result->row();
    }

    //updating business Info
    public function updateBusinessInfo($initial, $id, $params)
    {
        if (!is_array($params) or is_null($initial) or is_null($id))
            return false;
        $sql = "UPDATE business_{$initial} SET {$params['key']} = '{$params['value']}' WHERE sno = '{$id}' LIMIT 1";
        $this->db->query($sql);
        if (!$this->db->affected_rows())
            return false;
        return true;
    }

    public function updateAccountInfo($initial, $id, $params)
    {
        if (!is_array($params) or is_null($initial) or is_null($id))
            return false;
        $crudData = $params;
        $key = $crudData['key'];
        $value = $crudData['value'];
        $sql = "UPDATE business_login SET `{$key}` = '$value' WHERE `sno` = '{$id}' LIMIT 1";
        $this->db->query($sql);
        if (!$this->db->affected_rows())
            return false;
        return true;
    }

    public function updateNotifications()
    {
        
    }

    public function updateReviews($initial, $id, $params)
    {
        if (!$initial or ! $id or ! is_array($params))
        {
            return false;
        }
        $this->db->where('sno', $id);
        $this->db->update('reviews_' . strtolower($initial), $params);
        if ($this->db->affected_rows())
        {
            return true;
        }
        return false;
    }

    public function deleteReviews($initial, $id)
    {
        if (!$initial or ! $id)
        {
            return false;
        }
        $this->db->where('sno', $id);
        $this->db->delete('reviews_' . strtolower($initial));
        if ($this->db->affected_rows())
        {
            return true;
        }
        return false;
    }

    public function updateMedia()
    {
        
    }

    public function getUniqueData($initial, $id, $cell)
    {
        if (is_null($cell) or is_null($initial) or is_null($cell))
            return false;
        $bizTable = 'business_' . $initial;
        $bizTable = strtolower($bizTable);
        $sql = "SELECT {$cell} FROM {$bizTable} WHERE `sno` = '{$id}'";
        $result = $this->db->query($sql);
        if ($result->num_rows() == 0)
            return false;
        $ret = $result->row();
        return $ret->$cell;
    }

    public function verifyPassword($sno, $pass)
    {
        $pass = md5($pass);

        $query = "SELECT name FROM `business_login` WHERE sno = ? and password = ? LIMIT 0,1";

        $result = $this->db->query($query, array($sno, $pass));

        if ($result->num_rows() == 0)
            return false;

        return true;
    }

    public function updateBusiness($sno, $pass, $update)
    {
        $pass = md5($pass);
        return $this->
                        db->
                        where(array('sno' => $sno, 'password' => md5($pass)))->
                        update('business_login', $update);
    }

    public function checkAvailability($user, $ignore = false)
    {
        if ($ignore == false)
            $sql = "SELECT username  FROM `business_login` WHERE username = ?";
        else
            $sql = "SELECT username  FROM `business_login` WHERE username = ? and username != ?";

        if (!$ignore)
            $result = $this->db->query($sql, array($user));
        else
            $result = $this->db->query($sql, array($user, $ignore));

        if ($result->num_rows() > 0)
            return true;
        return false;
    }

    public function changeUsername($sno, $name)
    {
        $this->db->where(array('sno' => (int) $sno));
        return $this->db->update('business_login', array('username' => $name));
    }

    public function updateMediaInfo($table, $id, $data, $type = 'images')
    {
        $table = 'media_' . strtolower($table);
        $return = 0;
        if (is_array($data))
        {
            foreach ($data as $d)
            {
                $insert = array(
                    'business_id' => $id,
                    'media_type' => $type,
                    'media_name' => $d
                );
                $return = $this->db->insert($table, $insert);
            }
        } else
        {
            $insert = array(
                'business_id' => $id,
                'media_type' => $type,
                'media_name' => $data
            );
            $return = $this->db->insert($table, $insert);
        }
        return $return;
    }

    public function getBusinessImages($table, $bid)
    {
        $table = 'media_' . strtolower($table);

        $this->db->select('sno')->select('media_name');

        $this->db->from($table);

        $this->db->where('business_id', $bid);

        $this->db->where('media_type', 'images');

        $this->db->order_by('date_created', 'DESC');

        $result = $this->db->get();

        if ($result->num_rows())
        {
            $allFiles = $result->result_object();

            foreach ($allFiles as $result)
            {
                $images[$result->sno] = @$result->media_name;
            }
            return $images;
        }
        return false;
    }

    public function getChildTableRowNo($bid)
    {
        $this->
                db->
                select('business_id')->
                from('business_login')->
                where('sno', $bid)->
                limit(1);
        $result = $this->db->get();
        if ($result->num_rows() == 0)
            return false;
        return $result->row()->business_id;
    }

    public function getBusinessLogo($table, $sno)
    {
        if (strlen($table) == 0 or strlen($table) == 0)
            return false;
        $table = 'business_' . strtolower($table);
        $this->db->select('logo')->where('sno', $sno);
        $result = $this->db->get($table);
        if ($result->num_rows() == 0)
            return false;
        return $result->row()->logo;
    }

    public function updateBusinessLogo($table, $sno, $logo)
    {
        if (strlen($table) == 0 or strlen($table) == 0 or strlen($table) == 0)
            return false;

        $table = 'business_' . strtolower($table);
        $this->db->where(array('sno' => $sno));
        return $this->db->update($table, array('logo' => $logo));
    }

    public function getBusinessVideos($table, $sno)
    {
        $table = 'media_' . strtolower($table);

        $this->
                db->
                select('media_name')->
                from($table)->
                where(array('business_id' => $sno));

        $result = $this->db->get();

        if ($result->num_rows() == 0)
            return false;

        return $result->result_array();
    }

    public function getAccountInfo($bid)
    {
        $this->
                db->
                select('username,email,package')->
                from('business_login')->
                where(array('sno' => $bid))->
                limit(1);

        $result = $this->db->get();

        if ($result->num_rows() == 0)
            return false;

        return $result->result_array();
    }

    public function getBusinessPackage($bid)
    {
        $this->
                db->
                select('package')->
                from('business_login')->
                where(array('sno' => $bid))->
                limit(1);

        $result = $this->db->get();
       
        if ($result->num_rows() == 0)
        {
            return false;
        }

        return $result->row()->package;
    }

    public function getBusinessReviews($table, $bid)
    {
        $table = 'reviews_' . strtolower($table);
        $this->
                db->
                select('user_id,comment,rating,images,videos,date')->
                from($table)->
                where(array('business_id' => $bid))->
                order_by('date', 'desc');

        $result = $this->db->get();

        if ($result->num_rows() == 0)
            return false;

        return $result->result_array();
    }

    public function getUserInfo($uid)
    {
        $this->
                db->
                select('*')->
                from('app_users')->
                where(array('sno' => $uid))->
                limit(1);

        $result = $this->db->get();
        if ($result->num_rows() == 0)
            return false;

        return $result->result_array();
    }

    public function uniqueCategory($category, $business, $bool = false)
    {
        $sql = "SELECT name FROM unique_category WHERE name = '{$category}'";
        $res = $this->db->query($sql)->num_rows();
        if ($res)
            return $this->updateUniqueCategory($category, $business, $bool);
        return $this->newUniqueCategory($category, $business);
    }

    public function updateUniqueCategory($name, $bid, $bool = false)
    {
        if ($bool)
            $sql = "UPDATE `unique_category` SET `business_id` = '{$bid}' WHERE `name` = '{$name}'";
        else
            $sql = "UPDATE `unique_category` SET `business_id` = CONCAT(business_id, ',{$bid}') WHERE `name` = '{$name}'";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function removeFromUniqueCategory($name, $bid)
    {
        
    }

    public function newUniqueCategory($name, $bid)
    {
        $params = array('name' => "{$name}", "business_id" => "" . $bid);
        $this->db->insert('unique_category', $params);
        return $this->db->insert_id();
    }

    public function getUniqueCategory($name)
    {
        $this->db->where('name', $name);
        $res = $this->db->get('unique_category')->row();
        return $res;
    }

    public function updatePackage($index, $id, $packageId)
    {
        if (!$packageId or ! $index or ! $id)
            return false;
        if (!is_numeric($packageId))
            return false;
        $index = is_numeric($index) ? 'numeric' : $index;
        $table = "business_" . strtolower($index);
        $this->db->where('sno', $id);
        $this->db->update($table, array('package_id' => $packageId));
        return $this->db->affected_rows();
    }

    public function getUnderRatedReviews($alpha, $id)
    {
        $table = "reviews_" . strtolower($alpha);
        $this->db->where('business_id', $id); //->where('rating <','3');
        $reviews = $this->db->get($table)->result_array();
        foreach ($reviews as $key => $review)
        {
            $reviews[$key]['username'] = $this->getUser($review['user_id']);
        }
        return $reviews;
    }

    public function getUser($id)
    {
        $this->db->where('sno', $id);
        $this->db->select('name');
        return $this->db->get('app_users')->row()->name;
    }

}
