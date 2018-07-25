<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>

	</div><!-- #content -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 footer__left">
					<div class="row">
						<div class="col-md-3">
							<a href="">Request a Demo</a>
						</div><!-- /.col-md-6 -->
						<div class="col-md-9 menu">

							<?php wp_nav_menu( array(
								'theme_location' => 'footer-products', ) );
								?>

						</div><!-- /.col-md-6 -->
					</div><!-- /.row -->
				</div>
				<div class="col-md-6 footer__right">
					<div class="row">
						<div class="col-md-4 tel">
							<a href="tel:+44 28 3836 2002">T. +44 28 3836 2002</a>
						</div><!-- /.col-md-4 -->
						<div class="col-md-4 byline">
							Site by <a href="https://cornellstudios.com/" target="_blank">Cornell</a>
						</div><!-- /.col-md-4 -->
						<div class="col-md-4 copyright">
							© Datos Professional Solutions <?php echo date('Y'); ?>
						</div><!-- /.col-md-4 -->
					</div><!-- /.row -->
				</div><!-- /.col-md-6 -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
