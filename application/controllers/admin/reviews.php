<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/15 4:59:05 PM
 * File     :   company.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

class Reviews extends CI_Controller
{

    protected $data;
    protected $page;

    public function __construct()
    {
        parent::__construct();

        $this->load->library('imageuploader');

        $this->load->model('review/reviewmodel', 'revmodel', true);
    }

    public function entry()
    {
        try
        {

            $target = $this->input->get('target');

            if (empty($target) || strtolower($target) == 'dashboard')
            {
                //Dashboard is loaded
                $this->review_list();
            } else
            {
                $target = strtolower($target);

                if (method_exists($this, $target))
                {
                    $this->{$target}();
                } else
                {
                    show_404('company.php');
                }
            }
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function review_list()
    {
        try
        {
            $this->data['title'] = ucfirst(DOMAIN) . ' :: Reviews';

            $this->data['counts'] = $this->revmodel->getReviews();

            $this->page = 'reviews/reviews';
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    public function allreview()
    {
        try
        {

            $this->data['title'] = ucfirst(DOMAIN) . ' :: All Reviews';

            $this->data['counts'] = $this->revmodel->getAllReviews();

            $this->page = 'reviews/all_review';
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function edit()
    {
        try
        {
            $id = $this->input->get('id');
            $data = $this->input->post(NULL, TRUE);

            $files = $_FILES;

            $category_info = $this->model->select('unique_category', '*', array('sno' => $id), NULL, 1);
            if (empty($data))
            {
                if (empty($category_info))
                {
                    throw new Exception('Post does not exists.', '900');
                }

                $this->data['results'] = $category_info;

                $this->page = 'edit_category';
            } else
            {

                if ($category_info->image != "")
                {

                    $imagename = BASEDIR . "/assets/uploads/admin/category/images" . $category_info->image;

                    if ($imagename != "" && file_exists($imagename))
                    {
                        echo "here";

                        unlink($imagename);
                    }
                }

                if ($category_info->image != "")
                {

                    $imagelogo = BASEDIR . "/assets/uploads/admin/category/logo" . $category_info->logo;

                    if ($imagelogo != "" && file_exists($imagelogo))
                    {
                        unlink($imagelogo);
                    }
                }
                if (isset($files['image']))
                {
                    $this->imageuploader->
                            set('file', $files)->
                            set('name', 'image')->
                            set('uploadType', 'single')->
                            set('fileType', 'image')->
                            set('root', BASEDIR)->
                            set('directory', 'assets/uploads/admin/category/images')->
                            set('minWidth', 150)->
                            set('minHeight', 150);

                    $image_upload = $this->imageuploader->upload();
                    $imageFile = $this->imageuploader->get('fileName');
                }

                if (isset($files['logo']))
                {
                    $this->imageuploader->
                            set('file', $files)->
                            set('name', 'logo')->
                            set('uploadType', 'single')->
                            set('fileType', 'image')->
                            set('root', BASEDIR)->
                            set('directory', 'assets/uploads/admin/category/logo')->
                            set('minWidth', 150)->
                            set('minHeight', 150);

                    $logo_upload = $this->imageuploader->upload();
                    $logoFile = $this->imageuploader->get('fileName');
                }

                if ($image_upload && $logo_upload)
                {

                    $post_data = array(
                        'name' => $data['name'],
                        'image' => $imageFile,
                        'logo' => $logoFile,
                        'icon_class' => $data['class']
                    );
                    $post_update = $this->model->update('unique_category', $post_data, array('sno' => $id));

                    $uri = base_url() . "superadmin/?tab=category";

                    redirect($uri);
                } else
                {
                    throw new Exception('Please select the image.', '900');
                    $this->data['result'] = $post;
                    $this->page = 'edit_category';

                    return;
                }
            }
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function view()
    {
        try
        {

            $cid = $this->input->get('reviews', TRUE);

            $source = $this->input->get('source', TRUE);

            $alpha = $this->input->get('alpha', TRUE);

            if (!empty($source))
            {

                if (empty($cid))
                {

                    if (!empty($alpha))
                    {
                        $list = $this->revmodel->getReviewsByAlpha($alpha);

                        if ($list == 0)
                        {
                            $this->data['error'] = 'No records found.';
                        } else
                        {

                            $this->data['lists'] = $list;
                        }
                    } else
                    {
                        show_404('reviews.php');
                    }
                } else
                {
                    if (!empty($alpha))
                    {
                        //ambiguous; confusion; so show 404
                        show_404('reviews.php');
                    } else
                    {
                        //show company by id
                    }
                }
            } else
            {

                if (!empty($cid))
                {

                    if (!empty($alpha))
                    {
                        //ambiguous; confusion; so show 404
                        show_404('reviews.php');
                    } else
                    {
                        //show company by id from registration table
                    }
                } else
                {
                    if (!empty($alpha))
                    {
                        //show 404
                        show_404('reviews.php');
                    } else
                    {
                        //show 404
                        show_404('reviews.php');
                    }
                }
            }
            $this->page = 'reviews/list';
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function allview()
    {
        try
        {

            $cid = $this->input->get('reviews', TRUE);

            $source = $this->input->get('source', TRUE);

            $alpha = $this->input->get('alpha', TRUE);

            if (!empty($source))
            {
                if (empty($cid))
                {

                    if (!empty($alpha))
                    {
                        $list = $this->revmodel->getAllReviewsByAlpha($alpha);
                        if ($list == 0)
                        {
                            $this->data['error'] = 'No records found.';
                        } else
                        {
                            $this->data['lists'] = $list;
                        }
                    } else
                    {
                        show_404('reviews.php');
                    }
                } else
                {
                    if (!empty($alpha))
                    {
                        //ambiguous; confusion; so show 404
                        show_404('reviews.php');
                    } else
                    {
                        //show company by id
                    }
                }
            } else
            {
                if (!empty($cid))
                {
                    if (!empty($alpha))
                    {
                        //ambiguous; confusion; so show 404
                        show_404('reviews.php');
                    } else
                    {
                        //show company by id from registration table
                    }
                } else
                {
                    if (!empty($alpha))
                    {
                        //show 404
                        show_404('reviews.php');
                    } else
                    {
                        //show 404
                        show_404('reviews.php');
                    }
                }
            }
            $this->page = 'reviews/all_list';
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function remove()
    {
        try
        {
            $source = $this->input->get('source', TRUE);

            $review = $this->input->get('review', TRUE);

            $alpha = $this->input->get('alpha', TRUE);

            if (strtolower($source) == 'options')
            {
                $result = $this->revmodel->removeReview($review, $alpha);

                if ($result)
                {
                    $this->data['success'] = 'Review Removed Successfully.';
                } else
                {
                    $this->data['error'] = 'Review could not be Removed.';
                }
            } else
            {
                $this->data['error'] = 'You do not have valid previliages to perform this action.';
            }

            $list = $this->revmodel->getReview($alpha);

            if ($list == 0)
            {

                $this->data['error'] = 'No records found.';
            } else
            {

                $this->data['result'] = $list;
            }         

            $this->page = '/reviews/all_list';
        } catch (Exception $e)
        {
            $this->header = $e->getCode();

            $this->message = $e->getMessage();
        }
    }

    protected function publish()
    {
        try
        {
            $source = $this->input->get('source', TRUE);

            $review = $this->input->get('review', TRUE);

            $alpha = $this->input->get('alpha', TRUE);

            if (strtolower($source) == 'options')
            {
                $result = $this->revmodel->publishReviews(strtolower($alpha), $review);
                if ($result)
                {
                    $this->data['success'] = 'Reviews Published Successfully.';
                } else
                {
                    $this->data['error'] = 'Reviews could not be Published.';
                }
            } else
            {
                $this->data['error'] = 'You do not have valid previliages to perform this action.';
            }

            $list = $this->revmodel->getReview($alpha);

            if ($list == 0)
            {
                $this->data['error'] = 'No records found.';
            } else
            {
                $this->data['lists'] = $list;
            }
           
            $this->page = 'reviews/all_list';
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function unpublish()
    {
        try
        {
            $source = $this->input->get('source', TRUE);

            $review = $this->input->get('review', TRUE);

            $alpha = $this->input->get('alpha', TRUE);

            if (strtolower($source) == 'options')
            {
                $result = $this->revmodel->unpublishReviews(strtolower($alpha), $review);
                if ($result)
                {
                    $this->data['success'] = 'Reviews Unpublished Successfully.';
                } else
                {
                    $this->data['error'] = 'Reviews could not be Unpublished.';
                }
            } else
            {
                $this->data['error'] = 'You do not have valid previliages to perform this action.';
            }

            $list = $this->revmodel->getReview($alpha);

            if ($list == 0)
            {
                $this->data['error'] = 'No records found.';
            } else
            {
                $this->data['lists'] = $list;
            }
            
            $this->page = 'reviews/all_list';
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function published()
    {
        try
        {
            $source = $this->input->get('source', TRUE);

            $review = $this->input->get('review', TRUE);

            $alpha = $this->input->get('alpha', TRUE);

            if (strtolower($source) == 'options')
            {
                $result = $this->revmodel->publishReviews(strtolower($alpha), $review);
                if ($result)
                {
                    $this->data['success'] = 'Reviews Published Successfully.';
                } else
                {
                    $this->data['error'] = 'Reviews could not be Published.';
                }
            } else
            {
                $this->data['error'] = 'You do not have valid previliages to perform this action.';
            }

            $list = $this->revmodel->getReviewsByAlpha($alpha);

            if ($list == 0)
            {
                $this->data['error'] = 'No records found.';
            } else
            {
                $this->data['lists'] = $list;
            }
            
            $this->page = 'reviews/all_list';
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function unpublished()
    {
        try
        {
            $source = $this->input->get('source', TRUE);

            $review = $this->input->get('review', TRUE);

            $alpha = $this->input->get('alpha', TRUE);

            if (strtolower($source) == 'options')
            {
                $result = $this->revmodel->unpublishReviews(strtolower($alpha), $review);
                if ($result)
                {
                    $this->data['success'] = 'Reviews Unpublished Successfully.';
                } else
                {
                    $this->data['error'] = 'Reviews could not be Unpublished.';
                }
            } else
            {
                $this->data['error'] = 'You do not have valid previliages to perform this action.';
            }

            $list = $this->revmodel->getReviewsByAlpha($alpha);

            if ($list == 0)
            {
                $this->data['error'] = 'No records found.';
            } else
            {
                $this->data['lists'] = $list;
            }
            $this->page = 'reviews/all_list';
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    protected function removed()
    {
        try
        {
            $source = $this->input->get('source', TRUE);

            $review = $this->input->get('review', TRUE);

            $alpha = $this->input->get('alpha', TRUE);

            if (strtolower($source) == 'options')
            {
                $result = $this->revmodel->removeReview($review, $alpha);

                if ($result)
                {
                    $this->data['success'] = 'Review Removed Successfully.';
                } else
                {
                    $this->data['error'] = 'Review could not be Removed.';
                }
            } else
            {
                $this->data['error'] = 'You do not have valid previliages to perform this action.';
            }

            $list = $this->revmodel->getReviewsByAlpha($alpha);

            if ($list == 0)
            {
                $this->data['error'] = 'No records found.';
            } else
            {
                $this->data['result'] = $list;
            }

            $this->page = '/reviews/all_list';
        } catch (Exception $e)
        {
            $this->header = $e->getCode();

            $this->message = $e->getMessage();
        }
    }

}
