<?php
/* Template Name: Todas las clases 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package primerapagina
 */

get_header();
?>

	<div id="primary" class="content-area col-md-12">
		<main id="primary" class="site-main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
		<div class="row"></div>
			<div class="col-md-12">
				<?php 
					the_title( '<h2 class="entry_tittle">' , '</h2>' ); 
				?>
			</div>
		</div>



		<div class="row">
			<?php
			$args = array (
				'post_type' => 'karting',
				'post_status' => 'publish',
				'post_per_page' => -1,	
			);

			// the query.
			$the_query = new WP_Query( $args ); ?>

			<?php 
				if ( $the_query->have_posts() ) : 
			?>
				<!-- pagination here -->

				<!-- the loop -->
			<?php
				while ( $the_query->have_posts() ) :
				$the_query->the_post();
			?>

			<div class="col-md-3">
			
			<?php 
				the_title( '<h2 class="las_clases">' , '</h2>' ); 
			?>
			</div>

			<?php 
			endwhile; ?>

				<!-- end of the loop -->

				<!-- pagination here -->
				
			<?php // final del ciclo  
				wp_reset_postdata(); 
			?>

			<?php else : ?>
				<p>
					<?php 
						esc_html_e( 'No tengo datos.' ); 
					?>
				</p>
			<?php endif; ?>
		</div>
		
		</article>


	</main><!-- #main -->
	</div><!--main -->
	
<?php
get_footer();
