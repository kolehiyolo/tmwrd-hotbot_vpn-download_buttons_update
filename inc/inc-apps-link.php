<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7">
  <div class="container text-align-center">
    <h2 class="heading"><?php esc_html_e('Get the HotBot VPN Mobile App.', 'hotbot' ); ?></h2>
    <p><?php esc_html_e('Download our apps for iOS and Android', 'hotbot' ); ?></p>
    <div class="btn-group btn-group--center">
      <a id="playstore" href="<?php  echo $playUrl; ?>">
        <!-- <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/google-play.svg" alt="google-play" /> -->
        <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/download-buttons/google-play/google_play-<?php echo ICL_LANGUAGE_CODE ?>.png" alt="google-play" />
      </a>
      <a id="appstore" href="https://apps.apple.com/us/app/hotbot-vpn/id1488136863" target="_blank">
        <!-- <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/app-store.svg" alt="app-store" /> -->
        <img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/download-buttons/apple-app-store/app_store_badge-<?php echo ICL_LANGUAGE_CODE ?>.svg" alt="google-play" />
      </a>
    </div>
  </div>
</section>
<?php include 'inc-utm.php'; ?> 