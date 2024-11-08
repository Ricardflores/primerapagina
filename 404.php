<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package primerapagina
 */

get_header();
?>
	<div id="primary" class="content-area col-md-6">
	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Pagina no encontrada', 'primerapagina' ); ?></h1>
			</header><!-- .page-header -->

				<p><?php esc_html_e( 'Parece que lo que buscas no ha sido encontrado.', 'primerapagina' ); ?></p>

		</section><!-- .error-404 -->

	</main><!-- #main -->
	</div><!--primary-->

	<div class="col-md-6">
	<div class="page-content">
				

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'primerapagina' ); ?></h2>
						<ul>
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					$primerapagina_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'primerapagina' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$primerapagina_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

			</div><!-- .page-content -->

	</div>
<?php
get_footer();
