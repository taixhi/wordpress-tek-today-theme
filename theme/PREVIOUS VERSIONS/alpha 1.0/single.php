<!doctype html>
<html>
<?php get_header()?>
<div id="left" class="content">
  <?php while(have_posts()): the_post()?>
    <h2><?php the_title()?></h2>
    <p><?php echo get_the_author_link();?></p>
    <?php the_content(__('Continue Reading'));?>
  <?php endwhile;?>
  <?php comments_template('',true);?>
</div>
<?php get_footer()?>
<?php wpb_set_post_views(get_the_ID());?>
<?php wpb_get_post_views(get_the_ID());?>
</html>
