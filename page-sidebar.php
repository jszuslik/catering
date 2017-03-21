<?php
/**
 * @package WordPress
 * @subpackage joshuaszuslik
 * @since Joshua Szuslik 1.0
 * Template Name: Sidebar Page Template
 */
 get_header(); ?>

 <div id="page-container" class="container">
   <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

    <?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content-sidebar', get_post_format() );

		// End the loop.
		endwhile;
		?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
