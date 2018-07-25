<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

	$description = get_bloginfo( 'description', 'display' );

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 site-branding">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img width="100px" src="<?php echo get_template_directory_uri(); ?>/images/datos-logo.svg" alt="<?php echo $description ?>" />
					</a>

				</div><!-- /.row .site-branding -->
				<div class="col-md-4">
					<!-- Static navbar -->
							<nav class="navbar navbar-default">
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-12">
											<?php
												if ( function_exists('yoast_breadcrumb') ) {
												  yoast_breadcrumb( '</p><p class="breadcrumbs">','</p><p>' );
												}
												?>
										</div>

									</div>
									<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									<div id="navbar" class="navbar-collapse collapse">
										<?php wp_nav_menu( array(
											'theme_location' => 'menu-1',
											'menu_id' => 'navbar',
											'menu_class' => 'navbar-collapse',
											'items_wrap' => '<ul id="" class="nav navbar-nav navbar-right">%3$s</ul>' ) );
											?>

										<span onclick="openNav()" class="search"><img src="<?php echo get_template_directory_uri(); ?>/images/search.png"  /></span>

										<!-- The overlay -->
										<div id="mySearch" class="overlay">

										  <!-- Button to close the overlay navigation -->
										  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

										  <!-- Overlay content -->
										  <div class="overlay-content">
												<form action="/" method="get" _lpchecked="1">
												<div class="container">
													<input type="text" value="" placeholder="Search.." name="s">
										      <button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/images/search.png"  /></button>
												</div>

									    </form>
										 </div>

										</div>



									</div>

								</div><!--/.container-fluid -->
							</nav><!-- #site-navigation -->
				</div><!-- /.col-md-4-->
				<div class="col-md-2 social">
					<a href="https://www.facebook.com/DatosSolutions/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/Facebook-icon.jpg" alt="follow us on Facebook"  />
					</a>
					<a href="https://twitter.com/datos_solutions" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.jpg" alt="follow us on Twitter"  />
					</a>
					<a href="https://plus.google.com/118132759380621501563" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/google+-icon.jpg" alt="follow us on Google+"  />
					</a>
					<a href="https://www.linkedin.com/company/datos-professional-solutions-ltd-/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/images/linkedin-icon.jpg" alt="follow us on Linkedin"  />
					</a>
				</div>
			</div><!-- /.row-->

		</div><!-- /.container-fluid -->




	</header>

	<div id="content" class="site-content">
