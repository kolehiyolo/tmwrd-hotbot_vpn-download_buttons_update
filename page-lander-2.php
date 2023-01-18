<?php /* Template Name: Lander 2 page */ ?>
<?php get_header();?>

<?php include 'inc/inc-ip-isp.php'; ?>

<section class="layout-section layout-section--lander-bg  pb-5">

  <div class="lander-hero pt-5 pb-5 mb-3">
    <picture>
        <source srcset="<?php bloginfo('template_url'); ?>/assets/img/lander-hero-2.webp" type="image/webp">
        <source srcset="<?php bloginfo('template_url'); ?>/assets/img/lander-hero-2.png" type="image/png"> 
        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/lander-hero-2.png" class="lander-hero__img slunt">
    </picture>

    <div class="container">
        <nav>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-brand">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo-dark-bg.svg" class="logo m-auto" alt="hotbot logo" />
            </a>
        </nav>
    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
            <div class="pt-5">
                <h2 class="h3 heading heading--light">Someone May Be <br>Watching What you Browse</h2>
                <h3 class="h5 heading heading--light">Your IP: <?php echo $addr; ?><br/><?php if ($isp) { ?> Your ISP: <?php echo $isp; ?><br/><?php } ?>
                could be exposed</h3>
            </div>

            <h4 class="heading heading--light d-none" id="getDealNow">EXPIRED</h4>
            <div class="container-fluid mt-3 mb-5">
                <div class="row text-align-center" id="countDOwn">
                    <div class="pl-2 pr-2">
                        <h2 class="heading heading--light mt-0 mb-0" id="minutes">5</h2>
                        <span class="heading heading--light small">MINUTES</span>
                    </div>
                    <div class="pl-2 pr-2">
                        <h2 class="heading heading--light mt-0 mb-0">:</h2>
                    </div>
                    <div class="pl-2 pr-2">
                        <h2 class="heading heading--light mt-0 mb-0" id="seconds">00</h2>
                        <span class="heading heading--light small">SECONDS</span>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </div>
  </div>


  <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
            <h4 class="heading heading--light">Follow three steps to encrypt your web traffic and change your IP address:</h4>
            <ul class="listing mb-5">
                <li class="mb-3">
                    <i class="listing__icon circle"> </i>
                    <div class="listing__content">
                        <p class="heading heading--light">1. Click below to download VPN</p>
                    </div>
                </li>
                <li class="mb-3">
                    <i class="listing__icon circle"> </i>
                    <div class="listing__content">
                        <p class="heading heading--light">2. Open app, click connect button</p>
                    </div>
                </li>
                <li class="mb-3">
                    <i class="listing__icon circle"> </i>
                    <div class="listing__content">
                        <p class="heading heading--light">3. Browse web and apps anonymously</p>
                    </div>
                </li>
            </ul>

            <?php
            
            if( get_field('link_type') == '1' ) {  ?>
            <a id="appstore" href="https://apps.apple.com/us/app/hotbot-vpn/id1488136863" target="_blank" class="btn btn--danger btn--block"><span>Get it on the AppStore</span></a>
            <?php } elseif( get_field('link_type') == '2' ) { ?>
            <a id="appstore" href="https://apps.apple.com/us/app/hotbot-vpn/id1488136863" target="_blank">
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/app-store.svg" alt="app-store">
            </a>
            <?php } elseif( get_field('link_type') == '3' ) { ?>
            <a id="playstore" href="https://play.google.com/store/apps/details?id=com.hotbotvpn" class="btn btn--danger btn--block"><span>Get it on Google Play</span></a>
            <?php } elseif( get_field('link_type') == '4' ) { ?>
            <div class="btn-group">
                <a id="playstore" href="https://play.google.com/store/apps/details?id=com.hotbotvpn" class="d-block mb-2">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/google-play.svg" class="m-auto ml-md-0" alt="google-play">
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


