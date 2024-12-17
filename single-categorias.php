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
				<img src="<?php echo get_template_directory_uri();?>/img/max.png" class="d-block w-100" alt="First slide">
				</div>
				<div class="carousel-item">
				<img src="<?php echo get_template_directory_uri();?>/img/max.png" class="d-block w-100" alt="Second slide">
				</div>
				<div class="carousel-item">
				<img src="<?php echo get_template_directory_uri();?>/img/max.png" class="d-block w-100" alt="Third slide">
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
			the_title( '<h1 class="entry-title">' , '</h1>');
		?>
			<p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ipsam qui esse ad eligendi sequi voluptas dolore quis quas inventore perspiciatis quo harum, error quod mollitia illo! Provident, consequatur voluptas!
			Corporis aspernatur asperiores voluptas necessitatibus dignissimos quidem laboriosam soluta, est non. Totam ad temporibus labore architecto itaque ea obcaecati neque eaque aperiam nemo explicabo quia, optio fugiat autem voluptates iure!
			Corrupti officiis vel quidem rerum magni esse in at eius alias, odit velit sed accusantium aliquid perspiciatis maxime quisquam fugiat quaerat dolor! Sunt dolor ut eveniet fuga similique sequi minima?</p>
	</div><!-------fin col----->
</div> <!-------fin row----->

<div class="container text-center">
  	<div class="row ">
    	<div class="col practica1">
			viernes 12:30 <br> $30000
		</div>
		<div class="col practica2">
			sabado 2:30 <br> $15000
		</div>
		<div class="col practica1">
			domingo 3:40 <br>$12800
		</div>
	</div><!-------fin row----->
</div><!-------fincontainer----->
<div class="container">
	<div class="row flex justify-content-center datos_maestro_kart_clase">
		<div class="col-md-4">
		<img src="<?php echo get_template_directory_uri( );?>/img/kart1.png">
		</div>
		<div class="col-md-4">
			<h3>Maestro de kart </h3>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde dicta beatae, itaque esse odit dignissimos
				 voluptatum quam voluptates in mollitia nesciunt dolore consequatur, vero veritatis praesentium commodi voluptas sit saepe?
			</p>
			<div class="d-flex justify-content-center iconos_sociales_kart">
				<a href="a <?php echo esc_attr( get_post_meta( get_the_ID( ), 'Redes_Red_piloto1', true )); ?>" target="_blank" ><i class="fab fa-facebook-square fa-2x"></i></a>
				<a href="a <?php echo get_post_meta( get_the_ID( ), 'Redes_Red_piloto2', true ); ?>" ><i class="fab fa-twitter-square fa-2x"></i></a>
				<a href="a <?php echo get_post_meta( get_the_ID( ), 'Redes_Red_piloto3', true ); ?>" ><i class="fab fa-pinterest-square fa-2x"></i></a>
			</div>
		</div>

	</div>
</div>

		</article>
	</main><!-- #main -->
	</div><!-- #primary -->
	<br>
<?php

get_footer();

