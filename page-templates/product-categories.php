<?php
/*
Template Name: Product Categories
*/

get_header(); ?>

<div class="container">
	<article class="entry sizeable regular">
	<?php
		$args = array( 'hide_empty=0' );
		$terms = get_terms( 'product_category', $args );
		if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
		    $count = count( $terms );
		    $i = 0;
		    $term_list = '<ul class="product-cat-archive">';
		    foreach ( $terms as $term ) {
		        $i++;
		        $term_list .= '<li><a href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) ) . '">' . $term->name . '</a></li>';
		        if ( $count != $i ) { }
		        else {
		            $term_list .= '</ul>';
		        }
		    }
		    echo $term_list;
		} ?>
	</article>

	<a id="popuplink" href="#inline" style="display:none;"></a>
	<div id="inline" style="display:none;text-align:center;">
		<h3 style="display: none">Product Catalog Disclaimer</h3>
		<p>You are about to enter the Aurobindo online product catalog. Product information on this site is intended for use only by United States residents, for general information purposes only, and is not a substitute for the approved product information. The listed products are available in the United States only with a prescription from a qualified healthcare professional. Consumers should not construe any information as medical advice or as a substitute for discussions with a qualified healthcare professional.</p>
		<p><a href="javascript:;" onclick="jQuery.fancybox.close();" style="background-color:#333;padding:5px 10px;color:#fff;border-radius:5px;text-decoration:none;">OK</a></p>
	</div>
</div>

<script>
//popup legal disclaimer
jQuery(document).ready(function () {
    function openFancybox() {
        setTimeout(function () {
            jQuery('#popuplink').trigger('click');
        }, 500);
    };
    var visited = jQuery.cookie('visited');
    if (visited == 'yes') {
         // second page load, cookie active
    } else {
        openFancybox(); // first page load, launch fancybox
    }
    jQuery.cookie('visited', 'yes', {
        expires: 365 // the number of days cookie  will be effective
    });
    jQuery("#popuplink").fancybox(
    	{maxWidth: 400;});
});
</script>

<?php get_footer();?>
