<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package primerapagina
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header"> <?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
	<?php 

	primerapagina_post_thumbnail(); ?>

		<?php ?>
	</header><!-- .entry-header -->

	
	<div class="entry-content">

	<?php
		if (! is_singular()):
			the_excerpt();
			echo '<a class="float-right btn-leer-mas btn btn-primary " href="'. get_permalink($post->ID) . '">'. __('Read More', 'primerapagina') . '></a>';
		else: 
		the_content( sprintf(
			wp_kses(
					__('Continue reading<span class="screen-reader-text"> "%s"</span>',
					'primerapagina' ),
					array(
						'a' => array(
							'href' => array(),
							'title' => array()
						),
						'br' => array(),
						'em' => array(),
						'strong' => array(),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);
			
		endif;

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'primerapagina' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php primerapagina_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->


