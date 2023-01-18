<?php
/* Template Name: Offer 5 */
$template = "05";
include( locate_template( 'inc/offer-header.php', false, false ) );
; ?>

<?php
function hasRibbon() {
    if( get_field('ribbon_toggle', 'option') == 'show' ) { echo 'pt-5';}elseif( get_field('ribbon_toggle', 'option') == 'lander' ) { echo 'pt-5';}
}
hasRibbon();
?>

<nav class="nav">
    <?php
    if( get_field('ribbon_toggle', 'option') == 'show' ) {  ?>
        <div id="ribbon" class="mt-n3 mb-3"><?php include 'inc/inc-ribbon.php'; ?></div>
    <?php } elseif( get_field('ribbon_toggle', 'option') == 'lander' ) { ?>
        <div id="ribbon" class="mt-n3 mb-3"><?php include 'inc/inc-ribbon.php'; ?></div>
    <?php } ?>
    
    <div class="pt-3 pb-3">
        <div class="container container--medium nav__container d-flex align-items-center justify-content-between">
            <a href="/" class="site-brand">
                <img src="<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/logo.svg" class="logo" width="220" height="61" alt="hotbot logo" />
            </a>
            <div class="nav__menu-container  d-flex align-items-center mr-xl-5">
                <input type="checkbox" class="d-none nav__menu-checkbox" id="toggleDropdownMenu" />
                <label for="toggleDropdownMenu" class="nav__menu-toggle align-items-center uppercase" id="menuToggle">
                    <svg class="icon mr-3"><use xlink:href="#icon-globe-solid"></use></svg>
                    <?php echo @(ICL_LANGUAGE_CODE !== 'ICL_LANGUAGE_CODE' ? ICL_LANGUAGE_CODE : 'en'); ?>
                </label>
                <div class="nav__separator"></div>
                <?php $is_translated = apply_filters( 'wpml_element_has_translations', NULL, get_the_ID(), 'page' ) ?>
                <?php $slug = 'offer/' . get_post_field( 'post_name', get_post() ); ?>
                <ul class="nav__dropdown-menu" id="langMenu">
                    <?php include 'inc/inc-menu-lang.php'; ?>
                </ul>

                <a href="/order/" class="btn btn--sm btn--primary pl-4 pr-4"><span class="trl-row-reverse d-flex align-items-center justify-content-center"><?php _e('Get HotBot VPN', 'hotbot' ); ?><svg class="icon d-block ml-3"><use xlink:href="#icon-arrow-right"></use></svg></span></a>
            </div>
        </div>
    </div>
</nav>

<section class="layout-section hero pb-3 pb-md-5 pt-5">
    <div class="hero__bg"></div>
    <div class="container container--medium mt-5 pt-3 <?php hasRibbon(); ?>">
        <div class="row mt-5 pt-5">
            <div class="col-md-6 hero__left-content">
                <div class="hero__title">
                    <h1 class="mb-0 mt-0"><?php _e('Try HotBot VPN Free For 7 Days', 'hotbot' ); ?></h1>
                </div>
                <p class="h3"><?php _e('100% Risk-Free, No-Logs VPN', 'hotbot' ); ?></p>

                <ul class="listing fit-content ml-auto mr-auto ml-md-0 pt-3 pb-3">
                    <li class="listing__item d-block mb-0">
                        <div class="d-flex align-items-center">
                            <svg class="icon d-block mr-3"><use xlink:href="#icon-checkmark"></use></svg>
                            <span><?php _e('Access Content Worldwide', 'hotbot' ); ?></span>
                        </div>
                    </li>
                    <li class="listing__item d-block mb-0">
                        <div class="d-flex align-items-center">
                            <svg class="icon d-block mr-3"><use xlink:href="#icon-checkmark"></use></svg>
                            <span><?php _e('Unlimited Bandwidth', 'hotbot' ); ?></span>
                        </div>
                    </li>
                    <li class="listing__item d-block mb-0">
                        <div class="d-flex align-items-center">
                            <svg class="icon d-block mr-3"><use xlink:href="#icon-checkmark"></use></svg>
                            <span><?php _e('Simple & Easy To Get Started', 'hotbot' ); ?></span>
                        </div>
                    </li>
                </ul>

                <a href="/order/" class="btn btn--primary"><span class="trl-row-reverse d-flex align-items-center justify-content-center"><?php _e('Risk Free For 7 Days', 'hotbot' ); ?> <svg class="icon d-block ml-3"><use xlink:href="#icon-arrow-right"></use></svg></span></a>
                <p class="d-flex align-items-center justify-content-center justify-content-md-start"><svg class="icon d-block mr-3 icon--15 mb-1"><use xlink:href="#icon-briefcase"></use></svg><span><?php _e('7-day free trial + 30-day money-back guarantee', 'hotbot' ); ?></span></p>
            </div>
            <div class="col-md-6">
                <img src="<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/globe.svg"  width="540" height="540" class="d-none d-md-block mt-3" alt="globe" />
            </div>
        </div>
    </div>

</section>

<section class="layout-section pb-5 pt-md-5">
    <div class="container container--medium">

        <div class="trl-row-reverse row align-items-center pb-5 justify-content-center">
            <div class="col-md-6 order-md-2">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <img src="<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/feature-vpn-security.svg" width="400" height="400" class="column-thumb" alt="feature-vpn-security.svg" />
                    </div>
                </div>
            </div>
            <div class="order-md-1 col-sm-8 col-md-6 column-bg d-flex align-items-center column-bg--left " style="background-image: url('<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/section-bg-left.svg');">
                <div class="text-align-center text-align-md-left">
                    <h2><?php _e('Military-Grade VPN Security', 'hotbot' ); ?></h2>
                    <p><?php _e('With HotBot VPN’s strict no-logs policy, trust that your connection is protected by the most privacy-focused VPN on the market.', 'hotbot' ); ?></p>
                    <a href="/order/" class="btn btn--sm btn--primary"><span class="d-flex align-items-center justify-content-center"><?php _e('Get Protection Now', 'hotbot' ); ?></span></a>
                </div>

            </div>
        </div>

        <div class="trl-row-reverse row align-items-center pt-5 pb-5 justify-content-center">
            <div class="col-md-6">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <img src="<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/feature-access-devices.svg" width="400" height="400" class="column-thumb" alt="feature-access-devices.svg" />
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-md-6 column-bg d-flex align-items-center column-bg--right"  style="background-image: url('<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/section-bg-right.svg');">
                <div class="text-align-center text-align-md-left">
                    <h2><?php _e('Access For All Your Devices', 'hotbot' ); ?></h2>
                    <p><?php _e('Protect your Windows, Mac, iOS, Android devices. And you can secure up to 6 devices for the ultimate safeguard against any and all malicious threats.', 'hotbot' ); ?></p>
                    <div class="d-flex justify-content-center justify-content-md-start">
                        <svg class="icon d-block mr-3 icon--30 mb-1 mr-3"><use xlink:href="#platform-windows"></use></svg>
                        <svg class="icon d-block mr-3 icon--30 mb-1 mr-3"><use xlink:href="#platform-macos"></use></svg>
                        <svg class="icon d-block mr-3 icon--30 mb-1 mr-3"><use xlink:href="#platform-ios"></use></svg>
                        <svg class="icon d-block mr-3 icon--30 mb-1 mr-3"><use xlink:href="#platform-android"></use></svg>
                        <svg class="icon d-block mr-3 icon--30 mb-1 mr-3"><use xlink:href="#platform-android-tv"></use></svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="trl-row-reverse row align-items-center pt-5 pb-5 justify-content-center">
            <div class="col-md-6 order-md-2">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <img src="<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/feature-no-restrictions.svg" width="400" height="400" class="column-thumb" alt="feature-no-restrictions.svg" />
                    </div>
                </div>
            </div>
            <div class="order-md-1 col-sm-8 col-md-6 column-bg d-flex align-items-center column-bg--left"  style="background-image: url('<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/section-bg-left.svg');">
                <div class="text-align-center text-align-md-left">
                    <h2><?php _e('Zero Restrictions, Unlimited Content', 'hotbot' ); ?></h2>
                    <p><?php _e('With thousands of servers in undefined countries, you can easily access all of your favorite content — shows, music, apps, and more — regardless of where you live', 'hotbot' ); ?></p>
                    <a href="/order/" class="btn btn--sm btn--primary"><span class="d-flex align-items-center justify-content-center"><?php _e('Get HotBot VPN', 'hotbot' ); ?></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-section pb-5 pt-5">
    <div class="container container--medium">
        <h2 class="text-align-center mb-5"><?php _e('Why Choose HotBot VPN?', 'hotbot' ); ?></h2>
        <div class="row text-align-center justify-content-center">
            <div class="col-9 col-sm-6 col-md-4 pl-md-5 pr-md-5 pt-5">
                <img src="<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/feature-public-wifi-protection.svg" width="100" height="100" class="ml-auto mr-auto mb-3" />
                <div class="h5 mb-4"><strong><?php _e('Public Wi-Fi Protection', 'hotbot' ); ?></strong></div>
                <p class="p-md"><?php _e('Public Wi-Fi has minimal safeguards and often sells your data. Plus, it is a breeding ground for snoops and hackers. Let Hotbot keep you safe!', 'hotbot' ); ?></p>
            </div>
            <div class="col-9 col-sm-6 col-md-4 pl-md-5 pr-md-5 pt-5">
                <img src="<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/feature-set-location-to-anywhere.svg" width="100" height="100" class="ml-auto mr-auto mb-3" />
                <div class="h5 mb-4"><strong><?php _e('Set Your Location to Anywhere', 'hotbot' ); ?></strong></div>
                <p class="p-md"><?php _e('Keep your address hidden. Access to a huge network of VPN servers in 36+ countries and be virtually located anywhere.', 'hotbot' ); ?></p>
            </div>
            <div class="col-9 col-sm-6 col-md-4 pl-md-5 pr-md-5 pt-5">
                <img src="<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/feature-comprehensive-protection.svg" width="100" height="100" class="ml-auto mr-auto mb-3" />
                <div class="h5 mb-4"><strong><?php _e('Comprehensive Online Protection', 'hotbot' ); ?></strong></div>
                <p class="p-md"><?php _e('With 256-bit AES encryption and multiple protocols, plus a kill switch, you know your internet connected is completely protected.', 'hotbot' ); ?></p>
            </div>
            <div class="col-9 col-sm-6 col-md-4 pl-md-5 pr-md-5 pt-5">
                <img src="<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/feature-blazing-fast-vpn-speeds.svg" width="100" height="100" class="ml-auto mr-auto mb-3" />
                <div class="h5 mb-4"><strong><?php _e('Blazing Fast VPN Speeds', 'hotbot' ); ?></strong></div>
                <p class="p-md"><?php _e('Built with speed in mind, HotBot VPN provides unlimited bandwidth. No more slow loading times and constant buffering.', 'hotbot' ); ?></p>
            </div>
            <div class="col-9 col-sm-6 col-md-4 pl-md-5 pr-md-5 pt-5">
                <img src="<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/feature-customer-support.svg" width="100" height="100" class="ml-auto mr-auto mb-3" />
                <div class="h5 mb-4"><strong><?php _e('24/7 Customer Support', 'hotbot' ); ?></strong></div>
                <p class="p-md"><?php _e('Contact our dedicated, professional support staff, you\'ll get all your questions will answered quickly.', 'hotbot' ); ?></p>
            </div>
            <div class="col-9 col-sm-6 col-md-4 pl-md-5 pr-md-5 pt-5">
                <img src="<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/feature-private-browsing.svg" width="130" height="96" class="ml-auto mr-auto mb-3" />
                <div class="h5 mb-4"><strong><?php _e('Browse and download anonymously', 'hotbot' ); ?></strong></div>
                <p class="p-md"><?php _e('Keep your online activity from being traced. Hotbot VPN keeps no connection or activity logs.', 'hotbot' ); ?></p>
            </div>
            <div class="col-12 pt-5">
                <a href="" class="btn btn--sm btn--primary"><span class="d-flex align-items-center justify-content-center"><?php _e('Get Started With HotBot VPN', 'hotbot' ); ?></span></a>
            </div>
        </div>
    </div>
</section>
<section class="layout-section pb-5 pt-5">
    <div class="container container--medium">
        <h2 class="text-align-center mb-5"><?php _e('Trusted By Millions Of Satisfied Customers', 'hotbot' ); ?></h2>
        <div class="glider-contain">
            <div id="gliderTestament" class="glide glider-testament">
                <div class="item col-md-4 pt-5 pb-3">
                    <div class="card card--height-100 mb-3 d-flex flex-column justify-content-between">
                        <div class="mb-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <img src="<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/stars-green.svg" width="120" height="25"/>
                                <img src="<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/trustpilot.svg" width="67" height="16"/>
                            </div>
                            <h6 class="card__title mb-2"><?php _e('Excellent VPN', 'hotbot' ); ?></h6>
                            <p class="mb-0 mt-3"><?php _e('After being tired of these free trials where you have to contact support to actually get a refund, I saw HotBot offered an actual legit free trial using PayPal, that i could cancel myself if needed. Nothing to lose. Well it turns out this one actually works.', 'hotbot' ); ?></p>
                        </div>
                        <div class="d-flex align-items-center pt-3">
                            <svg class="icon d-block mr-3 icon--20"><use xlink:href="#icon-avatar"></use></svg>
                            <small>Steve</small>
                        </div>
                    </div>
                </div>
                <div class="item col-md-4 pt-5 pb-3">
                    <div class="card card--height-100 mb-3 d-flex flex-column justify-content-between">
                        <div class="mb-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <img src="<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/stars-green-5.svg" width="120" height="25"/>
                                <img src="<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/trustpilot.svg" width="67" height="16"/>
                            </div>
                            <h6 class="card__title mb-2"><?php _e('Easy to use', 'hotbot' ); ?></h6>
                            <p class="mb-0 mt-3"><?php _e('Easy to use interface, connects with one click, and I can barely tell I’m on it speed wise. I had no issues on either of my devices so I let the trial rebill. Price is cheap too. I highly recommend hotbot vpn', 'hotbot' ); ?></p>
                        </div>
                        <div class="d-flex align-items-center pt-3">
                            <svg class="icon d-block mr-3 icon--20"><use xlink:href="#icon-avatar"></use></svg>
                            <small>Tim A</small>
                        </div>
                    </div>
                </div>
                <div class="item col-md-4 pt-5 pb-3">
                    <div class="card card--height-100 mb-3 d-flex flex-column justify-content-between">
                        <div class="mb-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <img src="<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/stars-green.svg" width="120" height="25"/>
                                <img src="<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/trustpilot.svg" width="67" height="16"/>
                            </div>
                            <h6 class="card__title mb-2"><?php _e('Service, Satisfaction, Confidence', 'hotbot' ); ?></h6>
                            <p class="mb-0 mt-3"><?php _e('I tried a few other VPNs but none of them was perfect. Slow connections, constant reconnecting, connection droping, mysterious slowdowns, unreachable pages... I decided to give HotBot VPN a try and so far it works like a dream.', 'hotbot' ); ?></p>
                        </div>
                        <div class="d-flex align-items-center pt-3">
                            <svg class="icon d-block mr-3 icon--20"><use xlink:href="#icon-avatar"></use></svg>
                            <small>AS</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="layout-section pb-5 pt-5">
    <div class="container container--medium" id="app">
    {{ localCurrencyFn }}
        <h2 class="text-align-center mb-0"><?php _e('Choose The Plan That’s Right For You', 'hotbot' ); ?></h2>
        <p class="h4 text-align-center mb-5"><?php _e('Covered By Our 30-Day Money-Back Guarantee', 'hotbot' ); ?></p>

        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="row pt-5 justify-content-center">
                    <div style="min-width: 16.6%;"></div>
                    <div class="col-sm-7 col-md-4">
                        <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/?plan=YEAR" class="plan text-align-center mb-5 plan--best-deal">
                            <span class="plan__deal"><?php echo sprintf( __('Best Value - Save %s', 'hotbot'), '66%'); ?></span>
                            <p><?php _e('1 Year', 'hotbot' ); ?></p>
                            <div class="d-flex justify-content-center align-items-end pb-2">
                                <div class="h2 plan__currency">{{ getCurrency() }}</div>
                                <div class="plan__price">{{ trialPriceNumeric(planIndex(Plans.YEAR)) }}</div>
                                <div class="h5"><?php _e('/mo', 'hotbot' ); ?></div>
                            </div>
                            <div class="btn btn--sm btn--primary mt-4 mb-3 pl-3 pr-3"><?php _e('Get This Deal', 'hotbot' ); ?></div>
                            <small class="d-block">
                                <span class="danger line-through">{{ getPlan(Plans.YEAR).oldPrice }}</span>
                                {{ getPlan(Plans.YEAR).formatPrice }}
                            </small>
                            <small class="d-block">
                                <?php _e('Billed every year.', 'hotbot' ); ?>
                                ({{ trialPriceNumeric(planIndex(Plans.YEAR)) }}<?php _e('/mo', 'hotbot' ); ?>)
                            </small>
                        </a>
                    </div>
                    <div class="col-sm-7 col-md-4">
                        <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/?plan=MONTH" class="plan text-align-center mb-5">
                            <p><?php _e('1 Month', 'hotbot' ); ?></p>
                            <div class="d-flex justify-content-center align-items-end pb-2">
                                <div class="h2 plan__currency">{{ getCurrency() }}</div>
                                <div class="plan__price">{{ trialPriceNumeric(planIndex(Plans.MONTH)) }}</div>
                                <div class="h5"><?php _e('/mo', 'hotbot' ); ?></div>
                            </div>
                            
                            <div class="btn btn--sm btn--secondary mt-4 mb-3 pl-3 pr-3"><?php _e('Select Plan', 'hotbot' ); ?></div>
                            <small class="d-block">{{ getPlan(Plans.MONTH).monthPrice }} <?php _e('after trial.', 'hotbot' ); ?></small>
                            <small class="d-block"><?php _e('Billed every month.', 'hotbot' ); ?></small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-section layout-section--bg-color pb-5 pt-5">
    <div class="container container--medium">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-9">
                <div class="row align-items-center">
                    <div class="col-md-6 order-md-2">
                        <img src="<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/moneyback-guarantee.svg" class="column-thumb ml-auto mr-auto" width="274" height="314" alt="guarantee-day"/>
                    </div>
                    <div class="col-md-6 text-align-center text-align-md-left order-md-1">
                        <h2 class=""><?php _e('Try HotBot VPN Risk Free', 'hotbot' ); ?></h2>
                        <p><?php _e('You won\'t be billed in the first 7 days of your trial. After that, if you’re not satisfied, get a refund with our 30-day money-back guarantee', 'hotbot' ); ?></p>
                        <a href="/order/" class="btn btn--sm btn--primary"><div class="pl-5 pr-5"><span class="trl-row-reverse d-flex align-items-center justify-content-center"><?php _e('Get HotBot VPN', 'hotbot' ); ?> <svg class="icon d-block ml-3"><use xlink:href="#icon-arrow-right"></use></svg></span></div></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script>
// Glider Configuration
new Glider(document.querySelector(".glider-testament"), {
  slidesToShow: 1,
  slidesToScroll: 1,
  draggable: true,
  responsive: [
    {
      // If Screen Size More than 520px
      breakpoint: 520,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      // If Screen Size More than 768px
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    }
    
  ]
});


</script>

<?php include 'inc/inc-stripe.php'; ?>



<?php get_footer();?>
