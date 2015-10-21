<?php?>
<div id="post-<?php the_ID(); ?>" <?php post_class('entry') ?>>
  <div class="entry-thumb">
    <?php if ( has_post_thumbnail() ):?>
      <a href="<?php the_permalink(); ?>" class="entry-image"><?php the_post_thumbnail( 'thumb320', array('style' => 'width:320px;height:180px;') ); ?></a>
    <?php else:?>
      <a href="<?php the_permalink(); ?>" class="entry-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/no-image-320.png" alt="NO IMAGE" title="NO IMAGE" style="width:320px;height:180px;" class="no-image list-no-image" /></a>
    <?php endif; ?>
  </div><!-- /.entry-thumb -->
  <div class="entry-content">

    <h2><a href="<?php the_permalink(); ?>" class="entry-title"><?php echo get_the_title(); ?></a></h2>
    <p class="post-meta">
      <span class="post-date"><i class="fa fa-clock-o fa-fw"></i><?php the_time('Y/n/j') ;?></span>

      <?php if (is_category_visible()): ?>
      <span class="category"><i class="fa fa-folder fa-fw"></i><?php the_category(', ') ?></span>
      <?php endif; ?>
    </p><!-- /.post-meta -->
    <p class="entry-snippet"><?php echo get_the_custom_excerpt( get_the_content(''), get_excerpt_length() ); //カスタマイズで指定した文字の長さだけ本文抜粋?></p>
<p class="entry-read"><a href="<?php the_permalink(); ?>">Continue Reading</a></p>
  </div><!-- /
