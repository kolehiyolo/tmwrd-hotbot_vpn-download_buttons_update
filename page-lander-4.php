<?php /* Template Name: Lander 4 page */ ?>
<?php get_header();?>

<?php include 'inc/inc-ip-isp.php'; ?>

<section class="layout-section layout-section--lander-bg  pb-5">

    
    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/globe-vpn.svg" class="img-cover">

   
    <div class="lander-hero">
        <div class="pb-5 mb-3">

            <div class="container">
                <nav>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-brand">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/logo-dark-bg.svg" class="logo m-auto" alt="hotbot logo" />
                    </a>
                </nav>
            </div>

            <div class="container text-align-center--md">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="pt-3">
                            <h2 class="h3 heading heading--light">Someone May Be <br>Watching What you Browse</h2>
                            <h3 class="h5 heading heading--light">Your IP: <?php echo $addr; ?><br/><?php if ($isp) { ?> Your ISP: <?php echo $isp; ?><br/><?php } ?>
                            could be exposed</h3>
                        </div>

                        <h4 class="heading heading--light d-none" id="getDealNow">EXPIRED</h4>
                        <div class="container-fluid mt-3 card--opacity-bg no-border pt-3 pb-3">
                            <div class="bg"></div>
                            <div class="row text-align-center justify-content-center count-down" id="countDOwn">
                                <div class="pl-2 pr-2">
                                    <h2 class="heading heading--light mt-0 mb-0" id="minutes">5</h2>
                                    <span class="small text-color-primary">MINUTES</span>
                                </div>
                                <div class="devider-y ml-3 mr-3">
                                </div>
                                <div class="pl-2 pr-2">
                                    <h2 class="heading heading--light mt-0 mb-0" id="seconds">00</h2>
                                    <span class="small text-color-primary">SECONDS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="row justify-content-center">
                    <div class="col-10 col-sm-12">
                        <div class="row">
                            <div class="col-6">
                                <h6 class="heading heading--overline heading--light">Follow three steps to encrypt your web traffic and change your IP address:</h6>
                            </div>
                            <div class="col-6">
                                <div class="card card--purple no-border mb-5">
                                    <svg class="svg-icon--20 svg-icon--lite"><use xlink:href="#check-circle-solid"></use></svg>
                                    <p class="heading--light small mt-3 mb-0 text-align-center">1. Click below to download VPN</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card card--mint no-border mb-5">
                                    <svg class="svg-icon--20 svg-icon--lite"><use xlink:href="#check-circle-solid"></use></svg>
                                    <p class="heading--light small mt-3 mb-0 text-align-center">2. Open app, click connect button</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card card--orange no-border mb-5">
                                    <svg class="svg-icon--20 svg-icon--lite"><use xlink:href="#check-circle-solid"></use></svg>
                                    <p class="heading--light small mt-3 mb-0 text-align-center">3. Browse web and apps anonymously</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
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
    </div>

</section>
<?php include 'inc/inc-utm.php'; ?>
<?php get_footer();?>


