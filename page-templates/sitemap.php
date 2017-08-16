<?php
/* Template Name: Sitemap Page */

get_header();?>
	<section id="hero" class="row">
	    <h1 class="hidden"><?php bloginfo('name')?> – <?php bloginfo('description');?></h1>
		<div class="col-md-5 col-md-offset-6">
			<?php the_content(); ?>
			<a class="btn-default" href="#">Our company values <i class="fa fa-chevron-right"></i></a>
		</div>
    </section>
	<section class="container-fluid">
		<h2>Content</h2>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="entry" id="post-<?php the_ID(); ?>">
                <?php wp_nav_menu( array('menu' => 'main' )); ?>
            	<h1 class="title"><?php the_title(); ?></h1>
				<ul>
				<?php wp_list_pages(array( 'exclude' => '', 'title_li' => '', ) ); ?>
				</ul>
                <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
            </article>
		<?php endwhile; endif; ?>
	</section>
<?php get_footer(); ?>