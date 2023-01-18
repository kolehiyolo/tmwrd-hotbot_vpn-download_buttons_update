<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package hotbot
 */

get_header();
?>

	<?php include 'inc/inc-header.php'; ?>

	<main id="primary" class="site-main">

		<section class="layout-section pt-5 pb-5 pb-md-7 text-align-center--md ">
            <div class="container text-align-center" style="min-height: 50vh; display: flex; justify-content: center; align-items: center">

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 heading>404</h1>
						<h2 class="heading"><?php esc_html_e('Sorry, that page can\'t be found', 'hotbot'); ?></h2>
					</header><!-- .page-header -->

				</section><!-- .error-404 -->
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
