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

		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
				<img src="<?php echo get_template_directory_uri();?>/img/kart4.png" class="d-block w-100" alt="First slide">
				</div>
				<div class="carousel-item">
				<img src="<?php echo get_template_directory_uri();?>/img/kart5.png" class="d-block w-100" alt="Second Slide">
				</div>
				<div class="carousel-item">
				<img src="<?php echo get_template_directory_uri();?>/img/kart3.png" class="d-block w-100" alt="Third slide">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	<div class="row">
		<div class="col-md-12">
			<?php  
				the_title( '<h1 class="entry-tittle">' , '</h1>' );
				the_content();
			?>
			<p class="d-flex justify-content-center">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maiores, deserunt, 
				molestiae beatae harum rerum praesentium eligendi atque ad voluptatem consequuntur laudantium, 
				rem enim quibusdam cupiditate natus adipisci nostrum corporis!
			</p>
		</div><!--fin del col-md -->
	</div><!--fin del row -->



	<div class="container text-center">
  		<div class="row">
    		<div class="col practica1">
				<?php echo get_post_meta( get_the_ID( ), 'horario_karting1', true ); ?>
			</div>
			<div class="col practica2">
				Miercoles 3:40pm <br> $500 por carrera
			</div>
			<div class="col practica1">
				Viernes 12:30 <br> $500 y 2 por 1 en clase
			</div>
		</div><!--fin del ROW-->
	</div><!--fin del CONTAINER-->



<div class="container">
	<div class="row justify-content-center datos_maestro_kart">
		<div class="col-md-4">
			<img src="<?php echo get_template_directory_uri(  );?>/img/sergio2.png">
		</div>
		<div class="col-md-4 flex ">
			<p><h1 class="datos_maestro_kart_clase">Maestro clase 1</h1></p>
			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero repudiandae, 
				harum explicabo numquam iste ipsum fugit rem sint dicta facere dignissimos 
				totam soluta aliquid porro recusandae! Neque tempora modi vero.
			</p>
			<div class="d-flex justify-content-center iconos_sociales_kart">
			<a href="a <?php echo esc_attr( get_post_meta( get_the_ID( ), 'Red_karting1', true )); ?>" target="_blank" ><i class="fab fa-facebook-square fa-2x"></i></a>
			<a href="a <?php echo esc_attr(get_post_meta( get_the_ID( ), 'Red_karting2', true )); ?>" ><i class="fab fa-twitter-square fa-2x"></i></a>
			<a href="a <?php echo esc_attr(get_post_meta( get_the_ID( ), 'Red_karting3', true )); ?>" ><i class="fab fa-pinterest-square fa-2x"></i></a>				<a href="a <?php echo esc_attr(get_post_meta( get_the_ID( ), 'Redes_Red_piloto4', true )); ?>" ><i class="fab fa-youtube-square fa-2x"></i></a>
			</div>
		</div>
	</div>

</div>




	</div>
	</main><!-- #main -->
	</div><!-- #primary -->
	<br>
<?php

get_footer();

