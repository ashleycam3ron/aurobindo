<section id="news" class="container">
	<h2 class="hidden">News</h2>
		<?php
			$args = array('post_type' => 'post', 'cat' => 146, 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 1 );
			query_posts( $args );
			while ( have_posts() ) : the_post(); ?>
		   <article class="col-md-4">
		   		<h3><a href="<?php echo esc_url( home_url() ) ?>/product-news/">Product News<i class="fa fa-chevron-right"></i></a></h3>
				<header class="entry-header">
					<h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
				</header>
				<div class="entry">
					<?php the_excerpt();?>
				</div>
				<?php get_template_part('/template-parts/share'); ?>
			</article>
		<?php endwhile; ?>

		<?php
			$args = array('post_type' => 'post', 'cat' => 4, 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 1 );
			query_posts( $args );
			while ( have_posts() ) : the_post(); ?>
		   <article class="col-md-4">
		   		<h3><a href="<?php echo esc_url( home_url() ) ?>/industry-news/">Industry News<i class="fa fa-chevron-right"></i></a></h3>
				<header class="entry-header">
					<h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
				</header>
				<div class="entry">
					<?php the_excerpt();?>
				</div>
				<?php get_template_part('/template-parts/share'); ?>
			</article>
		<?php endwhile; ?>

		<?php
			$args = array('post_type' => 'post', 'cat' => 145, 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 1 );
			query_posts( $args );
			while ( have_posts() ) : the_post(); ?>
		   <article class="col-md-4">
		   		<h3><a href="<?php echo esc_url( home_url() ) ?>/social-responsibility/">Social Responsibility<i class="fa fa-chevron-right"></i></a></h3>
				<header class="entry-header">
					<h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
				</header>
				<div class="entry">
					<?php the_excerpt();?>
<!-- 					<p><a class="btn-default" href="<?php the_permalink(); ?>">Continue reading <i class="fa fa-caret-right"></i></a></p> -->
				</div>
				<?php get_template_part('/template-parts/share'); ?>
			</article>
		<?php endwhile; ?>


</section>