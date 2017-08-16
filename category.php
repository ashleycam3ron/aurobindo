<?php get_header();?>

	<div id="news" class="col-md-6 col-md-offset-2">
		<?php while(have_posts()) : the_post();?>

			<article class="entry cat sizeable regular">
				<div class="date">
				      <span class="day"><?php echo get_the_date('d'); ?></span>
				      <p class="month-year"><?php echo get_the_date('M Y'); ?></p>
				</div>
				<?php $image = get_field('image'); ?>
				  <?php if( !empty($image) ): ?>
				  	<div class="col-md-5" style="padding-right: 40px;">
						<img class="img-responsive pull-left" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
					</div>
				  <?php endif; ?>

					<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
					<p>
						<?php echo get_excerpt_by_id(); ?>...
						<a class="more" href="<?php the_permalink();?>">Read more <i class="fa fa-chevron-right"></i></a>
					</p>
<!-- 				  	<p><a class="btn-default" href="<?php the_permalink();?>">Continue reading <i class="fa fa-caret-right"></i></a></p> -->
			</article>

		<?php endwhile;?>

		<?php if ($wp_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
	  <?php if (function_exists("wp_bs_pagination")){
	     //wp_bs_pagination($the_query->max_num_pages);
	     wp_bs_pagination();
		} } ?>
	</div>

<aside class="featured col-md-3"><?php get_sidebar(); ?></aside>

<?php get_footer();?>