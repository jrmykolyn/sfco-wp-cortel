<?php
/*
	TODO:
	- Conditionally display user uploaded 'primary/secondary' logos, fallback to placeholder images.
*/
?>
<section class="content-header">
    <div class="logo">
        <a href="<?= get_home_url(); ?>">
            <img src="<?= get_stylesheet_directory_uri(); ?>/images/placeholder/placeholder__logo-primary.png" class="logo-primary" />
            <img src="<?= get_stylesheet_directory_uri(); ?>/images/placeholder/placeholder__logo-secondary.png" class="logo-secondary" />
        </a>
    </div>
</section><!-- .content-header  -->