<?php if (is_page(15)){ ?>
	<div id="banner">
		<?php get_template_part('/template-parts/acf', 'map'); ?>
	<?php } elseif (is_category(145)){
	$term = $wp_query->queried_object;
	$image = get_field('featured_image', $term); ?>
	<div id="banner" style="background:url(<?php echo $image['url']; ?>) no-repeat center;">
<?php } elseif (has_post_thumbnail()){
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
    <div id="banner" style="background:url(<?php echo $image[0];?>) no-repeat center; background-size:cover;min-height: 40vh;">
<?php } else { ?>
	<div id="banner" style="background: url(<?php echo get_stylesheet_directory_uri();?>/images/header.jpg) no-repeat center;background-size: cover;min-height: 197px;">
<?php } ?>
 		<div id="subheader">
     		<h1 class="title">
	     	<?php
		     	if (is_category()){
		     		single_cat_title();
	     		} elseif
		     		(is_search()){
			     	printf( __( 'Search Results for: %s', 'aurobindo' ), get_search_query() );
			    } elseif
		     		(is_tax()){
			     	single_term_title();
			    } elseif
		     		(is_archive()){
			     	printf( __( 'News Archive', 'aurobindo' ));
		     	} elseif
		     		(is_404()){
			     	printf( __( 'Not Found', 'aurobindo' ));
			     } else {
	     			the_title();
	     		} ?>
	     	</h1>
	     	<?php if (is_category(145)){ ?>
		     		<p>Making a <em>real</em> difference</p>
	     	<?php } ?>
     	</div>
 	</div>