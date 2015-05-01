<?php
/*
 * Template Name: Blog
 */
get_header ();

?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<div class="postarea">

			<?php if (have_posts()) : ?>
				<?php query_posts('post_type=post' . '&paged=' . get_query_var('paged')); while (have_posts()) : the_post(); ?>

                    <div class="excerpt">
                        <h2 class="singletitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

                        <div class="byline">
                            <ul>
                                <li class="byline-date"><span><?php the_time('j F Y'); ?></span></li>
                            </ul>
                        </div>

                        <div class="excerpt_img_txt">
                            <?php  the_post_thumbnail('thumbnail');?> <br /> <?php
                                   echo get_post(get_post_thumbnail_id())->post_excerpt;
                                   the_excerpt(); ?>
                            <a href="<?php the_permalink() ?>" class="suite">Lire la suite ...</a>
                        </div>
                    </div><!-- excerpt -->
	 
				<?php endwhile; ?>
			<?php endif; ?>
            <?php wp_paginate(); ?>
			
		</div><!--end postarea-->
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>