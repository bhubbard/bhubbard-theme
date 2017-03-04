<?php


// Add our custom loop
add_action( 'genesis_loop', 'portfolio_loop' );


/**
 * portfolio_loop function.
 *
 * @access public
 * @return void
 */
function portfolio_loop() {
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();



if ( has_post_thumbnail() ) {
	the_post_thumbnail();
}



		the_content();
		//
	} // end while
} // end if
}





// This file handles pages, but only exists for the sake of child theme forward compatibility.
genesis();


