<?php
/* Template Name: Offer 3 */
$template = "03";
include( locate_template( 'inc/offer-header.php', false, false ) );

$geo = hb_get_geoinfo();
// hb_ensure_nats_cookies();

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

    <div class="p-4 d-flex align-items-center justify-content-between">
        <a href="/" class="site-brand">
            <img src="<?php bloginfo('template_url'); ?>/offers/01/assets/img/logo.svg" width="220" height="61" class="logo" alt="hotbot logo" />
        </a>
        <div class="nav__menu-container  mr-xl-5">
            <input type="checkbox" class="d-none nav__menu-checkbox" id="toggleDropdownMenu" />
            <label for="toggleDropdownMenu" class="nav__menu-toggle align-items-center uppercase">
                <svg class="icon mr-3"><use xlink:href="#icon-globe-solid"></use></svg>
                <?php $is_translated = apply_filters( 'wpml_element_has_translations', NULL, get_the_ID(), 'page' ) ?>
                <?php $slug = 'offer/' . get_post_field( 'post_name', get_post() ); ?>
                <?php echo @(ICL_LANGUAGE_CODE !== 'ICL_LANGUAGE_CODE' ? ICL_LANGUAGE_CODE : 'en'); ?>

                <ul class="nav__dropdown-menu" id="dropdownMenuLang">
                    <?php include 'inc/inc-menu-lang.php'; ?>
                </ul>
            </label>

            <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--sm btn--primary ml-3"><?php _e('Get HotBot VPN', 'hotbot' ); ?></a>
        </div>
    </div>
</nav>

<section class="layout-section hero pb-4 pt-5">
    <div class="container container--medium <?php hasRibbon(); ?>">
        <div class="row trl-row-reverse mt-5 align-items-center mb-5 pb-5 <?php hasRibbon(); ?>">
            <div class="col-lg-6 pb-5 pb-lg-0 pt-3">
                <h1 class="text-align-center text-align-lg-left mb-3"><?php echo sprintf( __('Rated Best VPN', 'hotbot' )); ?></h1>
                <div class="text-align-center text-align-lg-left">
                    <?php if (!empty($geo["country_name"])) { ?>
	                    <h2 class="high-light pl-3 pr-3 text-align-center d-inline-block">
	                    <?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE == 'en') { echo $geo["country_name"]; } else { _e($geo["country_code"], 'hotbot'); }?>    
	                    </h2>
                    <?php } ?>
                </div>
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start mb-5">
                    <img src="<?php bloginfo('template_url'); ?>/offers/03/assets/img/stars-green.svg" class="mr-3 heading-mr" width="128" height="25" alt="country rate" />
                    <div><?php _e('Excellent', 'hotbot' ); ?></div>
                </div>


                <p class="h4 text-align-center text-align-lg-left mb-5"><?php _e('100% Online Anonymity + Guaranteed Protection', 'hotbot' ); ?></p>
                
                <ul class="listing pl-0 mb-5 pb-2 ml-auto mr-auto ml-lg-0">
                    <li class="listing__item d-flex align-items-center">
                        <svg class="listing__icon mr-4">
                            <use xlink:href="#icon-check-circle-solid"></use>
                        </svg>
                        <div class="listing__content"><?php _e('Keep your browsing history private', 'hotbot' ); ?></div>
                    </li>
                    <li class="listing__item d-flex align-items-center">
                        <svg class="listing__icon mr-4">
                            <use xlink:href="#icon-check-circle-solid"></use>
                        </svg>
                        <div class="listing__content"><?php _e('Blazing fast speeds with no bandwidth limits', 'hotbot' ); ?></div>
                    </li>
                    <li class="listing__item d-flex align-items-center">
                        <svg class="listing__icon mr-4">
                            <use xlink:href="#icon-check-circle-solid"></use>
                        </svg>
                        <div class="listing__content"><?php _e('Protect up to 6  devices with one subscription', 'hotbot' ); ?></div>
                    </li>
                </ul>
                
                <div class="text-align-center text-align-lg-left"> <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary mb-4"><?php _e('Get 7 Days Free VPN', 'hotbot' ); ?></a>
                </div>
                <p class="d-flex text-align-center text-align-lg-left pt-2 justify-content-center justify-content-lg-start align-items-center"><span class="d-block mr-3 heading-mr"><?php _e('As recommended by:', 'hotbot' ); ?></span>
                    <img src="<?php bloginfo('template_url'); ?>/offers/03/assets/img/ppc.png"
                    width="80" height="40" alt="ppc">
                </p>
            </div>
                <div class="col-lg-6">                    
                    <div class="hero__robot-wrap ml-auto mr-auto">
                        <span class="fi fid fi-<?php echo strtolower($geo["country_code"]); ?>" id="flag"></span>
                        <?php include 'inc/inc-robot-svg.php'; ?>
                    </div>
                </div>
            <div>
        </div>
    </div>
</section>

<section class="layout-section layout-section--bg-color pt-5 pb-5">
    <div class="container container--medium">
        <div class="row pt-5 pb-5 align-items-center">
            <div class="col-md-3">
                <div class="row justify-content-center">
                    <div class="col-7 col-md-12">
                        <img src="<?php bloginfo('template_url'); ?>/offers/01/assets/img/hotbot-robot-hero.svg" width="255" height="149" class="ml-auto mr-auto mb-4 mb-md-0" alt="Hotbot Robot" />
                    </div>                    
                </div>
            </div>
            <div class="col-md-9 text-align-center text-align-md-left">
                <h3 class="mb-5"><?php _e('HotBot is the ONLY Real Free Trial VPN Available.', 'hotbot' ); ?></h3>
                <p><?php _e('No need to pay up front, then contact us and beg for your money back like every other "free" VPN service. Try our service 100% free for 7 days, and easily cancel with 1-click if you don’t like HotBot for any reason. On top of that, we also give you the comfort of a 30-day money back guarantee. Simply put, HotBot is the most risk-free, hassle-free, premium VPN service online. Do your privacy a favor, and get HotBot running on all of your devices in just minutes, at zero cost.', 'hotbot' ); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="layout-section layout-section--bg-color-dark pt-5 pb-5">
    <div class="container container--medium">
        <div class="row align-items-center pt-5 pb-5 pb-md-3">
            <div class="col-md-3 order-md-2">
                <div class="row justify-content-center">
                    <div class="col-7 col-md-12">
                        <img src="<?php bloginfo('template_url'); ?>/offers/03/assets/img/features-04-dark.svg" width="350" height="165" class="ml-auto mr-auto" alt="features-04-dark" />
                    </div>                    
                </div>
            </div>
            <div class="col-md-9 text-align-center text-align-md-left pb-5 pb-md-0 order-md-1">
                <h3 class="mb-5"><?php _e('Up to 6 Devices Secured. Simultaneously.', 'hotbot' ); ?></h3>
                <p><?php _e('No matter which devices you have, Hotbot VPN most definitely has an app for that. Protect your Windows, Mac, iOS, Android devices. And you can secure up to 6 devices for the ultimate safeguard against any and all malicious threats.', 'hotbot' ); ?></p>
            </div>
        </div>
        <div class="hero__app-link d-flex align-items-center ml-n4 justify-content-center justify-content-md-start">
            <div class="hero__app-link-item">
                <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/">
                    <svg class="icon icon--lg"><use xlink:href="#platform-ios"></use></svg>
                </a>
            </div>
            <div class="hero__app-link-item">
                <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/">
                    <svg class="icon icon--lg"><use xlink:href="#platform-android"></use></svg>
                </a>
            </div>
            <div class="hero__app-link-item">
                <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/">
                    <svg class="icon icon--lg"><use xlink:href="#platform-windows"></use></svg>
                </a>
            </div>
            <div class="hero__app-link-item">
                <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/">
                    <svg class="icon icon--lg"><use xlink:href="#platform-macos"></use></svg>
                </a>
            </div>
            <div class="hero__app-link-item">
                <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/">
                    <svg class="icon icon--lg"><use xlink:href="#platform-android-tv"></use></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="layout-section layout-section--bg-color pt-5 pb-5">
    <div class="container container--medium">
        <h3 class="text-align-center mb-5"><?php _e('We don’t record your:', 'hotbot' ); ?></h3>
        <div class="row justify-content-center">
            <div class="col-lg-9 text-align-center">
                <div class="row mb-5">
                    <div class="col-6 col-md-4">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/03/assets/img/track-01.svg" width="40" height="40" class="mb-3 ml-auto mr-auto" alt="Hide your IP">
                        <p><?php _e('IP address', 'hotbot' ); ?></p>
                    </div>
                    <div class="col-6 col-md-4">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/03/assets/img/track-02.svg" width="40" height="40" class="mb-3 ml-auto mr-auto" alt="Streaming">
                        <p><?php _e('Accessed websites', 'hotbot' ); ?></p>
                    </div>
                    <div class="col-6 col-md-4">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/03/assets/img/track-03.svg" width="40" height="40" class="mb-3 ml-auto mr-auto" alt="Anonymous Browsing">
                        <p><?php _e('Browsing history', 'hotbot' ); ?></p>
                    </div>
                    <div class="col-6 col-md-4">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/03/assets/img/track-04.svg" width="40" height="40" class="mb-3 ml-auto mr-auto" alt="Zero Logging">
                        <p><?php _e('Session duration', 'hotbot' ); ?></p>
                    </div>
                    <div class="col-6 col-md-4">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/03/assets/img/track-05.svg" width="40" height="40" class="mb-3 ml-auto mr-auto" alt="Unlimited Bandwidth">
                        <p><?php _e('Bandwidth usage', 'hotbot' ); ?></p>
                    </div>
                    <div class="col-6 col-md-4">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/03/assets/img/track-06.svg"  width="40" height="40" class="mb-3 ml-auto mr-auto" alt="Multiple Server Locations">
                        <p><?php _e('VPN server connections', 'hotbot' ); ?></p>
                    </div>
                </div>

                <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary mb-5"><?php _e('Get 7 Days Free VPN', 'hotbot' ); ?></a>
            </div>
        </div>
       
    </div>
</section>

<section class="layout-section layout-section--bg-color pt-5 pb-5">
    <div class="container container--medium pt-5 pb-5">
        <h3 class="text-align-center mb-5"><?php _e('The #1 VPN provider, as seen in:', 'hotbot' ); ?></h3>
        <img src="<?php bloginfo('template_url'); ?>/offers/03/assets/img/brands_mobile.svg" width="350" height="190" class="d-lg-none ml-auto mr-auto" alt="brands" />
        <img src="<?php bloginfo('template_url'); ?>/offers/03/assets/img/brands_desktop.svg" width="1109" height="52" class="d-none d-lg-block ml-auto mr-auto" alt="brands" />
    </div>
</section>

<section class="layout-section layout-section--bg-color-dark pt-5 pb-5">
    <div class="container container--medium text-align-center pt-5 pb-5">
        <h3 class="mb-5"><?php _e('What makes Hotbot VPN the #1 VPN on the market', 'hotbot' ); ?></h3>
        <div class="row pt-5 justify-content-center">
            <div class="col-sm-6 col-lg-4 pb-5">
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/03/assets/img/features-01-dark.svg" width="140" height="100" class="mb-3 ml-auto mr-auto" alt="features-01">
                <h6><?php _e('Public Wi-Fi Protection', 'hotbot' ); ?></h6>
                <small><?php _e('Public Wi-Fi has minimal safeguards and often sells your data. Plus, it is a breeding ground for snoops and hackers. Let HotBot keep you safe!', 'hotbot' ); ?></small>
            </div>
            <div class="col-sm-6 col-lg-4 pb-5">
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/03/assets/img/features-02-dark.svg" width="100" height="60" class="mb-3 ml-auto mr-auto" alt="features-02">
                <h6><?php _e('Comprehensive Online Protection', 'hotbot' ); ?></h6>
                <small><?php _e('With 256-bit AES encryption and multiple protocols, plus a kill switch, you know your internet connected is completely protected.', 'hotbot' ); ?></small>
            </div>
            <div class="col-sm-6 col-lg-4 pb-5">
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/03/assets/img/features-04-dark.svg" width="140" height="100" class="mb-3 ml-auto mr-auto" alt="features-04">
                <h6><?php _e('Set Your Location to Anywhere', 'hotbot' ); ?></h6>
                <small><?php _e('Keep your address hidden. Access to a huge network of VPN servers in 36+ countries and be virtually located anywhere.', 'hotbot' ); ?></small>
            </div>
            <div class="col-sm-6 col-lg-4 pb-5">
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/03/assets/img/features-05-dark.svg" width="150" height="110" class="mb-3 ml-auto mr-auto" alt="features-05">
                <h6><?php _e('Blazing Fast VPN Speeds', 'hotbot' ); ?></h6>
                <small><?php _e('Built with speed in mind, HotBot VPN provides unlimited bandwidth. No more slow loading times and constant buffering.', 'hotbot' ); ?></small>
            </div>
            <div class="col-sm-6 col-lg-4 pb-5">
                <img loading="lazy" src="<?php bloginfo('template_url'); ?>/offers/03/assets/img/features-06-dark.svg"  width="140" height="100" class="mb-3 ml-auto mr-auto" alt="features-06">
                <h6><?php _e('24/7 Customer Support', 'hotbot' ); ?></h6>
                <small><?php _e('Contact our dedicated, professional support staff, you\'ll get all your questions will answered quickly.', 'hotbot' ); ?></small>
            </div>
        </div>
    </div>
</section>

<section class="layout-section layout-section--bg-color pt-5 pb-5">
    <div class="container container--medium pt-5 pb-5" id="app">
        {{ localCurrencyFn }}
        <h3 class="text-align-center mb-5"><?php _e('Choose the plan that works for you', 'hotbot' ); ?></h3>
        <div class="d-flex flex-wrap align-items-center mb-5 pb-5">

            <div style="min-width: 16.6%;"></div>

            <div class="card card--plan fine pt-3 pb-4 pl-4 pr-4 pl-xl-5 pr-xl-5 text-align-center col-sm-6 col-md-4 mr-sm-n1 mb-3">
                <span class="card__span mb-5 mt-n5 d-block ml-auto mr-auto"><?php echo sprintf( __('Best Value - Save %s', 'hotbot'), '66%'); ?></span>
                <strong class="d-block mb-3"><?php _e('1 Year', 'hotbot' ); ?></strong>
                <!-- <strong class="d-block mb-3 fine-text">+ 3 Months Free</strong> -->
                <div class="d-flex justify-content-center mb-5">
                    <span class="fs-x-small"><strong>{{ getCurrency() }}</strong></span>
                    <div class="card--plan__price">{{ trialPriceNumeric(planIndex(Plans.YEAR)) }}</div>
                    <span v-show="!showZeroTrial" class="fs-x-small align-self-end"><?php _e('/mo', 'hotbot' ); ?></span>
                </div>
                <span class="fs-x-small d-block">
                    <span class="text-danger line-through">{{ getPlan(Plans.YEAR).oldPrice }}</span>
                    {{ getPlan(Plans.YEAR).formatPrice }} <?php _e('after trial.', 'hotbot' ); ?>
                </span>
                <span class="fs-x-small d-block mb-4">
                    <?php _e('Billed every year.', 'hotbot' ); ?>
                    ({{ trialPriceNumeric(planIndex(Plans.YEAR)) }} <?php _e('/mo', 'hotbot' ); ?>)
                </span>
                <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/?plan=YEAR" class="btn btn--sm btn--secondary mb-4 d-xl-block"><?php _e('Get 7-Day Free Trial', 'hotbot' ); ?></a>
                <span class="fs-x-small d-block mb-3"><strong><?php _e('Includes a 30-day money-back guarantee', 'hotbot' ); ?></strong></span>
            </div>

            <div class="card card--plan pt-4 pb-4 pl-4 pr-4 pl-xl-5 pr-xl-5 text-align-center col-sm-6 col-md-4 mb-3">
                <strong class="d-block mb-3"><?php _e('1 Month', 'hotbot' ); ?></strong>
                <div class="d-flex justify-content-center mb-5">
                    <span class="fs-x-small"><strong>{{ getCurrency() }}</strong></span>
                    <div class="card--plan__price">{{ trialPriceNumeric(planIndex(Plans.MONTH)) }}</div>
                    <span v-show="!showZeroTrial" class="fs-x-small align-self-end"><?php _e('/mo', 'hotbot' ); ?></span>
                </div>
                <span class="fs-x-small d-block">
                    {{ getPlan(Plans.MONTH).monthPrice }} <?php _e('after trial.', 'hotbot' ); ?>
                </span>
                <span class="fs-x-small d-block mb-3"><?php _e('Billed every month.', 'hotbot' ); ?></span>
                <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/?plan=MONTH" class="btn btn--sm btn--secondary mb-4 d-xl-block"><?php _e('Get 7-Day Free Trial', 'hotbot' ); ?></a>
                <span class="fs-x-small d-block mb-3"><strong><?php _e('30-day money-back guarantee', 'hotbot' ); ?></strong></span>
            </div>
            
        </div>
    </div>
</section>

<section class="layout-section layout-section--bg-color pt-5 pb-5">
    <div class="container container--medium pt-5 pb-5">
        <div class="row justify-content-center mb-3">
            <div class="col-xl-7">
                <h3 class="text-align-center mb-5"><?php _e('FAQ', 'hotbot' ); ?></h3>
                <p class="text-align-center"><?php _e('Got questions? Check out our FAQ section dedicated for streaming. Or contact us via email or live-chat.', 'hotbot' ); ?>
                    </p>
            </div>
        </div>

        <div class="accordion mb-5">
            <input type="checkbox" class="accordion__toggler d-none" id="accordion-1" />
            <label for="accordion-1" class="accordion__header d-flex align-items-center justify-content-between p-4">
                <div class="accordion__title pt-3 pb-3 pl-4 pr-4"><?php _e('How does Hotbot VPN Work?', 'hotbot' ); ?></div>
                <div class="accordion__toggle mr-3"></div>
            </label>
            <div class="accordion__body">
                <div class="">
                    <p><?php _e('Hotbot VPN hides your IP address and reroutes your internet traffic through an encrypted VPN tunnel. This allows you to protect your digital identity from your Goverment Authorities', 'hotbot' ); ?></p>
                </div>
            </div>
        </div>

        <div class="accordion mb-5">
            <input type="checkbox" class="accordion__toggler d-none" id="accordion-2" />
            <label for="accordion-2" class="accordion__header d-flex align-items-center justify-content-between p-4">
                <div class="accordion__title pt-3 pb-3 pl-4 pr-4"><?php _e('How do I use Hotbot VPN?', 'hotbot' ); ?></div>
                <div class="accordion__toggle mr-3"></div>
            </label>
            <div class="accordion__body">
                <div class="">
                    <p><?php _e('Just one-click to connect to one of our thoursands VPN servers and enjoy advanced digital protection', 'hotbot' ); ?></p>

                    <p><?php _e('You can choose a server on your own, or use our Best Server Location feature. Alternatively, you can also choose from our list of optimized servers for different online activities.', 'hotbot' ); ?></p>

                    <p><?php _e('For more details, head over to <a href="/vpn-guides/">VPN Guides</a> section. You will find step-by-step guides on how to configure our service and make the most out of your Hotbot VPN subscription.', 'hotbot' ); ?></p>
                </div>
            </div>
        </div>

        <div class="accordion mb-5">
            <input type="checkbox" class="accordion__toggler d-none" id="accordion-3" />
            <label for="accordion-3" class="accordion__header d-flex align-items-center justify-content-between p-4">
                <div class="accordion__title pt-3 pb-3 pl-4 pr-4"><?php _e('How secure is Hotbot VPN?', 'hotbot' ); ?></div>
                <div class="accordion__toggle mr-3"></div>
            </label>
            <div class="accordion__body">
                <div class="">
                    <p><?php _e('All of our VPN apps keep you safe. We back up our VPN with military-grade AES 256-bit encryption to ensure your privacy and security', 'hotbot' ); ?></p>
                    <p><?php _e('On top of that, our No-Logs policy ensures that we never share your data with third parties, including government bodies or authoritative personnel.', 'hotbot' ); ?></p>
                </div>
            </div>
        </div>

        <div class="accordion mb-5">
            <input type="checkbox" class="accordion__toggler d-none" id="accordion-4" />
            <label for="accordion-4" class="accordion__header d-flex align-items-center justify-content-between p-4">
                <div class="accordion__title pt-3 pb-3 pl-4 pr-4"><?php _e('How many devices can I protect with Hotbot VPN?', 'hotbot' ); ?></div>
                <div class="accordion__toggle mr-3"></div>
            </label>
            <div class="accordion__body">
                <div class="">
                    <p><?php _e('One Hotbot VPN subscription will cover 6 devices in total.', 'hotbot' ); ?></p>
                    <p><?php _e('With our special designed apps for Windows, Android, iOS, Mac, every device you own can be covered, at the same time.', 'hotbot' ); ?></p>
                </div>
            </div>
        </div>

        <div class="accordion mb-5">
            <input type="checkbox" class="accordion__toggler d-none" id="accordion-5" />
            <label for="accordion-5" class="accordion__header d-flex align-items-center justify-content-between p-4">
                <div class="accordion__title pt-3 pb-3 pl-4 pr-4"><?php _e('Is Hotbot VPN free?', 'hotbot' ); ?></div>
                <div class="accordion__toggle mr-3"></div>
            </label>
            <div class="accordion__body">
                <div class="">
                    <p><?php _e('We do offer a 7 day free trial that gives you access to all our premium features. Take a test drive to see why we are the right VPN for you!', 'hotbot' ); ?></p>
                </div>
            </div>
        </div>

        <div class="accordion mb-5">
            <input type="checkbox" class="accordion__toggler d-none" id="accordion-6" />
            <label for="accordion-6" class="accordion__header d-flex align-items-center justify-content-between p-4">
                <div class="accordion__title pt-3 pb-3 pl-4 pr-4"><?php _e('Where is Hotbot VPN located?', 'hotbot' ); ?></div>
                <div class="accordion__toggle mr-3"></div>
            </label>
            <div class="accordion__body">
                <div class="">
                    <p><?php _e('HotBot VPN is a Seychelles-based company working with international teams to support our many worldwide VPN servers. Seychelles does not take part in what we have nicknamed “Big Surveillance,” a term describing organizations within a nation that dedicate their time and resources to monitor the actions of their citizens. There are no mandatory data retention laws, allowing us to stand behind our <a href="/no-logs-policy/">No-Logs policy</a> 100%!', 'hotbot' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-section layout-section--bg-color-dark pb-5">
    <div class="container container--medium pb-3">
        <div class="row">
            <div class="col-md-5 order-md-2">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/money-back-guarantee.svg" width="444" height="295" class="mt-n5 ml-auto mr-auto" alt="vpn-devices" />
            </div>
            <div class="col-md-7 order-md-1 mt-md-3 text-align-center text-align-md-left">
                <h3 class="mb-5 mt-5"><?php _e('Hotbot VPN Exclusive 30-Day Money-Back Guarantee', 'hotbot' ); ?></h3>
                <p class="h6 mb-5"><?php _e('If you are not completely satisfied with Hotbot VPN, contact us within 30 days and we will send you a full refund.', 'hotbot' ); ?></p>
                <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/" class="btn btn--primary"><?php _e('Get 7 Days Free VPN', 'hotbot' ); ?></a>
            </div>
        </div>
    </div>
</section>

<?php include 'inc/inc-stripe.php'; ?>
<?php get_footer();?>
