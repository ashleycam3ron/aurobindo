<section id="slider" class="row">
    <h2 style="display: none;">Home Slider</h2>
    <div id="carousel" class="carousel slide">
    	<?php $slider = new WP_Query(array(
				'post_type' => 'home-slider',
				'posts_per_page' => 6,
				'orderby' => 'menu_order',
				'order' => 'ASC',
				));
			  $count = 0;
		    ?>
        <ol class="carousel-indicators">
          <?php while($slider->have_posts()): $slider->the_post(); ?>
            <li <?php if ( $count == 0){ echo 'class="active"';} ?> data-target="#carousel" data-slide-to="<?php echo $count++; ?>"></li>
          <?php endwhile;  wp_reset_postdata(); ?>
        </ol>

        <div class="carousel-inner">
          <?php
			       $count = 0;
             while ($slider->have_posts()) : $slider->the_post();
             $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
             ?>
			<div class="item <?php if ( $count == 0){ echo 'active';};?>" data-slide-number="<?php echo $count++;?>" style="background:url(<?php echo $image[0];?>) no-repeat center top; background-size:cover;">
			     <a class="text" href="<?php the_field('link'); ?>">
				     <h3><?php the_title();?></h3>
					 <small><?php the_content();?></small>
			     </a>
			</div><!-- item active -->
			<?php endwhile; wp_reset_postdata(); ?>

        </div>
        <a class="carousel-control prev" href="#carousel" data-slide="prev" title="Previous Slide"><span class="hidden">Previous Slide</span></a>
        <a class="carousel-control next" href="#carousel" data-slide="next" title="Next Slide"><span class="hidden">Next Slide</span></a>
    </div><!-- end #carousel -->
</section>