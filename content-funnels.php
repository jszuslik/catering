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

                        
