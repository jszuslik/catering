<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Lanex
 * @since Lanex 1.0
 */
?>
                <?php if ( is_page() || is_single()) : ?>
                        <div class="row">
                          <div class="col-md-12 no-padding" style="max-height: 200px">
                            <div class="panel panel-default page">
                              <?php
                                if ( has_post_thumbnail()) { ?>
                                  <div class="panel-heading thmbnail">
                                    <?php echo get_the_post_thumbnail(); ?>
                                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                                  </div>
                              <?php
                            } else { ?>
                                  <div class="panel-heading">
                                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                                  </div>
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                        <div id="content-area" class="content container">
                          <div class="wrapper">
                            <div class="row">
                              <div class="col-md-9 no-padding">
                                <div class="panel panel-default">
                                  <div class="panel-body">
                                    <?php the_content(); ?>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="panel panel-default">
                                  <div class="panel-body">
                                        <div class="sidebar-widget">
                                          <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
                                        </div>
                                        <div class="sidebar-widget">
                                          <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
                                        </div>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php else : ?>
                        <div class="col-md-12">
                          <div class="single-container">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                              </div>
                              <div class="panel-body">
                                <?php the_content(); ?>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php endif; ?>
