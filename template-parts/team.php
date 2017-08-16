<?php if( have_rows('member') ): ?>

<div id="team" class="entry sizeable regular col-md-10 col-md-offset-1">
	<?php while( have_rows('member') ): the_row();
		$image = get_sub_field('image');
		$name = get_sub_field('name');
		$title = get_sub_field('title'); ?>

		<div class="col-xs-6 col-md-4 text-center">
			<?php if( $image ): ?>
				<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
			<?php else: ?>
				<img class="" style="" src="http://via.placeholder.com/225x284">
			<?php endif; ?>

		    <h3><?php echo $name; ?></h3>
		    <?php echo $title; ?>
		</div>
	<?php endwhile; ?>
</div>
<?php endif; ?>