<!doctype html>

<html>
<?php get_header()?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>"/>
<div id="page">
  <?php while(have_posts()): the_post()?>
    <h2><?php the_title()?></h2>
    <?php the_content(__('Continue Reading'));?>
  <?php endwhile;?>
</div>
<?php get_sidebar()?>
<?php get_footer()?>

</html>
