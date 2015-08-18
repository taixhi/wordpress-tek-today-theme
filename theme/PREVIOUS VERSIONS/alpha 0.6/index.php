<!doctype html>

<html>
<?php get_header()?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>"/>
<div id="content">
  <?php while(have_posts()): the_post()?>
    <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
    <?php the_content(__('Continue Reading'));?>
  <?php endwhile;?>
</div>
<?php get_sidebar()?>
<?php get_footer()?>

</html>
