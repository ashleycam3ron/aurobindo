<ul id="sidebar">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Main Sidebar')) : else : ?>

        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

    	<?php get_search_form(); ?>

    	<h2>Archives</h2>
    	<ul>
    		<?php wp_get_archives('type=monthly'); ?>
    	</ul>

        <h2>Categories</h2>
        <ul>
    	   <?php wp_list_categories('show_count=1&title_li='); ?>
        </ul>

    	<?php wp_list_bookmarks(); ?>

    	<h2>Subscribe</h2>
    	<ul>
    		<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
    	</ul>

	<?php endif; ?>

</ul>