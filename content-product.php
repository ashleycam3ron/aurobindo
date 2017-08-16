<article class="entry sizeable regular">
	<?php //the_content();?>
	<div class="col-sm-6 col-md-4">
		<h2>Specifications</h2>
		<ul>
		<?php if ( get_field('reference_brand') ){ ?><li class="brand"><strong>Reference Brand:</strong> <?php the_field('reference_brand'); ?></li>		   <?php } ?>
		<?php if ( get_field('strength') ){ ?><li><strong>Strength:</strong> <?php the_field('strength'); ?>		  </li>				   <?php } ?>
		<?php if ( get_field('size') ){ ?><li><strong>Size:</strong> <?php the_field('size'); ?>			  </li>					   <?php } ?>
		<?php if ( get_field('ndc') ){ ?><li><strong>NCD #:</strong> <?php the_field('ndc'); ?>			  </li>					   <?php } ?>
		<?php if ( get_field('te_code') ){ ?><li><strong>TE Code:</strong> <?php the_field('te_code'); ?>		  </li>				   <?php } ?>
		<?php if ( get_field('case_qty') ){ ?><li><strong>Case Qty (min order qty):</strong> <?php the_field('case_qty'); ?>		  </li><?php } ?>
		<?php if ( get_field('min_order_qty') ){ ?><li><strong>Minimum Order Quantity:</strong> <?php the_field('min_order_qty'); ?>  </li>   <?php } ?>
		<?php if ( get_field('case_weight') ){ ?><li><strong>Case Weight (lbs):</strong> <?php the_field('case_weight'); ?>	  </li>		   <?php } ?>
		</ul>
	</div>
	<div class="col-sm-6 col-md-4">
		<h2>Attributes</h2>
		<ul>
		<?php if ( get_field('shape') ){ ?><li><strong>Shape:</strong> <?php the_field('shape'); ?>		  </li>					   <?php } ?>
		<?php if ( get_field('color') ){ ?><li><strong>Color:</strong> <?php the_field('color'); ?>		  </li>					   <?php } ?>
		<?php if ( get_field('imprint') ){ ?><li><strong>Imprint:</strong> <?php the_field('imprint'); ?>		</li>				   <?php } ?>
		</ul>
		<h2>Links</h2>
		<ul>
		<li><strong>Prescribing Link:</strong> <?php if ( get_field('prescribing_link') ){ ?><a href="<?php the_field('prescribing_link');?>">DailyMed</a><?php } else { echo "N/A"; } ?></li>
		<li><strong>Medication Link:</strong> <?php if ( get_field('medication_link') ){ ?><a href="<?php the_field('medication_link');?>">DailyMed</a><?php } else { echo "N/A"; } ?></li>
		</ul>
	</div>
	<div class="col-sm-6 col-md-4">
		<h2>Additional Info</h2>
		<ul>
		<li><strong>Gelatin:</strong> <?php if ( get_field('gelatin') ){ the_field('gelatin'); } else { echo "No"; } ?>		  </li>
		<li><strong>Sweetner:</strong> <?php if ( get_field('sweetner') ){ the_field('sweetner'); } else { echo "No"; } ?>	  </li>
		<li><strong>Soy:</strong> <?php if ( get_field('soy') ){ the_field('soy'); } else { echo "No"; } ?>			  		  </li>
		<li><strong>Gluten:</strong> <?php if ( get_field('gluten') ){ the_field('gluten'); } else { echo "No"; } ?>		  </li>
		<li><strong>Dairy:</strong> <?php if ( get_field('dairy') ){ the_field('dairy'); } else { echo "No"; } ?>		  	  </li>
		<li><strong>Lactose:</strong> <?php if ( get_field('lactose') ){ the_field('lactose'); } else { echo "No"; } ?>		  </li>
		</ul>
	</div>
	<div class="clearfix"></div>
	<p><a class="btn-default back" href="<?php echo esc_url( home_url() ) ?>/product-catalog/"><i class="fa fa-caret-left"></i>Back to Product Catalog</a></p>
</article>