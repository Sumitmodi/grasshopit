<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/15 4:59:05 PM
 * File     :   company.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

class Company extends CI_Controller {

    protected $data;
    protected $page;

    public function __construct() {
        parent::__construct();
    }

    public function entry() {
        try {

            $target = $this->input->get('target');

            if (empty($target) || strtolower($target) == 'dashboard') {
                //Dashboard is loaded
                $this->dashboard();
            } else {
                $target = strtolower($target);
                if (method_exists($this, $target)) {
                    $this->{$target}();
                } else {
                    show_404('company.php');
                }
            }
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function view() {
        try {

            $cid = $this->input->get('company', TRUE);

            $source = $this->input->get('source', TRUE);

            $alpha = $this->input->get('alpha', TRUE);

            if (!empty($source)) {

                if (empty($cid)) {

                    if (!empty($alpha)) {
                        $list = $this->model->getCompaniesByAlpha($alpha);
                        if ($list == 0) {
                            $this->data['error'] = 'No records found.';
                        } else {
                            $this->data['lists'] = $list;
                        }
                    } else {
                        show_404('company.php');
                    }
                } else {
                    if (!empty($alpha)) {
                        //ambiguous; confusion; so show 404
                        show_404('company.php');
                    } else {
                        //show company by id
                    }
                }
            } else {

                if (!empty($cid)) {

                    if (!empty($alpha)) {
                        //ambiguous; confusion; so show 404
                        show_404('company.php');
                    } else {
                        //show company by id from registration table
                    }
                } else {
                    if (!empty($alpha)) {
                        //show 404
                        show_404('company.php');
                    } else {
                        //show 404
                        show_404('company.php');
                    }
                }
            }
            $this->page = 'company/list';
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function add() {
        try {

            $config['upload_path'] = 'assets/temp/';

            $config['allowed_types'] = 'csv';

            $config['max_size'] = ini_get('post_max_size') < ini_get('upload_max_filesize') ? (int) ini_get('post_max_size') : (int) ini_get('upload_max_size');

            $config['file_name'] = 'company';

            $config['overwrite'] = true;

            $this->load->library('upload', $config);


            if (!move_uploaded_file($_FILES['file']['tmp_name'],'assets/temp/company.csv')){//!$this->upload->do_upload('file')) {

                $this->data['error'] = $this->upload->display_errors();

            } else {

                $this->parseFile();
            }

            $this->dashboard();
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function modify() {
        try {
            
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function publish() {
        try {

            $source = $this->input->get('source', TRUE);

            $company = $this->input->get('company', TRUE);

            $alpha = $this->input->get('alpha', TRUE);

            if (strtolower($source) == 'options') {
                $result = $this->model->publishBusiness(strtolower($alpha), $company);
                if ($result) {
                    $this->data['success'] = 'Business Published Successfully.';
                } else {
                    $this->data['error'] = 'Business could not be Published.';
                }
            } else {
                $this->data['error'] = 'You do not have valid previliages to perform this action.';
            }

            $list = $this->model->getCompaniesByAlpha($alpha);

            if ($list == 0) {
                $this->data['error'] = 'No records found.';
            } else {
                $this->data['lists'] = $list;
            }
            //if (strtolower($source) == 'options')
            $this->page = 'company/list';
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function unpublish() {
        try {

            $source = $this->input->get('source', TRUE);

            $company = $this->input->get('company', TRUE);

            $alpha = $this->input->get('alpha', TRUE);

            if (strtolower($source) == 'options') {
                $result = $this->model->unpublishBusiness(strtolower($alpha), $company);
                if ($result) {
                    $this->data['success'] = 'Business Unpublished Successfully.';
                } else {
                    $this->data['error'] = 'Business could not be Unpublished.';
                }
            } else {
                $this->data['error'] = 'You do not have valid previliages to perform this action.';
            }

            $list = $this->model->getCompaniesByAlpha($alpha);

            if ($list == 0) {
                $this->data['error'] = 'No records found.';
            } else {
                $this->data['lists'] = $list;
            }
            //if (strtolower($source) == 'options')
            $this->page = 'company/list';
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function suspend() {
        try {

            $source = $this->input->get('source', TRUE);

            $company = $this->input->get('company', TRUE);

            $alpha = $this->input->get('alpha', TRUE);

            if (strtolower($source) == 'options') {
                $result = $this->model->suspendBusiness(strtolower($alpha), $company);
                if ($result) {
                    $this->data['success'] = 'Business Suspended Successfully.';
                } else {
                    $this->data['error'] = 'Business could not be Suspended.';
                }
            } else {
                $this->data['error'] = 'You do not have valid privileges to perform this action.';
            }

            $list = $this->model->getCompaniesByAlpha($alpha);

            if ($list == 0) {
                $this->data['error'] = 'No records found.';
            } else {
                $this->data['lists'] = $list;
            }
            //if (strtolower($source) == 'options')
            $this->page = 'company/list';
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function unsuspend() {
        try {

            $source = $this->input->get('source', TRUE);

            $company = $this->input->get('company', TRUE);

            $alpha = $this->input->get('alpha', TRUE);

            if (strtolower($source) == 'options') {
                $result = $this->model->unsuspendBusiness(strtolower($alpha), $company);
                if ($result) {
                    $this->data['success'] = 'Business Unsuspended Successfully.';
                } else {
                    $this->data['error'] = 'Business could not be Unsuspended.';
                }
            } else {
                $this->data['error'] = 'You do not have valid previliages to perform this action.';
            }

            $list = $this->model->getCompaniesByAlpha($alpha);

            if ($list == 0) {
                $this->data['error'] = 'No records found.';
            } else {
                $this->data['lists'] = $list;
            }
            //if (strtolower($source) == 'options')
            $this->page = 'company/list';
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function upgrade() {
        try {
            
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function downgrade() {
        try {
            
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function remove() {
        try {

            $source = $this->input->get('source', TRUE);

            $company = $this->input->get('company', TRUE);

            $alpha = $this->input->get('alpha', TRUE);

            if (strtolower($source) == 'options') {
                $result = $this->model->removeBusiness(strtolower($alpha), $company);
                if ($result) {
                    $this->data['success'] = 'Business Removed Successfully.';
                } else {
                    $this->data['error'] = 'Business could not be Removed.';
                }
            } else {
                $this->data['error'] = 'You do not have valid previliages to perform this action.';
            }

            $list = $this->model->getCompaniesByAlpha($alpha);

            if ($list == 0) {
                $this->data['error'] = 'No records found.';
            } else {
                $this->data['lists'] = $list;
            }
            //if (strtolower($source) == 'options')
            $this->page = 'company/list';
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function dashboard() {
        try {

            $this->data['title'] = ucfirst(DOMAIN) . ' :: Companies';

            $this->page = 'company/dashboard';

            $this->data['counts'] = $this->model->countAddedCompanies();
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    public function get($item) {
        if (isset($this->{$item}))
            return $this->{$item};
    }

    private function parseFile() {
        try {

            $setting = (int) $this->input->post('package');

            $package = array(
                0 => 'name',
                1 => 'state',
                2 => 'city'
            );

            if (!empty($setting)) {

                if ($setting == 2) {
                    $package[] = 'telephone';
                }

                if ($setting == 3) {
                    $package = 'telephone';
                    $package = 'email';
                }

//For now
if($setting == 4){

            $package = array(
                0 => 'name',
                1 => 'state',
                2 => 'city',
                3=> 'address',
                4 => 'website',
                5 => 'postal',   
                6 => 'telephone',   
                7 => 'categories',   
                8 => 'country'
            );
}

            }

            $file = dirname(APPPATH) . DS . 'assets' . DS . 'temp' . DS . 'company.csv';

            if (!file_exists($file))
                throw new Exception('File uploaded not found.', '900');

            $type = $this->input->post('settings', TRUE);

            if (!empty($type)) {
                $type = 0;
            }

            $inserted = 0;
            $updated = 0;

            $handle = fopen($file, 'r');

            while ($content= fgetcsv($handle,0,',')):
                //$content = explode(',', $line);

              //  if (count($content) == count($package)) {

                    if (count($package) == 3) {

                        $insert[$package[0]] = $content[0];

                        $insert[$package[1]] = $content[1];

                        $insert[$package[2]] = $content[2];
                    }

                    if (count($package) == 4) {

                        $insert[$package[0]] = $content[0];

                        $insert[$package[1]] = $content[1];

                        $insert[$package[2]] = $content[2];

                        $insert[$package[3]] = $content[3];
                    }

                    if (count($package) == 5) {

                        $insert[$package[0]] = $content[0];

                        $insert[$package[1]] = $content[1];

                        $insert[$package[2]] = $content[2];

                        $insert[$package[3]] = $content[3];

                        $insert[$package[4]] = $content[4];
                    }

if($setting == 4){
$insert[$package[0]] = htmlentities(str_replace('-',' ',$content[0]));
$insert[$package[1]] = $content[3];
$insert[$package[2]] = $content[2];
$insert[$package[3]] = $content[1];
$insert[$package[4]] = $content[9];
$insert[$package[5]] = $content[4];
$insert[$package[6]] = $content[6];
$insert[$package[7]] = rtrim(ltrim($content[38],' '),' ');
$insert[$package[8]] = 'usa';
}

//echo $content[38].'<br/>';
                    $insert['admin_added'] = '1';

                   // $insert['date_added'] = 'NOW()';
                    
                    $insert['is_suspended'] = '0';

                    if ((int) $type == 1)
                        $action = 0;
                    else
                        $action = $this->model->getBulkUpdateAction($insert['name']);

                    if ($action == 0) {
                        
                        $insert['is_published'] = '1';
                        
                        $this->model->insertBusiness($insert['name'], $insert);
						
						$action = $this->model->lastInsert();
						
                        $inserted++;
                    } else {

                        $this->model->updateBusiness($insert['name'], $insert);

                        $updated++;
                    }
				if($action > 0){	
                                      if(isset($insert['categories']) && !empty($insert['categories']))
					$this->model->updateCategory($insert['name'],$insert['categories'],$action);
				}
                //}

            endwhile;
            fclose($handle);

            @unlink($file);

            $this->data['updated'] = $updated;

            $this->data['inserted'] = $inserted;
        } catch (Exception $e) {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }
    
    public function suspended(){
        try{
            
            $this->data['lists'] = $this->model->getSuspendedCompanies();   
            
            $this->page = 'company/trash';
        }catch(Exception $e){
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }
    
}
