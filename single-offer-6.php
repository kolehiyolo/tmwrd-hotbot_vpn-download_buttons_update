<?php
/* Template Name: Offer 6 */

$template = "06";
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
        <div id="ribbon" class="mt-n4 mb-3"><?php include 'inc/inc-ribbon.php'; ?></div>
    <?php } elseif( get_field('ribbon_toggle', 'option') == 'lander' ) { ?>
        <div id="ribbon" class="mt-n4 mb-3"><?php include 'inc/inc-ribbon.php'; ?></div>
    <?php } ?>
    
    <div class="container container--medium  d-flex align-items-center justify-content-between pt-4 pb-4">
        <a href="/" class="site-brand">
            <img src="<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/logo.svg" class="logo" width="220" height="61" alt="hotbot logo" />
        </a>
        <div class="nav__menu-container  d-flex align-items-center">
            <a href="/order/" class="btn btn--sm btn--secondary pl-4 pr-4" id="navBtn"><?php _e('Try it free', 'hotbot' ); ?></a>
        </div>
    </div>
</nav>

<section class="layout-section layout-section--bg-color hero pb-5 pb-md-7 pt-5">
    <div class="container container--medium mt-5 pt-5">
        <div class="row align-items-center <?php hasRibbon(); ?>">
            <div class="col-md-7 <?php hasRibbon(); ?>">
                <div class="row">
                    <div class="col-xl-9">
                        <h1 class="text-align-center text-align-md-left"><?php _e('Rated Best VPN', 'hotbot' ); ?></h1>
                    </div>
                </div>
                <p class="text-align-center text-align-md-left"><?php _e('100% Online Anonymity + Guaranteed Protection', 'hotbot' ); ?>
                </p>
                <ul class="listing fit-content ml-auto mr-auto ml-md-0 mb-4">
                    <li class="listing__item d-block mb-2">
                        <div class="d-flex">
                            <svg class="icon d-block mr-3"><use xlink:href="#icon-check"></use></svg>
                            <span><?php _e('Keep your browsing history private', 'hotbot' ); ?></span>
                        </div>
                    </li>
                    <li class="listing__item d-block mb-2">
                        <div class="d-flex">
                            <svg class="icon d-block mr-3"><use xlink:href="#icon-check"></use></svg>
                            <span><?php _e('Blazing fast speeds with no bandwidth limits', 'hotbot' ); ?></span>
                        </div>
                    </li>
                    <li class="listing__item d-block mb-3">
                        <div class="d-flex">
                            <svg class="icon d-block mr-3"><use xlink:href="#icon-check"></use></svg>
                            <span><?php _e('Protect up to 6 devices with one subscription', 'hotbot' ); ?></span>
                        </div>
                    </li>
                </ul>

                <div class="d-flex flex-wrap flex-md-nowrap align-items-center justify-content-center justify-content-md-start">
                    <a href="/order/" class="btn btn--primary mt-3 mb-3 mr-md-3"><span class="d-flex align-items-center justify-content-center"><?php _e('Try Our VPN', 'hotbot' ); ?><svg class="icon d-block ml-3"><use xlink:href="#icon-arrow-right"></use></svg></span></a>
                    <a href="/order/" class="link h6 mt-3 mb-3"><?php _e('30-day money-back guarantee', 'hotbot' ); ?></a>
                </div>
            </div>
            <div class="col-md-5">
                <img src="<?php bloginfo( 'template_url' ); ?>/offers/06/assets/img/hero.svg" width="532" height="394" class="mt-5 mb-5 mt-md-0 mb-md-0" alt="hero-img" />
            </div>
            <div class="col-12">
                <div class="d-flex align-items-center mt-4 justify-content-center justify-content-md-start">
                    <div class="h6"><?php _e('VPN available on', 'hotbot' ); ?></div>
                    <div class="d-flex justify-content-center justify-content-md-start">
                        <svg class="icon d-block icon--20 mb-1 ml-3"><use xlink:href="#platform-windows"></use></svg>
                        <svg class="icon d-block icon--20 mb-1 ml-3"><use xlink:href="#platform-macos"></use></svg>
                        <svg class="icon d-block icon--20 mb-1 ml-3"><use xlink:href="#platform-ios"></use></svg>
                        <svg class="icon d-block icon--20 mb-1 ml-3"><use xlink:href="#platform-android"></use></svg>
                        <svg class="icon d-block icon--20 mb-1 ml-3"><use xlink:href="#platform-android-tv"></use></svg>
                    </div>
                </div>
                <div class="mt-4 h6 text-align-center  text-align-md-left"><?php _e('Excellent', 'hotbot' ); ?></div>
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-start">
                    <img src="<?php bloginfo( 'template_url' ); ?>/offers/06/assets/img/stars-green.svg" class="mt-2 mr-3" width="135" height="" alt="rate"/>
                    <div class="h6 mt-2"><?php _e('4.4 Star as of', 'hotbot' ); ?> <?php echo date("M-Y"); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-section layout-section--bg-color-dark pb-4 pt-4 layout-ltr rtl-text-align-right">
    <div class="container container--medium">
        <div class="row align-items-center text-align-center">
            <div class="col-12 col-sm-4 col-lg-2 pt-2 pb-2"><div class="h6"><?php _e('As featured on:', 'hotbot' ); ?></div></div>
            <div class="col-6 col-sm-4 col-lg-2 pt-2 pb-2"><img src="<?php bloginfo( 'template_url' ); ?>/offers/06/assets/img/bloomberg.svg" class="ml-auto mr-auto" width="121" height="30" alt="" /></div>
            <div class="col-6 col-sm-4 col-lg-2 pt-2 pb-2"><img src="<?php bloginfo( 'template_url' ); ?>/offers/06/assets/img/wsj.svg" class="ml-auto mr-auto" width="47" height="31" alt="" /></div>
            <div class="col-6 col-sm-4 col-lg-2 pt-2 pb-2"><img src="<?php bloginfo( 'template_url' ); ?>/offers/06/assets/img/forbes.svg" class="ml-auto mr-auto" width="84" height="30" alt="" /></div>
            <div class="col-6 col-sm-4 col-lg-2 pt-2 pb-2"><img src="<?php bloginfo( 'template_url' ); ?>/offers/06/assets/img/money.svg" class="ml-auto mr-auto" width="81" height="30" alt="" /></div>
            <div class="col-12 col-sm-4 col-lg-2 pt-2 pb-2"><img src="<?php bloginfo( 'template_url' ); ?>/offers/06/assets/img/security-org.svg" class="ml-auto mr-auto" width="125" height="31" alt="" /></div>
        </div>
    </div>
</section>

<section class="layout-section  layout-section--bg-color pb-5 pt-3">
    <div class="container container--medium">
        <h2 class="h1 text-align-center mb-5"><?php _e('Online Privacy, On Mobile & Web', 'hotbot' ); ?></h2>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-9">
                <div class="row align-items-center pt-5">
                    <div class="col-md-6"><img src="<?php bloginfo( 'template_url' ); ?>/offers/06/assets/img/feature-1.svg" class="ml-auto mr-auto mt-4 mb-4" width="300" height="219" alt=""/></div>
                    <div class="col-md-6 pl-xl-5 text-align-center text-align-md-left">
                        <h2><?php _e('1-click-setup Mac, Windows, iOS, Android and more', 'hotbot' ); ?></h2>
                        <p class="h6"><?php _e('Our VPN apps support all popular platforms, with quick 1 click setup, unleash the internet with a click of a button.', 'hotbot' ); ?></p>
                        <a href="/order/" class="link--underline h5 d-inline-block mb-4"><?php _e('Get Protected Now', 'hotbot' ); ?></a>
                    </div>
                </div>
                <div class="row align-items-center pt-5">
                    <div class="col-md-6 order-md-2"><img src="<?php bloginfo( 'template_url' ); ?>/offers/06/assets/img/feature-2.svg" class="ml-auto mr-auto mt-4 mb-4" width="300" height="353" alt=""/></div>
                    <div class="col-md-6 order-md-1 pr-xl-5 text-align-center text-align-md-left">
                        <h2><?php _e('Privacy has never been so fast', 'hotbot' ); ?></h2>
                        <p class="h6"><?php _e('Our VPN network features military-grade encryption, the fastest, most secure of its kind, so you can surf, download, stream video, at the best possible speed.', 'hotbot' ); ?></p>
                        <a href="/order/" class="link--underline h5 d-inline-block mb-4"><?php _e('Get Protected Now', 'hotbot' ); ?></a>
                    </div>
                </div>
                <div class="row align-items-center pt-5">
                    <div class="col-md-6"><img src="<?php bloginfo( 'template_url' ); ?>/offers/06/assets/img/feature-3.svg" class="ml-auto mr-auto mt-4 mb-4" width="300" height="224" alt=""/></div>
                    <div class="col-md-6 pl-xl-5 text-align-center text-align-md-left">
                        <h2><?php _e('Support on hand, when you need it', 'hotbot' ); ?></h2>
                        <p class="h6"><?php _e('HotBot VPN has a dedicated support team you can reach out to any time you need assistance. Should you encounter any issues, we’ll get you up and running quickly.', 'hotbot' ); ?></p>
                        <a href="/order/" class="link--underline h5 d-inline-block mb-4"><?php _e('Get Protected Now', 'hotbot' ); ?></a>
                    </div>
                </div>

                <div class="text-align-center mt-5 mb-5">
                    <a href="/order/" class="btn btn--primary"><span class="d-flex align-items-center justify-content-center"><?php _e('Download HotBot VPN', 'hotbot' ); ?><svg class="icon d-block ml-3"><use xlink:href="#icon-arrow-right"></use></svg></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /*
<section class="layout-section layout-section--bg-color-dark pb-5 pt-5">
    <div class="container container--medium">
        <h2 class="h1 text-align-center">Your Hotbot VPN Plan Comes With <br/>More Than a VPN</h2>
        <p class="text-align-center h6">Proactive protection that does more to keep you safe and private online.</p>
        <div class="container-fluid pb-5 mb-5 pt-5 mt-5">
            <img src="<?php bloginfo( 'template_url' ); ?>/offers/06/assets/img/features-plan.png" class="d-none d-md-block absolut-content-img ml-auto mr-auto" width="843" height="637" alt="plan" />
            
            <div class="absolut-content left">
                <div class="absolut-content__item first">
                    <p class="h5 mb-2">3 Bureau Credit Monitoring</p>
                    <p>Get alerted if someone tries to access your credit to take out loans or open bank accounts in your name. </p>
                </div>
                <div class="absolut-content__item">
                    <p class="h5 mb-2">Credit Lock</p>
                    <p>Instantly lock your Experian credit file to prevent fraudsters from opening accounts in your name.</p>
                </div>
                <div class="absolut-content__item">
                    <p class="h5 mb-2">Antivirus</p>
                    <p>Download our antivirus to secure your devices from malware, ransomware, viruses, and more.</p>
                </div>
            </div>

            <img src="<?php bloginfo( 'template_url' ); ?>/offers/06/assets/img/features-plan-mobile-1.png" class="d-md-none absolut-content-img-mobile-1" width="940" height="1416" alt="plan" />

            <img src="<?php bloginfo( 'template_url' ); ?>/offers/06/assets/img/features-plan-mobile-2.png" class="d-md-none absolut-content-img-mobile-2" width="940" height="1416" alt="plan" />
            <div class="absolut-content right">
                <div class="absolut-content__item first">
                    <p class="h5 mb-2">Transaction Monitoring</p>
                    <p>Monitor your financial accounts in one place. Set alerts to get notified of suspicious activity. </p>
                </div>
                <div class="absolut-content__item second">
                    <p class="h5 mb-2">24/7 US-based Customer Supportk</p>
                    <p>Need help? Give us a call anytime.</p>
                </div>
                <div class="absolut-content__item third">
                    <p class="h5 mb-2">Identity Protection</p>
                    <p>Get alerted if your registered SSN, online accounts, and personal info have been compromised online.</p>
                </div>
                <div class="absolut-content__item mt-n3 forth">
                    <p class="h5 mb-2">Family Protection</p>
                    <p>Add up to 5 people to your plan, even outside of your household.</p>
                </div>
                <div class="absolut-content__item last">
                    <p class="h5 mb-2">Secure VPN</p>
                    <p>Shop, bank, and browse online securely and privately with a click. </p>
                </div>
            </div>
        
        </div>

        <div class="text-align-center mt-5 mb-5 pt-5">
            <a href="/order/" class="btn btn--secondary"><span class="d-flex align-items-center justify-content-center">Start Your Free Trial <svg class="icon d-block ml-3"><use xlink:href="#icon-arrow-right"></use></svg></span></a>
        </div>
    </div>
</section>

*/ ?>

<section class="layout-section  pb-5 pt-5">
    <div class="container container--medium">
        <div class="row align-items-center">
            <div class="col-md-6 text-align-center text-align-md-left">
                <h2 class="h1"><?php _e('<span class="d-block uppercase h3">The only</span>100% Free Trial VPN', 'hotbot' ); ?></h2>
                <p class="h6"><?php _e('No need to pay up front, then contact us and beg for your money back like every other "free" VPN service. Try our service 100% free for 7 days, and easily cancel with 1-click if you don’t like HotBot for any reason.', 'hotbot' ); ?></p>
                <a href="/order/" class="btn btn--primary mt-4"><span class="d-flex align-items-center justify-content-center"><?php _e('Get 7 Days Free VPN ', 'hotbot' ); ?><svg class="icon d-block ml-3"><use xlink:href="#icon-arrow-right"></use></svg></span></a>
                <div class="d-flex align-items-center mt-4 justify-content-center justify-content-md-start mb-4 mb-md-0">
                    <div class="h6"><?php _e('VPN available on', 'hotbot' ); ?></div>
                    <div class="d-flex justify-content-center justify-content-md-start">
                        <svg class="icon d-block icon--20 mb-1 ml-3"><use xlink:href="#platform-windows"></use></svg>
                        <svg class="icon d-block icon--20 mb-1 ml-3"><use xlink:href="#platform-macos"></use></svg>
                        <svg class="icon d-block icon--20 mb-1 ml-3"><use xlink:href="#platform-ios"></use></svg>
                        <svg class="icon d-block icon--20 mb-1 ml-3"><use xlink:href="#platform-android"></use></svg>
                        <svg class="icon d-block icon--20 mb-1 ml-3"><use xlink:href="#platform-android-tv"></use></svg>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php bloginfo( 'template_url' ); ?>/offers/06/assets/img/free-7-days-trial.svg" class="ml-auto mr-auto mt-4 mb-4" width="611" height="303" alt="devices" />
            </div>
        </div>
    </div>
</section>
<section class="layout-section  layout-section--bg-shadow pb-3 pt-3"></section>
<section class="layout-section  pb-5 pt-5 layout-section--bg-light-blue">
    <div class="container container--medium">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h2 class="h1 text-align-center mb-4 d-flex align-items-center flex-wrap justify-content-center"><span class="d-inline-block mr-3"><?php _e('Our customers rate us 5 stars on', 'hotbot' ); ?></span><img src="<?php bloginfo( 'template_url' ); ?>/offers/05/assets/img/trustpilot.svg" width="210" height="59" alt="trustpilot"></h2>
                <p class="h6 text-align-center mb-5"><?php _e('HotBot VPN is one of the top rated VPN services on Trustpilot. 99.98% uptime. Rapid speeds. No wonder our users stay with HotBot VPN for years!', 'hotbot' ); ?></p>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="<?php bloginfo( 'template_url' ); ?>/offers/06/assets/img/star-orange.svg" class="mb-3" width="120" height="22" alt="rate" />
                <p class="h5 mb-3"><?php _e('Quick and great support', 'hotbot' ); ?></p>
                <p class="h6 mb-3"><?php _e('After being tired of these free trials where you have to contact support to actually get a refund, I saw HotBot offered an actual legit free trial using PayPal, that i could cancel myself if needed. Nothing to lose. Well it turns out this one actually works.', 'hotbot' ); ?></p>
                <p class="h6 mb-0">- Steve</p>
                <p class="h6 pl-2 ml-1"><?php _e('US', 'hotbot' ); ?></p>
            </div>
            <div class="col-md-4 mb-4">
                <img src="<?php bloginfo( 'template_url' ); ?>/offers/06/assets/img/star-orange.svg" class="mb-3" width="120" height="22" alt="rate" />
                <p class="h5 mb-3"><?php _e('Great VPN', 'hotbot' ); ?></p>
                <p class="h6  mb-3"><?php _e('Easy to use interface, connects with one click, and I can barely tell I’m on it speed wise. I had no issues on either of my devices so I let the trial rebill. Price is cheap too. I highly recommend hotbot vpn', 'hotbot' ); ?></p>
                <p class="h6 mb-0">- Tim A</p>
                <p class="h6 pl-2 ml-1"><?php _e('FR', 'hotbot' ); ?></p>
            </div>
            <div class="col-md-4 mb-4">
                <img src="<?php bloginfo( 'template_url' ); ?>/offers/06/assets/img/star-orange.svg" class="mb-3" width="120" height="22" alt="rate" />
                <p class="h5 mb-3"><?php _e('Most efficient VPN out there', 'hotbot' ); ?></p>
                <p class="h6  mb-3"><?php _e('I tried a few other VPNs but none of them was perfect. Slow connections, constant reconnecting, connection droping, mysterious slowdowns, unreachable pages... I decided to give HotBot VPN a try and so far it works like a dream.', 'hotbot' ); ?></p>
                <p class="h6 mb-0">- AS</p>
                <p class="h6 pl-2 ml-1"><?php _e('DE', 'hotbot' ); ?>
            </div>

            <div class="col-12 text-align-center mb-4"><a href="/order/" class="btn btn--primary mt-5"><span class="d-flex align-items-center justify-content-center"><?php _e('Become a Satisfied Customer', 'hotbot' ); ?><svg class="icon d-block ml-3"><use xlink:href="#icon-arrow-right"></use></svg></span></a>
            </div>
        </div>
        
    </div>
</section>
<section class="layout-section layout-section--bg-shadow-bottom pb-3 pt-3"></section>
<section class="layout-section  layout-section--bg-color2 pb-5 pt-5">
    <div class="container container--medium" id="app">
        {{ localCurrencyFn }}
        <h2 class="h1 text-align-center mb-5"><?php _e('Choose the plan that works for you', 'hotbot' ); ?></h2>

        <div class="row pt-4">

            <div style="min-width: 16.6%;"></div>

            <div class="col-md-4">
                <div class="card--best-value fit-content ml-auto mr-auto mb-4 mt-3 mt-lg-2">
                    <span class="text-align-center p-2 d-block"><?php echo sprintf( __('Save %s', 'hotbot'), '66%'); ?></span>
                    <div class="card ml-auto mr-auto text-align-center">
                        <p class="h5 mb-2"><?php _e('1 Year', 'hotbot' ); ?></p>
                        <p class="d-flex align-items-center mb-2 justify-content-center">
                            {{ getCurrency() }}
                            <span class="h1 d-inline-block pl-2 pr-2">{{ trialPriceNumeric(planIndex(Plans.YEAR)) }}
                            </span><?php _e('/mo', 'hotbot' ); ?>
                        </p>
                        <p class="h6 mb-2">
                            <span class="danger line-through">{{ getPlan(Plans.YEAR).oldPrice }}</span>
                            {{ getPlan(Plans.YEAR).formatPrice }}
                        </p>
                        <p class="h6 mb-2">
                            <?php _e('Billed every year.', 'hotbot' ); ?>
                            ({{ trialPriceNumeric(planIndex(Plans.YEAR)) }} <?php _e('/mo', 'hotbot' ); ?>)
                        </p>
                        <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/?plan=YEAR" class="btn btn--primary btn--fluid mb-3 mt-3"><span class="d-flex align-items-center justify-content-center"><?php _e('Choose this plan', 'hotbot' ); ?><svg class="icon d-block ml-3"><use xlink:href="#icon-arrow-right"></use></svg></span></a>
                        <p class="fs-x-small mb-0"><?php _e('30-day money-back guarantee', 'hotbot' ); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card ml-auto mr-auto mb-4 mt-5 text-align-center fit-content">
                    <p class="h5 mb-2"><?php _e('1 Month', 'hotbot' ); ?></p>
                    <p class="d-flex align-items-center mb-2 justify-content-center">{{ getCurrency() }}
                        <span class="h1 d-inline-block pl-2 pr-2">{{ trialPriceNumeric(planIndex(Plans.MONTH)) }}</span>
                        <?php _e('/mo', 'hotbot' ); ?>
                    </p>
                    <p class="h6 mb-2">{{ getPlan(Plans.MONTH).monthPrice }} <?php _e('after trial.', 'hotbot' ); ?></p>
                    <p class="h6 mb-2"><?php _e('Billed every month.', 'hotbot' ); ?></p>
                    <a href="<?php if ( defined( 'ICL_LANGUAGE_CODE' ) && ICL_LANGUAGE_CODE != 'en') {echo "/" . ICL_LANGUAGE_CODE;}?>/order/?plan=MONTH" class="btn btn--primary btn--fluid mb-3 mt-3"><span class="d-flex align-items-center justify-content-center"><?php _e('Choose this plan', 'hotbot' ); ?><svg class="icon d-block ml-3"><use xlink:href="#icon-arrow-right"></use></svg></span></a>
                    <p class="fs-x-small mb-0"><?php _e('30-day money-back guarantee', 'hotbot' ); ?></p>
                </div>
            </div>
            

        </div>

    </div>
</section>
<!-- <section class="layout-section pt-5 pre-footer">
    <div class="container container--medium">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">
            <a href="/order/" class="site-brand mr-3">
                <img src="<?php bloginfo( 'template_url' ); ?>/offers/06/assets/img/logo.svg" class="logo mt-3 mb-3" width="220" height="61" alt="hotbot logo" />
            </a>
            <a hre="" class="fs-x-small link--underline">support@hotbotvpn.com</a>
        </div>

        <div class="hr-line mt-5"></div>
    </div>
</section> -->

<div class="modal p-3" id="modal">
    <div class="modal__backdrop"></div>
    <div class="modal__content d-flex justify-content-end">
        <div class="d-none d-sm-block col-sm-4 modal__bg-img" style="background-image: url('<?php bloginfo( 'template_url' ); ?>/offers/06/assets/img/browse.jpg');"></div>
        <div class="p-5 col-12 col-sm-8">
            <div class="modal__close"><svg class="icon"><use xlink:href="#icon-x"></use></svg></div>
            <span class="h5 text-color"><?php _e('Limited Time Offer', 'hotbot' ); ?></span>
            <h2 class="modal__title h1"><?php _e('Try HotBot VPN Free For 7 Days', 'hotbot' ); ?></h2>
            <p class="mb-3 h5 text-color"><?php _e('100% Online Anonymity + Guaranteed Protection', 'hotbot' ); ?></p>
            <ul class="listing listing--sm  mb-4">
                <li class="listing__item d-block mb-2">
                    <div class="d-flex">
                        <svg class="icon d-block mr-3 mt-1"><use xlink:href="#icon-check"></use></svg>
                        <span><?php _e('Keep your browsing history private', 'hotbot' ); ?></span>
                    </div>
                </li>
                <li class="listing__item d-block mb-2">
                    <div class="d-flex">
                        <svg class="icon d-block mr-3 mt-1"><use xlink:href="#icon-check"></use></svg>
                        <span><?php _e('Blazing fast speeds with no bandwidth limits', 'hotbot' ); ?></span>
                    </div>
                </li>
                <li class="listing__item d-block mb-2">
                    <div class="d-flex">
                        <svg class="icon d-block mr-3 mt-1"><use xlink:href="#icon-check"></use></svg>
                        <span><?php _e('Protect up to 6 devices with one subscription', 'hotbot' ); ?></span>
                    </div>
                </li>
            </ul>

            <a href="/order/" class="btn btn--primary mb-3"><span class="d-flex align-items-center justify-content-center"><?php _e('7 days free', 'hotbot' ); ?><svg class="icon d-block ml-3"><use xlink:href="#icon-arrow-right"></use></svg></span></a>
        </div>
    </div>
</div>


<?php include 'inc/inc-stripe.php'; ?>



<?php get_footer();?>
