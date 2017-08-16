<?php get_header();?>

	<div class="container">
		<?php if (is_page(10)){ get_template_part('/template-parts/timeline'); } else {?>
		<?php while(have_posts()) : the_post();?>

			<article class="entry sizeable regular col-md-10 col-md-offset-1">
				<?php the_content();?>
			</article>

		<?php endwhile;?>
		<?php } ?>

		<?php if (is_page(17)){ get_template_part('/template-parts/team'); } ?>

		<?php //comment_form(); ?>
		<?php //comments_template( $file, $separate_comments ); ?>
	</div>

<?php get_footer();?>