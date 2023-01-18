<?php
/**
 * Template part for displaying results in search pages
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
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

				<?php if ( 'post' === get_post_type() ) : ?>
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

			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

		</div>
	</section>

	
</article><!-- #post-<?php the_ID(); ?> -->
