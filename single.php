<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hotbot
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php include 'inc/inc-header.php'; ?>
		
		<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7">

    		<div class="container">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );


					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
		</section>

	</main><!-- #main -->

	<?php include 'inc/inc-package-plan.php'; ?>

	<?php include 'inc/inc-apps-link.php'; ?>

<?php /* get_sidebar(); */?>
<?php get_footer();