<?php
/*
 * Template Name: RecettesChinoises
 */
get_header ();
?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <div class="postarea">
                <div class="ariane">
                    <?php $category = get_the_category();
                    echo '<a title="' .esc_attr( get_bloginfo( 'name', 'display' ) ). '" rel="nofollow" href="' .esc_url( home_url( '/' ) ). '">Accueil</a> >' . $category[0]->cat_name;
                    ?>
                </div>

                <div class="singletitle">
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                </div>

                <div class="singlepost">
                    <div class="single_posttext">
                        <?php
                        echo '<ul>';
                        foreach (query_posts('category_name=recettes-chinoises') as $post){
                            echo '<li>';
                            echo '<div><a href="'.$post->guid.'">'.$post->post_title.'</a></div>';
                            echo '<div>'.$post->post_excerpt.'</div>';
                            echo '</li>';
                        }
                        echo '</ul>';
                        ?>
                    </div>
                </div>

            </div><!--end postarea-->
        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>