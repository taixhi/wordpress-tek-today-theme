
<head>
  <meta name=viewport content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  <meta property="fb:admins" content="100006118022584" />
  <meta charset="utf-8"/>
  <title><?php bloginfo('title')?></title>
  <!--[if lt IE 9]>
<script src="http://html5shiv-printshiv.googlecode.com/svn/trunk/html5shiv-printshiv.js"></script>
<![endif]-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>"/>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="https://raw.githubusercontent.com/desandro/imagesloaded/master/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/masonry.pkgd.min.js" type="text/javascript"></script>
<script>
$(window).load(function(){
  $('#front_content').masonry({
  itemSelector: '.article',
  isAnimated:true,
  });

});
$(function(){
    $('#menu_icon').live('click',function(){
        $('.menu').toggle();
    });
});
</script>
  <?php wp_head()?>


</head>
<body>
<div id=container>
<div id="header" class="header">
  <div id="header_wrapper">
    <a href="<?php echo home_url('/')?>" id='logo'><img src="http://i.imgur.com/bFBnqdr.png"></a>
    <div id="right_header" class="right_header">
            <a href="<?php bloginfo('wpurl')?>/wp-admin" id="login_button">Login</a>
      <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
        <div>
          <input class="searchbar"type="text" size="20" name="s" id="s" placeholder="Search" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
          <input type="image" id="searchsubmit" value="Search" class="btn" src="http://i.imgur.com/RBXgNcS.png"/>
        </div>
      </form>
    </div>
    <div id="menu_icon">☰</div>
</div>

<div id=navbar>
  <nav>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
  </nav>
</div>
</div>
