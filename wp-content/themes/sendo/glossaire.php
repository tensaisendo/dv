<?php
/*
 * Template Name: Glossaire
 */

get_header();
?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content single" role="main">

            <div class="postarea">

                <?php
                    wp_reset_postdata();
                    $glossaire = new WP_Query(array(
                        'post_type' => 'glossaire',
                        'post_per_page' => 3
                    ));
                ?>

                <?php if ($glossaire->have_posts()) : ?>
                    <?php while ($glossaire->have_posts()) : $glossaire->the_post(); ?>
                        <div class="glossaire">
                            <h3 class="glossaire-name"><?php the_title(); ?></h3>
                            <p class="glossaire-description"><?php the_excerpt(); ?></p>
                            <?php the_post_thumbnail(); ?>
                            <?php echo get_the_term_list( $post->ID, 'cuisine', '<p>Type de cuisine : ', ', ', '</p>' ) ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; wp_reset_query(); ?>

            </div><!--end postarea-->
        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>