<?php
if(!isset($events)){
    $events=false;
}
if(!isset($eventsImageDir)){
    $eventsImageDir='';
}
?>
<section>
  <div class="inner-wrap">
    <div class="container">
      <div class="row clearfix">
        <div class="col-sm-8 col-md-8">
          <h2 id="business-heading">Events</h2>
          <div class="event-main">
          <?php if($events){
              foreach($events as $event){
              ?>
            <div class="third-wrap event">
              <div class="col-md-4">
                <div class="recent-image"> <img src="<?php echo $eventsImageDir.'/'.$event->image ?>" alt=""> </div>
                <div class="share-box clearfix">
                  <ul>
                    <li class="pull-left"><a href="#">Share&nbsp;<i class="fa fa-share-square"></i></a></li>
                    <li class="pull-right"><a href="#">Direction&nbsp;<i class="fa fa-location-arrow"></i></a> </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-8">
                <div class="recent-content">
                  <h2><?php echo $event->title ?></h2>
                  <div class="review-box">
                    <div class="sub-ratting" style="width:60%;"></div>
                  </div>
                  <div class="recent-description">
                    <p><?php echo $event->description?><a href="#"> Tempor invidunt.</a></p>
                  </div>
                  <div class="location">
                    <ul>
                      <li><?php echo $event->venue ?></li>
                      <li><?php echo $event->address ?></li>
                      <li><?php echo $event->contact ?></li>
                    </ul>
                    <p id="add-coupon"><a id="<?php echo $event->coupon_id ?>" href="#">Coupon</a></p>
                  </div>
                </div>
              </div>
            </div>
          <?php
              }
          } else { ?>
            <h1>No upcoming and recent events.</h1>
          <?php }?>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
		<div class="row">
          <div class="right-column">
            <div class="right-side-one">
              <h3>Review of the day</h3>
              <div class="media-block clearfix">
                <div class="photo-box"> <img src="img/review-car.jpg" alt="car"> </div>
                <div class="media-story">
                  <p><a href="#">Atomotive</a></p>
                  <div class="review-box">
                    <div class="sub-ratting" style="width:60%;"></div>
                  </div>
                  <p id="media-details">Love this place, I've been here 2 times and the most recent one was on the first day of Ramadan. I came too early before iftar and she was cool with me sitting there and not ordering for another 30-40…</p>
                  <a href="#" id="read-more">Read More</a> <a href="#" id="archive">Archive</a> </div>
              </div>
              <hr>
              <div class="popular-cateories">
                <h3>Popular categories</h3>
                <div class="categories-list">
                  <div class="media-block-one clearfix">
                    <div class="media-img"> <img src="img/review-car.jpg" alt="car"> </div>
                    <div class="media-detail">
                      <p id="media-detail-heading"><a href="#">East Bay Shopping</a> </p>
                      <p id="media-details-name"><a href="#">East Bay, CA </a></p>
                    </div>
                  </div>
                  </ul>
                </div>
                <div class="categories-list">
                  <div class="media-block-one clearfix">
                    <div class="media-img"> <img src="img/review-car.jpg" alt="car"> </div>
                    <div class="media-detail">
                      <p id="media-detail-heading"><a href="#">East Bay Shopping</a> </p>
                      <p id="media-details-name"><a href="#">East Bay, CA </a></p>
                    </div>
                  </div>
                  </ul>
                </div>
                <div class="categories-list">
                  <div class="media-block-one clearfix">
                    <div class="media-img"> <img src="img/review-car.jpg" alt="car"> </div>
                    <div class="media-detail">
                      <p id="media-detail-heading"><a href="#">East Bay Shopping</a> </p>
                      <p id="media-details-name"><a href="#">East Bay, CA </a></p>
                    </div>
                  </div>
                  </ul>
                </div>
              </div>
			 </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
