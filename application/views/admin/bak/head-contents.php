<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2013/12/01
 * File     :   index.php
 * Copyright Nurakan Technologies Pvt. Ltd.
 */
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="/<?php echo DOMAIN ?>/assets/admin/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/<?php echo DOMAIN ?>/assets/admin/css/layout.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/<?php echo DOMAIN ?>/assets/admin/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/<?php echo DOMAIN ?>/assets/admin/css/reveal.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/<?php echo DOMAIN ?>/assets/admin/css/jquery-ui.css">
<script type="text/javascript" src="/<?php echo DOMAIN ?>/assets/admin/js/jquery.js"></script>
<style>
 #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
 #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 16px; height: 18px; }
 #sortable li span { position: absolute; margin-left: -1.3em; }
</style>
<title><?php echo isset($title)?$title:'Dashboard &rsaquo;&rsaquo; Admin :: '.DOMAIN;?></title>
</head>
<body>