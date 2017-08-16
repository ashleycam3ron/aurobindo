<?php get_header(); ?>

<div id="home" class="container-fluid">
	<?php get_template_part('/template-parts/slider'); ?>

	<h2 class="text-center">Welcome to <span class="blue">Aurobindo Pharma USA</span>: Committed to healthier life.</h2>
	<?php get_template_part('/template-parts/news'); ?>
</div>

<script>
	jQuery(function($){
		jQuery('#carousel').carousel({
		    interval: 5000
		});
	});
</script>

<?php get_footer(); ?>