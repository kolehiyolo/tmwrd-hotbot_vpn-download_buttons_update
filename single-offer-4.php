<?php
/* Template Name: Offer 4 */
$template = "04";
include( locate_template( 'inc/offer-header.php', false, false ) );
?>
<?php
function hasRibbon() {
    if( get_field('ribbon_toggle', 'option') == 'show' ) { echo 'pt-5';}elseif( get_field('ribbon_toggle', 'option') == 'lander' ) { echo 'pt-5';}
}
hasRibbon();
?>

<nav class="nav">
    <?php 
    if( get_field('ribbon_toggle', 'option') == 'show' ) {  ?>
        <div id="ribbon"><?php include 'inc/inc-ribbon.php'; ?></div>
    <?php } elseif( get_field('ribbon_toggle', 'option') == 'lander' ) { ?>
        <div id="ribbon"><?php include 'inc/inc-ribbon.php'; ?></div>
    <?php } ?>
    
    <div class="container nav__container d-flex align-items-center justify-content-between">
        <a href="/" class="site-brand">
            <img src="<?php bloginfo( 'template_url' ); ?>/offers/04/assets/img/logo-white.svg" width="220" height="61" class="logo" alt="hotbot logo" />
            <img src="<?php bloginfo( 'template_url' ); ?>/offers/04/assets/img/logo-light-bg.svg" width="200" height="41" class="logo logo--2" alt="hotbot logo" />
        </a>
        <div class="nav__menu-container  d-flex align-items-center mr-xl-5">
            <input type="checkbox" class="d-none nav__menu-checkbox" id="toggleDropdownMenu" />
            <label for="toggleDropdownMenu" class="nav__menu-toggle align-items-center uppercase" id="menuToggle">
                <svg class="icon mr-3"><use xlink:href="#icon-globe-solid"></use></svg>
                <?php echo @(ICL_LANGUAGE_CODE !== 'ICL_LANGUAGE_CODE' ? ICL_LANGUAGE_CODE : 'en'); ?></a>
            </label>

            <?php $is_translated = apply_filters( 'wpml_element_has_translations', NULL, get_the_ID(), 'page' ) ?>
            <?php $slug = 'offer/' . get_post_field( 'post_name', get_post() ); ?>

            <ul class="nav__dropdown-menu" id="langMenu">
                <?php include 'inc/inc-menu-lang.php'; ?>
            </ul>
            <a href="/order/" class="btn btn--sm btn--secondary ml-md-4 pl-4 pr-4"><?php _e('Get HotBot VPN', 'hotbot' ); ?></a>
        </div>
    </div>
</nav>

<section class="layout-section layout-section--bg-color-dark hero pt-5 pb-5">
    <div class="container container--medium  pb-md-5 mt-5 mb-md-5 <?php hasRibbon(); ?>">
        <div class="row align-items-center  mb-5 mb-md-0 mt-5 justify-content-center text-align-center text-align-md-left <?php hasRibbon(); ?>">
            <div class="col-md-6">
                <div class="hero__title mb-4">
                    <h1><?php _e('Try us free for 7 days, no upfront payment', 'hotbot' ); ?></h1>
                </div>
                <p><?php _e('Looking for a free VPN? Take HotBot VPN for a test drive instead. You wont pay anything for the first 7 days.', 'hotbot' ); ?></p>
            </div>
            <div class="col-10 col-sm-8 col-md-6 pl-xl-5 pr-xl-5 pt-5 pb-md-5">
                <div class="pl-xl-5 pr-xl-5">
                    <?php /* include 'inc/inc-robot-svg-3.php'; */ ?>
                    <img loading="lazy" src="<?php bloginfo( 'template_url' ); ?>/offers/04/assets/img/free-7-days-trial.svg"  class="ml-auto mr-auto mb-5 mb-md-0" alt="hero">
                </div>
            </div>
            <div class="col-12">
                <a href="/order/" class="layout-ltr btn btn--primary d-flex align-items-center ml-auto mr-auto ml-md-0"><?php _e('Try HotBot VPN Free Today', 'hotbot' ); ?> <svg class="icon ml-4"><use xlink:href="#icon-arrow-right"></use></svg></a>
            </div>
        </div>
    </div>
</section>

<section class="layout-section layout-section--bg-color-light pt-5 pb-5">
    <div class="container container--medium pt-5 pb-5 text-align-center">

        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-6">
                <h2 class="mb-5"><?php _e('Why HotBot VPN is a better choice', 'hotbot' ); ?></h2>
            </div>
        </div>
        

        <div class="row text-align-center pt-5">
            <div class="col-sm-6 col-md-4 pb-4 pl-xl-5 pr-xl-5">
                <div class="row  justify-content-center">
                    <div class="col-6 col-md-12">
                        <img loading="lazy" src="<?php bloginfo( 'template_url' ); ?>/offers/04/assets/img/feature-quick-connectivity.svg" width="120" height="120" class="ml-auto mr-auto mb-5" alt="feature-1.png">
                    </div>
                </div>            
                <h3><?php _e('Accelerate your VPN', 'hotbot' ); ?></h3>
                <p><?php _e('Enjoy the power of an unlimited-bandwidth VPN built for speed. Find out why we’re named Hotbot VPN.', 'hotbot' ); ?></p>
            </div>
            <div class="col-sm-6 col-md-4 pb-4 pl-xl-5 pr-xl-5">
                <div class="row  justify-content-center">
                    <div class="col-6 col-md-12">
                        <img loading="lazy" src="<?php bloginfo( 'template_url' ); ?>/offers/04/assets/img/feature-works-seamlessly-everywhere.svg" width="120" height="120" class="ml-auto mr-auto mb-5" alt="feature-2.png">
                    </div>
                </div>
                <h3><?php _e('Be anywhere, virtually', 'hotbot' ); ?></h3>
                <p><?php _e('Access to a huge network of VPN servers in 36+ countries. Keep your real location hidden from prying eyes.', 'hotbot' ); ?></p>
            </div>
            <div class="col-sm-6 col-md-4 pb-4 pl-xl-5 pr-xl-5">
                <div class="row  justify-content-center">
                    <div class="col-6 col-md-12">
                        <img loading="lazy" src="<?php bloginfo( 'template_url' ); ?>/offers/04/assets/img/feature-safe-access.svg" width="120" height="120" class="ml-auto mr-auto mb-5" alt="feature-3.png">
                    </div>
                </div>
                <h3><?php _e('Watch what you want', 'hotbot' ); ?></h3>
                <p><?php _e('Access any content, no matter your location. Say goodbye to blocked services and websites.', 'hotbot' ); ?></p>
            </div>
            <div class="col-sm-6 col-md-4 pb-4 pl-xl-5 pr-xl-5">
                <div class="row  justify-content-center">
                    <div class="col-6 col-md-12">
                        <img loading="lazy" src="<?php bloginfo( 'template_url' ); ?>/offers/04/assets/img/feature-privacy-protection.svg" width="120" height="120" class="ml-auto mr-auto mb-5" alt="feature-5.png">
                    </div>
                </div>
                <h3><?php _e('Browse and download anonymously', 'hotbot' ); ?></h3>
                <p><?php _e('Keep your online activity from being traced. Hotbot VPN keeps no connection or activity logs.', 'hotbot' ); ?></p>
            </div>
            <div class="col-sm-6 col-md-4 pb-4 pl-xl-5 pr-xl-5">
                <div class="row  justify-content-center">
                    <div class="col-6 col-md-12">
                        <img loading="lazy" src="<?php bloginfo( 'template_url' ); ?>/offers/04/assets/img/feature-industry-leading-security.svg" width="120" height="120" class="ml-auto mr-auto mb-5" alt="feature-4.png">
                    </div>
                </div>
                <h3><?php _e('Encrypt everything', 'hotbot' ); ?></h3>
                <p><?php _e('Protect your connection with 256-bit AES, DNS/IPv6 leak protection and a kill switch.', 'hotbot' ); ?></p>
            </div>
            <div class="col-sm-6 col-md-4 pb-4 pl-xl-5 pr-xl-5">
                <div class="row  justify-content-center">
                    <div class="col-6 col-md-12">
                        <img loading="lazy" src="<?php bloginfo( 'template_url' ); ?>/offers/04/assets/img/feature-customer-support.svg" width="120" height="120" class="ml-auto mr-auto mb-5" alt="feature-6.png">
                    </div>
                </div>
                <h3><?php _e('Get help, anytime', 'hotbot' ); ?></h3>
                <p><?php _e('Contact our Customer Support team, 24/7. HotBot team are here to help.', 'hotbot' ); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="layout-section layout-section--bg-color pt-5 pb-5">
    <div class="container container--medium pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <h2 class="mb-5 text-align-center"><?php _e('HotBot VPN vs. free VPNs', 'hotbot' ); ?></h2>
                <p class="text-align-center mb-5"><?php _e('A free VPN can change your IP, but can it promise all that HotBot VPN has to offer? What you get with HotBot VPN vs. a typical free VPN:', 'hotbot' ); ?></p>
            
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 col-xl-9">
                <table class="mb-5 pt-3">
                    <thead>
                        <tr>
                            <th></th>
                            <th><strong><?php _e('HotBotVPN', 'hotbot' ); ?></strong></th>
                            <th><strong><?php _e('Free VPN', 'hotbot' ); ?></strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="pl-0"><strong><?php _e('Servers in 36+ countries', 'hotbot' ); ?></strong></td>
                            <td><svg class="icon icon--fine ml-auto mr-auto"><use xlink:href="#icon-checkmark"></use></svg></td>
                            <td><svg class="icon icon--danger ml-auto mr-auto"><use xlink:href="#icon-times-solid"></use></svg></td>
                        </tr>
                        <tr>
                            <td class="pl-0"><strong><?php _e('Strong encryption', 'hotbot' ); ?></strong></td>
                            <td><svg class="icon icon--fine ml-auto mr-auto"><use xlink:href="#icon-checkmark"></use></svg></td>
                            <td><svg class="icon icon--danger ml-auto mr-auto"><use xlink:href="#icon-times-solid"></use></svg></td>
                        </tr>
                        <tr>
                            <td class="pl-0"><strong><?php _e('Fast and stable connection', 'hotbot' ); ?></strong></td>
                            <td><svg class="icon icon--fine ml-auto mr-auto"><use xlink:href="#icon-checkmark"></use></svg></td>
                            <td><svg class="icon icon--danger ml-auto mr-auto"><use xlink:href="#icon-times-solid"></use></svg></td>
                        </tr>
                        <tr>
                            <td class="pl-0"><strong><?php _e('Unlimited VPN Data', 'hotbot' ); ?></strong></td>
                            <td><svg class="icon icon--fine ml-auto mr-auto"><use xlink:href="#icon-checkmark"></use></svg></td>
                            <td><svg class="icon icon--danger ml-auto mr-auto"><use xlink:href="#icon-times-solid"></use></svg></td>
                        </tr>
                        <tr>
                            <td class="pl-0"><strong><?php _e('Change your IP address', 'hotbot' ); ?></strong></td>
                            <td><svg class="icon icon--fine ml-auto mr-auto"><use xlink:href="#icon-checkmark"></use></svg></td>
                            <td><svg class="icon icon--danger ml-auto mr-auto"><use xlink:href="#icon-times-solid"></use></svg></td>
                        </tr>
                        <tr>
                            <td class="pl-0"><strong><?php _e('No activity logs or connection logs', 'hotbot' ); ?></strong></td>
                            <td><svg class="icon icon--fine ml-auto mr-auto"><use xlink:href="#icon-checkmark"></use></svg></td>
                            <td><svg class="icon icon--danger ml-auto mr-auto"><use xlink:href="#icon-times-solid"></use></svg></td>
                        </tr>
                        <tr>
                            <td class="pl-0"><strong><?php _e('24/7 live chat support', 'hotbot' ); ?></strong></td>
                            <td><svg class="icon icon--fine ml-auto mr-auto"><use xlink:href="#icon-checkmark"></use></svg></td>
                            <td><svg class="icon icon--danger ml-auto mr-auto"><use xlink:href="#icon-times-solid"></use></svg></td>
                        </tr>
                        <tr>
                            <td class="pl-0"><strong><?php _e('Protection for 6 devices', 'hotbot' ); ?></strong></td>
                            <td><svg class="icon icon--fine ml-auto mr-auto"><use xlink:href="#icon-checkmark"></use></svg></td>
                            <td><svg class="icon icon--danger ml-auto mr-auto"><use xlink:href="#icon-times-solid"></use></svg></td>
                        </tr>
                    </tbody>
                </table>

                <div class="text-align-center pt-3">
                    <a href="/order/" class="btn btn--primary"><?php _e('Try HotBot VPN Free Today', 'hotbot' ); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="layout-section layout-section--bg-color-light pt-5 pb-5">
    <div class="container container--medium pt-5 pb-5 text-align-center" id="app">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 col-lg-8">
                {{ localCurrencyFn }}
                <h2 class="mb-5 text-align-center mb-5"><?php _e('Choose the plan that works for you', 'hotbot' ); ?></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 pb-4">
                <div class="card text-align-center">
                    <span class="card__span"><?php echo sprintf( __('Best Value - Save %s', 'hotbot'), '66%'); ?></span>
                    <div class="mt-4 mb-4"><strong><?php _e('1 Year', 'hotbot' ); ?></strong></div>
                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <small class="align-self-start"><strong>{{ plans[0].currency }}</strong></small>
                        <div class="card__price">{{ trialPriceNumeric(0) }}</div>
                        <small class="align-self-end">/mo</small>
                    </div>
                    <small class="d-block"><span class="text-danger line-through">{{ plans[0].oldPrice }}</span> {{ plans[0].formatPrice }}</small>
                    <small class="d-block"><?php _e('Billed every year.', 'hotbot' ); ?> ({{ trialPriceNumeric(0) }}/<?php _e('mo', 'hotbot' ); ?>)</small>
                    <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/?plan=0" class="btn btn--primary btn--sm mt-4 mb-4 pl-xl-5 pr-xl-5">Get 7-Day Free Trial', 'hotbot' ); ?></a>
                    <small class="d-block mb-4"><strong><?php _e('Includes a 30-day money-back guarantee', 'hotbot' ); ?></strong></small>
                </div>
            </div>

            <div class="col-md-4 pb-4">
                <div class="card text-align-center">
                    <div class="mt-4 mb-4"><strong><?php _e('6 Month', 'hotbot' ); ?></strong></div>
                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <small class="align-self-start"><strong>{{ plans[1].currency }}</strong></small>
                        <div class="card__price">{{ trialPriceNumeric(1) }}</div>
                        <small class="align-self-end"><?php _e('/mo', 'hotbot' ); ?></small>
                    </div>
                    <small class="d-block"><span class="text-danger line-through">{{ plans[1].oldPrice }}</span>{{ plans[1].formatPrice }} <?php _e('after trial.', 'hotbot' ); ?></small>
                    <small class="d-block"><?php _e('Billed every six months.', 'hotbot' ); ?> ({{ trialPriceNumeric(1) }} /<?php _e('mo', 'hotbot' ); ?>)</small>
                    <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/?plan=1" class="btn btn--primary btn--sm mt-4 mb-4 pl-xl-5 pr-xl-5"><?php _e('Get 7-Day Free Trial', 'hotbot' ); ?></a>
                    <small class="d-block mb-4"><strong><?php _e('Includes a 30-day money-back guarantee', 'hotbot' ); ?></strong></small>
                </div>
            </div>

            <div class="col-md-4 pb-4">
                <div class="card text-align-center">
                    <div class="mt-4 mb-4"><strong><?php _e('1 Month', 'hotbot' ); ?></strong></div>
                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <small class="align-self-start"><strong>{{ plans[2].currency }}</strong></small>
                        <div class="card__price">{{ trialPriceNumeric(2) }}</div>
                        <small class="align-self-end"><?php _e('/mo', 'hotbot' ); ?></small>
                    </div>
                    <small class="d-block"{{ plans[2].monthPrice }} <?php _e('after trial.', 'hotbot' ); ?></small>
                    <small class="d-block"><?php _e('Billed every month.', 'hotbot' ); ?></small>
                    <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/?plan=2" class="btn btn--primary btn--sm mt-4 mb-4 pl-xl-5 pr-xl-5"><?php _e('Get 7-Day Free Trial', 'hotbot' ); ?></a>
                    <small class="d-block mb-4"><strong><?php _e('Includes a 30-day money-back guarantee', 'hotbot' ); ?></strong></small>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="layout-section layout-section--bg-color-light pt-5 pb-5">
    <div class="container container--medium pt-5 pb-5 text-align-center">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 col-lg-8">
                <h2 class="mb-5 text-align-center mb-5"><?php _e('How to get a risk-free VPN trial', 'hotbot' ); ?></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 pb-4">
                <div class="card text-align-center">
                    <strong class="text-lg"><?php _e('Step 1', 'hotbot' ); ?></strong>
                    <img loading="lazy" src="<?php bloginfo( 'template_url' ); ?>/offers/04/assets/img/feature-sign-up.svg"  width="150" height="150" class="ml-auto mr-auto mb-5 mt-5" alt="step-1.png">
                    <strong class="text-md"><?php _e('Sign up for HotBot VPN', 'hotbot' ); ?></strong>
                    <p class="mt-4"><?php _e('Visit the order page to start your 100% free HotBot VPN trial. You won\'t be charged anything for the first 7 days.', 'hotbot' ); ?></p>
                </div>
            </div>

            <div class="col-md-4 pb-4">
                <div class="card text-align-center">
                    <strong class="text-lg"><?php _e('Step 2', 'hotbot' ); ?></strong>
                    <img loading="lazy" src="<?php bloginfo( 'template_url' ); ?>/offers/04/assets/img/feature-control-internet.svg"  width="150" height="150" class="ml-auto mr-auto mb-5 mt-5" alt="step-3.png">
                    <strong class="text-md"><?php _e('Enjoy  HotBot VPN', 'hotbot' ); ?></strong>
                    <p class="mt-4"><?php _e('Take back your internet security! Speeds fast enough for all your online activities, you\'ll be safe with HotBot VPN security and privacy.', 'hotbot' ); ?></p>
                </div>
            </div>

            <div class="col-md-4 pb-4">
                <div class="card text-align-center">
                    <strong class="text-lg"><?php _e('Step 3', 'hotbot' ); ?></strong>
                    <img loading="lazy" src="<?php bloginfo( 'template_url' ); ?>/offers/04/assets/img/feature-keep-vpn.svg"  width="150" height="150" class="ml-auto mr-auto mb-5 mt-5" alt="step-3.png">
                    <strong class="text-md"><?php _e('Keep HotBot VPN or get your money back', 'hotbot' ); ?></strong>
                    <p class="mt-4"><?php _e('If your HotBot VPN experience isn\'t great, just cancel your subscription with 7 days to avoid being charged for your membership.', 'hotbot' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-section layout-section--bg-color pt-5 pb-5">
    <div class="container container--medium pt-5 pb-5">
        <h2 class="mb-4 text-align-center d-flex flex-wrap justify-content-center align-items-end"><?php _e('People love HotBot VPN', 'hotbot' ); ?></h2>
        
        <div class="row pt-5">
            <div class="col-md-4 pl-xl-5 pr-xl-5 pb-4 d-flex flex-column justify-content-between">
                <div>
                    <p><?php _e('After being tired of these free trials where you have to contact support to actually get a refund, I saw HotBot offered an actual legit free trial using PayPal, that i could cancel myself if needed. Nothing to lose. Well it turns out this one actually works.', 'hotbot' ); ?></p>
                </div>
                <div>
                    <div class="d-flex align-items-center">
                        <svg class="icon mr-3 icon-15 icon-tw-rtl">
                            <use xlink:href="#icon-twitter"></use>
                        </svg>
                        <small class="uppercase"><strong>Steve</strong></small>
                    </div>
                </div>
            </div>

            <div class="col-md-4 pl-xl-5 pr-xl-5 pb-4 d-flex flex-column justify-content-between">
                <div>
                    <p><?php _e('Easy to use interface, connects with one click, and I can barely tell I’m on it speed wise. I had no issues on either of my devices so I let the trial rebill. Price is cheap too. I highly recommend hotbot vpn', 'hotbot' ); ?></p>
                </div>
                <div>
                    <div class="d-flex align-items-center">
                        <svg class="icon mr-3 icon-15 icon-tw-rtl">
                            <use xlink:href="#icon-twitter"></use>
                        </svg>
                        <small class="uppercase"><strong>Tim A</strong></small>
                    </div>
                </div>
            </div>

            <div class="col-md-4 pl-xl-5 pr-xl-5 pb-4 d-flex flex-column justify-content-between">
                <div>
                    <p><?php _e('I tried a few other VPNs but none of them was perfect. Slow connections, constant reconnecting, connection droping, mysterious slowdowns, unreachable pages... I decided to give HotBot VPN a try and so far it works like a dream.', 'hotbot' ); ?></p>
                </div>
                <div>
                    <div class="d-flex align-items-center">
                        <svg class="icon mr-3 icon-15 icon-tw-rtl">
                            <use xlink:href="#icon-twitter"></use>
                        </svg>
                        <small class="uppercase"><strong>AS</strong></small>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</section>

<section class="layout-section layout-section--bg-img pt-5 pb-5" style="background-image: url('<?php bloginfo( 'template_url' ); ?>/offers/04/assets/img/bg.jpg');">
    <div class="container container--medium pt-5 pb-5 text-align-center text-light">

        <div class="row justify-content-center mb-md-5 mt-md-5 pt-md-5 pb-md-5">
            <div class="col-md-10 col-lg-8">
                <img src="<?php bloginfo( 'template_url' ); ?>/offers/04/assets/img/moneyback-guarantee.svg" width="150" height="150"  class="ml-auto mr-auto"/>

                <h3 class="mt-5 mb-5"><?php _e('Risk-free VPN trial', 'hotbot' ); ?></h3>
                <p><?php _e('In addition to the 7-day free trial, we also offer a 30-day guarantee', 'hotbot' ); ?></p>
                <p><?php _e('Enjoy HotBot VPN with unlimited bandwidth, 256-bit encryption, and friendly customer support, completely risk-free.', 'hotbot' ); ?></p>
                <p><?php _e('If you’re not 100% satisfied, we\'ll refund you within the first 30 days.', 'hotbot' ); ?></p>
        
                <a href="/order/" class="btn btn--secondary mt-5"><?php _e('Try HotBot VPN Free Today', 'hotbot' ); ?></a>
            </div>
        </div>

    </div>
</section>

<?php include 'inc/inc-stripe.php'; ?>
<?php get_footer();?>
