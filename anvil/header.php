<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="main">
 */
?>

<!DOCTYPE html>
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if IE 8]> 				 <html class="no-js lt-ie9" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 9]> 				 <html class="no-js lt-ie10" <?php language_attributes(); ?> > <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="top-banner">
	
		<div class="row">
		
			<div class="columns-12">

				<?php if(get_field('phone','options')): ?>

					<span class="contact-phone"><?php the_field('phone','options'); ?></span>

				<?php endif; ?>


				<?php if(get_field('email','options')): ?>

					<span class="contact-email"><a href="mailto:<?php the_field('email','options'); ?>"><?php the_field('email','options'); ?></a></span>

				<?php endif; ?>


				<?php if(get_field('social_media', 'options')): ?>	

					<ul class="social-menu menu">
						<?php while(has_sub_field('social_media', 'options')): ?>
						<li><a class="ss-icon ss-social-regular <?php the_sub_field('social_media'); ?>" target="_blank" href="<?php the_sub_field('link', 'options'); ?>"><?php the_sub_field('social_media'); ?></a></li>
						<?php endwhile;?>
					</ul>
				
				<?php endif; ?>	

				<?php //wp_nav_menu( array( 'theme_location' => 'utility', 'items_wrap' => '<ul id="utility-nav" class="nav menu">%3$s</ul>' ) ); ?>

			</div>

		</div>

	</header>

	<header id="masthead" class="site-header panel" role="banner">
		
		<div class="row">
	
			<div class="columns-6 site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="site logo" />
				</a>
			</div>
							
			<nav id="site-navigation" class="columns-6 navigation-main" role="navigation">

				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '<ul id="main-nav" class="nav menu dropmenu">%3$s</ul>' ) ); ?>

				<a href="#" class="mobile-trigger burger-trigger">
					<span></span>
					<span></span>
					<span></span>
				</a>
			
			</nav><!-- #site-navigation -->

			<div class="columns-12">

				<div class="full-width-trigger">

					<a href="#" class="mobile-trigger">Menu</a>

					<span class="menu-slide"></span>

				</div>

			</div>

			<nav class="columns-12 mobile-nav-container">

				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '<ul id="mobile-nav" class="nav menu">%3$s</ul>', 'container_class' => 'menu-mobile-menu-container', ) ); ?>

				<?php if(get_field('phone','options')): ?>

					<span class="contact-phone"><a href="callto:<?php the_field('phone','options'); ?>">Call Us</a></span>

				<?php endif; ?>


				<?php if(get_field('email','options')): ?>

					<span class="contact-email"><a href="mailto:<?php the_field('email','options'); ?>">Send Email</a></span>

				<?php endif; ?>


				<?php if(get_field('social_media', 'options')): ?>	

					<?php 
						$count = 0;
						while(has_sub_field('social_media','options')) {
							$count++;
						}
						if($count > 4) {
							$social_class = ' block-grid-3'; 
						} elseif($count == 4 || $count == 2) {
							$social_class = ' block-grid-2';
						} elseif($count == 3) {
							$social_class = ' block-grid-3';
						}
					?>

					<ul class="social-menu<?php echo $social_class; ?>">
						<?php while(has_sub_field('social_media', 'options')): ?>
						<li><a class="ss-icon ss-social-regular <?php the_sub_field('social_media'); ?>" target="_blank" href="<?php the_sub_field('link', 'options'); ?>"><?php the_sub_field('social_media'); ?></a></li>
						<?php endwhile;?>
					</ul>
				
				<?php endif; ?>	

			</nav>
		
		</div>

	</header><!-- #masthead -->

	<section id="main" class="site-main">