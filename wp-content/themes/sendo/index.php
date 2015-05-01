<?php
/*
 * Template Name: Home
 */

get_header ();
define ( 'DB_CHARSET', 'utf8' );
?>


<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="<?php echo bloginfo('template_directory'); ?>/img/2013-09-16-14-30-11_deco.jpg" alt="image_01" width="460" height="345">
                        <div class="carousel-caption">
                            <h3>Soupe</h3>
                            <p>aux crevettes</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo bloginfo('template_directory'); ?>/img/DSC00371 (trop gros).jpg" alt="image_02" width="460" height="345">
                        <div class="carousel-caption">
                            <h3>Dessert</h3>
                            <p>au chocolat</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo bloginfo('template_directory'); ?>/img/fond.jpg" alt="image_03" width="460" height="345">
                        <div class="carousel-caption">
                            <h3>Petit-déjeuner</h3>
                            <p>Fraises</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo bloginfo('template_directory'); ?>/img/IMG_0170.jpg" alt="image_04" width="460" height="345">
                        <div class="carousel-caption">
                            <h3>Lasagnes</h3>
                            <p>au boeuf</p>
                        </div>
                    </div>
                </div>

                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div id="navbar" class="navbar row">
            <nav id="site-navigation" class="navigation main-navigation col-md-offset-2 col-md-8 col-md-offset-2" role="navigation">
                <?php wp_nav_menu(   array(  'theme_location' => 'nav-menu',  'menu_class' => 'nav-menu'  )  ); ?>
                <?php get_search_form(); ?>
            </nav><!-- #site-navigation -->
        </div><!-- #navbar -->

        <br class="clear" />

        <div class="canvas fadein">
            <ul id="produits">
                <li class="produit-journal">
                    <a href="" title="Voir le Journal">
                        <h2>Journal</h2>
                        <img src="<?php echo bloginfo('template_directory'); ?>/img/img_chania.jpg" class="capty fadein" alt="Image du Journal" />
                    </a>
                </li>

                <li class="produit-cave">
                    <a href="" title="Voir la Cave">
                        <h2>Cave</h2>
                        <img src="<?php echo bloginfo('template_directory'); ?>/img/img_chania2.jpg" class="capty fadein" alt="Image de la Cave" />
                    </a>
                </li>

                <li class="produit-envies">
                    <a href="" title="Voir les Envies du moment">
                        <h2>Envies du moment</h2>
                        <img src="<?php echo bloginfo('template_directory'); ?>/img/img_flower.jpg" class="capty fadein" alt="Image des Envies du moment" />
                    </a>
                </li>

                <li class="produit-newsletter">
                    <a href="" title="Voir la Newsletter">
                        <h2>Newsletter</h2>
                        <img src="<?php echo bloginfo('template_directory'); ?>/img/img_flower2.jpg" class="capty fadein" alt="Image de la Newsletter" />
                    </a>
                </li>
            </ul>
        </div>

        <br class="clear" />

	</div>
	<!-- #content -->
</div>
<!-- #primary -->

<?php get_footer(); ?>