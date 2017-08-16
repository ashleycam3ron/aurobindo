<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

<div id="error" class="col-sm-10 col-sm-offset-1">
	<section class="error-404 not-found entry">
		<header class="page-header">
			<h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'ashleycameron' ); ?></h1>
		</header><!-- .page-header -->
		<div>
			<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'ashleycameron' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</section>
</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>