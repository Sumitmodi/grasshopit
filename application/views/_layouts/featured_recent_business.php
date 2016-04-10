<!--Featured Start-->
<div class="featured-listing listing clearfix" data-animate-to="fadeInDown">
    <div class="custom-container">
        <div class="featured-title">
            <h2><b>Recently</b> Added</h2>
        </div>
        <div class="row">

            <?php
            if (($recentBiz != NULL))
            {
                foreach ($recentBiz as $result)
                {

                    $result = (object) $result;

                    $businessId = strtolower($result->name[0]) . '_' . $result->sno;
                    //$path = '/' . DOMAIN . "/assets/uploads/{$businessId}/logo/" . $result->logo;                  
                    
                    if (isset($result->logo) && file_exists(BASEDIR."/assets/uploads/{$businessId}/logo/" . $result->logo))
                    {
                        $businessLogo = "/" . DOMAIN . "/assets/uploads/{$businessId}/logo/" . $result->logo;
                    } else
                    {
                        $businessLogo = '/' . DOMAIN . '/assets/images/logo.png';
                    }

                    $link_formatted = strtolower(str_replace(" ", "-", str_replace(".", "", $result->name)));

                    $link = "/" . DOMAIN . "/profile/" . $result->sno . '/' . preg_replace("/&#?[a-z0-9]+;/i", "", $link_formatted);

                    if (isset($result->categories))
                    {

                        $tags = explode("#", $result->categories);

                        if (count($tags) == 1)
                        {

                            $tags = explode(', ', $result->categories);
                        }
                    } else
                    {

                        $tags = false;
                    }
                    ?>

                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="featured-box">
                            <div class="top-featured">
                                <!--<div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>-->
                                <small>Recent</small> 
                            </div>
                            <div class="featured-img">
                                <a href="<?php echo $link ?>">
                                    <img src="<?php echo $businessLogo; ?>" class="img-rounded" style="border: 1px solid #aaa;max-height: 160px;padding: 5px;max-width: 230px;">
                                </a>
                            </div>
                            <div class="featured-category">
                                <!--<a href="<?php echo $link ?>"><?php echo html_entity_decode($result->name) ?></a>-->


                                <?php
                                if (count($tags))
                                {

                                    for ($i = 0; $i < count($tags); $i++)
                                    {

                                        $tags[$i] = str_replace('(', '', $tags[$i]);

                                        $tags[$i] = str_replace(')', '', $tags[$i]);
                                        
                                        $href = base_url().'search?query='.urlencode(preg_replace("/&#?[a-z0-9]+;/i","",strtolower($tags[$i])));
                                        
                                      //  $href = str_replace(' ', '-', strtolower($tags[$i]));

                                        echo "<a href='{$href}' style='display:inline-block;padding:0 3px;'>" . ucfirst($tags[$i]) . "</a>";

                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div>
        <?php
    }
}
?>
        </div>
        <div class="more-btn"><a href="#" class="view-more"><i class="fa fa-plus-square text-center"></i>View More</a></div>
    </div>
</div>
<!--Featured Start-->
