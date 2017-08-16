<?php
	// Corporate Offices with Map
	get_header();?>

<div class="container">
    <?php while(have_posts()) : the_post();?>

		<article class="entry sizeable regular col-md-10 col-md-offset-1">
			<?php the_content();?>
		</article>

	<?php endwhile;?>
</div>

<?php get_footer();?>