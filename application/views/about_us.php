<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Grasshop</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/flexslider.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet"/>
<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
<script src="js/jquery.js"></script>
<script src="js/selectize.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/script.js"></script>
<script src="js/waypoint.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/SmoothScroll.js"></script>
<script src="js/jqyery-parallax.js"></script>
</head>

<body>
<header> 
  <!--social-bar-->
  
  <div class="menu_bar affix-top" data-spy="affix" data-offset-top="1" >
    <div class="container">
      <div class="row">
        <nav class="navbar navbar-default" role="navigation">
          <div class="col-md-8 col-xs-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="collapse navbar-collapse "  id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav" id="main-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contacts</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-xs-12">
            <div class="search-bar">
              <ul>
                <!-- Start modal sign in -->
                <li><a href="#"  data-toggle="modal" data-target="#myModal1"><i class="fa fa-user"></i>&nbsp;Login</a></li>
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Login Form</h4>
                      </div>
                      <div class="modal-body">
                        <form role="form">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- close modal sign in--> 
                
                <!-- Start modal sign up-->
                <li><a href="#"  data-toggle="modal" data-target="#myModal"><i class="fa fa-arrow-up"></i>&nbsp;Sign Up</a></li>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Sign up Form</h4>
                      </div>
                      <div class="modal-body">
                        <div class="signup_top">
                          <form>
                            <input class="form-control-firstname" type="text" placeholder="First Name">
                            <input class="form-control-lastname" type="text" placeholder="Last Name">
                          </form>
                        </div>
                        <input type="email" class="form-control-email" id="exampleInputEmail1" placeholder="Enter email">
                        <input type="password" class="form-control-password" id="exampleInputPassword1" placeholder="Password">
                        <button type="submit" class="btn-signup">Submit</button>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- close modal sign up -->
                
              </ul>
              </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
<section>
  <div class="container-fluid clearfix">
    <div class="row">
      <div class="slider">
        <div class="banner">
          <div class="head-wrap">
            <div class="container">
              <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <div class="logo">
                    <h1> <a href="#"><img src="img/logo-banner.png" alt="logo"/></a> </h1>
                  </div>
                  <!--logo--> 
                </div>
                <div class="col-md-6 col-sm-8 col-xs-8">
                  <div class="row">
                    <div class="search-wrap" data-animate-to="fadeInRight">
                      <ul >
                        <li>
                          <select id="dropdown-1" name="state[]" class="demo-default" placeholder="Browse Categories" >
                            <option value="">Browse Categories</option>
                            <option value="Restaurant">Restaurant</option>
                            <option value="Nightlife">Nightlife</option>
                            <option value="Shopping">Shopping</option>
                            <option value="Health">Health</option>
                            <option value="Automotive">Automotive</option>
                            <option value="Beauty">Beauty</option>
                            <option value="Home service">Home service</option>
                          </select>
                        </li>
                        <li>
                          <select id="dropdown-2" name="state[]" class="demo-default" placeholder="Browse Locations">
                            <option value="">Browse Locations</option>
                            <option value="kathmandu">Kathmandu,Nepal</option>
                            <option value="pokhara">Pokhara,Nepal</option>
                            <option value="california">California,USA</option>
                            <option value="Kansas">kansas,USA</option>
                            <option value="Manchester united">Manchester united,UK</option>
                            <option value="Berlin">Berlin,Germany</option>
                            <option value="sydney">Sydney,australia</option>
                            <option value="madrid">madrid,spain</option>
                            <option value="paris">paris,france</option>
                          </select>
                        </li>
                        <li>
                          <input type="submit" value="Search">
                        </li>
                      </ul>
                      <div class="adv-search"> <a class="pull-right" href="#">Advanced Search</a> </div>
                    </div>
                  </div>
                  
                  <!--search wrap--> 
                </div>
                <!--col-md-8-->
                <div class="col-md-3 right-padding0">
                  <div class="add-block left-padding0">
                    <div class="add-image"> <img src="img/bg-contacts.png" alt=""> </div>
                    <div class="add-content">
                      <h2><a href="#">Add Your Business</a></h2>
                      <p>and get your share of new potential customers everyday..</p>
                    </div>
                  </div>
                </div>
              </div>
              <!--row--> 
            </div>
            <!--container--> 
          </div>
          <!--head wrap--> 
        </div>
      </div>
    </div>
  </div>
</section>
<!----slider section---->

<section>
  <div class="content-wrap">
  <div class="container clearfix">
    <div class="col-md-8 col-sm-8">
      <div class="left-column">
      
      
      
      </div>
    </div>
    <div class="col-md-4 col-sm-4">
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
</section>
<footer>
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3">
          <div class="footer-one">
            <h2>Copyright 2013</h2>
            <p>Proudly designed and crafted by<br>
              <a href="#">ThemeBits.io</a></p>
            <ul>
              <li><span><img src="img/facebook.png" alt=""></span><a href="#">Follow Us on Facebook</a></li>
              <li><span><img src="img/twitter.png " alt=""></span><a href="#">Follow Us on Twitter</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="footer-two">
            <h2>Latest Tweets</h2>
            <ul>
              <li>
                <p><a href="#">@mizko</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a leo accumsan, faucibus dolor eget.</p>
                <span>3 minutes ago</span> </li>
              <li>
                <p><a href="#">@mizko</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a leo accumsan, faucibus dolor eget.</p>
                <span>3 minutes ago</span> </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="footer-three">
            <h2>Latest News</h2>
            <ul>
              <li>
                <div class="news-thumb"><img src="img/thumb2.jpg" alt=""></div>
                <div class="news-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </li>
              <li>
                <div class="news-thumb"><img src="img/thumb2.jpg" alt=""></div>
                <div class="news-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </li>
              <li>
                <div class="news-thumb"><img src="img/thumb2.jpg" alt=""></div>
                <div class="news-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="footer-four">
            <h2>Contact Information</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <ul>
              <li><span><i class="fa fa-envelope-o"></i></span>sample@themebits.io</li>
              <li><span><i class="fa fa-phone"></i></span>(02) 9999 9999</li>
              <li><span><i class="fa fa-home"></i></span>100 Phoenix Street, Sydney 2066 Australia.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="social-icons">
        <ul>
          <li id="facebook"><a href="#"><img src="img/facebook.png" alt="facebook" title="facebook"></a></li>
          <li id="twitter"><a href="#"><img src="img/twitter.png" alt="twitter" title="twitter"></a></li>
          <li id="googleplus"><a href="#"><img src="img/social-googleplus.png" alt="google_plus"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--footer-->
  <div class="copyright">
    <div class="container">
      <div class="row">
        <p>Copyright 2014 Grass Hop IT | All Rights Reserved</p>
      </div>
    </div>
  </div>
  <a href="#" class="go-top">Go To Top&nbsp;<i class="fa fa-arrow-up"><i> </a></footer>
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
	$('#myModal').modal(options)
    </script>
</body>
</html>
