<?php /* Template Name: Offer 2 */ ?>

<?php
$template = "02";
include( locate_template( 'inc/offer-header.php', false, false ) );
?>

<?php
    if( get_field('ribbon_toggle', 'option') == 'show' ) {  ?>
        <div id="ribbon"><?php include 'inc/inc-ribbon.php'; ?></div>
    <?php } elseif( get_field('ribbon_toggle', 'option') == 'lander' ) { ?>
        <div id="ribbon"><?php include 'inc/inc-ribbon.php'; ?></div>
<?php } ?>
<section class="layout-section pt-5 pb-5">
    <div class="container container--medium text-align-center">
        <a href="" class="site-brand">
            <img src="<?php bloginfo('template_url'); ?>/offers/02/assets/img/logo.svg" class="header-logo ml-auto mr-auto" width="220" height="61" alt="hotbot logo" />
        </a>
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-8 col-lg-7">
                <h1 class="heading-title mb-5 mt-5">
                <?php _e('Get Started with the only 7-Day Risk Free Trial VPN', 'hotbot' ); ?></h1>
            </div>
        </div>
        
        <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary"><span><?php esc_html_e('Get HotBot VPN', 'hotbot' ); ?></span></a>
    </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7">
    <div class="container container--medium">
        <h2 class="h1 heading-title text-align-center mb-5"><?php _e('Best Deal. Risk Free Trial.', 'hotbot' ); ?></h2>

        <div class="row justify-content-center pt-5 mb-5">

            <div class="col-sm-6 col-lg-4 pb-5">
                <div class="card p-4 text-align-center">
                    <div class="p-4 mb-4 pb-2 ">
                        <div class="row justify-content-center">
                            <div class="col-10 mt-3 mb-3">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/02/assets/img/features-01-dark.svg" class="ml-auto mr-auto" width="207" height="114" alt="features-01-dark">
                            </div>
                        </div>
                        <div>
                            <h5 class="heading-title"><?php _e('Be undetectable', 'hotbot' ); ?></h5>
                            <small class="card__text"><?php _e('Military-grade encryption shields you from governments and hackers', 'hotbot' ); ?></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4 pb-5">
                <div class="card p-4 text-align-center">
                    <div class="p-4 mb-4 pb-2 ">
                        <div class="row justify-content-center">
                            <div class="col-10 mt-3 mb-3">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/02/assets/img/features-02-dark.svg" class="ml-auto mr-auto" width="147" height="44" alt="features-02-dark">
                            </div>
                        </div>
                        <div>
                            <h5 class="heading-title"><?php _e('Unlock geo-restricted media', 'hotbot' ); ?></h5>
                            <small class="card__text"><?php _e('From video streaming to social networks, our VPN works anywhere', 'hotbot' ); ?></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4 pb-5">
                <div class="card p-4 text-align-center">
                    <div class="p-4 mb-4 pb-2 ">
                        <div class="row justify-content-center">
                            <div class="col-10 mt-3 mb-3">
                                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/02/assets/img/features-03-dark.svg" class="ml-auto mr-auto" width="197" height="104" alt="features-03-dark">
                            </div>
                        </div>
                        <div>
                            <h5 class="heading-title"><?php _e('Max speeds for easy browsing', 'hotbot' ); ?></h5>
                            <small class="card__text"><?php _e('No more buffering or long waits with our supercharged connections', 'hotbot' ); ?></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center pb-5 layout-ltr">
            <div class="col-md-5 pt-3 pb-3 order-md-2">
                <div class="row justify-content-center">
                    <div class="col-7 col-sm-5 col-md-12">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/02/assets/img/features-04-dark.svg" class="m-auto" width="357" height="264" alt="features-04-dark">
                    </div>
                </div>
            </div>
            <div class="col-md-7 order-md-1">
                <div class="row">
                    <div class="col-xl-11 text-align-center text-align-md-left">
                        <h2 class="heading-title mb-4"><?php _e('1-click-setup Mac, Windows, iOS, Android and more', 'hotbot' ); ?></h2>
                        <p><?php _e('Unleash the internet in just 60 seconds, whether you’re on a computer, smartphone, tablet or router. Our apps let you surf unrestricted with no coding or complex setup required. <strong>Simply download and connect.</strong>', 'hotbot' ); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center pb-5 layout-ltr">
            <div class="col-md-5 pt-3 pb-3">
                <div class="row justify-content-center">
                    <div class="col-7 col-sm-5 col-md-12">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/02/assets/img/features-05-dark.svg" class="m-auto" width="357" height="264" alt="features-05-dark">
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row justify-content-end">
                    <div class="col-xl-11 text-align-center text-align-md-left">
                        <h2 class="heading-title mb-4"><?php _e('Privacy has never been so fast', 'hotbot' ); ?></h2>
                        <p><?php _e('With our VPNs you’re protected by military-grade 2048-bit encryption, <strong>the most secure, rapid connection of its kind.</strong> This means you can stream HD video, surf the web and download content at lightning speeds, often faster than non-VPN connections.', 'hotbot' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center layout-ltr">
            <div class="col-md-5 pt-3 pb-3 order-md-2">
                <div class="row justify-content-center">
                    <div class="col-7 col-sm-5 col-md-12">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/02/assets/img/features-06-dark.svg" class="m-auto" width="357" height="264" alt="features-06-dark">
                    </div>
                </div>
            </div>
            <div class="col-md-7 order-md-1">
                <div class="row">
                    <div class="col-xl-11 text-align-center text-align-md-left">
                        <h2 class="heading-title mb-4"><?php _e('We treat our customers like family', 'hotbot' ); ?></h2>
                        <p><?php _e('HotbotVPN isn’t just a network of VPNs, but of real people. Our industry-topping support team is always on hand to help. You won’t be talking to some VA in India either, <strong>you’ll talk directly with our in-house developers</strong> to get your problems solved quickly and easily.', 'hotbot' ); ?></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7">
    <div class="container container--medium">
        <!-- Tabs -->
        <div class="tab">
            <ul id="nav-tab" class="tab__nav">
                <li class="active"><a href="#tab1" class="h2"><?php _e('Reviews', 'hotbot' ); ?></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab__content mt-5">
                <div class="tab__pane active" id="tab1">
                    <div class="tab__pane-item d-flex justify-content-center">
                        <div class="col-4 pb-5">
                            <div class="card p-4">
                                <div class="pt-4 pb-4 pl-3 pr-3 card__flex">
                                    <img src="<?php bloginfo('template_url'); ?>/offers/02/assets/img/trustpilot.svg" class="card__sm-logo mt-3 mb-4" width="90" height="23" alt="card logo" />
                                    <p class="card__text mb-4 pt-3"><?php _e('“ This is also the very first VPN that works with gaming. I am a big Counter Strike fan. There are no lags at all”', 'hotbot' ); ?></p>
                                    <div class="d-flex align-items-center pt-3">
                                        <img src="<?php bloginfo('template_url'); ?>/offers/02/assets/img/avatar.svg" class="card__avatar mr-4" width="32" height="32" alt="card avatar" />
                                        <div>
                                            <div class="card__text-light mb-2 pb-1"><strong>AS</strong></div>
                                            <img src="<?php bloginfo('template_url'); ?>/offers/02/assets/img/stars-green.svg" class="card__star" width="88" height="17" alt="card rate" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 pb-5">
                            <div class="card p-4">
                                <div class="pt-4 pb-4 pl-3 pr-3 card__flex">
                                    <img src="<?php bloginfo('template_url'); ?>/offers/02/assets/img/trustpilot.svg" class="card__sm-logo mt-3 mb-4" width="90" height="23" alt="card logo" />
                                    <p class="card__text mb-4 pt-3"><?php _e('“I am a daily user since two months and never had any issues since. The peace of mind that I have now is worth the premium subscription! Thank you Hotbot team!”', 'hotbot' ); ?></p>
                                    <div class="d-flex align-items-center pt-3">
                                        <img src="<?php bloginfo('template_url'); ?>/offers/02/assets/img/avatar.svg" class="card__avatar mr-4" width="32" height="32" alt="card avatar" />
                                        <div>
                                            <div class="card__text-light mb-2 pb-1"><strong>VRS</strong></div>
                                            <img src="<?php bloginfo('template_url'); ?>/offers/02/assets/img/stars-green.svg" class="card__star" width="88" height="17" alt="card rate" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 pb-5">
                            <div class="card p-4">
                                <div class="pt-4 pb-4 pl-3 pr-3 card__flex">
                                    <img src="<?php bloginfo('template_url'); ?>/offers/02/assets/img/trustpilot.svg" class="card__sm-logo mt-3 mb-4" width="90" height="23" alt="card logo" />
                                    <p class="card__text mb-4 pt-3"><?php _e('“It turns out this one actually works. Easy to use interface, connects with one click, and I can barely tell I’m on it speed wise”', 'hotbot' ); ?></p>
                                    <div class="d-flex align-items-center pt-3">
                                        <img src="<?php bloginfo('template_url'); ?>/offers/02/assets/img/avatar.svg" class="card__avatar mr-4" width="32" height="32" alt="card avatar" />
                                        <div>
                                            <div class="card__text-light mb-2 pb-1"><strong>Steve</strong></div>
                                            <img src="<?php bloginfo('template_url'); ?>/offers/02/assets/img/stars-green.svg" class="card__star" width="88" height="17" alt="card rate" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="text-align-center mt-5">
            <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary"><span><?php esc_html_e('Get HotBot VPN', 'hotbot' ); ?></span></a>
        </div>
  
    </div>
</section>

<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7">
    <div class="container container--medium">
        <h2 class="h1 heading-title text-align-center mb-3"><?php _e('Unlimited Speed & Privacy', 'hotbot' ); ?></h2>
        <p class="h5 text-align-center mb-5"><?php _e('in one easy-to-use app.', 'hotbot' ); ?></p>
        <div class="row justify-content-center pt-5">
            <div class="col-sm-6 col-lg-4 col-xl-3 pb-5">
                <div class="card p-4">
                    <div class="pt-4 pb-4 pl-3 pr-3">
                        <svg class="card__sm-logo-svg"><use xlink:href="#features-sub-01"></use></svg>
                        <h6 class="heading-title mt-4 mb-4"><?php _e('Protect your data', 'hotbot' ); ?></h6>
                        <p class="card__text mb-0"><?php _e('Protect your private data online with military-grade encryption.', 'hotbot' ); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3 pb-5">
                <div class="card p-4">
                    <div class="pt-4 pb-4 pl-3 pr-3">
                        <svg class="card__sm-logo-svg"><use xlink:href="#features-sub-02"></use></svg>
                        <h6 class="heading-title mt-4 mb-4"><?php _e('Multiple devices', 'hotbot' ); ?></h6>
                        <p class="card__text mb-0"><?php _e('A single subscription works on multiple devices, giving you security at home and on the go.', 'hotbot' ); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3 pb-5">
                <div class="card p-4">
                    <div class="pt-4 pb-4 pl-3 pr-3">
                        <svg class="card__sm-logo-svg"><use xlink:href="#features-sub-03"></use></svg>
                        <h6 class="heading-title mt-4 mb-4"><?php _e('The internet as it should be', 'hotbot' ); ?></h6>
                        <p class="card__text mb-0"><?php _e('Avoid government and corporate overwatch, and unlock the web as it should be.', 'hotbot' ); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3 pb-5">
                <div class="card p-4">
                    <div class="pt-4 pb-4 pl-3 pr-3">
                        <svg class="card__sm-logo-svg"><use xlink:href="#features-sub-04"></use></svg>
                        <h6 class="heading-title mt-4 mb-4"><?php _e('Cross platform support', 'hotbot' ); ?></h6>
                        <p class="card__text mb-0"><?php _e('Protect your Mac, PC, Android, iOS devices & more.', 'hotbot' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7">
    <div class="container container--medium" id="app">
        {{ localCurrencyFn }}
        <h2 class="h1 heading-title text-align-center mb-3"><?php _e('Start your 7-Day free trial today', 'hotbot' ); ?></h2>
        <p class="h5 text-align-center mb-5"><?php _e('100% money-back guarantee for your first 30 days.', 'hotbot' ); ?></p>
        <div class="pt-5">
            <div class="card p-5">
                <div class="pt-3 pb-3 pl-3 pr-3 text-align-center">
                    <span class="btn btn--span mb-lg-5 mt-3"><?php _e('12 Months + 7 Day Free Trial', 'hotbot' ); ?></span>
                    <div class="d-flex align-items-center justify-content-center mb-lg-5">
                        <h3 class="heading-title">{{ getCurrency() }}</h3>
                        <h3 class="font-xl heading-title ml-4 mr-4">{{ trialPriceNumeric(planIndex(Plans.YEAR)) }}</h3>
                        <h3 class="heading-title"><?php _e('/mo', 'hotbot' ); ?></h3>
                    </div>
                    <p class="card__text d-block mb-2">
                        <span class="danger-text-color line-through">{{ getPlan(Plans.YEAR).oldPrice }}</span>
                        {{ getPlan(Plans.YEAR).formatPrice }} <?php _e('after trial.', 'hotbot' ); ?>
                    </p>
                    <p class="card__text d-block">
                        <?php _e('Billed every year.', 'hotbot' ); ?>
                        ( {{ getCurrency() }} {{ trialPriceNumeric(planIndex(Plans.YEAR)) }} <?php _e('/mo', 'hotbot'); ?> )
                    </p>
                    
                    <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/?plan=YEAR" class="btn btn--primary mt-5"><span><?php esc_html_e('Get HotBot VPN', 'hotbot' ); ?></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'inc/inc-stripe.php'; ?>
<?php get_footer();?>
