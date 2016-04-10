<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/17/14
 * Time: 3:01 PM
 */
?>

<footer>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="footer-one">
                        <h2>Featured business</h2>
                        <ul>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="footer-two">
                        <h2>Category List</h2>
                        <p><a href="#">Restaurant</a></br>
                            <a href="#">Night Life</a></br>
                            <a href="#">Shopping</a></br>
                            <a href="#">Automotive</a></br>
                            <a href="#">Beauty & Spa</a></br>
                            <a href="#">Coffee & Tea</a></br>
                            <a href="#">Health & Medical</a></br>
                            <a href="#">Home Services</a>
                        </p>
                    </div>

                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="footer-two">
                        <h2>More With Us</h2>
                        <p>
                            <a href="/<?php echo DOMAIN ?>/about">About</a><br/>
                            <a href="#">Advertise</a><br/>
                            <a href="#">Careers</a><br/>
                            <a href="#">Privacy Policy</a><br/>
                        </p>

                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="footer-four">
                        <h2>Contact Information</h2>
                        <ul>
                            <li><span><i class="fa fa-envelope-o"></i></span>
                                <?php if($site){echo '<a href="mailto:'.$site->email.'">'.$site->email.'</a>'; } else { echo '<a href = "mailto:info@grasshopit.com">info@grasshopit.com</a>'; }?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="social-icons">
                <ul>
                    <li id="facebook"><a href="#"><img src="<?php echo "/".DOMAIN."/"?>assets/public/img/facebook.png" alt="facebook" title="facebook"></a></li>
                    <li id="twitter"><a href="#"><img src="<?php echo "/".DOMAIN."/"?>assets/public/img/twitter.png" alt="twitter" title="twitter"></a></li>
                    <li id="googleplus"><a href="#"><img src="<?php echo "/".DOMAIN."/"?>assets/public/img/social-googleplus.png" alt="google_plus"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--footer-->

<div class="copyright">
    <div class="container">
          <div class="row">
              <p>
                  <a href="/<?php echo DOMAIN?>/about" class="menu_top">About Us </a>|
                  <a href="/<?php echo DOMAIN?>/privacy" class="menu_top"> Privacy Policy </a>
              </p>

              <p>Copyright 2014 Grass Hop IT | All Rights Reserved</p>
      </div>
        </div>
  </div>
      <a href="#" class="go-top">Go To Top&nbsp;<i class="fa fa-arrow-up"></i> </a></footer>
<script>
    var eventHandler = function(name) {
        return function() {
            console.log(name, arguments);

        };
    };
    var $select = $('#dropdown-1').selectize({
        create          : true,
        onChange        : eventHandler('onChange'),
        onItemAdd       : eventHandler('onItemAdd'),
        onItemRemove    : eventHandler('onItemRemove'),
        onOptionAdd     : eventHandler('onOptionAdd'),
        onOptionRemove  : eventHandler('onOptionRemove'),
        onDropdownOpen  : eventHandler('onDropdownOpen'),
        onDropdownClose : eventHandler('onDropdownClose'),
        onInitialize    : eventHandler('onInitialize'),
    });
    var eventHandler = function(name) {
        return function() {
            console.log(name, arguments);

        };
    };
    var $select = $('#dropdown-2').selectize({
        create          : true,
        onChange        : eventHandler('onChange'),
        onItemAdd       : eventHandler('onItemAdd'),
        onItemRemove    : eventHandler('onItemRemove'),
        onOptionAdd     : eventHandler('onOptionAdd'),
        onOptionRemove  : eventHandler('onOptionRemove'),
        onDropdownOpen  : eventHandler('onDropdownOpen'),
        onDropdownClose : eventHandler('onDropdownClose'),
        onInitialize    : eventHandler('onInitialize'),
    });
</script>
<script>
    (function($){
        $(window).load(function(){

            /* Page Scroll to id fn call */
            $("#navigation-menu a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
                highlightSelector:"#navigation-menu a"
            });

            /* demo functions */
            $("a[rel='next']").click(function(e){
                e.preventDefault();
                var to=$(this).parent().parent("section").next().attr("id");
                $.mPageScroll2id("scrollTo",to);
            });

        });
    })(jQuery);
    $('#myModal').modal(options);
</script>
</body>
</html>
