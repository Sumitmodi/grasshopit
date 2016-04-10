<?php
/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/11 5:00:32 PM
 * File     :   dashboard.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

$logged = $username;

$name = $bizName;//$this->session->userdata('name');
$id = end(explode('_',$this->session->userdata('bizId')));
$link_formatted = strtolower(str_replace(" ", "-", str_replace(".", "", $name)));
                        
$link_formatted = str_replace('&','',html_entity_decode($link_formatted));   
                        
$link_formatted = str_replace('amp;','',html_entity_decode($link_formatted));         
                                                
$profile =  base_url(). "profile/" . $id . '/' . preg_replace("/&#?[a-z0-9]+;/i", "", $link_formatted);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Dashboard</title>
        <link rel="icon" href="<?php echo base_url() . 'assets/images/logo.png'; ?>"/>
        <link rel="icon" href="<?php echo base_url() . 'assets/images/logo.png'; ?>"/>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url(); ?>assets/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>assets/css/dashboard.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/bonus.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="<?php echo base_url(); ?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script>
            function pleaseWait() {
                var cover = "<div class='wait-layer'><div class='wait-info'><div class='wait-text'>Please Wait..</div></div></div>"
                $('div.main').before(cover);
            }
            function waitOver() {
                $('.wait-layer').remove();
            }

        </script>
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>dashboard">Welcome <?php echo ucwords($logged); ?> !</a> 
                </div>
                <!-- /.navbar-header -->
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i> </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="<?php echo $profile;?>"><i class="fa fa-users"></i> My Profile</a> </li>
                            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-eye"></i> Visit Site</a> </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url(); ?>logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a> </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">                        
                            <li><a class="active" href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                            <li>
                                <a href="?tab=datamanager"><i class="fa fa-bar-chart-o fa-fw"></i> Data Manager<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">                                
                                    <li><a href="?tab=info" class="black">Business Info</a></li>
                                    <li><a href="?tab=logo" class="black">Logo</a></li>
                                    <li><a href="?tab=images" class="black">Images</a></li>
                                    <li><a href="?tab=videos" class="black">Videos</a></li>
                                    <li><a href="?tab=categories" class="black">Categories</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="?tab=finance"><i class="fa fa-external-link"></i> Finance manager</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-gear"></i> Account Setting<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">                               
                                    <li><a href="?tab=package" class="black">Change Package</a></li>
                                    <li><a href="?tab=email" class="black">Change email</a></li>
                                    <li><a href="?tab=username" class="black">Change username</a></li>
                                    <li><a href="?tab=password" class="black">Change password</a></li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li><a href="?tab=notifications"><i class="fa  fa-bell"></i> Notifications<!--<span class="badge pull-right">42</span>--></a></li>
                            <li><a href="?tab=reviews"><i class="fa fa-star"></i> Reviews</a></li>
                            <li><a href="?tab=activities"><i class="fa fa-files-o fa-fw"></i> My Activity</a></li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><?php echo isset($bizName) ? $bizName : 'Grasshopit.com' ?></h1>
                    </div>
                </div>
                <div class="business-title clearfix">
                    <div class="row">
                        <div class="col-lg-4"> Registered Date : <?php echo isset($regDate) ? date('Y/m/d', strtotime($regDate)) : 'Unknown' ?></div>
                        <div class="col-lg-4"> Status : <?php
                            if (isset($status))
                            {
                                $status = $status ? "Suspended" : "Active";
                            } else
                                $status = 'Unknown';
                            ?><?php echo $status ?></div>
                        <!--<div class="col-lg-4"> Published : <?php
                            if (isset($published))
                            {
                                $published = $status ? "Yes" : "No";
                            } else
                                $published = 'Unknown';
                            ?><?php echo $published ?></div>-->
                            <div class="col-lg-4">
                                Expires : <?php echo date('dS F, Y',strtotime($expire));?>
                            </div>
                    </div>
                </div>		