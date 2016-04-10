<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/12 5:22:16 PM
 * File     :   search.php
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

class Search extends CI_Controller
{

    protected $result;

    /**
     * Total Number of pages 
     */
    protected $pages;

    /*
     * Results per page
     */
    protected $rpp = 24;

    public function __construct()
    {
        parent::__construct();

        $this->load->model('app/searchmodel', 'semodel', true);

        $this->load->model('admin/sitemodel', 'siteInfo', true);

        $this->load->library('session');
    }

    public function search($q, $p)
    {
        try
        {


            $is_cat = $this->isCat($q);

            if ($is_cat)
            {
                $data = $this->cats($q, $p);
            } else
            {

                $data = $this->names($q, $p);
            }
            return $data;
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function isCat($cat)
    {
        try
        {

            $is = $this->semodel->isCat($cat);

            return $is;
        } catch (Exception $e)
        {

            $this->header = $e->getCode();
            $this->message = $e->getMessage();

            return false;
        }
    }

    protected function cats($q, $p)
    {
        try
        {

            $data = $this->semodel->businessByCat($q);

            if ($data == false)
            {
                throw new Exception('Businesses not found.', '900');
            }

            //See manual for more details
            $str = microtime(true);

            $data = explode(',', $data);

            $temp = array();
            $data = array_unique($data);

            foreach ($data as $d)
            {
                if (!$d)
                {
                    continue;
                }

                $biz = explode('_', $d);

                $temp[] = array(
                    'table' => $biz[0] != 'numeric' ? 'business_' . $biz[0] : 'business_numeric',
                    'row' => $biz[1]
                );
            }

            if (count($temp) == 0)
            {
                throw new Exception('Businesses not found.', '900');
            }

            //We have found some results, lets fetch data corresponding to each result
            $dres = array();

            foreach ($temp as $t)
            {
                $res = $this->semodel->fetchTableRow($t['table'], $t['row']);

                if ($res != false)
                {
                    $dres[] = $res;
                }
            }

            $data['time'] = microtime(true) - $str;

            $data['result'] = $dres;

            if (count($data) == 0)
            {
                throw new Exception('Businesses not found.', '900');
            }
            return $data;
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
            return false;
        }
    }

    protected function names($q, $p)
    {
        try
        {

            $temp = $q;
            if (!is_numeric($q[0]))
            {
                $table = 'business_' . strtolower($q[0]);
            } else
            {
                $table = 'business_numeric';
            }

            $q = explode(' ', $q);

            $num = count($q);

            $total = pow(2, $num);

            $res = array();

            $str = microtime(true);

            /*
             * Permute the query string
             */
            for ($i = 0; $i < $total; $i++)
            {
                $t = null;

                for ($j = 0; $j < $num; $j++)
                {
                    if (pow(2, $j) & $i)
                    {
                        $t = $t . $q[$j] . ' ';
                    }
                }

                if (!empty($t))
                {
                    $t = rtrim($t, ' ');
                    $t = ltrim($t, ' ');
                    $res[] = $t;
                }
            }
            $rows = $this->semodel->tableRows($table, $res, $p);

            if (empty($rows))
            {
                $rows = $this->semodel->tableRows($table, $res);
            }

            $data['result'] = $rows;

            $data['time'] = microtime(true) - $str;

            return $data;
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    public function init()
    {

        $bizQuery = urldecode($this->input->get('query'));

        $locQuery = urldecode($this->input->get('location'));

        $data['query'] = $bizQuery;

        $data['location'] = $locQuery;

        if (!empty($bizQuery))
        {
            $results = $this->search($bizQuery, $locQuery);
            $message = '';
        } else
        {
            $results = false;
            $message = 'Oops!!! An error occured.';
        }

        $data['results'] = $results['result'];

        $page = $this->input->get('page', TRUE);

        $page = $page == false || $page == 1 ? 1 : $page;

        $result = $results['result'];

        $throw = array();

        if (count($result) > $this->rpp)
        {

            $data['pages'] = ceil(count($result) / $this->rpp);

            for ($i = ($page - 1) * $this->rpp; $i < $page * $this->rpp; $i++)
            {
                if (isset($result[$i]))
                {
                    array_push($throw, $result[$i]);
                }
            }
        } else
        {
            $data['pages'] = 1;
        }

        if (count($throw) > 0)
        {
            $data['results'] = $throw;
        }

        $data['similar'] = array();

        if ($data['results'])
        {
            if (is_array($data['results'][0]))
            {
                $sim_cat = $data['results'][0]['categories'];
            }
        }

        if ($data['results'])
        {
            if (is_object($data['results'][0]))
            {
                $sim_cat = $data['results'][0]->categories;
            }
        }

        if ($data['results'])
        {
            $data['similar'] = array(); //$this->searchSimilar($bizQuery,$sim_cat,$data['results']);
        }

        $data['time'] = $results['time'];

        $data['message'] = $message;

        $data['query'] = $bizQuery;

        $data['loc'] = $locQuery;

        $data['total'] = count($results['result']);

        $data['rpp'] = $this->rpp;

        $data['title'] = $bizQuery;

        if (!empty($locQuery))
        {

            $data['title'] .= ' in ' . $locQuery;
        }

        $this->showResults($data);
    }

    public function category()
    {
        $data = array();

        $category = $this->uri->segment(2, 0);

        $message = '';

        $category = explode('-', $category);

        $category = $category[0];

        if ($category)
        {
            $results = $this->cats($category, true);
        } else
        {
            $results['result'] = NULL;

            $message = 'An Error Occured';
        }
        $init = microtime(true);

        $data['results'] = $results['result'];

        $data['similar'] = array();

        if ($data['results'])
        {
            $data['similar'] = $this->searchSimilar($category, $data['results'][0]->categories, $data['results']);
        }

        $data['time'] = $results['time'];

        $data['message'] = $message;

        $data['query'] = html_entity_decode($category);

        $this->showResults($data);
    }

    public function showResults($data)
    {
        $data['site'] = $this->siteInfo->getSiteDetails();

        $home = $this->load->controller('homecontroller', 'homecontroller');

        $data['popular'] = $home->popularCategories(10);

        $home->loadHomeHeader();

        $data['loginStatus'] = $home->checkLoginStatus();

        $this->load->view('search-result', $data);

        $home->loadFooter();
    }

    public function searchRandom()
    {
        $data = array();

        $category = $this->uri->segment(2, 0);

        $message = '';

        if ($category)
        {
            
        } else
        {
            $message = 'An Error Occured';
        }

        $init = microtime(true);

        $data['results'] = array();

        $data['time'] = microtime(true) - $init;

        $this->showResults($data);
    }

    public function searchSimilar($search, $category, $results, $key = 0)
    {
        $categories = explode("#", $category);

        $similar = array();

        if (count($categories))
        {
            $counter = 0;

            while (!$counter)
            {
                if (!isset($categories[$key]))
                {
                    break;
                }
                if (trim($categories[$key]) == "" or strtolower($search) == strtolower($categories[$key]))
                {
                    $key++;
                    
                    continue;
                }
                
                $similar = $this->search($categories[$key], NULL);
                
                //TODO: filter common results
                if (count($similar))
                {
                    $counter++;
                } else
                {
                    $key++;
                }
            }
        }
        return $similar;
    }

    public function reviewOfTheDay()
    {
        
    }

}
