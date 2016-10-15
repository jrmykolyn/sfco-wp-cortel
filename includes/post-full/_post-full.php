<section class="content-main row">
    <section class="proj-details">
        <div class="proj-details-header col-xs-12 col-sm-4">
            <h2 class="proj-details-title"><?= $post->post_title; ?></h2>
			<?php
			$categories = get_categories();

			if ( $categories ):
			?>
			<ul class="proj-details-type">
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
        <div class="proj-details-body col-xs-12 col-sm-8">
      		<? the_content(); ?>
        </div>
    </section><!-- .proj-details -->
    <?php
    if ( get_the_post_thumbnail( $post->ID ) ):
    ?>
    <section class="proj-imgs-wrap">
        <?= the_post_thumbnail( $post->ID, 'large' ); ?>
    </section><!-- .proj-imgs-wrap -->
    <?php
	endif;
    ?>
    <section class="proj-footer">
        <a href="<?= get_home_url(); ?>">
            <div class="sf-btn sf-btn-back">
                <span class="sf-btn-graphic">
                    <span class="arrow"></span>
                    <span class="rule"></span>
                </span>
                <span class="sf-btn-text"><h3>Back</h3></span>
            </div>
        </a>
    </section><!-- .proj-footer -->
</section>