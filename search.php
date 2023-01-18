<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package hotbot
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php include 'inc/inc-header.php'; ?>
		<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7">

    		<div class="container">

				<div class="row justify-content-center">
            		<div class="col-md-10">
					<?php if ( have_posts() ) : ?>
						<header class="page-header">
							<h1 class="page-title">
								<?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search Results for: %s', 'hotbot' ), '<span>' . get_search_query() . '</span>' );
								?>
							</h1>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

						the_posts_navigation();

						else :

						get_template_part( 'template-parts/content', 'none' );

						endif;
					?>
					</div>
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php /* get_sidebar(); */?>
<?php get_footer();