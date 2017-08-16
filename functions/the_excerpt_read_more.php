<?php
	function new_excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more', 21 );

function the_excerpt_more_link( $excerpt ){
    $post = get_post();
    $excerpt .= '[...] <a class="more" href="'. get_permalink($post->ID) . '">Read more <i class="fa fa-chevron-right"></i></a>';
    return $excerpt;
}
add_filter( 'the_excerpt', 'the_excerpt_more_link', 21 );