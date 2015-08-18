<!doctype html>
<html>
<head>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  <meta charset="utf-8"/>
  <title><?php bloginfo('title')?></title>
  <!--[if lt IE 9]>
<script src="http://html5shiv-printshiv.googlecode.com/svn/trunk/html5shiv-printshiv.js"></script>
<![endif]-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>"/>
  <?php wp_head()?>
</head>
<div id=container>
<div id="header" class="header">
  <a href="<?php echo home_url('/')?>"><img src="http://i.imgur.com/XMC2Imq.png"></a>
<nav>
    <?php wp_nav_menu();?>
</nav>
</div>
</html>
