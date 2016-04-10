<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/17/14
 * Time: 5:58 PM
 */
//echo '<pre>'; print_r($sliderImages);

if (!isset($sliderImages)) {
    $sliderImages = false;
}
if (!isset($sliderImagesDir)) {
    $sliderImagesDir = '/'.DOMAIN.'/assets/public/img';
}
//echo $sliderImagesDir;
?>


<!--Flex Slider Start-->
<section class="slider flex-slider">
  <div class="flexslider">
    <ul class="slides">
         <?php
         if ($sliderImages) {
            foreach ($sliderImages as $slider) {
                $path = $sliderImagesDir.'/'.$slider->image;
                if(file_exists($path))
                    $image_file = $slider->image;
                else
                    $image_file = 'shopping.jpg';
          ?>
        <li> <img src="<?php echo $sliderImagesDir.'/'.$image_file?>"> </li>
             
      <?php
            }
          } else {
          ?>
             <li><img src="assets/public/img/shopping.jpg">
                <div class="col-lg-12">
                    <div class="slider-title">
                        <h3>Grow Your Business</h3>
                    </div>
                    <div class="slider-subtitle">
                        <h4>Right Now</h4>
                    </div>
                </div>
             </li>
             <li><img src="assets/public/img/restaurant.jpg"> </li>
             <li><img src="assets/public/img/spa.jpg"> </li>
             <?php
             }
            ?>
    </ul>
  </div>
</section>
<!--Flex Slider End-->

