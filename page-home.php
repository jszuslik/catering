<?php
/**
 * Template Name: Home Page Template
 */
 ?>
 <?php get_header(); ?>
<div id="main-container" class="container">
  <div class="row">
 	  <div class="col-md-12 no-padding">
      <div id="slider" class="carousel slide" data-ride="carousel">
                  <?php

                  while ( have_posts() ) : the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'content', 'slider' );

                endwhile; ?>
       </div>
    </div>
  </div>

    <div id="content-area" class="content container">
      <div class="wrapper">
        <!--<div class="row">
          <div class="col-md-12 no-padding">

              <div class="well well-lg">
                <div class="col-md-8">
                  <h1>Look, I'm in a large well! <br />
                  A Large Well</h1>
                </div>
                <div class="col-md-4">
                  <a href="javascript:void(0)" class="btn btn-primary btn-lg cta-btn">Buy Now</a>
                </div>
              </div>

          </div>
        </div> -->
        <div class="row">
          <div class="col-md-4">
            <div class="panel panel-default funnel">
              <div class="panel-body">
                <?php
                  $funnel_1_url = get_field('funnel_page_1');
                  $funnel_one_page_id = url_to_postid($funnel_1_url);
                  $text = apply_filters('the_excerpt', get_post_field('post_excerpt', $funnel_one_page_id));
                ?>
                <h2><?php echo get_the_title($funnel_one_page_id); ?></h2>
                <p><?php echo $text; ?></p>
                <p class="read_more"><a href="<?php echo get_the_permalink($funnel_one_page_id); ?>">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-default funnel">
              <div class="panel-body">
                <?php
                  $funnel_2_url = get_field('funnel_page_2');
                  $funnel_two_page_id = url_to_postid($funnel_2_url);
                  $text = apply_filters('the_excerpt', get_post_field('post_excerpt', $funnel_two_page_id));
                ?>
                <h2><?php echo get_the_title($funnel_two_page_id); ?></h2>
                <p><?php echo $text; ?></p>
                <p class="read_more"><a href="<?php echo get_the_permalink($funnel_two_page_id); ?>">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-default funnel">
              <div class="panel-body">
                <?php
                  $funnel_3_url = get_field('funnel_page_3');
                  $funnel_three_page_id = url_to_postid($funnel_3_url);
                  $text = apply_filters('the_excerpt', get_post_field('post_excerpt', $funnel_three_page_id));
                ?>
                <h2><?php echo get_the_title($funnel_three_page_id); ?></h2>
                <p><?php echo $text; ?></p>
                <p class="read_more"><a href="<?php echo get_the_permalink($funnel_three_page_id); ?>">Read More</a></p>
              </div>
            </div>
          </div>

<!--          <div class="col-md-6">-->
<!--            <div class="panel panel-default">-->
<!--              <div class="panel-body">-->
<!--                <h2>Upcoming Event</h2>-->
<!--                <p>Bacon ipsum dolor amet in laborum corned beef commodo, porchetta alcatra kevin. Tenderloin bacon rump, in ipsum venison fugiat adipisicing incididunt picanha proident flank ullamco. Capicola fatback pig do cillum officia. In adipisicing ribeye pancetta.</p>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--          <div class="col-md-6">-->
<!--            <div class="panel panel-default">-->
<!--              <div class="panel-body">-->
<!--                <h2>What Customers Say</h2>-->
<!--                <p>Bacon ipsum dolor amet in laborum corned beef commodo, porchetta alcatra kevin. Tenderloin bacon rump, in ipsum venison fugiat adipisicing incididunt picanha proident flank ullamco. Capicola fatback pig do cillum officia. In adipisicing ribeye pancetta.</p>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--          <div class="col-md-12">-->
<!--            <div class="panel panel-default">-->
<!--              <div class="panel-body">-->
<!--                <h2>Latest Blog Posts</h2>-->
<!--                <div class="row">-->
<!--                  <div class="col-md-4">-->
<!--                    <img class="img-responsive blog-img" src="/wp-content/themes/hawgcity1/images/blog-post.png" alt="blog post" />-->
<!--                    <h2>Blog Post Title</h2>-->
<!--                    <p>Bacon ipsum dolor amet in laborum corned beef commodo, porchetta alcatra kevin. Tenderloin bacon rump, in ipsum venison fugiat adipisicing incididunt picanha proident flank ullamco. Capicola fatback pig do cillum officia. In adipisicing ribeye pancetta.</p>-->
<!--                  </div>-->
<!--                  <div class="col-md-4">-->
<!--                    <img class="img-responsive blog-img" src="/wp-content/themes/hawgcity1/images/blog-post.png" alt="blog post" />-->
<!--                    <h2>Blog Post Title</h2>-->
<!--                    <p>Bacon ipsum dolor amet in laborum corned beef commodo, porchetta alcatra kevin. Tenderloin bacon rump, in ipsum venison fugiat adipisicing incididunt picanha proident flank ullamco. Capicola fatback pig do cillum officia. In adipisicing ribeye pancetta.</p>-->
<!--                  </div>-->
<!--                  <div class="col-md-4">-->
<!--                    <img class="img-responsive blog-img" src="/wp-content/themes/hawgcity1/images/blog-post.png" alt="blog post" />-->
<!--                    <h2>Blog Post Title</h2>-->
<!--                    <p>Bacon ipsum dolor amet in laborum corned beef commodo, porchetta alcatra kevin. Tenderloin bacon rump, in ipsum venison fugiat adipisicing incididunt picanha proident flank ullamco. Capicola fatback pig do cillum officia. In adipisicing ribeye pancetta.</p>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
