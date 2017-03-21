<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package joshuaszuslik
 */

?>
    <div class="foot container widget-bar accent-color">
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-body">
              <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-area-1')) ?>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="social-links">
                <h1>Milwaukee Full Service Buffet Style Catering</h1>
                <ul class="list-unstyled">
                  <?php if (true == of_get_option('twitter_icon')) { ?>
                    <li>
                      <a href="<?php echo of_get_option('twitter_icon'); ?>" target="_blank">
                        <i class="fa fa-twitter-square"></i>
                      </a>
                    </li>
                  <?php } ?>
                  <?php if (true == of_get_option('facebook_icon')) { ?>
                    <li>
                      <a href="<?php echo of_get_option('facebook_icon'); ?>" target="_blank">
                        <i class="fa fa-facebook-square"></i>
                      </a>
                    </li>
                  <?php } ?>
                  <?php if (true == of_get_option('google_icon')) { ?>
                    <li>
                      <a href="<?php echo of_get_option('google_icon'); ?>" target="_blank">
                        <i class="fa fa-google-plus-square"></i>
                      </a>
                    </li>
                  <?php } ?>
                  <?php if (true == of_get_option('pinterest_icon')) { ?>
                    <li>
                      <a href="<?php echo of_get_option('pinterest_icon'); ?>" target="_blank">
                        <i class="fa fa-pinterest-square"></i>
                      </a>
                    </li>
                  <?php } ?>
                  <?php if (true == of_get_option('instagram_icon')) { ?>
                    <li>
                      <a href="<?php echo of_get_option('instagram_icon'); ?>" target="_blank">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  <?php } ?>
                  <?php if (true == of_get_option('linkedin_icon')) { ?>
                    <li>
                      <a href="<?php echo of_get_option('linkedin_icon'); ?>" target="_blank">
                        <i class="fa fa-linkedin-square"></i>
                      </a>
                    </li>
                  <?php } ?>
                  <?php if (true == of_get_option('youtube_icon')) { ?>
                    <li>
                      <a href="<?php echo of_get_option('youtube_icon'); ?>" target="_blank">
                        <i class="fa fa-youtube-square"></i>
                      </a>
                    </li>
                  <?php } ?>
                  <?php if (true == of_get_option('rss_icon')) { ?>
                    <li>
                      <a href="<?php echo of_get_option('rss_icon'); ?>" target="_blank">
                        <i class="fa fa-rss"></i>
                      </a>
                    </li>
                  <?php } ?>
                  <?php if (true == of_get_option('options_email')) { ?>
                    <li>
                      <a href="mailto:<?php echo of_get_option('options_email'); ?>">
                        <i class="fa fa-envelope-o"></i>
                      </a>
                    </li>
                  <?php } ?>
                </ul>
                <p>Pick up and delivery catering available.<br>We cater all occasions, corporate functions, private parties, weddings,picnics,ect.</p>
              </div>
            </div>
          </div>
        </div>
<!--        <div class="col-md-3">-->
<!--          <div class="panel panel-default">-->
<!--            <div class="panel-body">-->
<!--              --><?php //if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-area-3')) ?>
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="col-md-3">-->
<!--          <div class="panel panel-default">-->
<!--            <div class="panel-body">-->
<!--              --><?php //if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-area-4')) ?>
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
      </div>

    </div>
    <div class="foot container">
      <div class="col-md-12 nav-wrapper">
        <div id="footnav-bg-wrap">
          <div id="footnav-bg">
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12 no-padding">
            <div class="footer-helper"></div>
          </div>
          <div class="col-md-12 no-padding">
            <!-- copyright -->
            <p class="copyright">
              &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?><a href="http://www.norulesweb.com" title="No Rules Web" target="_blank"> No Rules Web</a>.
            </p>
            <!-- /copyright -->
          </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

    <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('.carousel-inner .item:first-child').addClass('active');
      $('.carousel-caption li:first-child').addClass('active');
      var classes = ["caption-position-1", "caption-position-2", "caption-position-3", "caption-position-4"];
      $(".carousel-caption li").each(function(){
        $(this).addClass(classes[~~(Math.random()*classes.length)]);
      });
    });

    </script>
  </body>
</html>
