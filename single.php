<?php get_header();?>
	<section class="container">
		<?php while(have_posts()) : the_post(); ?>

			<?php if ( is_singular('products') ){
					get_template_part('content', 'product');
				} else { ?>

				<article class="entry col-sm-10 col-sm-offset-1">
					<?php $image = get_field('image'); ?>
					  <?php if( !empty($image) ){ ?>
					  	<div class="col-md-5" style="padding-right: 40px;">
							<img class="img-responsive pull-left" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
						</div>
						<div class="col-md-7 entry">

					  <?php } else { ?>
				  <div class="col-md-12 entry">
					  <?php } ?>
					<?php the_content();?>
					<?php the_field('video'); ?>
				  </div>
				  <?php get_template_part('/template-parts/share'); ?>
				</article>

			<?php } ?>
		<?php endwhile;?>

	</section>

<script>
jQuery(".fancybox, .gallery a").fancybox({
	padding: 0,
	helpers:  {
        title : {
            type : 'inside'
        }
    }
});
</script>
<?php get_footer();?>