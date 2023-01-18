<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hotbot
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7">
			<div class="container">
			<header class="entry-header">
				<?php the_title( '<h1 class="heading h2">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<?php hotbot_post_thumbnail(); ?>

			<div class="entry-content">
				<?php
				the_content();

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hotbot' ),
						'after'  => '</div>',
					)
				);
				?>
			</div>
	</section>

	</div><!-- .entry-content -->

	<?php /* if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						__( 'Edit <span class="screen-reader-text">%s</span>', 'hotbot' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; */?>
</article><!-- #post-<?php the_ID(); ?> -->
