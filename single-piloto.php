<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package primerapagina
 */

		get_header();  

?>


	<div class="col-md-12">
		<main id="main" class="site-main">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="row">
				<div class="col-md-4">
					<?php 
					primerapagina_post_thumbnail(); ?>
					<a href="a"><i class="fab fa-facebook-square fa-2x"></i></a>
					<a href="a"><i class="fab fa-twitter-square fa-2x"></i></a>
					<a href="a"><i class="fab fa-pinterest-square fa-2x"></i></a>
					<a href="a"><i class="fab fa-youtube-square fa-2x"></i></a>
				</div>
				
				<div class="col-md-8 detalle_piloto">
					<header class="entry-header"> 
					<?php
							the_title( '<h1 class="entry-title">', '</h1>' );
							the_content();
					?>
					
					<h3 class="entry-title">Perfil del piloto</h3>
					<span>Nombre:</span> <?php echo get_post_meta( get_the_ID( ), 'my_prefix_Nombre_piloto', true ); ?> <br/>
					<span>Edad:</span> <?php echo get_post_meta( get_the_ID( ), 'my_prefix_Edad_piloto', true ); ?> <br/>
					<span>Nacionalidad:</span> <?php echo get_post_meta( get_the_ID( ), 'my_prefix_Nacionalidad_piloto', true ); ?> <br/>
					<span>Campeonatos Mundiales:</span> <?php echo get_post_meta( get_the_ID( ), 'my_prefix_campeonatos_piloto', true ); ?>  <br/>
					<span>Escuderia:</span> <?php echo get_post_meta( get_the_ID( ), 'my_prefix_Escuderia_piloto', true ); ?>  <br/>
				</div>
			</div>

			<div class="row">
			<div class="col-md-12">
				<h3 class="entry-title"><?php echo get_post_meta( get_the_ID( ), 'Habilidades_HabilidadesT', true ); ?> <br/></h3>
				
			</div>	
			</div>	
			<div class="row">
				<div class="col-md-12">
					<p>Manejo</p>
					<div>
					<div  class="progress" role="progressbar"  aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" >
						<div>
							 <?php echo get_post_meta( get_the_ID( ), 'Habilidades_Porcentaje_1', true ); ?> 
						</div>
					</div>
					<p>Gestion de Neumaticos</p>
					<div  class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" >
						<div> 
							<?php echo get_post_meta( get_the_ID( ), 'Habilidades_Porcentaje_2', true ); ?> 
						</div>
					</div>
					<p>Compañerismo</p>
					<div  class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" >
						<div> 
							<?php echo get_post_meta( get_the_ID( ), 'Habilidades_Porcentaje_3', true ); ?> 
						</div>
					</div>
			
				</div>

			</div>
			<div class="row">
				<div class="col-md-12">
					<h3 class="entry-title"><?php echo get_post_meta( get_the_ID( ), 'galeriati_Titulo_galeria', true ); ?> 
					</h3>
				</div>
				<?php 
				$galeria =  get_post_meta( get_the_ID(), 'galeria_piloto', true );
				foreach ($galeria as $imagen) :
					//var_dump( $imagen );
					?>
					<div class="col-md-4">
						
						<img src="<?php echo $imagen ?>" alt="MDN" />
					</div>
					<?php
				endforeach;


				
				
				
				
				
				
				
				
				
				?>
			</div>

	</div>
	</main><!-- #main -->
	</div><!-- #primary -->
	<br>
<?php

get_footer();

