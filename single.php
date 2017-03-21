<?php
/**
 * @package WordPress
 * @subpackage joshuaszuslik
 * @since Joshua Szuslik 1.0
 */
 get_header(); ?>

<div id="page-container" class="container">
    <?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;?>

      <?php
			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'lanex' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'lanex' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'lanex' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'lanex' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );
      ?>
    </div>
  </div></div> <?php
		// End the loop.
		endwhile;
		?>
  </div>
</div>
<?php get_footer(); ?>
