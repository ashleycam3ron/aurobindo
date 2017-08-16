<?php get_header();?>

	<div class="container" style="padding-top:5%;padding-bottom: 2%;">
		<?php while(have_posts()) : the_post();?>

			<article class="cat sizeable regular col-md-11">
				<?php $image = get_field('image'); ?>
				  <?php if( !empty($image) ): ?>
				  	<div class="col-md-5" style="padding-right: 40px;">
						<img class="img-responsive pull-left" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
					</div>
				  <?php endif; ?>

				  <div class="col-md-7 entry">
					<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
					<?php //the_excerpt();?>
					<p><?php echo get_excerpt_by_id(); ?></p>
				  	<p><a class="btn-default" href="<?php the_permalink();?>">Continue reading <i class="fa fa-caret-right"></i></a></p>
				  </div>

				  <?php if ( has_post_thumbnail() ) { the_post_thumbnail('full', array('class' => 'img-responsive')); } ?>
			</article>

		<?php endwhile;?>

	</div>

<?php get_footer();?>