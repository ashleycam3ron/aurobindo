<?php
/*
Template Name: News Archive
*/

get_header(); ?>

<div id="news" class="col-md-6 col-md-offset-2">
	<?php $big = 999999999; // need an unlikely integer
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		$args = array(
			'post_type' => 'post',
			'category_name' => 'News',
			'posts_per_page' => 5,
			'paged' => $paged,
			'orderby' => 'date',
			'order' => 'DESC' );
		$wp_query = new WP_Query( $args );
		while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

    <article class="entry sizeable regular" id="post-<?php the_ID(); ?>">
	      <div class="date">
		      <span class="day"><?php echo get_the_date('d'); ?></span>
		      <p class="month-year"><?php echo get_the_date('M Y'); ?></p>
		  </div>
		  <?php
                $category = get_the_category();
                echo '<a class="cat '.$category[0]->slug.'" href="'.get_category_link($category[0]->cat_ID).'">' . $category[0]->cat_name . '</a>';
            ?>

	      <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
	      <?php if($post->post_content == ""){} else { ?>
		  	<?php the_excerpt(); ?>
	      <?php } ?>
    </article>

	<?php endwhile; ?>

	<?php if ($wp_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
	  <?php if (function_exists("wp_bs_pagination")){
	     //wp_bs_pagination($the_query->max_num_pages);
	     wp_bs_pagination();
		} } ?>
</div>
<aside class="featured col-md-3"><?php get_sidebar(); ?></aside>

<?php get_footer();?>