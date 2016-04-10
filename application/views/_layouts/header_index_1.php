<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/17/14
 * Time: 2:59 PM
 */
if(!isset($status)){
    $status = false;
}
if(!isset($type)){
    $type = false;
}
if(!isset($page)){
    $page = false;
}
?>
<!doctype html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo isset($title)?$title:'Grasshopit'; ?></title>

<link rel="shortcut icon" type="image/png" href="favicon.png"/>
<link rel="shortcut icon" type="image/png" href="/<?php echo DOMAIN ?>/favicon.png"/>
<!--Google font Start-->
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!--Google font End-->
<!--Bootstrap css Start-->
<link href="/<?php echo DOMAIN ?>/assets/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!--Bootstrap css End-->
<!--Font Awesome Start-->
<link href="/<?php echo DOMAIN ?>/assets/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!--Font Awesome End-->
<!--Default Css Start-->
<link rel="stylesheet" href="/<?php echo DOMAIN ?>/assets/public/css/flexslider.css" type="text/css"  />
<link rel="stylesheet" href="/<?php echo DOMAIN ?>/assets/public/css/animate.css" type="text/css"  />
<link href="/<?php echo DOMAIN ?>/assets/public/css/style.css" rel="stylesheet" type="text/css" />
<link href="/<?php echo DOMAIN ?>/assets/public/css/responsive.css" rel="stylesheet" type="text/css" />
<link href="/<?php echo DOMAIN ?>/assets/public/css/fonts.css" rel="stylesheet" type="text/css" />
<!--<link href="responsive.css" rel="stylesheet" type="text/css" />-->
<!--Default Css End-->
<!--jQuery Start-->
<script src="/<?php echo DOMAIN ?>/assets/public/js/jquery.js" type="text/javascript"></script>
<script src="/<?php echo DOMAIN ?>/assets/public/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/<?php echo DOMAIN ?>/assets/public/js/jquery.flexslider.js" type="text/javascript"></script>
<script src="/<?php echo DOMAIN ?>/assets/public/js/waypoints.min.js" type="text/javascript"></script>
<script src="/<?php echo DOMAIN ?>/assets/public/js/modernizr.js" type="text/javascript"></script>
<script src="/<?php echo DOMAIN ?>/assets/public/js/script.js" type="text/javascript"></script>
<!--jQuery End-->
</head>
<body>
<!--header Start-->
<header>
  <div class="custom-container">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-12">
        <h1 class="logo"><a href="#"><img src="/<?php echo DOMAIN ?>/assets/img/head-logo.png" alt="logo"></a></h1>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-8">
        <div class="form-wrap">
          <form class="form-inline" role="form">
            <div class="form-group">
              <label class="sr-only" for="exampleInputKeywords">Enter Keywords</label>
              <input type="text" class="form-control" id="exampleInputKeywords" placeholder="Enter Keywords">
            </div>
            <div class="form-group">
              <label class="sr-only" for="exampleInputLocation">Enter Location</label>
              <input type="text" class="form-control" id="exampleInputLocation" placeholder="Enter Location">
            </div>
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </div>
      <!--login-wrap start-->
      <div class="col-md-3 col-sm-3  col-xs-4">
        <div class="login-wrap pull-right">
          <ul>
            <li><a href="#"><i class="fa fa-power-off"></i> Login</a></li>
            <li><a href="#"><i class="fa fa-plus-square"></i> Sign Up</a></li>
          </ul>
        </div>
        <!--login-wrap end-->
      </div>
    </div>
  </div>
</header>
<!--header End-->
<!--Flex Slider Start-->
<section class="slider flex-slider">
  <div class="flexslider">
    <ul class="slides">
      <li> <img src="img/slider-1.jpg" /> </li>
      <li> <img src="img/slider-2.jpg"/> </li>
      <li> <img src="img/slider-1.jpg" /> </li>
      <li> <img src="img/slider-2.jpg" /> </li>
    </ul>
  </div>
</section>
<!--Flex Slider End-->