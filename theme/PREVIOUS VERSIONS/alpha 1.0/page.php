<!doctype html>
<html>
<?php get_header()?>
<?php get_sidebar()?>

<div id="left" class="content">
  <?php while(have_posts()): the_post()?>
    <h2><?php the_title()?></h2>
    <?php the_content(__('Continue Reading'));?>
  <?php endwhile;?>
</div>
<?php get_footer()?>

</html>
