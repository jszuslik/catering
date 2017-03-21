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


                    while ( $loop->have_posts() ) : $loop->the_post();
                    $ID[] = get_the_ID();
                    $title[] = get_the_title();
                    $caption[] = get_field('caption');
                    $image[] = get_field('image');
                    $link_text[] = get_field('link-text');
                    $url[] = get_field('link');

                    endwhile;wp_reset_query();
                    $arrlength = count($ID); ?>

                        <div class="carousel-inner">

                            <?php for ($x = 0; $x < $arrlength; $x++ ) {?>

                            <div class="item">
                              <img class="fadeIn animated" src="<?php echo $image[$x] ?>" alt="First image slide" />
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
                                  <?php for ($x = 0; $x < $arrlength; $x++ ) {?>

                                  <li data-slide-to="<?php echo $x ?>" class="animated fadeIn">
                                    <a href="<?php echo $url[$x] ?>"><p class="caption-p"><?php echo $caption[$x] ?><span> <?php echo $link_text[$x] ?></span></p></a>
                                  </li>

                                  <?php } ?>
                                </ol>
                            </div>
                        </div>
