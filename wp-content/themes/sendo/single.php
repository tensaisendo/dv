<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Gfs
 * @since Gfs 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content single" role="main">

			<div class="postarea">
            <?php
                while ( have_posts() ) : the_post();
                if ( has_post_format( 'aside' )) { echo the_content(); } else {?>
                    <div class="ariane">
                        <?php $category = get_the_category();
                              echo '<a title="' .esc_attr( get_bloginfo( 'name', 'display' ) ). '" rel="nofollow" href="' .esc_url( home_url( '/' ) ). '">Accueil</a> > ' . $category[0]->cat_name;
                              sendo_post_nav(); ?>
                    </div>

                    <div class="singletitle">
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                    </div>

                    <div class="singlepost">
                        <?php if ( has_post_thumbnail() ) {
                                echo '<div class="single_thumbnail">';
                                    echo '<div class="verticalblock"></div>';
                                    the_post_thumbnail('large');
                                echo '</div>';

                                echo '<div class="single_posttext">';
                                echo get_post(get_post_thumbnail_id())->post_excerpt;
                                the_content();
                                echo '</div>';
                              }
                        ?>
                    </div>
                    <div class="byline">
                        <span><?php comments_number('','1 commentaire','% commentaires'); ?></span>
                    </div>
                <?php
                }
                endwhile;
            ?>

			</div><!--end postarea-->
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>