	<?php if( have_rows('map') ): ?>
        <div class="acf-map">
            <?php while ( have_rows('map') ) : the_row();
                $location = get_sub_field('location');
                $title = get_sub_field('title');
                $desc = get_sub_field('info');
                $image = get_sub_field('image');
                $map_zoom = $location['zoom'];
                if( !empty($image) ):
                    // vars
                    $url = $image['url'];
                    $alt = $image['alt'];

                    // thumbnail
                    $marker = 'marker';
                    $size = 'thumbnail';
                    $thumb = $image['sizes'][ $size ];
                    $markerthumb = $image['sizes'][ $marker ];
                endif; ?>
            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>" data-icon="<?php echo $markerthumb; ?>">
                    <?php /* if ($image){ ?><img class="img-responsive thumb" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"/><?php } */ ?>
                    <div style="padding: 0px 20px;">
	                    <?php if ($title){ ?><h3><?php echo $title; ?></h3><?php } ?>
	                    <a href="https://www.google.com/maps/place/<?php echo $location['address']; ?>" target="_blank">
		                    <address><span class="glyphicon glyphicon-map-marker"></span><?php echo $location['address']; ?></address>
		                </a>
	                    <?php if ($desc){ ?><?php echo $desc; ?><?php } ?>
                    </div>
            </div>
        <?php endwhile; ?>
        </div>
    <?php endif; ?>