<div id="core" class="container-fluid sizeable regular">
	<div class="col-md-12">
		<img class="img-responsive watermark" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Aurobindo-watermark.png" alt="Aurobindo watermark"/>
		<div class="col-sm-5">
			<h2>Mission</h2>
			<p><?php the_field('mission',9); ?></p></div>
		<div class="col-sm-5">
			<h2>Vision</h2>
			<p><?php the_field('vision',9); ?></p>
		</div>
	</div>
	<?php if( have_rows('values',9) ): ?>
		<section id="values" class="entry row">
			<h3>Core Values &amp; Behaviors</h3>
			<ul>
			<?php while( have_rows('values',9) ): the_row();
				$icon = get_sub_field('icon'); ?>
				<li class="col-md-4">
				  <?php if( !empty($icon) ): ?>
					<img class="img-responsive" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['title']; ?>" />
				  <?php endif; ?>
				  <h4><?php the_sub_field('title'); ?></h4>
				  <p><?php the_sub_field('text'); ?></p>
				</li>
			<?php endwhile; ?>
			</ul>
		</section>
	<?php endif; ?>
</div>

<?php while ( have_posts() ) : the_post(); ?>
	<?php if( have_rows('timeline') ): ?>
		<div id="timeline" class="equal container-fluid sizeable regular">
			<h1 class="text-center"><strong><?php the_title(); ?></strong> | <?php the_field('headline'); ?></h1>
			<h2 class="text-center"><?php the_field('subheading'); ?></h2>

			<?php if( have_rows('milestones') ): ?>
				<section id="milestones" class="col-md-2 col-md-offset-1 col text-center">
					<h1 class="hidden">Major Milestones</h1>
					<ul>
					<?php while( have_rows('milestones') ): the_row();
						$icon = get_sub_field('icon'); ?>
						<li>
						  <?php if( !empty($icon) ): ?>
							<img class="img-responsive" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['title']; ?>" />
						  <?php endif; ?>
						  <h3><?php the_sub_field('text'); ?></h3>
						</li>
					<?php endwhile; ?>
					</ul>
				</section>
			<?php endif; ?>

			<section class="col-md-9 col">
				<h1 class="hidden">Historical Timeline</h1>
				<?php while( have_rows('timeline') ): the_row(); ?>
					<article class="entry">
						<h3 class="col-md-3 text-right"><?php the_sub_field('year'); ?></h3>
						<?php if( have_rows('events') ): ?>
							<ul class="col-md-5">
							<?php while( have_rows('events') ): the_row(); ?>
								<li><?php the_sub_field('event'); ?></li>
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</article>
				<?php endwhile; ?>
			</section>
		</div>
	<?php endif; ?>
<?php endwhile; ?>