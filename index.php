<?php get_header(); ?>
<div id="main">
<div id="content">
<h1>Main Area</h1>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<p><?php the_content(__('(more...)')); ?></p>
<hr> <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
<?php get_sidebar(); ?>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>
