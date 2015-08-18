<?php get_header()?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>"/>

<div>

  <?php while(have_posts()):?>

    <h2><?php the_title()?></h2>
    <?php the_content();?>

  <?php endwhile;?>

  <?php comments_template('',true);?>

</div>

<?php get_footer()?>
<?php get_sidebar()?>
