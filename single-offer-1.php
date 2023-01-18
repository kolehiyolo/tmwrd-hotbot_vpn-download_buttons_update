<?php /* Template Name: Offer 1 */ ?>

<?php
    $template = "01";
    include( locate_template( 'inc/offer-header.php', false, false ) );
?>

<nav class="nav">

    <?php
    if( get_field('ribbon_toggle', 'option') == 'show' ) {  ?>
        <div class="mt-n4 mb-4"><?php include 'inc/inc-ribbon.php'; ?></div>
    <?php } elseif( get_field('ribbon_toggle', 'option') == 'lander' ) { ?>
        <div class="mt-n4 mb-4"><?php include 'inc/inc-ribbon.php'; ?></div>
    <?php }?>

    <div class="container nav__container d-flex align-items-center justify-content-between pt-4 pb-4">
        <a href="/" class="site-brand">
            <img src="<?php bloginfo('template_url'); ?>/offers/01/assets/img/logo.svg" class="logo logo--white" width="220" height="61" alt="hotbot logo" />
            <img src="<?php bloginfo('template_url'); ?>/offers/01/assets/img/logo-light-bg.svg" class="logo logo--blue" width="220" height="61" alt="hotbot logo" />
        </a>
        <div class="nav__menu-container  mr-xl-5">
            <input type="checkbox" class="d-none nav__menu-checkbox" id="toggleDropdownMenu" />
            <label for="toggleDropdownMenu" class="nav__menu-toggle align-items-center uppercase">
                <svg class="icon mr-3"><use xlink:href="#icon-globe-solid"></use></svg>
                <?php echo @(ICL_LANGUAGE_CODE !== 'ICL_LANGUAGE_CODE' ? ICL_LANGUAGE_CODE : 'en');?>
                <?php $is_translated = apply_filters( 'wpml_element_has_translations', NULL, get_the_ID(), 'page' ) ?> 
                <?php $slug = 'offer/' . get_post_field( 'post_name', get_post() ); ?>
                <ul class="nav__dropdown-menu" id="dropdownMenuLang">
                    <?php include 'inc/inc-menu-lang.php'; ?>
                </ul>
            </label>

            <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--sm btn--primary ml-3"><span class="d-flex align-items-center justify-content-center trl-row-reverse"><?php esc_html_e('Get HotBot VPN', 'hotbot' ); ?> <span class="icon-circle-arrow ml-4 d-none d-sm-flex"><svg><use xlink:href="#icon-long-arrow-alt-right-solid"></use></svg></span></span></a>
        </div>
    </div>
</nav>

<section class="layout-section hero pb-5 pb-md-7 pt-5">
    <div class="hero__bg"></div>
    <div class="container container--medium mt-5 pt-5">
        <div class="row align-items-center mt-5 pt-5 justify-content-center">
            <div class="col-12 col-md-6">
                <div class="hero__title mb-4">
                    <?php _e('<strong class="h5 uppercase">The Only</strong> <h1>100% Free Trial VPN</h1>', 'hotbot' ); ?>
                </div>
                <p><?php _e('No need to pay up front, then contact us and beg for your money back like every other "free" VPN service. Try our service 100% free for 7 days, and easily cancel with 1-click if you don’t like HotBot for any reason.', 'hotbot' ); ?></p>

                <div class="d-md-flex flex-wrap align-items-center mb-5">
                    <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary mr-md-5 mt-3 mb-3"><span class="d-flex align-items-center"><span class="icon-circle-arrow mr-4"><svg><use xlink:href="#icon-long-arrow-alt-right-solid"></use></svg></span><?php _e('Get 7 Days Free VPN', 'hotbot' ); ?></span></a>
                    <small class="d-block d-md-inline"><?php _e('Full 30-day money-back guarantee', 'hotbot' ); ?></small>
                </div>
            </div>
            <div class="col-8 col-md-6 pl-xl-5 pr-xl-5">
                <div class="pl-xl-5 pr-xl-5">
                    <!-- <img src="<?php bloginfo('template_url'); ?>/offers/01/assets/img/hotbot-robot-hero.svg" width="480" height="280" class="ml-auto mr-auto" alt="Hotbot Robot" /> -->
                    <div class="hero__robot-wrap ml-auto mr-auto">
                        <span class="fi fid fi-ph" id="flag"></span>
                        <?php include 'inc/inc-robot-svg-3.php'; ?>
                    </div>
                </div>
            </div>
            <div class="col-12 pt-md-5 mt-5"><a href="#next-section" class="toggle-down ml-auto mr-auto"></a></div>
        </div>
    </div>

</section>

<section class="layout-section pb-5 pb-md-7 pt-5 pt-md-7"  id="next-section">
    <div class="container container--medium">
        <div class="row align-items-center">
            <div class="col-md-5 pt-3 pb-3 pb-3 order-md-2">
                <div class="row  justify-content-center">
                    <div class="col-8 col-md-12">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/01/assets/img/features-01-light-grey.svg" class="m-auto" width="357" height="264" alt="features-04">
                    </div>
                </div>
                
            </div>
            <div class="col-md-7 pb-3 order-md-1">
                <div class="row">
                    <div class="col-xl-11 text-align-center text-align-md-left">
                        <h2 class="heading-title mb-4"><?php _e('1-click-setup Mac, Windows, iOS, Android and more', 'hotbot' ); ?></h2>
                        <p><?php _e('Our VPN apps support all popular platforms, with quick 1 click setup, unleash the internet with a <strong>click of a button.</strong>', 'hotbot' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-section pb-5 pt-5 layout-section--bg-color">
    <div class="container container--medium">
        <div class="row align-items-center">
            <div class="col-md-5 pt-3 pb-3">
                <div class="row  justify-content-center">
                    <div class="col-8 col-md-12">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/01/assets/img/features-02-light-grey.svg" class="m-auto" width="357" height="264" alt="features-05">
                    </div>
                </div>
                
            </div>
            <div class="col-md-7">
                <div class="row justify-content-end">
                    <div class="col-xl-11 text-align-center text-align-md-left">
                        <h2 class="heading-title mb-4"><?php _e('Privacy has never been so fast', 'hotbot' ); ?></h2>
                        <p><?php _e('Our VPN network features military-grade encryption, the fastest, most secure of its kind, so you can surf, download, stream video, at the best possible speed.', 'hotbot' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-section pb-5 pb-md-7 pt-5 pt-md-7">
    <div class="container container--medium">
        <div class="row align-items-center">
            <div class="col-md-5 pt-3 pb-3 order-md-2">
                <div class="row  justify-content-center">
                    <div class="col-8 col-md-12">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/01/assets/img/features-03-light-grey.svg" class="m-auto" width="357" height="264" alt="features-06">
                    </div>
                </div>
                
            </div>
            <div class="col-md-7 pb-3 order-md-1">
                <div class="row">
                    <div class="col-xl-11 text-align-center text-align-md-left">
                        <h2 class="heading-title mb-4"><?php _e('Support on hand, when you need it', 'hotbot' ); ?></h2>
                        <p><?php _e('HotBot VPN has a dedicated support team you can reach out to any time you need assistance. Should you encounter any issues, we’ll get you up and running quickly.', 'hotbot' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-section pt-5 pb-5">

    <div class="container container--medium">
        <h2 class="heading-title mb-4 text-align-center mb-5"><?php _e('Rock-solid privacy at blazing speeds. No compromises.', 'hotbot' ); ?></h2>
        <div class="row text-align-center pt-5">
            <div class="col-sm-6 col-md-4 pb-4">
                <div class="row  justify-content-center">
                    <div class="col-6 col-md-12">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/01/assets/img/features-01-grey.svg" width="203" height="140" class="ml-auto mr-auto mb-5" alt="features-01-grey.svg">
                    </div>
                </div>
                <h5 class="heading-title"><?php _e('Accelerate your VPN', 'hotbot' ); ?></h5>
                <p><?php _e('Enjoy the power of an unlimited-bandwidth VPN built for speed. Find out why we’re named Hotbot VPN.', 'hotbot' ); ?></p>
            </div>
            <div class="col-sm-6 col-md-4 pb-4">
                <div class="row  justify-content-center">
                    <div class="col-6 col-md-12">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/01/assets/img/features-02-grey.svg" width="203" height="140" class="ml-auto mr-auto mb-5" alt="features-02-grey.svg">
                    </div>
                </div>
                <h5 class="heading-title"><?php _e('Be anywhere, virtually', 'hotbot' ); ?></h5>
                <p><?php _e('Access to a huge network of VPN servers in 36+ countries. Keep your real location hidden from prying eyes.', 'hotbot' ); ?></p>
            </div>
            <div class="col-sm-6 col-md-4 pb-4">
                <div class="row  justify-content-center">
                    <div class="col-6 col-md-12">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/01/assets/img/features-03-grey.svg" width="203" height="140" class="ml-auto mr-auto mb-5" alt="features-03-grey.svg">
                    </div>
                </div>
                <h5 class="heading-title"><?php _e('Watch what you want', 'hotbot' ); ?></h5>
                <p><?php _e('Access any content, no matter your location. Say goodbye to blocked services and websites.', 'hotbot' ); ?></p>
            </div>
            <div class="col-sm-6 col-md-4 pb-4">
                <div class="row  justify-content-center">
                    <div class="col-6 col-md-12">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/01/assets/img/features-04-grey.svg" width="203" height="140" class="ml-auto mr-auto mb-5" alt="features-04-grey.svg">
                    </div>
                </div>
                <h5 class="heading-title"><?php _e('Browse and download anonymously', 'hotbot' ); ?></h5>
                <p><?php _e('Keep your online activity from being traced. Hotbot VPN keeps no connection or activity logs.', 'hotbot' ); ?></p>
            </div>
            <div class="col-sm-6 col-md-4 pb-4">
                <div class="row  justify-content-center">
                    <div class="col-6 col-md-12">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/01/assets/img/features-05-grey.svg" width="203" height="140" class="ml-auto mr-auto mb-5" alt="features-05-grey.svg">
                    </div>
                </div>
                <h5 class="heading-title"><?php _e('Encrypt everything', 'hotbot' ); ?></h5>
                <p><?php _e('Protect your connection with 256-bit AES, DNS/IPv6 leak protection and a kill switch.', 'hotbot' ); ?></p>
            </div>
            <div class="col-sm-6 col-md-4 pb-4">
                <div class="row  justify-content-center">
                    <div class="col-6 col-md-12">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/01/assets/img/features-06-grey.svg" width="203" height="140" class="ml-auto mr-auto mb-5" alt="features-06-grey.svg">
                    </div>
                </div>
                <h5 class="heading-title"><?php _e('Get help, anytime', 'hotbot' ); ?></h5>
                <p><?php _e('Contact our Customer Support team, 24/7. HotBot team are here to help.', 'hotbot' ); ?></p>
            </div>
            <div class="col-12 pt-5">
                <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary mr-md-5 mt-3 mb-3"><span class="d-flex align-items-center"><span class="icon-circle-arrow mr-4"><svg><use xlink:href="#icon-long-arrow-alt-right-solid"></use></svg></span><?php esc_html_e('Get 7 Days Free VPN', 'hotbot' ); ?></span></a></div>
        </div>

    </div>
</section>

<section class="layout-section layout-section--bg-1 pt-5 pb-5">
    <div class="container container--medium" id="app">
        {{ localCurrencyFn }}
        <h2 class="text-align-center mb-5"><?php _e('Choose the plan that works for you', 'hotbot' ); ?></h2>
        <div class="d-flex flex-wrap align-items-center mb-5 pb-5 pt-5">
            <div style="min-width: 16.6%;"></div>
            <div class="card card--plan2 fine pt-3 pb-4 pl-4 pr-4 pl-xl-5 pr-xl-5 text-align-center col-sm-6 col-md-4 mr-sm-n1 mb-3">
                <span class="card__span mb-5 mt-n5 d-block ml-auto mr-auto"><?php echo sprintf( __('Best Value - Save %s', 'hotbot'), '66%'); ?></span>
                <strong class="d-block mb-3"><?php _e('1 Year', 'hotbot' ); ?></strong>
                <div class="d-flex justify-content-center mb-5">
                    <span class="fs-x-small"><strong>{{ getCurrency() }}</strong></span>
                    <div class="card--plan2__price">{{ trialPriceNumeric(planIndex(Plans.YEAR)) }}</div>
                    <span v-show="!showZeroTrial" class="fs-x-small align-self-end"><?php _e('/mo', 'hotbot' ); ?></span>
                </div>
                <span class="fs-x-small d-block">
                    <span class="text-danger line-through">{{ getPlan(Plans.YEAR).oldPrice }}</span>
                    {{ getPlan(Plans.YEAR).formatPrice }} <?php _e('after trial.', 'hotbot' ); ?>
                </span>
                <span class="fs-x-small d-block mb-4"><?php _e('Billed every year.', 'hotbot' ); ?></span>
                <a href="/order/?plan=YEAR" class="btn btn--sm btn--secondary mb-4 d-xl-block"><?php _e('Get 7 Days Free VPN', 'hotbot' ); ?></a>
                <span class="fs-x-small d-block mb-3"><strong><?php _e('Includes a 30-day money-back guarantee', 'hotbot' ); ?></strong></span>
            </div>
            
            <div class="card card--plan2 pt-4 pb-4 pl-4 pr-4 pl-xl-5 pr-xl-5 text-align-center col-sm-6 col-md-4 mb-3">
                <strong class="d-block mb-3"><?php _e('1 Month', 'hotbot' ); ?></strong>
                <div class="d-flex justify-content-center mb-5">
                    <span class="fs-x-small"><strong>{{ getCurrency() }}</strong></span>
                    <div class="card--plan2__price">{{ trialPriceNumeric(planIndex(Plans.MONTH)) }}</div>
                    <span v-show="!showZeroTrial" class="fs-x-small align-self-end"><?php _e('/mo', 'hotbot' ); ?></span>
                </div>
                <span class="fs-x-small d-block">{{ getPlan(Plans.MONTH).monthPrice }} <?php _e('after trial.', 'hotbot' ); ?></span>
                <span class="fs-x-small d-block mb-3"><?php _e('Billed every month.', 'hotbot' ); ?></span>
                <a href="/order/?plan=MONTH" class="btn btn--sm btn--secondary mb-4 d-xl-block"><?php _e('Get 7 Days Free VPN', 'hotbot' ); ?></a>
                <span class="fs-x-small d-block mb-3"><strong><?php _e('Includes a 30-day money-back guarantee', 'hotbot' ); ?></strong></span>
            </div>
            
        </div>
    </div>
</section>

<section class="layout-section layout-section--bg-2 pt-5 pb-5">
    <div class="container container--medium">
        
        <h2 class="text-light mb-4 text-align-center d-flex flex-wrap justify-content-center align-items-end"><span class="d-inline-block mr-3"><?php _e('Our customers rate us 5 stars on ', 'hotbot' ); ?></span><img src="<?php bloginfo('template_url'); ?>/offers/01/assets/img/trustpilot.png" width="200" height="49" alt="trustpilot"/></h2>
        <p class="text-align-center text-light mb-5">
            <?php _e('<strong>Hotbot VPN is the #1 VPN service on Trustpilot.</strong> With Terabytes of data encrypted. 99.98% uptime. Rapid speeds. No wonder our users stay with HotBot VPN for years !', 'hotbot' ); ?>
        </p>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4 pb-5">
                <div class="card pt-5 pl-4 pr-4 pb-5">
                    <div class="pl-xl-3 pr-xl-3 card__flex">
                        <div>
                            <h5 class="card__title"><?php _e('Quick and great support', 'hotbot' ); ?></h5>
                            <small><?php _e('After being tired of these free trials where you have to contact support to actually get a refund, I saw HotBot offered an actual legit free trial using PayPal, that i could cancel myself if needed. Nothing to lose. Well it turns out this one actually works.', 'hotbot' ); ?>
                            </small>
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url'); ?>/offers/01/assets/img/stars-green.svg" class="mt-4" width="88" height="17" alt="start-green"/>
                            <div class="horizontal-line mt-4 mb-4"></div>
                            <div class="d-flex align-items-center">
                                <div class="avatar mr-4">ST</div>
                                <div class="">
                                    <h6 class="mt-0 mb-0">Steve</h6>
                                    <p class="mb-0 uppercase"><?php _e('US', 'hotbot'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 pb-5">
                <div class="card pt-5 pl-4 pr-4 pb-5">
                    <div class="pl-xl-3 pr-xl-3 card__flex">
                        <div>
                            <h5 class="card__title"><?php _e('Great VPN', 'hotbot' ); ?></h5>
                            <small><?php _e('Easy to use interface, connects with one click, and I can barely tell I’m on it speed wise. I had no issues on either of my devices so I let the trial rebill. Price is cheap too. I highly recommend hotbot vpn', 'hotbot' ); ?></small>
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url'); ?>/offers/01/assets/img/stars-green.svg" class="mt-4" width="88" height="17" alt="start-green"/>
                            <div class="horizontal-line mt-4 mb-4"></div>
                            <div class="d-flex align-items-center">
                                <div class="avatar mr-4">TA</div>
                                <div class="">
                                    <h6 class="mt-0 mb-0">Tim A</h6>
                                    <p class="mb-0 uppercase"><?php _e('FR', 'hotbot'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 pb-5">
                <div class="card pt-5 pl-4 pr-4 pb-5">
                    <div class="pl-xl-3 pr-xl-3 card__flex">
                        <div>
                            <h5 class="card__title"><?php _e('Most efficient VPN out there', 'hotbot' ); ?></h5>
                            <small><?php _e('I tried a few other VPNs but none of them was perfect. Slow connections, constant reconnecting, connection droping, mysterious slowdowns, unreachable pages... I decided to give HotBot VPN a try and so far it works like a dream.', 'hotbot' ); ?> </small>
                            
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url'); ?>/offers/01/assets/img/stars-green.svg" class="mt-4" width="88" height="17" alt="start-green"/>
                            <div class="horizontal-line mt-4 mb-4"></div>
                            <div class="d-flex align-items-center">
                                <div class="avatar mr-4">AS</div>
                                <div class="">
                                    <h6 class="mt-0 mb-0">AS</h6>
                                    <p class="mb-0 uppercase"><?php _e('DE', 'hotbot'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-align-center mt-4 mb-5">
            <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--secondary">
                <span class="d-flex align-items-center">
                    <span class="icon-circle-arrow mr-4">
                       <svg>
                          <use xlink:href="#icon-long-arrow-alt-right-solid"></use>
                       </svg>
                    </span>
                    <?php _e('Get 7 Days Free VPN', 'hotbot' ); ?>
                 </span>
            </a>
        </div>
    </div>
</section>


<?php include 'inc/inc-stripe.php'; ?>
<?php get_footer();?>
