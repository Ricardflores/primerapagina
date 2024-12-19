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
				<div class="col-md-12">
					<div class="button-group filters-button-group">
						<button class="button" data-filter=".transition">transition</button>
						<button class="button" data-filter=".alkali, .alkaline-earth">alkali and alkaline-earth</button>
						<button class="button" data-filter=":not(.transition)">not transition</button>
						<button class="button" data-filter=".metal:not(.transition)">metal but not transition</button>
						<button class="button" data-filter="numberGreaterThan50">number > 50</button>
						<button class="button" data-filter="ium">name ends with &ndash;ium</button>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<div class="button-group filters-button-group">
						<button class="button is-checked" data-filter="*">Mostrar todos</button>
						<?php $terms = get_terms( 'Categoria_karting' );
							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
								echo '<ul></ul>';
								foreach ( $terms as $term ) {
									
									echo '<button class="button" data-filter="' .$terms->slug.'">' . $term->name . '</button>';


								}
								echo '<ul></ul>';
							}
						
						
						?>
					</div> <!-- fin de botton group  -->
				</div> <!-- fin col md 12 -->
			</div><!-- fin row  -->








			<div class="row grid">
				<?php
					$args = array (
						'post_type' => 'karting',
						'post_status' => 'publish',
						'post_per_page' => -1,	
					);

					// the query.
					$the_query = new WP_Query( $args ); 


						if ( $the_query->have_posts() ) : 

						while ( $the_query->have_posts() ) :
						$the_query->the_post();
				?>
				<div class="col-md-3">
				
					<?php the_title( '<h2 class="las_clases">' , '</h2>' ); ?>
				</div>

				<div class="col-md-3 element-item transition metal" data-category="transition">	
					<?php 
						$galeria =  get_post_meta( get_the_ID(), 'kartgalery_kartingg', true );
						if($galeria): 
						foreach ($galeria as $imagen) :
					?>
							
					<img src="<?php echo $imagen ?>" alt="MDN" />
				</div>

					<?php
						endforeach;
						endif;			
						endwhile; 
					?>

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
