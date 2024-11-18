<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package primerapagina
 */

?>
	</div> <!--row -->
	</div><!-- content container--> 

			<footer id="colophon" class="site-footer row">
				<div class="container">
				<div class="row">
						<div class="col-md-4">
						<div id="footer 1" class="widget-area">
							<?php 
								dynamic_sidebar( 'footer 1' ); 
							?>
						</div>

						<div class="col-md-4">
						<div id="footer 2" class="widget-area">
							<?php 
								dynamic_sidebar( 'footer 2' ); 
							?>
						</div>


						<div class="col-md-4">
						<div id="footer 3" class="widget-area">
							<?php 
								dynamic_sidebar( 'footer 3' ); 
							?>
						</div>
					</div>    <!-----row-------->

					<div class="site-info row ">
						<div class="col-md-12 text-center">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'primerapagina' ) ); ?>">
						<?php
								/* translators: %s: CMS name, i.e. WordPress. */
									printf( esc_html__( 'Proudly powered by %s', 'primerapagina' ), 'WordPress' );
						?>
							</a>
							<span class="sep"> | </span>
						<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Theme: %1$s by %2$s.', 'primerapagina' ), 'primerapagina', '<a href="http://underscores.me/">Underscores.me</a>' );
						?>

						</div>

						
		</div><!-- .site-info -->

				</div>        <!-----fin container-------->


				

	</footer><!-- #colophon -->
</div><!-- #page --> 


<?php wp_footer(); ?>

</body>
</html>
