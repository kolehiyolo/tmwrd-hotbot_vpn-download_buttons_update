<?php /* Template Name: Legal Page */ ?>
<?php
get_header();
?>

	<main id="primary" class="site-main">
		<?php include 'inc/inc-header.php'; ?>
		<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7">
    		<div class="container-small term-page-fs">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
		</section>
		
	</main><!-- #main -->

<?php /* get_sidebar(); */?>
<?php get_footer();
