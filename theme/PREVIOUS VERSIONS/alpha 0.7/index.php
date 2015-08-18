<!doctype html>
<html>
<!-- <header><link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>"/></header> -->

<?php get_header()?>
<?php get_sidebar()?>

<div id="left" class="content">
  <?php while(have_posts()): the_post()?>
    <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
    <p>Written By: <?php echo get_the_author_link();?></p>
    <?php the_content(__('Continue Reading'));?>
  <?php endwhile;?>
</div>
<?php get_footer()?>
</html>
