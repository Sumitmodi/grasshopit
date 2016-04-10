<?php
$url = '?query=' . urlencode($query);

if (!empty($loc))
{
    $url = '&location=' . $loc;
}
?>
<!--Inner-content Start-->
<div class="inner-content">
    <div class="custom-container">
        <div class="right-content">
            <div class="right-top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title">
                            <h3>Showing Results For &ldquo;<?php echo $query ?>&rdquo;</h3> 
                            <span class="badge"><?php echo $total ?></span>                            
                        </div>
                    </div>
                    <!--<div class="col-md-6">
                        <form class="navbar-form search-form pull-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Filter by keywords">
                            </div>
                        </form>
                    </div>-->
                    <!--<div class="col-md-6">
                        <span class="align-right">View as:</span>
                        <ul class="page-view">
                            <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                            <li class="active"><a href="#"><i class="fa fa-th-large"></i></a></li>
                        </ul>
                    </div>-->
                    <?php
                    if ($pages > 1)
                    {
                        ?>
                        <div class="col-md-6">
                            <nav>
                                <ul class="pagination pull-right">
                                    <?php if ($this->input->get('page', TRUE) - 1 > 0)
                                    {
                                        $p =  $this->input->get('page', TRUE) - 1;
                                    ?> 
                                        <li><a href="<?php echo $url . "&page={$p}";?>">&laquo;</a></li>
                                    <?php } ?>
                                    <?php
                                    for ($i = 1; $i <= $pages; $i++)
                                    {
                                        ?> 
                                        <li>
                                            <a href="<?php echo $url . "&page={$i}"; ?>">
                                                <?php echo $i; ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                    <?php
                                    if ($this->input->get('page', TRUE) + 1 <= $pages)
                                    {
                                        $p = $this->input->get('page', TRUE) + 1;
                                        ?> 
                                        <li>
                                            <a href="<?php echo $url . "&page={$p}"; ?>">&raquo;</a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </nav>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <p>Found <?php echo $total;?> results in <?php echo number_format((float)$time,5);?> secs.</p>
            <?php $cur = $this->input->get('page') == false ? 1 : $this->input->get('page');?>
            <p>
                <small>Showing results 
                    <?php echo ($cur -1)*$rpp + 1;?> - 
                        <?php echo ($cur-1)*$rpp + count($results) ;?> of 
                            <?php echo $total;?>
                </small>
            </p>
            <div class="row">
                <?php
                if (($results != NULL))
                {
                    foreach ($results as $result)
                    {

                        $result = (object) $result;

                        $businessId = strtolower($result->name[0]) . '_' . $result->sno;

                        if (isset($result->logo))
                        {
                            $businessLogo = "/" . DOMAIN . "/assets/uploads/{$businessId}/logo/" . $result->logo;
                        } else
                        {
                            $businessLogo = '/' . DOMAIN . '/assets/images/logo.png'; //NULL;
                        }

                        $link_formatted = strtolower(str_replace(" ", "-", str_replace(".", "", $result->name)));
                        
                        $link_formatted = str_replace('&','',html_entity_decode($link_formatted));   
                        
                        $link_formatted = str_replace('amp;','',html_entity_decode($link_formatted));         
                                                
                        $link = "/" . DOMAIN . "/profile/" . $result->sno . '/' . preg_replace("/&#?[a-z0-9]+;/i", "", $link_formatted);

                        //$link = base_url().'search?query='.urlencode(preg_replace("/&#?[a-z0-9]+;/i","",$link_formatted));

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
                        <div class="col-md-6">
                            <div class="search-page">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="<?php echo $link ?>"><img src="<?php echo $businessLogo ?>" class="img-rounded"></a>
                                    </div>
                                    <div class="col-md-9">
                                        <a href="<?php echo $link ?>"><h5><?php echo html_entity_decode($result->name) ?></h5></a>
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
                                        <p><?php echo substr($result->about, 0, 100) ?></p>
                                        <a href="<?php echo $link ?>"><i class="fa fa-angle-right"></i> Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>
                    <?php
                    if ($pages > 1)
                    {
                        ?>
            <div class="row">
                            <nav>
                                <ul class="pagination pull-right">
                                    <?php if ($this->input->get('page', TRUE) - 1 > 0)
                                    {
                                        $p =  $this->input->get('page', TRUE) - 1;
                                    ?> 
                                        <li><a href="<?php echo $url . "&page={$p}";?>">&laquo;</a></li>
                                    <?php } ?>
                                    <?php
                                    for ($i = 1; $i <= $pages; $i++)
                                    {
                                        ?> 
                                        <li>
                                            <a href="<?php echo $url . "&page={$i}"; ?>">
                                                <?php echo $i; ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                    <?php
                                    if ($this->input->get('page', TRUE) + 1 <= $pages)
                                    {
                                        $p = $this->input->get('page', TRUE) + 1;
                                        ?> 
                                        <li>
                                            <a href="<?php echo $url . "&page={$p}"; ?>">&raquo;</a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </nav>
            </div>
                    <?php } ?>   
            <?php if(empty($results)) { ?> 
            <div class="row">
                <h3>We are very sorry that we could not find anything related to this keyword. We are working on it. Please visit next time or you can try searching similar using our beautiful search bar on the top.</h3>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!--Inner-content End-->
