<?php
/*
    TODO:
    - Add post links/URLs to markup.
    - Conditionally display post 'featured images', fallback to placeholder.
    - Restrict output of `the_content()` to max number of chars.
*/
?>
<article class="proj-wrap col-xs-12">
    <a href="<?= esc_url( get_permalink( $post ) ); ?>">
        <div class="proj-img-wrap col-xs-12 col-sm-8">
            <?php
            $post_image = get_the_post_thumbnail( $post->ID, 'large' );

            if ( isset( $post_image ) && $post_image !== '' ):
                echo $post_image;
            else:
            ?>
            <img src="<?= get_stylesheet_directory_uri(); ?>/images/placeholder/placeholder__project-image.png" />
            <?php
            endif;
            ?>
            <div class="proj-title-wrap">
                <div class="proj-title"><h2><?= $post->post_title; ?></h2></div>
            </div>
            <div class="proj-view-wrap">
                <img src="<?= get_stylesheet_directory_uri(); ?>/images/icons/icon__eye.svg" />
            </div>
        </div>
    </a>
    <div class="proj-info col-sm-4">
        <div class="proj-info-header">
            <h2 class="proj-info-title"><a href="<?= esc_url( get_permalink( $post ) ); ?>"><?= $post->post_title; ?></a></h2>
			<?php
			$categories = get_categories();

			if ( $categories ):
			?>
			<ul class="proj-info-type">
				<?php
				foreach ( $categories as $category ):
					if ( strtolower( $category->name ) !== "uncategorized" ):
				?>
				<li>
                    <h4>
                        <?=  $category->name; ?>
                        <span class="underline"></span>
                    </h4>
                </li>
				<?php
					endif;
				endforeach;
				?>
			</ul>
			<?php
			endif;
			?>
        </div>
        <div class="proj-info-body">
            <?php
			if ( get_field( 'summary' ) ):
				echo "<p>";
				echo the_field( 'summary' );
				echo "</p>";
    		else:
    			the_content();
    		endif;
    		?>
        </div>
    </div>
</article>