<?php
/**
* The Footer widget areas
*
* @package WordPress
* @subpackage Twenty_Ten
* @since Twenty Ten 1.0
*/
?>
<?php
/*
* The footer widget area is triggered if any of the areas
14	         * have widgets. So let's check that first.
15	         *
16	         * If none of the sidebars have widgets, then let's bail early.
17	         */
18	        if (   ! is_active_sidebar( 'first-footer-widget-area'  )
19	                && ! is_active_sidebar( 'second-footer-widget-area' )
20	                && ! is_active_sidebar( 'third-footer-widget-area'  )
21	                && ! is_active_sidebar( 'fourth-footer-widget-area' )
22	        )
23	                return;
24	        // If we get this far, we have widgets. Let do this.
25	?>
26
27	                        <div id="footer-widget-area" role="complementary">
28
29	<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
30	                                <div id="first" class="widget-area">
31	                                        <ul class="xoxo">
32	                                                <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
33	                                        </ul>
34	                                </div><!-- #first .widget-area -->
35	<?php endif; ?>
36
37	<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
38	                                <div id="second" class="widget-area">
39	                                        <ul class="xoxo">
40	                                                <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
41	                                        </ul>
42	                                </div><!-- #second .widget-area -->
43	<?php endif; ?>
44
45	<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
46	                                <div id="third" class="widget-area">
47	                                        <ul class="xoxo">
48	                                                <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
49	                                        </ul>
50	                                </div><!-- #third .widget-area -->
51	<?php endif; ?>
52
53	<?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
54	                                <div id="fourth" class="widget-area">
55	                                        <ul class="xoxo">
56	                                                <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
57	                                        </ul>
58	                                </div><!-- #fourth .widget-area -->
59	<?php endif; ?>
60
61	                        </div><!-- #footer-widget-area -->
