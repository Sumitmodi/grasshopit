
<!--Tab Section-->

<!--Tab Section--> 
<!--Review section-->
<section>
    <div class="testimonial clearfix" data-animate-to="fadeInLeftBig">
        <div class="container">
          <div class="row">
            <h2 class="main">BUSINESS REVIEWS</h2>
            <div class="slider">
              <div id="slider" class="flexslider">
                <ul class="slides">
                <?php
                    $bizReviews = $reviews;
                    
                    if(isset($bizReviews)){
                        
                        foreach($bizReviews as $br){
                            
                            $review_link = "profile/".$br->sno."/".strtolower(str_replace(" ","-",$br->name));
                            
                            $review_logo = "assets/uploads/".$br->media_path."/logo/".$br->logo;
                            
                            if(!is_file($review_logo))
                            
                                $review_logo = "assets/public/img/img1.jpg";
                            
                            if(strlen($br->about)>200)
                            
                                $br_about = substr($br->about,0,200)."...";
                            
                            else
                            
                                $br_about = $br->about;
                ?>

                        <li>
                            <div class="col-md-4">
                                <div class="testimonial-image"><a href="<?php echo $review_link ?>"><img style="max-height: 200px" src="<?php echo $review_logo?>" alt=""/></a></div>
                            </div>
                            <div class="col-md-8">
                                <div class="title-review">
                                    <h2><a href="<?php echo $review_link ?>"><?php echo ucfirst($br->name) ?></a></h2>
                                </div>
                                <div class="review-box">
                                    <div class="sub-ratting" style="width:60%;"></div>
                                </div>
                                <div class="review-content"  style="max-width: 450px;">
                                    <p><?php echo $br_about ?></p>
                                    <blockquote><a  href="<?php echo $review_link ?>">See details...</a></blockquote>
                                </div>
                            </div>
                        </li>
                    <?php
                    }
                }?>
                </ul>
                  
          </div>
              <!--#slider--> 
            </div>
        <!--.slider--> 
      </div>
        </div>
  
  </div>

    </section>

