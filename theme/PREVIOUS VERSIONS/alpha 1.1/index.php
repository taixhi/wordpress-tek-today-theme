<!doctype html>
<html>
<!-- <header><link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>"/></header> -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65617127-1', 'auto');
  ga('send', 'pageview');

</script>
<?php get_header()?>

<div id="visual_main">
  <div class="visual_banner">
        <?php if (has_post_thumbnail() ) {
  	    the_post_thumbnail();
        } ?>
  </div>

  <div id="recent_post">
    <div style="position: relative; left: -50%; border:">
          <h2> <?php $recent = new WP_Query("showposts=1"); while($recent->have_posts()) : $recent->the_post();?>
                   <a id ="most_recent" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                   <p id ="subtitle_banner"><?php get_the_subtitle( $post ); ?></p></li>
                   <hr id="line_banner"></hr>
                   <a href="<?php the_permalink() ?>" rel="bookmark" id ="read_more" class="btn">READ MORE</a>
               <?php endwhile; ?>
          </h2>
   </div>
  </div>
</div>

<div id="left" class="content">

  <?php while(have_posts()): the_post()?>
    <div id="<?php the_title()?>" class='article'>
    <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
    <p><?php echo get_the_author_link();?></p>
    <?php the_content(__('Continue Reading'));?>
  </div>
  <?php endwhile;?>
</div>
<?php get_footer()?>
</html>
