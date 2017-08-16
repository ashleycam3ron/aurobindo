<?php get_header();?>
	<div class="container">
		<article class="entry sizeable regular">
			<h1 class="hidden"><?php single_cat_title(); ?></h1>
			<?php echo do_shortcode('[wpv-view name="products-by-category"]'); ?>
		</article>
	</div>

<?php get_footer(); ?>