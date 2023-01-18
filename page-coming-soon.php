<?php /* Template Name: Coming Soon page */ ?>

<?php get_header();?>

<?php include 'inc/inc-header.php'; ?>
<section class="layout-section mt-5 mb-5 pb-5">
  <div class="container">
    <div class="card card--active text-align-center pb-0">
      <div class="row align-items-end">
        <div class="col-12 col-sm-6 order-sm-2">
          <div class="mb-5 pb-sm-5">
           <h5 class="mb-5"><?php _e('We\'re working on our order page, for now, try the <span class="text-color-primary">iOS</span> and <span class="text-color-primary">Android Apps</span> for free!', 'hotbot');?>
            </h5>
            <div class="btn-group btn-group--center">
                        <a id="playstore" href="https://play.google.com/store/apps/details?id=com.hotbotvpn">
                          <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/google-play.svg" class="m-auto" alt="google-play">
                        </a>
                  <a id="appstore" href="https://apps.apple.com/us/app/hotbot-vpn/id1488136863" target="_blank">
                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/app-store.svg" alt="app-store">
                  </a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 order-sm-1">
          <h2 class="text-color-primary"><?php esc_html_e('Coming soon', 'hotbot'); ?></h2>
          <p class="mb-5"><?php esc_html_e('We are currently working hard building this content', 'hotbot'); ?></p>
          <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/logo-coming-soon.webp" type="image/webp">
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/logo-coming-soon.png" type="image/png">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/logo-coming-soon.png" class="m-auto" alt="">
          </picture>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer();?>