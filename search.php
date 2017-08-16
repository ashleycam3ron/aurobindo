<?php get_header(); ?>
	<div id="content" class="container">
    	<div class="col-sm-10 col-sm-offset-1">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="entry" id="post-<?php the_ID(); ?>">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt("Read More"); ?>
                </article>
			<?php endwhile; else : ?>
       		<section class="no-results not-found">
				<h1><?php _e( 'Nothing posts found.', 'aurobindo' ); ?></h1>
				<article class="entry">
					<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
						<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'aurobindo' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

					<?php elseif ( is_search() ) : ?>

						<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'aurobindo' ); ?></p>
						<?php get_search_form(); ?>

					<?php else : ?>

						<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'aurobindo' ); ?></p>
						<?php get_search_form(); ?>

					<?php endif; ?>

				</article><!-- .page-content -->
			</section><!-- .no-results -->
	<?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>