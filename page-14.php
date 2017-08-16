<?php //Contact Us
	get_header();?>

	<div class="container">
		<?php while(have_posts()) : the_post();?>
			<div class="entry sizeable regular col-md-6">
				<?php the_content();?>
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]');?>
			</div>
			<article class="entry sizeable regular col-md-6">
				<h4><address>279 Princeton Hightstown Road <br/>East Windsor, NJ 08520</address>
				<a href="tel:866-850-2876">866-850-2876</a></h4>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3043.7019775531026!2d-74.56193858446643!3d40.282369979380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3de4da33a883f%3A0x463153859f2f3a4c!2s279+Princeton+Hightstown+Rd%2C+East+Windsor%2C+NJ+08520!5e0!3m2!1sen!2sus!4v1488916685123" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</article>

		<?php endwhile;?>
	</div>

<?php get_footer();?>