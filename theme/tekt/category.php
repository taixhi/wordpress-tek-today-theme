<<<<<<< HEAD
<?php get_header(); ?>
<div id="category_content">
                <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                          <div id="category_articles_wrapper">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <figure class="article-preview-image">
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'category_thumb')); ?></a>
                                        </figure>

                                   <?php else : ?>
                                  <?php endif; ?>

                                        <h2><a href="<?php the_permalink(); ?>" class="category-title-link"><?php the_title(); ?></a></h2>
                                                    <div id="util_cat"><?php if (has_category() && !has_category('Uncategorized')) : ?>
                                                        <?php the_category('  |  '); ?> |
                                                    <?php else : ?>
                                                    <?php endif; ?>
                                                Posted on <?php the_date(get_option('date_format')); ?> at <?php the_time(get_option('time_format')); ?> by <?php the_author_posts_link(); ?></div>
                                           <?php the_excerpt(); ?>


                                         </div>
                                         <div class="clearfix"></div>
                                         <hr style="background:#888; border:0; height:1px; margin-bottom:10px" />

                        <?php endwhile; ?>

                        <?php else : ?>

                        <article class="no-posts">

                            <h1>No posts were found.</h1>

                        </article>

                        <?php endif; ?>
</div>
                <div class="clearfix"></div>

                <div class="article-nav clearfix">

                    <p class="article-nav-next pull-right"><?php previous_posts_link(__('Newer Posts »')); ?></p>

                    <p class="article-nav-prev pull-left"><?php next_posts_link(__('« Older Posts')); ?></p>

                </div>

                <div class="clearfix"></div>

            </div>

        <div class="clearfix"></div>

        </div><!-- END MAIN-CONTENT -->

    </div><!-- END wrap_1280 -->

<?php get_footer(); ?>
=======
<?php get_header(); ?>

                <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                                    <?php if (has_post_thumbnail()) : ?>
                                        <figure class="article-preview-image">
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                        </figure>

                                   <?php else : ?>
                                  <?php endif; ?>

                                        <h2><a href="<?php the_permalink(); ?>" class="category-title-link"><?php the_title(); ?></a></h2>
                                                    <?php if (has_category() && !has_category('Uncategorized')) : ?>
                                                        <?php the_category('  |  '); ?> |
                                                    <?php else : ?>
                                                    <?php endif; ?>
                                                Posted on <?php the_date(get_option('date_format')); ?> at <?php the_time(get_option('time_format')); ?> by <?php the_author_posts_link(); ?>
                                            </h6>
                                           <?php the_excerpt(); ?>

                                        </div><!-- END CATEGORY POST -->
                                </div><!-- END EACH BLOG-->
                            </div>

                        <?php endwhile; ?>

                        <?php else : ?>

                        <article class="no-posts">

                            <h1>No posts were found.</h1>

                        </article>

                        <?php endif; ?>

                    </div>

                </div>

                <div class="clearfix"></div>

                <div class="article-nav clearfix">

                    <p class="article-nav-next pull-right"><?php previous_posts_link(__('Newer Posts »')); ?></p>

                    <p class="article-nav-prev pull-left"><?php next_posts_link(__('« Older Posts')); ?></p>

                </div>

                <div class="clearfix"></div>

            </div>

        <div class="clearfix"></div>

        </div><!-- END MAIN-CONTENT -->

    </div><!-- END wrap_1280 -->

<?php get_footer(); ?>
>>>>>>> 7047d1bf10a454e9704b9412075a9d8a73dfc014
