<?php /* Template Name: Affiliate contact page */ ?>
<?php
 
if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
  wpcf7_enqueue_scripts();
}
 
if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
  wpcf7_enqueue_styles();
}
 
?>
<?php get_header();?>

<?php include 'inc/inc-header-affiliate.php'; ?>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md ">
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
              <h1 class="heading text-align-center"><?php esc_html_e('Affiliate Support', 'hotbot'); ?></h1>
              <p class="legend text-align-center"><?php esc_html_e('Drop us a line using the form below and one of our friendly staff will get back to you soon', 'hotbot'); ?></p>

              <div class="p-5">
                <?php if (have_posts()) : while(have_posts()) : the_post();?>
                        <?php echo the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
              </div>
          </div>
        </div>
    </div>
</section>



<?php get_footer();?>