<?php /*
echo '<form role="search" method="get" id="searchform" class="searchform" action="' . esc_url( home_url( '/' ) ) . '">
	  	<div>
			<input type="text" value="' . get_search_query() . '" name="s" id="s" />
			<input type="submit" id="searchsubmit" value="'. esc_attr_x( 'Search', 'submit button' ) .'" />
		</div>
	  </form>' ;*/

echo '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
		<input type="text" class="search-field" placeholder="Recherche" value="" name="s" title="Recherche">
		<input type="submit" class="search-submit" value=="'. esc_attr_x( 'Search', 'submit button' ) .'">
	 </form>';

