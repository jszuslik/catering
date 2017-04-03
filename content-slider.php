<?php
/**
 * The template used for displaying the hompage slider
 *
 * @package WordPress
 * @subpackage HawgCity
 * @since HawgCity 1.0
 */
?>
<?php

        $args = array(  //Set the arguments to the query, i.e. what posts are you looking for, how many, etc.
                  'post_type' => 'slider',
                  'orderby'=>'menu_order',
                  'order'   => 'ASC',
                  'post_count' => -1
                      );

                      $loop = null;
                      $loop = new WP_Query($args);   //Create a new query, passing it the arguments you specified above

                    $img_sets = array();
                    $x = 0;
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $img_data = get_field('image');
                    $img_sets[] = array(
                            'ID' => get_the_ID(),
                            'x' => $x,
                            'title' => get_the_title(),
                            'caption' => get_field('caption'),
                            'text' => get_field('link-text'),
                            'url' => get_field('link'),
                            'img_src' => wp_get_attachment_image($img_data['id'], 'full', '', array('class' => 'fadeIn animated')
                        )
                    );
                    $x++;

                    endwhile;wp_reset_query(); ?>

                        <div class="carousel-inner">

                            <?php foreach($img_sets as $img_set) { ?>

                            <div class="item">
                                <?php echo $img_set['img_src']; ?>
                            </div>

                            <?php } ?>

                        </div>

                        <div class="carousel-btns">
                          <a class="btn btn-fab btn-primary btn-raised left" href="#slider" role="button" data-slide="prev">
                            <span class="prev" aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="btn btn-fab btn-primary btn-raised right" href="#slider" role="button" data-slide="next">
                            <span class="next" aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>

                        <div class="container">
                            <div class="col-xs-12 col-md-12">
                                <ol class="carousel-caption animated fadeIn">
                                    <?php foreach($img_sets as $img_set) { ?>

                                  <li data-slide-to="<?php echo $img_set['x']; ?>" class="animated fadeIn">
                                    <a href="<?php echo $img_set['url']; ?>"><p class="caption-p"><?php echo $img_set['caption']; ?><span> <?php echo $img_set['text']; ?></span></p></a>
                                  </li>

                                  <?php } ?>
                                </ol>
                            </div>
                        </div>
