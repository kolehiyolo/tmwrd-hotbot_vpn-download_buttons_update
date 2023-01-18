<?php
/**
 * Template part for displaying posts
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
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
						<?php
						hotbot_posted_on();
						hotbot_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->
			<div class="mt-5 mb-5">
				<?php hotbot_post_thumbnail(); ?>
			</div>

			<div class="entry-content">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'hotbot' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hotbot' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
			
		</div>
	</section>

</article><!-- #post-<?php the_ID(); ?> -->
