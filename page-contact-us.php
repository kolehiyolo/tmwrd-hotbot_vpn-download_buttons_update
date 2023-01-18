<?php /* Template Name: Contact us page */ ?>

<?php
 
if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
  wpcf7_enqueue_scripts();
}
 
if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
  wpcf7_enqueue_styles();
}
 
?>

<?php get_header();?>

<?php include 'inc/inc-header.php'; ?>



<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md ">
    <div class="container text-align-center">
        <div class="row justify-content-center">
          <div class="col-md-8">
              <h1 class="heading"><?php esc_html_e('Contact Us', 'hotbot'); ?></h1>
              <p class="legend"><?php esc_html_e('Get in touch and let us know how we can help you.', 'hotbot'); ?></p>
          </div>
        </div>
    </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="row justify-content-center">
          <div class="col-md-11">
            <h2 class="heading"><?php esc_html_e('Contact Information', 'hotbot'); ?></h2>
            <h4 class="text-color-primary"><?php esc_html_e('Address', 'hotbot'); ?></h4>
            <p>HotBot Limited Suite 9, Ansuya Estate Revolution Avenue Victoria, Mahe, Seychelles</p>

            <h4 class="text-color-primary"><?php esc_html_e('Contact', 'hotbot'); ?></h4>
            <p class="row align-items-center container-fluid mb-3"><svg class="icon svg-icon svg-icon--20  mr-3"><use xlink:href="#globe-solid"></use></svg>www.hotbotvpn.com/contact</p>
            <p class="row align-items-center container-fluid mb-5"><svg class="icon svg-icon svg-icon--20  mr-3"><use xlink:href="#envelope-solid"></use></svg>help@hotbotvpn.com</p>

            <h4 class="text-color-primary"><?php esc_html_e('Follow us', 'hotbot'); ?></h4>
            <ul class="no-list-style row align-items-center container-fluid mb-5">
                <li class="mr-5 rtl-mr-5">
                  <a href="https://www.facebook.com/HeyHotBot/" target="_blank">
                    <svg class="icon svg-icon svg-icon--20 "><use xlink:href="#facebook-f-brands"></use></svg>
                  </a>
                </li>
                <li class="mr-5 rtl-mr-5">
                  <a href="https://www.instagram.com/heyhotbot/" target="_blank">
                    <svg class="icon svg-icon svg-icon--20 "><use xlink:href="#instagram-brands"></use></svg>
                  </a>
                </li>
                <li class="mr-5 rtl-mr-5">
                  <a href="https://twitter.com/HeyHotBot" target="_blank">
                    <svg class="icon svg-icon svg-icon--20 "><use xlink:href="#twitter-brands"></use></svg>
                  </a>
                </li>
            </ul>
          </div>
        </div>
      </div>
      <?php /*
      <div class="col-md-6">
        <div class="card">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-11">
                <h2 class="heading"><?php esc_html_e('Send us message', 'hotbot'); ?></h2>
                <div class="form pb-3">
                    <?php echo do_shortcode( '[contact-form-7 id="77" title="Contact Us"]' );?>
                      <!-- <div class="form__group mb-3">
                          <label>Your name</label>
                          <input type="text" class="form__control mt-3"/>
                      </div>
                      <div class="form__group mb-3">
                          <label>Email address</label>
                          <input type="email" class="form__control mt-3"/>
                      </div>
                      <div class="form__group mb-5">
                          <label>Your message</label>
                          <textarea class="form__control mt-3"></textarea>
                      </div>

                      <div class="form__group mb-5">
                          <input type="submit" value="Submit" />
                      </dv>

                      <div class="form__group mb-3"> -->
                </div>
              </div>
            </div>
        </div>
      </div> */ ?>
    </div>
  </div>
</section>

<?php include 'inc/inc-package-plan.php'; ?>

<?php include 'inc/inc-apps-link.php'; ?>

<?php get_footer();?>