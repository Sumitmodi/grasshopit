<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/18/14
 * Time: 4:37 PM
 */
/*echo '<pre>';
print_r($info);
print_r($media_path);
print_r($gallery);
die;*/
$b = 0;

for ($i = 0; $i < count($reviews) - 1; $i++)
{
    if ($reviews[$i]->rating < $reviews[$i + 1]->rating)
    {
        if (!empty($reviews[$i + 1]->comment))
        {
            $b = $i + 1;
        }
    }
}

if (isset($reviews[$b]))
{
    $best = $reviews[$b];
}

$rel = true;

require_once dirname(__FILE__) . DS . 'includes' . DS . 'functions.php';
?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/public/css/colorbox.css" type="text/css" />

<script src="<?php echo base_url(); ?>assets/public/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/public/js/jspatch.js"></script>
<!-- Inner Page Start-->
<?php
if (isset($gallery))
{
    if (is_array($gallery) && count($gallery) > 0)
    {
        ?>
        <section class="gallery-img clearfix">
            <div class="custom-container">
                <div class="popup-gallery"> 
                    <?php foreach ($gallery as $img)
                    { ?> 
                        <a class="group4"  href="<?php echo base_url().$media_path.$img->media_type.'/'.$img->media_name;?>">
                            <img src="<?php echo base_url().$media_path.$img->media_type.'/'.$img->media_name;?>" alt="">
                        </a>
                    <?php } ?> 
                </div>
            </div>
        </section>
        <!--Inner Page  End-->
        <?php
    }
}
?>
<!--Title bar Start-->
<div class="title-bar">

    <div class="container custom-container">

        <div class="row">

            <div class="col-md-6 col-sm-6 col-xs-12">
                <h2>Company Profile</h2>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">

                <ul class="breadcrumb pull-right">

                    <li><a href="<?php echo base_url(); ?>">Home</a></li>

                    <li class="active">Company Profile</li>

                </ul>

            </div>

        </div>

    </div>

</div>

<!--Title bar End-->
<!--Inner-content Start-->
<div class="inner-content">

    <div class="custom-container">

        <div class="row">

            <div class="col-md-9 col-sm-8 col-xs-8">
                <div class="right-content">
                    <div class="right-top top">
                        <div class="row">
                            <div class="col-md-8 col-sm-6 col-xs-6">
                                <div class="title">
                                    <?php
                                    $logo = BASEDIR . DS . 'assets/uploads/' . strtolower($info[0]->name[0]) . '_' . $info[0]->sno . '/logo/' . $info[0]->logo;
                                    if (file_exists($logo))
                                    {
                                        $logo = base_url() . 'assets/uploads/' . strtolower($info[0]->name[0]) . '_' . $info[0]->sno . '/logo/' . $info[0]->logo;
                                    } else
                                    {
                                        $logo = base_url() . 'assets/public/img/small-logo.png';
                                    }
                                    ?>
                                    <div class="company-logo">
                                        <a href="#">
                                            <img src="<?php echo $logo; ?>" alt="<?php echo $info[0]->name; ?>" style="width:72px;">
                                        </a>
                                    </div>

                                    <h3><?php echo html_entity_decode($info[0]->name); ?></h3>

                                    <span>Web Development</span>

                                </div>
                            </div>
                            <!--
                            <div class="col-md-4">
                                <div class="social-icon pull-right">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            -->

                        </div>

                    </div>

                    <div class="right-text">

                        <p><?php echo!empty($info[0]->about) ? $info[0]->about : 'Please login as business owner and add about your business.'; ?></p>
                    </div>
                    <div class="services">
                        <h4>Services</h4>
                        <ul>
                            <?php
                            if (isset($info[0]->categories))
                            {

                                $tags = explode("#", $info[0]->categories);

                                if (count($tags) == 1)
                                {

                                    $tags = explode(', ', $info[0]->categories);
                                }
                            } else
                            {

                                $tags = false;
                            }

                            if (count($tags))
                            {

                                for ($i = 0; $i < count($tags); $i++)
                                {

                                    $tags[$i] = str_replace('(', '', $tags[$i]);

                                    $tags[$i] = str_replace(')', '', $tags[$i]);

                                    if (empty($tags[$i]))
                                    {
                                        continue;
                                    }

                                    $href = base_url() . 'search?query=' . urlencode(strtolower($tags[$i]));

                                    ///" . DOMAIN . "/category/" . str_replace(' ', '-', strtolower($tags[$i])) . "

                                    echo "<li><a href='{$href}'>" . ucfirst($tags[$i]) . "</a></li>";
                                }
                            }
                            ?>

                        </ul>

                    </div>

                    <?php
                    if (!empty($reviews))
                    {
                        $rel = false;
                        ?>

                        <div class="rating">
                            <h4>Reviews</small></h4>
                            <?php
                            if ($reviews and ! empty($reviews))
                            {

                                foreach ($reviews as $review)
                                {

                                    $businessId = strtolower($info[0]->name[0]) . '_' . $info[0]->sno;

                                    if (isset($review->image))
                                    {

                                        $businessLogo = "/" . DOMAIN . "/assets/uploads/{$businessId}/reviews/" . $review->image;
                                    } else
                                    {

                                        $businessLogo = false; //'/' . DOMAIN . '/assets/images/logo.png'; //NULL;
                                    }
                                    ?>


                                    <div class="rating-list">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-3 col-xs-4">
                                                <div class="side-rating">

                                                    <?php
                                                    for ($i = 1; $i <= $review->rating; $i++)
                                                    {
                                                        ?>
                                                        <i class="fa fa-star"></i>
                                                        <?php
                                                    }

                                                    for ($j = 1; $j <= 5 - $review->rating; $j++)
                                                    {
                                                        ?>

                                                        <i class="fa fa-star-o"></i>

            <?php } ?>

                                                    <h5>Quality</h5>
                                                </div>
                                            </div>

                                            <div class="col-md-8 col-sm-9 col-xs-8">
                                                <small>
                                                    <a href="javascript:void(0);">
            <?php echo ucfirst($review->username) . ' - ' . formatTime($review->date); ?>
                                                    </a> 
                                                </small>
                                                <p><?php echo $review->comment; ?></p>
                                            </div>
                                            <?php
                                            if ($businessLogo != false)
                                            {
                                                ?>
                                                <div class="thumbnail-img" style="height: 70px; width: 70px; float: left;">
                                                    <img src="<?php echo $businessLogo; ?>"/>
                                                </div>
            <?php } ?>
                                        </div>
                                    </div>
                                    <hr/>
                                    <?php
                                }
                            }
                            ?>

                        </div>
<?php } ?>
                    <div class="comments">
                        <!-- begin html commentbox.com -->
                        <h4 class="comment-reply-title">Leave a review</h4>
                        <?php
                        if ($this->session->userdata('logged_in') != false)
                        {

                            if ($allow == true)
                            {
                                ?>
                                <form method="post" action="/<?php echo DOMAIN ?>/post/review" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="hidden" name="bus-id" value="<?php echo $this->uri->segment('2'); ?>">
                                        <input type="hidden" name="bus-name" value="<?php echo $this->uri->segment('3'); ?>">
                                        <textarea class="form-control" name="comment"  rows="8" placeholder="Write Your Review..."></textarea>
                                        <div id="upload-file" class="form-group">
                                            <label for="exampleInputFile">File input</label>
                                            <ul>
                                                <li>
                                                    <input class="" name="file" multiple type="file" id="exampleInputFile" placeholder="No Image or Video selected.">
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="">
                                            <label class="" for="rating">Rate this site : </label>
                                            <label class="input-sm label-info rate-wrapper" for="rating">
                                                1&nbsp;<input class="" type="radio" name="rating" value="1">
                                            </label>

                                            <label class="input-sm label-info rate-wrapper" for="rating">
                                                2&nbsp;<input class="" type="radio" name="rating" value="2">
                                            </label>

                                            <label class="input-sm label-info rate-wrapper" for="rating">
                                                3&nbsp;<input class="" type="radio" name="rating" value="3">
                                            </label>

                                            <label class="input-sm label-info rate-wrapper" for="rating">
                                                4&nbsp;<input class="" type="radio" name="rating" value="4">
                                            </label>

                                            <label class="input-sm label-info rate-wrapper" for="rating">
                                                5&nbsp;<input class="" type="radio" name="rating" value="5">
                                            </label>
                                        </div>
                                        <hr/>
                                        <div>
                                            <input class="btn btn-success" type="submit" name="post" value="Post Review">

                                        </div>
                                    </div>
                                </form>

                            <?php
                            } else
                            {
                                ?>
                                <h3>Dear <?php echo $this->session->userdata('name'); ?>, We have received your review. Thank you for your precious review.</h3>
                            <?php } ?>

<?php
} else
{
    ?>
                            <p>You must be logged in to leave a review.</p>
                            <div class="login-wrap pull-right">
                                <ul>
                                    <li>
                                        <a data-target="#myModal1" data-toggle="modal" href="#">
                                            <i class="fa fa-power-off"></i> Login
                                        </a>
                                    </li>
                                    <li>
                                        <a data-target="#myModal" data-toggle="modal" href="#">
                                            <i class="fa fa-plus-square"></i> Sign Up
                                        </a>
                                    </li>
                                </ul>
                            </div>
                    <?php } ?>
                    </div>
                    <?php
                    if (isset($also))
                    {
                        if (!empty($also))
                        {
                            ?>
                            <div class="row">
                                <h4>Related to &ldquo;<b><?php echo html_entity_decode($info[0]->name); ?></b>&rdquo;</h4>
                                <?php
                                foreach ($also as $k => $a)
                                {
                                    if ($k >= 10)
                                    {
                                        break;
                                    }
                                    $inf = $a['info'][0];

                                    $logo = BASEDIR . DS . $a['media'] . DS . 'logo' . DS . $inf->logo;

                                    if (file_exists($logo))
                                    {
                                        $logo = base_url() . $a['media'] . DS . 'logo' . DS . $inf->logo;
                                    } else
                                    {
                                        $logo = base_url() . 'assets/images/logo.png';
                                    }

                                    if (isset($inf->categories))
                                    {
                                        $tags = explode("#", $inf->categories);

                                        if (count($tags) == 1)
                                        {

                                            $tags = explode(', ', $inf->categories);
                                        }
                                    } else
                                    {
                                        $tags = false;
                                    }

                                    $link_formatted = strtolower(str_replace(" ", "-", str_replace(".", "", $inf->name)));

                                    $link_formatted = str_replace('&', '', html_entity_decode($link_formatted));

                                    $link_formatted = str_replace('amp;', '', html_entity_decode($link_formatted));


                                    $link = "/" . DOMAIN . "/profile/" . $inf->sno . '/' . preg_replace("/&#?[a-z0-9]+;/i", "", $link_formatted);
                                    ?> 
                                    <div class="col-md-6">
                                        <div class="search-page">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <a href="<?php echo $link ?>"><img src="<?php echo $logo ?>" class="img-rounded"></a>
                                                </div>
                                                <div class="col-md-9">
                                                    <a href="<?php echo $link ?>"><h5><?php echo html_entity_decode($inf->name) ?></h5></a>
                                                    <span>

                                                        <?php
                                                        if (count($tags))
                                                        {

                                                            for ($i = 0; $i < count($tags); $i++)
                                                            {

                                                                $tags[$i] = str_replace('(', '', $tags[$i]);

                                                                $tags[$i] = str_replace(')', '', $tags[$i]);

                                                                $href = base_url() . 'search?query=' . urlencode(preg_replace("/&#?[a-z0-9]+;/i", "", strtolower($tags[$i])));

                                                                echo "<a href='{$href}'>" . ucfirst($tags[$i]) . "</a>";

                                                                if ($i != count($tags) - 1)
                                                                    echo ', ';
                                                            }
                                                        }
                                                        ?></span>
                                                    <p><?php echo substr($inf->about, 0, 100) ?></p>
                                                    <a href="<?php echo $link ?>"><i class="fa fa-angle-right"></i> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                            <?php } ?>                        
                            </div>
        <?php
    }
}
?>   
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-4">
                <div class="sidenav clearfix">
                    <div class="contact-detail">
                        <h4>Contact Details</h4>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td><?php echo html_entity_decode($info[0]->name); ?></td>
                                </tr>                               
                                <tr>
                                    <td>Added</td>
                                    <td><?php echo formatTime($info[0]->date_added); ?></td>
                                </tr>                                
<?php
if (!empty($info[0]->state))
{
    ?>
                                    <tr>
                                        <td>State</td>
                                        <td><?php echo ucfirst($info[0]->state); ?></td>
                                    </tr>
                                <?php } ?>                                
<?php
if (!empty($info[0]->country))
{
    ?>
                                    <tr>
                                        <td>Country</td>
                                        <td><?php echo strtoupper($info[0]->country); ?></td>
                                    </tr>
                                <?php } ?>                                
<?php
if (!empty($info[0]->city))
{
    ?>
                                    <tr>
                                        <td>City</td>
                                        <td><?php echo ucfirst($info[0]->city); ?></td>
                                    </tr>
                                <?php } ?>
<?php
if (!empty($info[0]->address))
{
    ?>
                                    <tr>
                                        <td>Address</td>
                                        <td><?php echo ucfirst($info[0]->address); ?></td>
                                    </tr>
                                <?php } ?>
<?php
if (!empty($info[0]->telephone))
{
    ?>
                                    <tr>
                                        <td>Phone</td>
                                        <td><?php echo $info[0]->telephone; ?></td>
                                    </tr>
                                <?php } ?>

<?php
if (!empty($info[0]->fax))
{
    ?>
                                    <tr>
                                        <td>Fax</td>
                                        <td><?php echo $info[0]->fax; ?></td>
                                    </tr>
                                <?php } ?>

<?php
if (!empty($info[0]->website))
{
    ?>
                                    <tr>
                                        <td>Website</td>
                                        <td><a href="<?php echo $info[0]->website; ?>" target="_blank">View Website</a></td>
                                    </tr>
                                <?php } ?>                                
<?php
if (!empty($info[0]->email))
{
    ?>
                                    <tr>
                                        <td>Email</td>
                                        <td><?php echo $info[0]->email; ?></td>
                                    </tr>
<?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <!--Similar-listing Start-->
                    <div class="similar-listing listings">
                        <h4>People like going</h4>
                        <?php
                        foreach ($related as $re)
                        {
                            $businessId = strtolower($re['info'][0]->name[0]) . '_' . $re['info'][0]->sno;

                            if (isset($re['info'][0]->logo))
                            {

                                $businessLogo = "/" . DOMAIN . "/assets/uploads/{$businessId}/logo/" . $re['info'][0]->logo;
                            } else
                            {

                                $businessLogo = '/' . DOMAIN . '/assets/images/logo.png'; //NULL;
                            }

                            $link_formatted = strtolower(str_replace(" ", "-", str_replace(".", "", $re['info'][0]->name)));

                            $link_formatted = str_replace('&', '', html_entity_decode($link_formatted));

                            $link_formatted = str_replace('amp;', '', html_entity_decode($link_formatted));

                            $link = "/" . DOMAIN . "/profile/" . $re['info'][0]->sno . '/' . preg_replace("/&#?[a-z0-9]+;/i", "", $link_formatted);
                            ?>
                            <div class="similar-product clearfix">
                                <div class="thumb-img">
                                    <a href="<?php echo $link ?>">
                                        <img src="<?php echo $businessLogo ?>" alt="" /><span class="img-overlay"></span> 
                                    </a>
                                </div>
                                <div class="side-product">
                                    <div class="company-deatil">
                                        <h5 class="name">
                                            <a href="<?php echo $link; ?>"><?php echo html_entity_decode($re['info'][0]->name); ?> </a>
                                            <p><?php echo $re['info'][0]->address; ?></p>
                                        </h5>
                                    </div>
                                </div>

                            </div>
                    <?php } ?>
                    </div>
                    <!--Similar-listing End-->
                    <!--Recomend-listing Start-->
<?php
if (isset($best))
{
    ?>
                        <div class="best-review listings">

                            <h4>Best Review</h4>
                            <?php
                            $businessId1 = strtolower($info[0]->name[0]) . '_' . $info[0]->sno;

                            if (isset($best->image))
                            {

                                $businessLogo1 = "/" . DOMAIN . "/assets/uploads/{$businessId1}/reviews/" . $best->image;
                            } else
                            {

                                $businessLogo1 = '/' . DOMAIN . '/assets/images/logo.png'; //NULL;
                            }
                            ?>
                            <div class="similar-product clearfix">
                                <div class="thumb-img"><img src="<?php echo $businessLogo1 ?>" alt="" /><span class="img-overlay"></span> </div>
                                <div class="side-product">
                                    <div class="company-deatil">
                                        <h5 class="name"><?php echo $best->username ?>
                                            <p><?php echo $review->comment; ?></p>
                                            <p>
                                                <?php
                                                for ($i = 1; $i <= $best->rating; $i++)
                                                {
                                                    ?>
                                                    <i class="fa fa-star"></i>
                                                    <?php
                                                }

                                                for ($j = 1; $j <= 5 - $best->rating; $j++)
                                                {
                                                    ?>
                                                    <i class="fa fa-star-o"></i>
    <?php } ?>

                                            </p>
                                        </h5>
                                    </div>
                                    <div class="rating"><img src="img/star-icon.png" alt="" /></div>
                                </div>
                            </div>
                        </div>
<?php } ?>

                    <!--<div class="discount-coupon listings">
                    
                        <h4>Discount Coupon</h4>
                    
                        <div class="discount"><img src="img/coupon.jpg" alt=""></div>
                    
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--Inner-content End-->
