<?php
get_header();
?>
<main>
	<section class="container-fluid">
	<?php
	while ( have_posts() ):
		the_post();

		/*
			Conditionally get the 'preheader' partial.
		*/
		if ( $show_preheader ):
			get_template_part( 'includes/preheader/_preheader' );
		endif;

		/* Get the 'header' partial. */
		get_template_part( 'includes/header/_header' );
		
		/*
			Get the 'post full' partial.
		*/
		get_template_part( 'includes/post-full/_post-full');

		/*
			Get the 'footer' partial.
		*/
		get_template_part( 'includes/footer/_footer' );
	endwhile;
	?>
	</section><!-- .container-fluid -->
</main>
<?php
get_footer();
?>