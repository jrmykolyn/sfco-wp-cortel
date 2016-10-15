<?php
get_header();
?>
<main>
    <section class="container-fluid">
		<?php
		/*
			Conditionally get the 'preheader' partial.
		*/
		if ( $show_preheader ):
			get_template_part( 'includes/preheader/_preheader' );
		endif;

		/* Get the 'header' partial. */
		get_template_part( 'includes/header/_header' );

		/*
			Get the 'post-loop' partial.
		*/
		get_template_part( 'includes/post-loop/_post-loop' );

		/*
			Get the 'footer' partial.
		*/
		get_template_part( 'includes/footer/_footer' );
		?>
    </section><!-- .container-fluid -->
</main>
<?php
get_footer();
?>