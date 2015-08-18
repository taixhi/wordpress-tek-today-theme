<?php get_header()?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>"/>
<div id="single">
  <?php while(have_posts()): the_post()?>
    <h2><?php the_title()?></h2>
    <?php the_content(__('Continue Reading'));?>
  <?php endwhile;?>
  <?php comments_template('',true);?>
</div>
<?php get_sidebar()?>
<?php get_footer()?>
