<?php
/**
 * @package WordPress
 * @subpackage joshuaszuslik
 * @since Joshua Szuslik 1.0
 */
?><!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="<?php echo of_get_option('meta_headid'); ?>">

	<meta charset="<?php bloginfo('charset'); ?>">

	<!-- Always force latest IE rendering engine (even in intranet) -->
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->

	<?php
		if (is_search())
			echo '<meta name="robots" content="noindex, nofollow" />';
	?>

	<title><?php wp_title(); ?></title>

	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

	<!--Google will often use this as its description of your page/site. Make it good.-->
	<meta name="description" content="<?php bloginfo('description'); ?>" />


	<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">

	<?php
		/*
			j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
			 - device-width : Occupy full width of the screen in its current orientation
			 - initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
			 - maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
			 - minimal-ui = iOS devices have minimal browser ui by default
		*/
		if (true == of_get_option('meta_viewport'))
			echo '<meta name="viewport" content="' . of_get_option("meta_viewport") . ' minimal-ui" />';


		/*
			These are for traditional favicons and Android home screens.
			 - sizes: 1024x1024
			 - transparency is OK
			 - see wikipedia for info on browser support: http://mky.be/favicon/
			 - See Google Developer docs for Android options. https://developers.google.com/chrome/mobile/docs/installtohomescreen
		*/
		if (true == of_get_option('head_favicon')) {
			echo '<meta name=”mobile-web-app-capable” content=”yes”>';
			echo '<link rel="shortcut icon" sizes=”1024x1024” href="' . of_get_option("head_favicon") . '" />';
		}
?>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<header>
		<div class="top container">
			<div class="row">
				<div class="panel">
					<div class="panel-body">
						<div class="col-md-4">
							<div class="logo">
								<a href="/">
									<img src="/wp-content/themes/hawgcity1/images/hawg-city-catering-logo.png" />
								</a>
							</div>
						</div>

						<div class="col-md-5 col-md-push-3">
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
			</div>
		</div>
		<div class="navi container">
			<nav class="navbar accent-color" role="navigation">
				<hr class="nav-rule">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

						<?php jms_primary_menu(); ?>
						<div class="phone-number">
							<?php
								$phone = of_get_option('options_phone');
								$char = array('(',')','-',' ');
								$phone_link = str_replace($char, '', $phone);
							?>
							<a href="tel:+1<?php echo $phone_link; ?>"><i class="fa fa-phone"></i> <?php echo $phone; ?></a>
						</div>
				</nav>
				<div class="col-md-12 nav-wrapper">
					<div id="mainnav-bg-wrap">
						<div id="mainnav-bg">
						</div>
					</div>
				</div>

		</div>
	</header>
