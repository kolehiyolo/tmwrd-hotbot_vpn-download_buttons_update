<?php /* Template Name: Lander 1 page */ ?>
<?php get_header();?>

<?php include 'inc/inc-ip-isp.php'; ?>

<section class="layout-section layout-section--gradient-dark  pb-3 pt-1" style="min-height: 90vh; overflow: hidden;">
  <img src="<?php bloginfo('template_url'); ?>/assets/img/particles.svg" class="img-lander-particles" />
  <section class="layout-section nav-wrapper">
    <div class="container">
      <nav>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-brand">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/logo-dark-bg.svg" class="logo" alt="hotbot logo" />
        </a>
      </nav>
    </div>
  </section>
    
  <div class="container">
    <div class="row align-items-center">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/vpn-screens.svg" class="img-lander" />
      <div class="col-md-6 pt-4">
        <h1 class="h2 heading heading--light"><span class="danger"><?php esc_html_e('Danger! ', 'hotbot' ); ?></span></h1>
        <h2 class="h4 heading heading--light lander-heading-wrap mb-0"><?php esc_html_e('Web history & video activity is being sent through your ISP.', 'hotbot' ); ?></h2>
        <h2 class="h4 heading heading--light lander-heading-wrap mt-0"><?php esc_html_e('The use of a VPN is highly recommended.', 'hotbot' ); ?></h2>
        <p class="h5 heading heading--light lander-heading-wrap-bottom"><?php esc_html_e('Location: ', 'hotbot' ); ?><?php echo $addr; ?>
        <p class="h5 heading heading--light lander-heading-wrap-bottom"><?php if ($isp) { ?> <?php esc_html_e('ISP Name: ', 'hotbot' ); ?><?php echo $isp; ?><?php } ?>
        <p class="h5 heading heading--light lander-heading-wrap-bottom mb-0"><?php esc_html_e('Warning! No active VPN protection detected. Your identity is exposed.', 'hotbot' ); ?></p>
        <h5 class="heading heading--light lander-heading-wrap-bottom"><span><?php esc_html_e('Get protected instantly. Install HotBot VPN before the timer runs out and receive free trial access to our servers.' , 'hotbot' ); ?></span></h5>
        <ul class="listing mb-4">
          <li class="mb-3">
              <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
              <div class="listing__content">
                  <p class="heading heading--light"><?php esc_html_e('Change your virtual location, unblock content.', 'hotbot' ); ?></p>
              </div>
          </li>
          <li class="mb-3">
              <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
              <div class="listing__content">
                  <p class="heading heading--light"><?php esc_html_e('Fast video streaming, for 6 devices.', 'hotbot' ); ?></p>
              </div>
          </li>
          <li class="mb-3">
              <svg class="listing__icon"><use xlink:href="#check-circle-solid"></use></svg>
              <div class="listing__content">
                  <p class="heading heading--light"><?php esc_html_e('Connect now to become totally anonymous.', 'hotbot' ); ?></p>
              </div>
          </li>
        </ul>
        <?php
        if( get_field('link_type') == '1' ) {  ?>
          <a id="appstore" href="https://apps.apple.com/us/app/hotbot-vpn/id1488136863" target="_blank" class="btn btn--danger btn--block"><span><?php esc_html_e('Get it on the AppStore', 'hotbot' ); ?></span></a>
        <?php } elseif( get_field('link_type') == '2' ) { ?>
          <a id="appstore" href="https://apps.apple.com/us/app/hotbot-vpn/id1488136863" target="_blank">
            <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/app-store.svg" alt="app-store">
          </a>
        <?php } elseif( get_field('link_type') == '3' ) { ?>
          <a id="playstore" href="https://play.google.com/store/apps/details?id=com.hotbotvpn" class="btn btn--danger btn--block"><span><?php esc_html_e('Get it on Google Play', 'hotbot' ); ?></span></a>
        <?php } elseif( get_field('link_type') == '4' ) { ?>
          <div class="btn-group">
            <a id="playstore" href="https://play.google.com/store/apps/details?id=com.hotbotvpn" class="d-block mb-2" id="playstore">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/<?php if (ICL_LANGUAGE_CODE != 'en') { echo 'google-play_' . ICL_LANGUAGE_CODE . '.png'; } else { echo 'google-play.svg'; } ?>" class="m-auto ml-md-0" alt="google-play">
            </a>
            
            <a href="https://assets.hotbotvpn.com/hotbotvpn.apk" class="d-block mb-2" id="apk">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/download-apk.svg" class="m-auto ml-md-0" alt="google-play">
            </a>
          </div>
        <?php } ?>
        
      </div>
    </div>
  </div>
</section>
<?php include 'inc/inc-utm.php'; ?>
<?php get_footer();?>


