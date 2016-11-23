<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

	<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
	?>
	
	<div id="primary" class="content-area-accueil">
		
		<div id="content" class="site-content" role="main">
			
			<div class="intro">
				<p>
					Journal culinaire de recettes françaises et chinoises et d'ailleurs<br />
					法國、中國及外國菜譜的下廚筆記
				</p>
			</div>

			<?php 
				/* slider */
				echo do_shortcode("[huge_it_slider id='2']");
			?>
			
			<section id="featured-category" class="layout-four demo-featured-category">
				<div class="wrapper">
					<div class="featured-category-wrap">
						<article id="featured-post-1" class="post hentry post-demo">
							<figure class="featured-category-image">
							<a href="<?php echo get_permalink( get_page_by_title('Journal') ); ?>">
								<img alt="Journal" class="wp-post-image" src="<?php echo esc_url( home_url( '' ) ); ?>/wp-content/uploads/2015/04/IMG_0016.jpg">
							</a>
							</figure>
							<div class="entry-container">
								<header class="entry-header">
									<h1 class="entry-title">
										<a href="<?php echo get_permalink( get_page_by_title('Journal') ); ?>">Journal</a>
									</h1>
								</header>
							</div>
						</article>
						<article id="featured-post-2" class="post hentry post-demo">
							<figure class="featured-category-image">
								<a href="<?php $vegan = get_category_by_slug('vegan'); echo get_category_link($vegan->term_id); ?>">
									<img alt="Vegan" class="wp-post-image" src="<?php echo esc_url( home_url( '' ) ); ?>/wp-content/uploads/2016/01/wpid-2015-05-07-21-06-42_deco.jpg">
								</a>
							</figure>
							<div class="entry-container">
								<header class="entry-header">
									<h1 class="entry-title">
										<a href="<?php $vegan = get_category_by_slug('vegan'); echo get_category_link($vegan->term_id); ?>">Vegan</a>
									</h1>
								</header>
							</div>
						</article>
						<article id="featured-post-3" class="post hentry post-demo">
							<figure class="featured-category-image">
								<a href="<?php $dessert = get_category_by_slug('dessert'); echo get_category_link($dessert->term_id); ?>">
									<img alt="Desserts" class="wp-post-image" src="<?php echo esc_url( home_url( '' ) ); ?>/wp-content/uploads/2015/02/riz-au-lait-fraises.jpg">
								</a>
							</figure>
							<div class="entry-container">
								<header class="entry-header">
									<h1 class="entry-title">
										<a href="<?php $dessert = get_category_by_slug('dessert'); echo get_category_link($dessert->term_id); ?>">Desserts</a>
									</h1>
								</header>
							</div>
						</article>
						<article id="featured-post-4" class="post hentry post-demo">
							<figure class="featured-category-image">
								<a href="<?php $ete = get_category_by_slug('ete'); echo get_category_link($ete->term_id); ?>">
									<img alt="Eté" class="wp-post-image" src="<?php echo esc_url( home_url( '' ) ); ?>/wp-content/uploads/2016/06/20130822_205554.jpg">
								</a>
							</figure>
							<div class="entry-container">
								<header class="entry-header">
									<h1 class="entry-title">
										<a href="<?php $ete = get_category_by_slug('ete'); echo get_category_link($ete->term_id); ?>">Eté</a>
									</h1>
								</header>
							</div>
						</article>
					</div>
				</div>
			</div>			


		</div><!-- #content -->
		<?php get_sidebar() ?>
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php get_footer();
