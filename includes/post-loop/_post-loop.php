<section class="content-main row">
<?php
if ( have_posts() ):
	while ( have_posts() ):

		the_post();
		get_template_part( 'includes/post-preview/_post-preview' );

	endwhile;
else:
?>
	<div class="empty-state-wrapper">
		<?php
		if ( $custom_empty_state_message ):
			echo $custom_empty_state_message;
		else:
		?>
		<h2 class="empty-state-title">Whoops, looks like you don't have any posts yet!</h2>
		<?php
		endif;
		?>
	</div>
<?php
endif;
?>
</section><!-- .content-main -->