<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/17/14
 * Time: 2:59 PM
 */
if (!isset($status))
{
    $status = false;
}
if (!isset($type))
{
    $type = false;
}
if (!isset($page))
{
    $page = false;
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo isset($title) ? $title : 'Grasshopit'; ?></title>
        <link rel="icon" href="<?php echo base_url().'assets/images/logo.png';?>"/>
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
        <link href="/<?php echo DOMAIN ?>/assets/public/style.css" rel="stylesheet" type="text/css" />
        <link href="/<?php echo DOMAIN ?>/assets/public/responsive.css" rel="stylesheet" type="text/css" />
        <link href="/<?php echo DOMAIN ?>/assets/public/css/fonts.css" rel="stylesheet" type="text/css" />
        <!--<link href="responsive.css" rel="stylesheet" type="text/css" />-->
        <!--Default Css End-->
        <!--jQuery Start-->
        <script src="/<?php echo DOMAIN ?>/assets/public/js/jquery.js" type="text/javascript"></script>
        <script src="/<?php echo DOMAIN ?>/assets/public/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="/<?php echo DOMAIN ?>/assets/public/js/holder.js"></script>
        <script src="/<?php echo DOMAIN ?>/assets/public/js/jquery.flexslider.js" type="text/javascript"></script>
        <script src="/<?php echo DOMAIN ?>/assets/public/js/waypoints.min.js" type="text/javascript"></script>
        <script src="/<?php echo DOMAIN ?>/assets/public/js/modernizr.js" type="text/javascript"></script>
        <script src="/<?php echo DOMAIN ?>/assets/public/js/script.js" type="text/javascript"></script>
<?php if ($type == 'paymentForm')
{ ?>
            <link rel="stylesheet" type="text/css" href="/<?php echo DOMAIN ?>/assets/bluepay/css/BP-SHPF2.css"/>
<?php } ?>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-55591108-1', 'auto');
            ga('send', 'pageview');

        </script>
    </head>
    <body>
        <!--header Start-->
        <header>
            <div class="custom-container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <h1 class="logo"><a href="<?php echo base_url(); ?>"><img src="/<?php echo DOMAIN ?>/assets/img/head-logo.png" alt="logo"></a></h1>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-8">
                        <div class="form-wrap">
                            <form class="form-inline" role="form" action="/<?php echo DOMAIN ?>/search">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputKeywords">Enter Keywords</label>
                                    <input type="text" class="form-control" name="query" id="exampleInputKeywords" placeholder="Enter Keywords">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputLocation">Enter Location</label>
                                    <input type="text" class="form-control" name="location" id="exampleInputLocation" placeholder="Enter Location">
                                </div>
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!--login-wrap start-->
                    <div class="col-md-3 col-sm-3  col-xs-4">
                        <div class="login-wrap pull-right">
                            <ul>
<?php if (!$status)
{
    ?>
                                    <li><a href="#" data-toggle="modal" data-target="#myModal1"><i class="fa fa-power-off"></i> Login</a></li>

                                    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Login Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/<?php echo DOMAIN ?>/login?type=user" method="post" role="form">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter username email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Password</label>
                                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Your Password">
                                                        </div>
                                                        <button type="submit" class="btn btn-send">Submit</button>
                                                        <p>Trouble Logging in? <a style="color: #002166" href="/<?php echo DOMAIN ?>/forgot-password/?type=user">Forgot Password</a></p>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="/<?php echo DOMAIN ?>/login?type=business"><button type="button" class="btn btn-default">Business Login</button></a>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-square"></i> Sign Up</a></li>

                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">

                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Sign up Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/<?php echo DOMAIN ?>/register?type=user" method="post" data-role="form">
                                                        <div class="form-group">
                                                            <label for="exampleInputFullname">Full Name</label>
                                                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Full Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputUsername">Username</label>
                                                            <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail">Email</label>
                                                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPass1">Password</label>
                                                            <input type="password" name="pass_1" class="form-control" id="pass_1" placeholder="Enter Paasword">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPass2">Retype Password</label>
                                                            <input type="password" name="pass_2" class="form-control" id="pass_" placeholder="Enter Retype Password">
                                                        </div>


                                                        <button type="submit" class="btn btn-send">Submit</button>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="/<?php echo DOMAIN ?>/register?type=business"><button type="button" class="btn btn-default">Business Register</button></a>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                } else
                                {
                                    if (strlen($status) > 10)
                                    {
                                        $name = explode(" ", $status);
                                        $status = $name[0];
                                        if ($this->session->userdata('login_type') != 'user')
                                        {
                                            $link = "/" . DOMAIN . "/" . "dashboard";
                                        }
                                    }
                                    ?>
                                    <li><i class="fa fa-user"></i>&nbsp;<a href="<?php echo isset($link) ? $link : "" ?>">Welcome <?php echo $status ?></a></li>
                                    <li><i class="fa fa-arrow-up"></i>&nbsp;<a href="/<?php echo DOMAIN ?>/logout">Logout</a></li>
<?php } ?>

                            </ul>
                        </div>
                        <!--login-wrap end-->
                    </div>
                </div>
            </div>
        </header>
        <!--header End-->


