<?php

/*
 * Author   :   Arjun Paudel
 * Email    :   hobo2rist@gmail.com
 * Date     :   9/14/14 4:02 PM
 * File     :   bluepaypayment.php
 * Project  :   grasshopit
 * Copyright (c) Author
 */

class BluepayPayment extends CI_Controller {

    private $accId = '100195027058';
    private $secretKey = 'WPGTRQ.QNSXSRL3B.6OC.L1FHU/G0TTB';
    private $mode = 'TEST';
    public $bluepay = null;

    //All required external Parameters


    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function initPayment() {
        $this->load->library('bluepay');

        $this->bluepay = $this->bluepay($this->accId, $this->secretKey, $this->mode);
    }

    public function index() {

        $package = $this->input->get('package');

        if (empty($package)) {
            $package = $this->session->userdata('package');
        }

        $amount = $this->parsePackage($package);

        if (!$amount) {
            show_404();
        }
        $data['mode'] = $this->mode;
        $data['acc_id'] = $this->accId;
        $data['sec_key'] = $this->secretKey;

        $data['data'] = $this->bluepay;

        $data['amount'] = $amount;

        $this->createDisplay('payment/selector', $data);
    }

    public function parsePackage($package){
        if (!$package) {
            return false;
        }
        switch (strtolower($package)) {
            case 'founder':
                $amount = '39';
                return $amount;
                break;

            case 'adopter':
                $amount = '69';
                return $amount;
                break;

            case 'ambassador':
                $amount = '139';
                return $amount;
                break;

            default:
                return false;
        }
    }

    public function missing() {
        $data['params'] = array();
        $data['params'][] = $_GET;
        $data['params'][] = $_POST;
        $data['fixedFooter'] = true;
        $this->createDisplay('payment/missing', $data);
    }

    public function declined() {
        $data['params'] = array();

        $data['params'][] = $_GET;

        $data['params'][] = $_POST;
        $data['fixedFooter'] = true;
        $this->createDisplay('payment/declined', $data);
    }

    public function approved() {
        $data['params'] = array();
        $data['params'][] = $_GET;
        $data['params'][] = $_POST;

        $this->load->model('business/businessmodel','model',true);
        $index = $this->session->userdata('bus');
        $id = $this->session->userdata('bus_id');
        $package = 99;

        $this->model->updatePackage($index,$id,$package);
        $message = "Successfully Subscribed to new Package ".strtoupper($pkg).".Thankyou for choosing Grasshopit. Please Login.";
        $this->session->set_flashdata('pkg_changed',$message);
        $this->header("login?type=business");
    }

    public function createDisplay($path, $data) {
        $home = $this->load->controller('homecontroller', 'homecontroller');

        $home->_page = "Bluepay Payment";

        $home->loadCommonHeader('paymentForm');

        $this->load->view($path, $data);

        $home->loadFooter();
    }

    public function checkAuth() {

        $login = $this->session->userdata('');

        $type = $this->session->userdata('');

        if (!$login or !$type or strtolower($type) != 'business') {

            return false;
        }

        if ($type == 'business') {
            return true;
        }
    }

}
