<?php
/**
 * @package WordPress
 * @subpackage joshuaszuslik
 * @since Joshua Szuslik 1.0
 */
 get_header(); ?>

 <div class="row">

 	<div class="col-md-8">
    <!-- article -->
    <article id="post-404">

      <h1><?php _e( 'Page not found', 'joshuaszuslik' ); ?></h1>
      <h2>
        <a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'joshuaszuslik' ); ?></a>
      </h2>

    </article>
    <!-- /article -->

  </div>

 </div>

 <?php get_footer(); ?>
