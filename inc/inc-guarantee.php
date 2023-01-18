<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 ">
  <?php if (is_page_template( 'page-download-page.php' ) ) : ?>
	  <div class="layout-section__bg"></div>
	<?php endif; ?>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-sm-6">
        <div class="row">
          <div class="col-md-10 text-align-center--sm">
            <h3 class="heading mb-5"><?php _e('<span>30-day</span> money-back guarantee', 'hotbot' ); ?>
            </h3>
            <p><?php esc_html_e('Don\'t love HotBot VPN within 30 days? Then get your
              money-back, no questions asked!', 'hotbot' ); ?>
            </p>

            <?php if (is_page_template( 'page-download-page.php' ) ) : ?>
              <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary has-arrow mt-5 mb-5 mb-md-0"><span><?php esc_html_e('Get HotBot VPN', 'hotbot' ); ?>
        <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="row justify-content-end">
          <div class="col-md-7">
            <div class="row justify-content-center">
              <div class="col-9 col-sm-12">
                <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/money-back-guarantee.svg" class="ml-auto mr-auto" width="226" height="150" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>