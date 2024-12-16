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
		
		<?php
			the_title( '<h1></h1>')
		?>

		</article>
	</main><!-- #main -->
	</div><!-- #primary -->
	<br>
<?php

get_footer();

