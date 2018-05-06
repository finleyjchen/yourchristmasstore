<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-6 offset-md-2">
			<strong>Information</strong>

				<ul class="small footer-list">
					<li><a href="">About Us</a></li>
					<li><a href="">Customer Service	</a></li>
					<li><a href="">Privacy Policy</a></li>
					<li><a href="">Site Map</a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
				</ul>
			</div>
			<div class="col-md-4">
				</div>	
			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info text-center">
						
						<small>© 2018 Your Christmas Store - Canterbury Gardens and Gifts. All Rights Reserved.</small>
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

