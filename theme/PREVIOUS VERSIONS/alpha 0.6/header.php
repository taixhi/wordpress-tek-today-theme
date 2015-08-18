<!doctype html>
<html>
<head>
  <meta charset="utf-8"/>
  <title><?php bloginfo('title')?></title>
  <!--[if lt IE 9]>
<script src="http://html5shiv-printshiv.googlecode.com/svn/trunk/html5shiv-printshiv.js"></script>
<![endif]-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>"/>
  <?php wp_head()?>
</head>
<div id="header">
<header>
  <a href="http://tek-today.com/home"><img src="http://i.imgur.com/XMC2Imq.png"></a>
</header>

<nav>
    <?php wp_nav_menu();?>
</nav>
</div>
</html>
