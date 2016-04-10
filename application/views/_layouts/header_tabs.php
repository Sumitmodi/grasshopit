<?php //echo'<pre>'; print_r($results)
$flag = $this->uri->segment(1);
//echo $flag;
if($flag != 'home'){
?>
<!-- Inner Page Start-->
<!--<section class="inner-page banner clearfix">
	<img src="img/img1.jpg" alt="">
  <div class="custom-container clearfix">
  
  <div class="title "><div class="row"><div class="col-md-6"><h2>Company Name</h2></div>
  <div class="col-md-6"><ol class="breadcrumb pull-right">
  <li><a href="#">Home</a></li>
  
  <li class="active">Search</li>
</ol></div>
  </div></div></div>
  
</section>-->
<?php } ?>
<!--Inner Page  End-->
<!--Navigation Start-->
<div id="navbar">
  <div class="custom-container">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="#">Menu </a> </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/<?php echo DOMAIN?>/home"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="/<?php echo DOMAIN?>/about"><i class="fa fa-users"></i>About Us</a></li>
            <li><a href="/<?php echo DOMAIN?>/register?type=business"><i class="fa fa-plus-square"></i> Add Business</a></li>
            <li><a href="/<?php echo DOMAIN?>/contact"><i class="fa fa-phone"></i>Contact Us</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </div>
</div>
<!--Navigation End-->