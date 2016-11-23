<?php
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'slogan', get_stylesheet_directory_uri().'/js/slogan.js', array('jquery'), 1, false );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

/* change the more-link of articles */
function moreLink()
{
    global $post;
    $result = 
    	'<a class="more-link" href="'.get_permalink($post->ID).'">
    		Lire la suite de l\'article<span class="screen-reader-text">'.$post->post_title.'</span><span class="meta-nav">→</span>
         </a>';

    return $result;
}

add_filter('the_content_more_link', 'moreLink');
