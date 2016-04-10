<?php

/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/17/14
 * Time: 2:50 PM
 */
class HomeController extends CI_Controller
{

    private $_title, $inputs, $_site = false, $_logo = false;
    public $_page = 'home';

    public function __construct()
    {
        parent::__construct();
        $this->inputs = $this->input->get();
        $this->load->library('session');

        $this->load->model('homemodel', 'hmodel', true);
        $this->load->model('admin/sitemodel', 'site', true);
        $this->_site = $this->site->getSiteDetails();
        $this->_logo = $this->getSiteLogo();
    }

    public function getSiteLogo()
    {
        $logo = $this->site->getLogo();
        if ($logo)
            return 'assets/uploads/admin/logo/' . $logo->logo;
        return false;
    }

    public function generateTitle($page = 'HOME')
    {
        if ($page != null or $page != '')
        {
            $this->_title = ucfirst($page) . " :: " . ucfirst($this->session->userdata('username')) . " - " . ucfirst(DOMAIN);
        }
        return $this->_title;
    }

    public function checkLoginStatus()
    {
        $value = $this->session->userdata('logged_in');
        if ($value == true)
        {
            return $this->session->userdata('name');
        }
        return false;
    }

    public function loadCommonHeader($type = NULL)
    {
        $data = array();
        $data['title'] = $this->generateTitle($this->_page);
        $data['type'] = $type;
        $data['page'] = $this->_page;
        $data['site'] = $this->_site;
        $status = $this->checkLoginStatus();
        if ($status)
        {
            $data['status'] = $status;
        }
        $this->load->view('_layouts/header', $data);
        $this->load->view('navbar', $data);
    }

    public function loadHomeHeader($type = NULL, $flag = NULL)
    {
        $data = array();

        $data['title'] = $this->generateTitle($this->_page);

        $data['type'] = $type;

        $data['page'] = $this->_page;

        $data['site'] = $this->_site;

        $status = $this->checkLoginStatus();

        if ($status)
        {
            $data['status'] = $status;
        }

        $this->load->view('_layouts/header_index', $data);

        if ($flag != NULL)
        {
            $this->loadHomeSlider();
        }

        $this->loadHeaderTabs();
    }

    public function loadHeaderTabs()
    {
        $data = array();

        $this->load->view('_layouts/header_tabs', $data);
    }

//sliders
    public function loadCommonSlider()
    {
        $data = array();
        $data['logo'] = $this->_logo;
        $this->load->view('_layouts/slider', $data);
    }

    public function loadHomeSlider()
    {
        $data = array();
        $data['logo'] = $this->_logo;
        $data['sliderImages'] = $this->site->getSliderImages();
        $this->load->view('_layouts/slider_index', $data);
    }

//home page tabs
    public function loadHomeTabs()
    {
        $data = array();
        $data['category_info'] = $this->hmodel->getLimitCategoryInfo(8);
        $this->load->view('_layouts/tabs_index', $data);
    }

//home featured and recent
    public function loadHomeFeaturedAndRecent()
    {
        $data = array();
        $data['recentBiz'] = $this->hmodel->getRecentBusinesses(4);
        $this->load->view('_layouts/featured_recent_business', $data);
    }

//load footer
    public function loadFooter()
    {
        $data = array();
        $data['site'] = $this->site->getSiteDetails();
        // $this->load->view('_layouts/footer',$data);
        $this->load->view('_layouts/footer_index', $data);
    }

    public function loadHomeFooter()
    {
        $data = array();
        $data['site'] = $this->site->getSiteDetails();
        $this->load->view('_layouts/footer_index', $data);
    }

    public function loadRegFooter()
    {
        $data = array();
        //$data['site']=$this->site->getSiteDetails();
        $this->load->view('_layouts/register_footer', $data);
    }

    /*
     * Loading the page requested
     */

    public function index()
    {
        $data = array();

        $this->_page = 'home';

        $this->hmodel->prepareBusiness('a_2');

        $data['info'] = $this->hmodel->getBusinessDetail();

        $this->loadHomeHeader(NULL, 'home');

        $this->loadHomeTabs();

        $this->loadHomeFeaturedAndRecent();

        $this->loadRegFooter();

        //$this->load->view('index',$data);

        $this->loadHomeFooter();
    }

    public function about()
    {
        $data = array();
        $this->_page = 'about';
        $data['site'] = $this->site->getSiteDetails();

        $this->loadHomeHeader();
        //$this->loadCommonSlider();
        $data['fixedFooter'] = true;
        $this->load->view('about', $data);
        $this->loadFooter();
    }

    public function addBusiness()
    {
        $data = array();
        $this->_page = 'add business';
        $this->loadHomeHeader();
        //$this->loadCommonSlider();
        $this->load->view('add-business', $data);
        $this->loadFooter();
    }

    public function contact()
    {
        $data = array();

        $d = $this->input->post(NULL, TRUE);

        if (!empty($d))
        {
            $this->load->library('mailer');

            $fileDir = VIEWDIR . DS . 'fragments' . DS . 'mails';
            
            $this->mailer->set('error', false);
            
            $headers = $this->mailer->activate('headers');
            
            $headers->
                    from($d['email'])->
                    to('info@grasshopit.com')->
                    subject('Contact Email')->
                    mime()->
                    charset()->
                    content()->
                    reply($d['email'])->
                    xmailer('Grasshopit Mailer')->
                    process();
            
            $message = $this->mailer->activate('message');
            
            $message->
                    vars($d)->
                    read($fileDir, 'contact')->
                    process();
            
            $sent = $this->mailer->mail();
            
            $data['message'] = 'Your email has been received. We will reply you soon.';
        }

        $this->_page = 'contact';

        $this->loadHomeHeader();

        $this->load->view('contact', $data);

        $this->loadFooter();
    }

    public function events()
    {
        $data = array();
        $this->_page = 'events';
        $data['events'] = $this->site->getEvents();
        $this->loadHomeHeader();

        $this->load->view('events', $data);
        $this->loadFooter();
    }

    public function help()
    {
        $data = array();
        $this->loadHomeHeader();

        $this->load->view('help', $data);
        $this->loadFooter();
    }

    public function businessProfile()
    {
        $data = array();

        $data['logged_in'] = false;

        $login_status = $this->session->userdata('logged_in');

        $login_type = $this->session->userdata('login_type');

        if ($login_status and $login_type == "user")
        {
            $data['logged_in'] = true;

            $data['username'] = $this->session->userdata('name');
        }

        $data['info'] = false;

        $data['error'] = false;

        $alpha = $this->uri->segment(2, 0);

        $beta = $this->uri->segment(3, 0);

        $tbl = is_numeric($beta[0]) ? 'business_numeric' : 'business_' . $beta[0];

        $biz = $this->hmodel->select($tbl, 'categories', array('sno' => $alpha), NULL, 1);

        $cat = $biz->categories;

        $cats = explode('#', $cat);

        if (count($cats) == 1)
        {

            $cats = explode(',', $cats[0]);
        }

        $cats = array_unique($cats);

        $similar = array();

        $table = $beta[0] . '_' . $alpha;

        foreach ($cats as $c)
        {

            $sim = $this->hmodel->select('unique_category', 'business_id', array('name' => $c), NULL, 1);

            if (false == $sim)
            {
                continue;
            }

            $biss = explode(',', $sim->business_id);

            if (count($biss) > 0)
            {

                foreach ($biss as $b)
                {

                    if ($b == $table)
                    {
                        continue;
                    }

                    array_push($similar, $b);
                }
            }
        }

        $rel = array();
        $also = array();

        sort($similar);

        if (count($similar) >= 5)
        {
            for ($i = 0; $i < 5; $i++)
            {
                $this->hmodel->prepareBusiness($similar[$i]);
                $also[] = array(
                    'info' => $this->hmodel->getBusinessDetail(),
                    'media' => "assets/uploads/{$similar[$i]}/"
                );
            }
            if (count($similar) > 5)
            {
                $j = 0;
                for ($i = 5; $i < count($similar); $i++)
                {
                    if ($j > 10)
                    {
                        break;
                    }
                    $this->hmodel->prepareBusiness($similar[$i]);
                    $rel[] = array(
                        'info' => $this->hmodel->getBusinessDetail(),
                        'media' => "assets/uploads/{$similar[$i]}/"
                    );
                    $j++;
                }
            }
        } else
        {
            for ($i = 0; $i < count($similar); $i++)
            {
                $this->hmodel->prepareBusiness($similar[$i]);
                $also[] = array(
                    'info' => $this->hmodel->getBusinessDetail(),
                    'media' => "assets/uploads/{$similar[$i]}/"
                );
            }
        }

        $data['related'] = $also;

        $data['also'] = $rel;

        if ($alpha and $beta)
        {
            $table = is_numeric($beta[0]) ? 'numeric_' . $alpha : $beta[0] . '_' . $alpha;

            $this->addBusinessView($table);

            $this->hmodel->prepareBusiness($table);

            $data['info'] = $this->hmodel->getBusinessDetail();

            $data['media_path'] = "assets/uploads/" . $table . "/";

            $data['gallery'] = $this->hmodel->getBusinessImages(4);

            $data['reviews'] = $this->getReviews($beta[0], $alpha);

            $alwrev = true;

            if ($this->session->userdata('name') != false)
            {

                foreach ($data['reviews'] as $r)
                {
                    if (strtolower($r->username) == $this->session->userdata('name'))
                    {
                        $alwrev = false;

                        break;
                    }
                }
            } else
            {
                $alwrev = true;
            }

            $data['allow'] = $alwrev;

            //$data['best_reviews'] = $this->getBestReviews($beta[0], $alpha);

            $data['popular'] = $this->popularCategories(10);

            $data['comments'] = array();
        } else
        {
            $data['error'] = true;
        }

        $this->_page = ucfirst($data['info'][0]->name);

        $this->loadHomeHeader();

        $this->load->view('profile', $data);

        $this->loadFooter();
    }

    public function encodeBusinessId($id)
    {
        if (is_null($id) || $id == '')
        {
            return false;
        }
        $encoded = str_replace('_', md5('+'), $id);
        return $encoded;
    }

    public function decodeBusinessId($id)
    {
        if (is_null($id) || $id == '')
        {
            return false;
        }
        $decoded = str_replace(md5('+'), '_', $id);
        return $decoded;
    }

    public function eventCoupon()
    {
        $couponId = $this->input->get('coupon_id');

        $coupon = $this->_site->getCoupons();
    }

    public function privacy()
    {
        $data = array();

        $this->_page = 'privacy';

        $data['site'] = $this->site->getSiteDetails();

        $this->loadHomeHeader();

        $this->load->view('privacy', $data);
        $this->loadFooter();
    }

    public function popularCategories($limit = NULL)
    {
        return $this->hmodel->popularCategories($limit);
    }

    public function getBusinessReviews()
    {
        return ($this->hmodel->businessReviews());
    }

    public function getReviews($bus_key, $bus_id)
    {
        $this->load->model('business/reviewsmodel', 'rmodel', TRUE);

        $bus_key = is_numeric($bus_key) ? 'numeric' : $bus_key;

        $this->rmodel->prepareTable($bus_key, $bus_id);

        return $this->rmodel->getReviews();
    }

    public function getBestReviews($bus_key, $bus_id)
    {
        $this->load->model('business/reviewsmodel', 'rmodel', TRUE);
        $this->rmodel->prepareTable($bus_key, $bus_id);
        return $this->rmodel->getBestReviews();
    }

    public function addBusinessView($business_id)
    {
        $visited = $this->session->userdata('profile_views');
        if ($visited)
        {
            $visited_business = explode(",", $visited);
            if (in_array($business_id, $visited_business))
            {
                return false;
            }
            $current = "," . $business_id;
        } else
        {
            $current = $business_id;
        }
        $visited = $visited . $current;
        if ($this->hmodel->addBusinessViews($business_id))
        {
            $this->session->set_userdata('profile_views', $visited);
            return true;
        }
        return false;
    }

}
