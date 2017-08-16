	</div><!-- end .wrapper -->
	<footer id="footer">
		<div class="container">
			<ul><?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets')) : endif; ?></ul>
	    </div>
		<div class="container copyright">
			<p>&copy; <?php echo date('Y');?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
		    <a href="javascript:" id="back-to-top" class="btn-default pull-right hidden-xs hidden-sm"><i class="fa fa-chevron-up"></i><span class="hidden">Back to Top</span></a>
		    <nav>
			    <h2>Footer Navigation</h2>
			    <?php wp_nav_menu( array('menu' => 'primary','depth' => 1,'menu_class' => 'pull-right hidden-xs hidden-sm','container' => false)); ?>
			</nav>
	</footer>

<script>
//back to top button
jQuery('#back-to-top').click(function() {      // When arrow is clicked
    jQuery('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});

jQuery("#textsize").on("touchend click", function(event) {
  event.preventDefault();
  if ($(".sizeable").hasClass("regular")) {
    $(".sizeable").removeClass("regular").addClass("larger");
    sessionStorage.fontsize = "larger";
    return;
  }
  if ($(".sizeable").hasClass("larger")) {
    $(".sizeable").removeClass("larger").addClass("largest");
    sessionStorage.fontsize = "largest";
    return;
  }
  if ($(".sizeable").hasClass("largest")) {
    $(".sizeable").removeClass("largest").addClass("regular");
    sessionStorage.fontsize = "regular";
    return;
  }
});

//superscript registered trademark
	jQuery('li.brand, td.brand').contents().filter(function() {
	    return this.nodeType === 3;
	}).replaceWith(function() {
	    return this.nodeValue.replace(/®/g, '<sup>$&</sup>');
	});
</script>

  </body>
</html>
<?php wp_footer();?>