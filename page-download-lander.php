<?php /* Template Name: Apps Lander */ ?>

<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hotbot
 */
// hb_ensure_nats_cookies();


// organic link
$actionLink = "https://fflux.sb-mgmt-srv.com/?flux_action=1&flux_f=1739750463186683403&flux_ffn=1739750942950005580";

// campaigns
if(strpos($_SERVER["REQUEST_URI"], "funnel-id") !== false) { // for some reason $_GET is always empty on prod server, use this as workaround
    $actionLink = "https://fflux.sb-mgmt-srv.com/?flux_action=1";
}

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="theme-color" content="#ffffff">
	<title><?php wp_title(); ?></title>

    <script src="https://www.googleoptimize.com/optimize.js?id=OPT-NPPKXF3"></script>

    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/offers/download/assets/css/style.css"/>
    <script src="<?php bloginfo('template_url'); ?>/offers/download/assets/js/common.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" id="jquery-js"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MTR73FB');</script>
    <!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<main class="main">
	    <div class="svg-sprite" id="svg-icons"></div>
        <nav class="top-bar-nav nav pt-3 pb-3">
            <div class="container">
                <div class="d-flex align-items-center justify-content-center justify-content-md-between">
                    <a href="javascript:void(0)" class="nav__logo d-inline-block pl-md-3"><img src="<?php bloginfo('template_url'); ?>/offers/download/assets/img/logo-light-bg.svg" width="180" height="28" alt="logo" style="margin:auto;filter:opacity(0.7) saturate(0.8) brightness(0.6);"/></a>
                    <div class="d-none d-md-block">
                        <div class="btn-wrap-sm">
                            <?php /* include 'inc/inc-download-links.php'; */ ?>
                                <a href="javascript:void" class="btn btn--primary text-align-left p-0 d-flex justify-content-between align-items-center form-trigger" id="primary-download">
                                    <div class="btn-padd">
                                        <strong class="d-block"><?php _e('Continue', 'hotbot' ); ?></strong>
                                    </div>
                                </a>
                        </div>
                    </div>                    
                </div>
            </div>
        </nav>

        <div class="hero-container">
            <section class="layout-section nav-wrapper nav-desktop">
                <div class="logo-container container">
                    <a style="left: 0;" href="javascript:void(0)" class="hero__logo"><img src="<?php bloginfo('template_url'); ?>/offers/download/assets/img/logo-light-bg.svg" width="180" height="28" alt="logo" style="margin:auto;filter:opacity(0.6) brightness(0.1) grayscale(1) contrast(0)"></a>
                </div>
            </section>

            <section class="layout-section nav-wrapper nav-mobile" style="display: none">
                <div class="top-mob-nav">
                    <img src="<?php bloginfo('template_url'); ?>/offers/download/assets/img/logo-light-bg.svg" style="filter:opacity(0.6) brightness(0.1) grayscale(1) contrast(0); height: 15px; width: auto;">
                    <div class="menu-toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="bottom-mob-nav">
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/offers/download/assets/img/privacy.svg">
                        Private
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/offers/download/assets/img/speed.svg">
                        Fast
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/offers/download/assets/img/security.svg">
                        Secure
                    </div>
                </div>
            </section>

            <section class="main-button-section text-align-center text-align-lg-left layout-section " >
                <div class="container hero__content pt-md-4 pt-md-0 text-align-center">
                    <p class="hero_above" style=""><?php _e('Your File is Ready', 'hotbot' ); ?></p>
                    <h1 class="top-h1"><span><?php _e('Online', 'hotbot' ); ?></span> <?php _e('Activation', 'hotbot' ); ?></h1>
                    <p class="hero__sub text-xlarge" style="display: none"><?php _e('Enhance your digital security and privacy instantly', 'hotbot' ); ?></p>
                    <div class="ml-auto mr-auto pb-md-3 mb-2">
                        <div class="btn-wrap-lg action-button">
                                <a href="javascript:void" class="btn btn--primary  text-align-left p-0 d-flex justify-content-between align-items-center form-trigger" id="primary-download">
                                    <div class="btn-padd">
                                        <strong class="d-block"><?php _e('Continue', 'hotbot' ); ?></strong>
                                    </div>
                                </a>
                        </div>
                    </div>
                    <p><span class="blinking-dot"></span> &nbsp;<?php _e('High Speed Connection', 'hotbot' ); ?></p>
                    <?php /*
                    <div class="d-sm-flex align-items-center justify-content-center">
                        <div class="pt-2 pb-2 pt-sm-3 pb-sm-3 pl-3 pr-3 pl-lg-4 pr-lg-4 d-flex justify-content-center align-items-center">
                            <div class="col-4 pl-0 ac-pl">
                                <img src="<?php bloginfo('template_url'); ?>/offers/download/assets/img/pc-editors-choice.png" width="90" class="ml-auto mr-auto mr-sm-3"/>
                            </div>
                            <div>
                                <p class="mb-0 text-small"><?php echo date("Y"); ?> <strong><?php _e('Editor\'s Choice', 'hotbot' ); ?></strong></p>
                                <img src="<?php bloginfo('template_url'); ?>/offers/download/assets/img/stars-green.svg" width="80" class="ml-auto mr-auto mt-2 mb-2"/>
                            </div>
                        </div>
                        <div class="pt-2 pb-2 pt-sm-3 pb-sm-3 pl-3 pr-3 pl-lg-4 pr-lg-4 d-flex justify-content-center align-items-center">
                            <div class="col-4 pl-0 ac-pl">
                                <img src="<?php bloginfo('template_url'); ?>/offers/download/assets/img/techradar.png" width="50" class="ml-auto mr-auto mr-sm-3"/>
                            </div>
                            <div>
                                <p class="mb-0 text-small"><?php echo date("Y"); ?> <strong><?php _e('Editor\'s Choice', 'hotbot' ); ?></strong></p>
                                <img src="<?php bloginfo('template_url'); ?>/offers/download/assets/img/stars-green-5.svg" width="80" class="ml-auto mr-auto mt-2 mb-2"/>
                            </div>
                        </div>
                    </div>
                    */ ?>

                </div>
            </section>

        <section class="optimizer-override-1 easy-steps-section layout-section icons-background">
        <div class="container">
                <p class="text-align-center h5 mb-0"><strong><?php _e('Securely connect in 3 easy steps', 'hotbot' ); ?></strong></p>

                <div class="step-instructions d-md-flex align-items-center justify-content-md-center flex-wrap fit-content ml-auto mr-auto mb-3 mt-3">
                    <div class="d-flex align-items-center p-2 p-sm-3">
                        <div class="list-step mr-3" style="font-size: 12px; width: 26px; height: 26px;">1</div>
                        <p class="mb-0 h6"><?php _e('Tap the "Continue" button', 'hotbot' ); ?></p>
                    </div>
                    <div class="d-flex align-items-center p-2 p-sm-3">
                        <div class="list-step mr-3" style="font-size: 12px; width: 26px; height: 26px;">2</div>
                        <p class="mb-0 h6"><?php _e('Activate your account', 'hotbot' ); ?></p>
                    </div>
                    <div class="d-flex align-items-center p-2 p-sm-3">
                        <div class="list-step mr-3" style="font-size: 12px; width: 26px; height: 26px;">3</div>
                        <p class="mb-0 h6"><?php _e('Start your download', 'hotbot' ); ?></p>
                    </div>
                </div>

                <div class="features-pc d-flex justify-content-center">
                    <div class="feature-container mb-2 mt-3">
                        <div class="row feature justify-content-center">
                            <div class="feature-item">
                                <div class="d-flex align-items-center flex-column">
                                    <img src="<?php bloginfo('template_url'); ?>/offers/download/assets/img/privacy.svg" class="icon" class="mr-3" />
                                    <span class="uppercase d-block"><?php _e('Privacy', 'hotbot' ); ?></span>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="d-flex align-items-center flex-column">
                                    <img src="<?php bloginfo('template_url'); ?>/offers/download/assets/img/speed.svg" class="icon" class="mr-3" />
                                    <span class="uppercase d-block"><?php _e('Speed', 'hotbot' ); ?></span>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="d-flex align-items-center flex-column">
                                    <img src="<?php bloginfo('template_url'); ?>/offers/download/assets/img/encryption.svg" class="icon" class="mr-3" />
                                    <span class="uppercase d-block"><?php _e('Encryption', 'hotbot' ); ?></span>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="d-flex align-items-center flex-column">
                                <img src="<?php bloginfo('template_url'); ?>/offers/download/assets/img/security.svg" class="icon" class="mr-3" />
                                    <span class="uppercase d-block"><?php _e('Security', 'hotbot' ); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </main>

    <footer class="footer layout-section pt-5 pb-5">
        <div class="container">
            <div class="d-md-flex flex-wrap justify-content-center align-items-center text-align-center">
                
                <!--<div class="footer__menu order-md-4 text-align-left pt-3 pb-3">
                    <?php /*if ( is_active_sidebar( 'footer-widget-area' ) ) : */?>
                        <?php /*dynamic_sidebar( 'footer-widget-area' ); */?>
                    <?php /*endif; */?>
                </div>-->
                <div class="footer__menu order-md-2">
                    <a href="/about/" class="text-small"><?php _e('About HotBot VPN', 'hotbot' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-small"><?php _e('Go to Homepage', 'hotbot' ); ?></a>
                </div>
               
                <div class="footer__menu mr-auto order-md-3 ml-auto mr-lg-0 footer__menu-mg">
               
                    <a href="/privacy/" class="text-small no-dot"><?php _e('Privacy', 'hotbot' ); ?></a>
                    <a href="/cookie/" class="text-small"><?php _e('Cookie Policy', 'hotbot' ); ?></a>
                    <a href="/terms/" class="text-small"><?php _e('Terms of Service', 'hotbot' ); ?></a>
                </div>

                <p class="mb-0 text-small order-md-1">
                    © 2012-<?php echo date("Y"); ?> HotBotVPN.com
                </p>
            </div>
        </div>
    </footer>

    <div class="modal js--modal d-none" tabindex="-1">
        <div class="uppercase text-align-right modal__close js--modal-close">
            Close<svg class="icon ml-2"><use xlink:href="#icon-cross"></use></svg>
        </div>
        <div class="container modal__content text-align-center pt-5 mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="h1 mb-5"><?php _e('Follow these steps to complete your HotBot VPN installation:', 'hotbot' ); ?></h2>
                    <p><?php echo sprintf( __('<strong>Note:</strong> If your download did not start automatically, please <strong><a href="%s" class="link">click here</a>.</strong>', 'hotbot' ), 'https://assets.hotbotvpn.com/windows/HotBotVpnInstaller.exe'); ?></p>                
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                <div class="row justify-content-center pt-lg-5 mt-5">
                        <div class="col-10 col-md-8 col-lg-4 pb-4">
                            <div class="sw-step p-4">
                                <div class="sw-step__num text-xlarge">1</div>
                                <h4><?php _e('Run the HotBot VPN installer', 'hotbot' ); ?></h4>
                                <p><?php _e('Go to your <strong>Downloads</strong> folder and click on the downloaded file.', 'hotbot' ); ?></p>
                            </div>
                        </div>
                        <div class="col-10 col-md-8 col-lg-4 pb-4">
                            <div class="sw-step p-4">
                                <div class="sw-step__num text-xlarge">2</div>
                                <h4><?php _e('Confirm the installation', 'hotbot' ); ?></h4>
                                <p><?php _e('Click <strong>Yes</strong> on the system dialog window to approve the start of your HotBot VPN installation.', 'hotbot' ); ?></p>
                            </div>
                        </div>
                        <div class="col-10 col-md-8 col-lg-4 pb-4">
                            <div class="sw-step p-4">
                                <div class="sw-step__num text-xlarge">3</div>
                                <h4><?php _e('Follow setup instructions', 'hotbot' ); ?></h4>
                                <p><?php _e('Click the button in the installer window to begin installation.', 'hotbot' ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="mt-5"><?php _e('<strong>Need Help?</strong> Please visit the <strong><a href="https://www.hotbotvpn.com/help/" class="link">help center</a></strong>', 'hotbot' ); ?></p>
        </div>

        <div class="dl-arrow d-none d-lg-block">
            <div class="dl-arrow__hd"><img src="<?php bloginfo('template_url'); ?>/offers/download/assets/img/hotbot-art.svg" class=""  alt="HotBot art" /></div>
            <div class="dl-arrow__bd uppercase"><?php _e('Click this file to start installing HotBot VPN', 'hotbot' ); ?></div>
            <div class="dl-arrow__ft"></div>
        </div>
    </div>

    <div id="pop" class="modal-custom">
        <div class="overlay"></div>
        <div class="formbox">
            <div class="row">
                <div class="columns small-12 medium-6 formbox-left" style="padding: 0 !important;">
                    <div class="formbox-header">
                        <div class="form-title1">Get access to your service</div>
                        <h3 class="form-title2">in 3 easy steps</h3>
                    </div>
                    <div class="steps">
                        <div class="step active">
                            <div class="nr"><span>1</span></div>
                            <div class="text active">Create your free account</div>
                        </div>
                        <div class="step">
                            <div class="nr"><span>2</span></div>
                            <div class="text">Verify your account<br>
                                <div></div>
                            </div>
                        </div>
                        <div class="step">
                            <div class="nr"><span>3</span></div>
                            <div class="text">Access your service</div>
                        </div>
                    </div>
                </div>
                <div class="columns small-12 medium-6 formbox-right">
                    <h3 class="show-for-medium-up">Create your free account</h3>
                    <div class="form-fields">
                        <form id="cc_form" method="GET" action="https://fflux.sb-mgmt-srv.com/">
                            <input type="hidden" name="flux_action" value="1">
                            <div class="field mail">
                                <input type="email" name="email" placeholder="Enter your email">
                                <div class="error email-wrong">Please provide a valid email address</div>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/input-email.svg" class="input_img">
                            </div>
                            <div class="field password">
                                <input style="-webkit-text-security:disc;" class="form-control" type="password" name="password" placeholder="Create your password" autocomplete="off">
                                <div class="error password-short">Password must be at least 4 characters long</div>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/input-password.svg" class="input_img">
                            </div>

                            <button type="button" id="action-payment" class="btn-submit">Continue</button>

                        </form>
                        <div class="footer2">By clicking the button you agree with the <a target="_blank" href="https://hotbotvpn.com/terms/">Terms & Conditions</a> and the <a target="_blank" href="https://hotbotvpn.com/privacy/">Privacy Policy</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    (function() {
        const actionUrl = new URL("<?= $actionLink ?>");

        if(actionUrl.searchParams.get("flux_f")) {
            $("<input>").attr({
                type: "hidden",
                name: "flux_f",
                value: actionUrl.searchParams.get("flux_f")
            }).appendTo($("#cc_form"));
        }

        if(actionUrl.searchParams.get("flux_ffn")) {
            $("<input>").attr({
                type: "hidden",
                name: "flux_ffn",
                value: actionUrl.searchParams.get("flux_ffn")
            }).appendTo($("#cc_form"));
        }
    }());

    $(function () {
        $("#cc_form input").keypress(function (e) {
            if (e.which == 13) {
                $("#cc_form .btn-submit").click();
            }
        });

        $("#cc_form_retry input").keypress(function (e) {
            if (e.which == 13) {
                $("#cc_form_retry .btn-submit").click();
            }
        });
    });

    isValidEmailAddress = function (emailAddress) {
        var pattern = new RegExp(/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,6}\b$/i);
        return pattern.test(emailAddress);
    };

    $('#pop input[name="email"]').on('keyup', function () {

        if (isValidEmailAddress($(this).val())) {

            $(this).addClass('input-ok');
            $('#pop .mail .input').addClass('input_ok');
            $('#pop .mail .input').removeClass('input_error');
            $('#pop .error.email-wrong').hide();
        } else {

            $(this).removeClass('input-ok');
            $('#pop .mail .input').addClass('input_error');
            $('#pop .mail .input').removeClass('input_ok');
            $('#pop .error.email-wrong').show();
        }
    });

    $('#pop input[name="password"]').on('keyup', function () {
        if ($(this).val().length < 6) {
            $('#pop .password-short').show();
            $(this).addClass('input-error');
            $(this).removeClass('input-ok');
            $('#pop .password .input').addClass('input-error');
            $('#pop .password .input').remove('input-ok');
        } else {
            $('#pop .password-short').hide();
            $(this).removeClass('input-error');
            $(this).addClass('input-ok');

            $('#pop .password .input').removeClass('input-error');
            $('#pop .password .input').addClass('input-ok');
            $('#pop .password .input').removeClass('input_error');

        }
    });

    $(".btn-submit").click(function () {
        var error = false;
        $('.error').hide();
        $('.input-error').removeClass('input-error');

        if ($('input[name="password"]').val().length < 6) {
            $(this).find('.password-short').show();
            $('input[name="password"]').addClass('input-error').removeClass('input-ok');
            $('.error.password-short').show();
            error = true;
        }

        if (($('input[name="email"]').val() === '') || ($('input[name="email"]').val() !== '' && !isValidEmailAddress($('input[name="email"]').val()))) {
            console.log('error');
            $('input[name="email"]').addClass('input-error');
            $('.input').addClass('input_error');
            $('.error.email-wrong').show();
            error = true;
        }

        /*var tm_check = document.getElementById('terms-checkbox');
        if (tm_check && tm_check.checked == false) {
            error = true;
        }*/

        if (error) {
            console.log('error');
        }


        if (!error) {
            $('#pop .btn-submit').attr("disabled", true);
            $('#pop .btn-submit').html("Please wait...");

            setTimeout(function () {
                $("#cc_form").submit();

            }, 500);
        }
    });
</script>

<style>

    h3 {
        line-height: 1.4;
        margin-left: 0;
        margin-right: 0;
        margin-top: .2rem;
        padding: 0;
        text-rendering: optimizelegibility;
    }

    img {
        border-style: initial;
        border-width: 0;
        display: inline-block;
        max-width: 100%;
        vertical-align: middle;
    }

    button, input {
        font-family: inherit;
    }

    button {
        appearance: button;
        line-height: inherit;
        margin: 0;
        overflow: visible;
        text-transform: none;
    }

    input {
        font-size: inherit;
        font-weight: inherit;
        line-height: normal;
        margin-left: 0;
        margin-right: 0;
        margin-top: 0;
    }

    div, form {
        margin: 0;
        padding: 0;
    }

    @media only screen and (min-width: 40.063em) {
        h3 {
            line-height: 1.4;
        }
    }

    :focus {
        outline: 0;
    }

    .modal-custom {
        bottom: 0;
        color: #000;
        display: none;
        opacity: 1;
        left: 0;
        position: fixed;
        right: 0;
        top: 0;
        z-index: 9999;
    }


    .input_img {
        height: 26px;
        left: 10px;
        position: absolute;
        top: 14px;
        width: 26px;
    }

    .error {
        color: #ec0909;
        display: none;
        font-size: 14px;
        padding: 2px 0;
        text-align: center;
        line-height: 10px;
    }

    .footer2, .formbox .nr span {
        color: #30302B;
        font-size: 14px;
        font-weight: 400;
        margin: 15px auto 5px;
        line-height: 18px;
        text-align: center;
        margin-bottom: 15px;
    }

    .footer2 a {
        text-decoration: underline;
    }

    @media screen and (min-width: 641px) {
        .formbox-left {
            background-color: #114769;
        }

        .formbox-right {
            background-color: #fff;
            padding-bottom: 36px;
        }
    }

    .row {
        margin: 0 auto;
        max-width: 62.5em;
        width: 100%;
    }

    .columns {
        float: left;
        padding-left: .9375em;
        padding-right: .9375em;
        width: 100%;
    }

    @media only screen {
        .columns {
            float: left;
            padding-left: .9375em;
            padding-right: .9375em;
            position: relative;
        }

        .small-12 {
            width: 100%;
        }
    }

    @media only screen and (min-width: 40.063em) {
        .columns {
            float: left;
            padding-left: .9375em;
            padding-right: .9375em;
            position: relative;
        }

        .medium-6 {
            width: 50%;
        }
    }

    @media only screen and (min-width: 64.063em) {
        .columns {
            float: left;
            padding-left: .9375em;
            padding-right: .9375em;
            position: relative;
        }
    }

    .formbox-right h3 {
        color: #114769;
        font-size: 18px;
        font-weight: 700;
        margin: 10px 0 16px;
    }

    .row::after {
        clear: both;
        content: " ";
        display: table;
    }

    .modal-custom .overlay {
        background-color: rgba(0, 0, 0, .7);
        height: 100%;
        position: fixed;
        width: 100%;
    }

    .modal-custom .formbox {
        background-color: #fff;
        border-radius: 8px;
        margin: auto;
        max-width: 600px;
        overflow: hidden;
        position: relative;
        text-align: center;
        top: 10px;
        width: calc(100% - 20px);
    }

    .formbox-right .btn-submit {
        background-color: #24a2fe;
        border-radius: 3px;
        border-style: initial;
        border-width: 0;
        color: #fff;
        cursor: pointer;
        font-size: 21px;
        font-weight: 700;
        padding: 16px 0 18px;
        position: relative;
        transition: padding-right .3s;
        width: 100%;
    }

    .formbox .steps {
        margin: auto auto 10px;
        padding-left: .9375em;
        padding-right: .9375em;
    }

    .formbox .nr {
        background-position: center center;
        background-repeat: no-repeat repeat;
        background-size: 2px;
        float: left;
        width: 35px;
    }

    .formbox .text {
        color: #7e7e7e;
        float: right;
        font-size: 15px;
        line-height: 24px;
        text-align: left;
        width: calc(100% - 45px);
    }

    @media screen and (min-width: 340px) {
        .formbox .steps {
            margin-bottom: 15px;
            margin-top: 15px;
        }
    }

    @media screen and (min-width: 641px) {
        .modal-custom .formbox {
            background-color: #114769;
            margin-bottom: 30px;
            top: 20%;
        }

        .formbox .steps {
            margin-bottom: 20px;
            margin-top: 10px;
            padding-left: 1.5375em;
            padding-right: 1.5375em;
        }

        .formbox .text {
            color: #bfdbe5;
        }
    }

    @media (-ms-high-contrast:none), (-ms-high-contrast:active) {
        .modal-custom .overlay {
            background-color: rgba(0, 0, 0, .91);
        }
    }

    .formbox .nr span {
        background-color: #e8e8e8;
        border-radius: .8em;
        color: #9c9c9c;
        display: inline-block;
        font-size: 16px;
        line-height: 1.5em;
        margin: 0 5px;
        padding-bottom: .1em;
        width: 1.6em;
    }

    .formbox .text div {
        font-size: 13px;
        font-style: italic;
        line-height: 18px;
    }

    .modal-custom .formbox .formbox-header {
        background-color: #114769;
        margin-bottom: 10px;
        padding: 20px .9375em 15px;
        text-align: left;
    }

    .modal-custom .formbox .field {
        position: relative;
    }

    .formbox-right .btn-submit:hover {
        background-color: #24a2fe;
    }

    .formbox-right .btn-submit:active {
        background-color: #24a2fe;
    }

    .formbox .steps .step {
        overflow: hidden;
        position: relative;
        width: 100%;
    }

    .formbox .nr:first-child {
        height: 100%;
        position: absolute;
        top: 0;
    }

    .formbox .nr:nth-child(3) {
        padding-top: 3px;
    }

    .formbox .text.active {
        color: #114769;
        font-size: 18px;
        font-weight: 700;
        line-height: 26px;
        margin-bottom: 15px;
        margin-top: 3px;
    }

    @media screen and (min-width: 641px) {
        .modal-custom .formbox .formbox-header {
            padding-left: 1.5375em;
            padding-right: 1.5375em;
            padding-top: 30px;
            text-align: center;
        }

        .formbox .text.active {
            color: #fff;
            font-size: 16px;
        }
    }

    .modal-custom .formbox .field input {
        border: 1px solid #707070;
        border-radius: 3px;
        color: #000;
        margin-bottom: 8px;
        padding: 15px 10px 15px 43px;
        width: 100%;
    }

    @media screen and (min-width: 641px) {
        .formbox .step .nr span {
            background-color: #24728e;
            color: #fff;
        }

        .modal-custom .formbox .field input {
            border: 1px solid #ababab;
        }
    }

    .modal-custom .formbox .field input::placeholder {
        color: #b9b9b9;
    }

    .modal-custom .formbox .formbox-header .form-title1 {
        color: #fff;
        font-size: 18px;
        font-weight: 400;
        margin-bottom: 1px;
    }

    .modal-custom .formbox .formbox-header .form-title2 {
        color: #fff;
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 1px;
    }

    .formbox .step:nth-child(2) .nr {
        background-image: url(<?php bloginfo('template_url'); ?>/assets/img/steps-bg.svg);
    }

    .formbox .step:first-child .nr {
        background-image: url(<?php bloginfo('template_url'); ?>/assets/img/steps-bg.svg);
    }

    .formbox .step:nth-child(2) .text {
        margin-bottom: 15px;
    }

    .formbox .step:nth-child(3) .text {
        margin-bottom: 4px;
    }

    @media screen and (min-width: 641px) {
        .formbox .step:nth-child(2) .nr {
            background-image: url(<?php bloginfo('template_url'); ?>/assets/img/steps-bg2.svg);
        }

        .formbox .step:first-child .nr {
            background-image: url(<?php bloginfo('template_url'); ?>/assets/img/steps-bg2.svg);
        }
    }

    .formbox .step.active .nr span {
        background-color: #114769;
        border-radius: 50px;
        color: #fff;
        font-size: 18px;
        font-weight: 700;
        line-height: 30px;
        margin: 0;
        padding-bottom: 2px;
        width: 32px;
    }

    @media screen and (min-width: 641px) {
        .formbox .step.active .nr span {
            background-color: #fff;
            color: #114769;
        }
    }

    .error {
        margin-bottom: 10px !important;
    }

    @media only screen {
        .show-for-medium-up {
            display: none !important;
        }
    }

    @media only screen and (min-width: 40.063em) {
        .show-for-medium-up {
            display: inherit !important;
        }
    }

    @media only screen and (min-width: 64.063em) {
        .show-for-medium-up {
            display: inherit !important;
        }
    }

    @media only screen and (min-width: 90.063em) {
        .show-for-medium-up {
            display: inherit !important;
        }
    }

    @media only screen and (min-width: 120.063em) {
        .show-for-medium-up {
            display: inherit !important;
        }
    }

</style>

    <style>
        body {
            color: #424C67;
        }

        .logo-container {
            padding: 25px;
        }

        .logo-container a,
        .nav__logo a {
            cursor: default;
        }

        @media (max-width: 767px) {
            .nav-desktop {
                display: none;
            }

            .nav-mobile {
                display: flex !important;
            }
        }

        .nav-mobile {
            background-color: #f8f9f9;
            flex-direction: column;
        }

        .top-mob-nav {
            display: flex;
            justify-content: space-between;
            width: 100%;
            border-bottom: 1px solid #DDD;
            padding: 10px 15px;
        }

        .bottom-mob-nav {
            display: flex;
            justify-content: space-between;
            width: 100%;
            border-bottom: 1px solid #DDD;
            padding: 0 15px;
        }

        .bottom-mob-nav div {
            display: flex;
            width: 100%;
            justify-content: space-evenly;
            padding: 5px 0;
            align-items: center;
            color: #999;
            font-weight: bold;
            font-size: 12px;
        }

        .bottom-mob-nav div:not(:last-child) {
            border-right: 1px solid #DDD;
        }

        .bottom-mob-nav img {
            height: 25px;
            filter: saturate(0) opacity(0.6);
        }

        .menu-toggle {
            width: 20px;
            height: 15px;
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-pack: justify;
            justify-content: space-between;
            cursor: pointer;
            z-index: 99;
        }

        .menu-toggle span {
            width: 100%;
            height: 3px;
            border-radius: 2px;
            background-color: #888;
            transition: all .2s ease-in-out;
            position: relative;
        }

        @media (max-width: 767px) {
            .logo-container {
                padding: 2.5rem 2.5rem 2rem 2.5rem;
            }
        }

        .icons-background {
            background: url(<?php bloginfo('template_url'); ?>/offers/download/assets/img/page-download-lander-bg.png) 20px 355px;
        }

        .main-button-section {
            margin: 5vh auto 10vh auto;
        }

        .main-button-section h1.top-h1 {
            margin-bottom: 5px;
            font-family: Helvetica,arial,sans-serif!important;
            color: #435C71;
            font-size: 40px;
        }

        .main-button-section h1 span {
            font-weight: 400;
        }

        @media (max-width: 767px) {
            .top-bar-nav {
                display: none;
            }
        }

        .list-step {
            background-color: rgba(66,76,103,0.75);
        }

        .btn-wrap-lg .btn-padd {
            margin: 0 auto;
            text-transform: uppercase;
            font-size: 1.8rem;
            padding: 1.5rem;
        }

        .btn--primary {
            box-shadow: none;
            border-radius: 5px;
        }

        .easy-steps-section {
            padding: 5vh 10px;
        }

        .feature-container {
            max-width: 100%;
            margin-top: 1vh;
        }

        .feature-container img {
            background-color: white;
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgb(0 0 0 / 30%);
        }

        .row.feature {
            flex-wrap: nowrap;
        }

        .feature span {
            font-weight: 400;
            margin-top: 15px;
        }

        .feature-item {
            margin: 0 10px;
            width: 115px;
        }

        .step-instructions .h6 {
            font-size: 1.1rem;
        }

        @media (max-width: 767px) {
            .features-pc {
                display: none !important;
            }
        }

        @media (min-width: 768px) {
            .action-button {
                width: 480px;
                max-width: 95vw;
                margin: 0 auto;
            }
        }

        .hero-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        @media (max-width: 767px) {
            /* Compensate mobile browser UI */
            .hero-container {
                min-height: 85vh;
                margin-bottom: 15vh;
            }
        }

        .blinking-dot {
            width : 10px;
            height : 10px;
            background-color : rgb(24, 161, 3);
            border-radius : 100%;
            display : inline-block;
            animation: opacityBlink 2s infinite;
        }

        @keyframes opacityBlink {
            0% { opacity: 1; }
            50% { opacity: 0; }
            100% { opacity: 1; }
        }

        p.hero_above {
            margin-bottom: -10px;
            font-size: 20px;
            display: none;
        }

        /* For Optimizer */
        .display-block {
            display: block; !important;
        }

        /* Test specific */
        html .optimizer-override-1.easy-steps-section {
            background: none;
            padding-bottom: 0;
        }

        html .optimizer-override-1.easy-steps-section .features-pc {
            display: none !important;
        }

        .btn--primary {
            background-color: #24a2fe;
        }

        .btn--primary:hover {
            background-color: #1d83cc;
        }
    </style>

    <script>
        $(".form-trigger").on("click", function() {
            $(".modal-custom").show();
        });
    </script>

    <?php wp_footer(); ?>

<script>
    /* Back button stale state fix */
    (function () {
        window.addEventListener('pageshow', function(event) {
            if (event.persisted) {
                window.location.reload();
            }
        });
        window.addEventListener("popstate", function() {
            window.location.reload();
        });
    })();
</script>

<!-- FOR ORGANIC TRAFFIC -->
<!-- FunnelFlux Tracking JS Start -->
<script>
    function ffluxQuery() {
        ;document._ffqValues=[];document._ffqOptions={timeOnPage:!1,timeOnPageResolution:null,tokenInjection:{}};function track(e){if(e){for(var r in e){document._ffqOptions[r]=e[r]}};if(document.ffmvt){fflux.mvt().reset();for(var n in document.ffmvt){fflux.mvt().add(n,document.ffmvt[n])};fflux.mvt().process()};bodyCallback(t,'_ffqtl')};function bodyCallback(e,n){if(document.body){e()}else if(!document[n]){document[n]=!0;document.addEventListener('DOMContentLoaded',e)}};function insertUniqueFrame(e,n){var t=document.getElementById(n);if(t){t.parentNode.removeChild(t)};t=document.createElement('iframe');t.id=n;t.src=e+'&frameId='+n;t.style.display='none';document.body.appendChild(t)};function t(){var e='_ffq_track_';window.addEventListener('message',function(n){if(n.data.ok){var g=n.data['frameId'];if(g===e){if(document._ffqOptions.timeOnPage&&!document._ffTopTracker){document._ffTopTracker=new TimeOnPageTracker();document._ffTopTracker.start()};if(n.data.hasOwnProperty('flux_inject')){var r=n.data['flux_inject'];if(r.intoUrl){history.replaceState({},'',r['flux_url'])};if(r.intoForms.selector){var o=JSON.parse(JSON.stringify(r.tokens)),l=document.querySelectorAll(r.intoForms.selector);if(l&&l.length){for(var d=0;d<l.length;d++){var v=l[d],u=v.getElementsByTagName('input');if(u&&u.length){for(var s=0;s<u.length;s++){var t=u[s];if(o.hasOwnProperty(t.name)){t.value=o[t.name];delete o[t.name]}}};for(var f in o){var t=document.createElement('input');t.type='hidden';t.name=f;t.value=o[f];v.appendChild(t)}}}};if(r.intoLinks.selector){var a=document.querySelectorAll(r.intoLinks.selector);if(a&&a.length){var i=[];for(var f in r.tokens){i.push(f+'='+encodeURIComponent(r.tokens[f]))};i=i.join('&');for(var c=0;c<a.length;c++){var m=a[c];m.href+=(m.href.indexOf('?')==-1?'?':'&')+i}}}}}}},!1);insertUniqueFrame(getUrlSrc(),e)};function getNodeId(){var t=fflux.getURLParam('flux_fn');if(!t){for(var n=0;n<document._ffqValues.length;n++){var e=document._ffqValues[n].split('|ff|');if(e[0]=='set'&&e[1]=='flux_fn'){t=e[2];break}}};return t};function getServerUrl(){return'//fflux.sb-mgmt-srv.com/tracking/universalJSRequest.php'};function getUrlSrc(){var n=getServerUrl(),e=getAllURLParameters();fflux.ffq('set',['flux_inject',JSON.stringify(document._ffqOptions.tokenInjection)]);if(document._ffqValues.length){e.push('ffq='+document._ffqValues.join('|ff|'))};if(document._ffqOptions.noCookies){e.push('noCookies=1')};return e.length?n+'?'+e.join('&'):n};function formatFFQEntry(e,n){var r=e;if(n.length){for(var t=0;t<n.length;t++){n[t]=encodeURIComponent(n[t])};r+='|ff|'+n.join('|ff|')};return r};function ffq(e,n,f){var t=formatFFQEntry(e,n);if(document._ffqValues.indexOf(t)==-1){if(f){for(var r=0;r<document._ffqValues.length;r++){var o=document._ffqValues[r].split('|ff|');if(o[0]==e){document._ffqValues[r]=t;t=null;break}}};if(t!==null){document._ffqValues.push(t)}}};function getAllParametersFromURL(e){var i=[],a=e.indexOf('?');if(a!==-1){searchQuery=e.substring(a);for(var u=searchQuery.split('?'),o=u[1].split('&'),n=0;n<o.length;n++){var t=o[n].split('='),r=t[0],f=t[1];if(r!==undefined&&f!==undefined){i.push(r+'='+f)}}};return i};function getAllURLParameters(){return getAllParametersFromURL(location.search)};function splitKeyValuePairs(e){var t={};for(var r in e){var n=e[r].split('=');t[n[0]]=n[1]};return t};function TimeOnPageTracker(){var t=-1,o=null,l=0,r=null,f=null,e=null,i=0,n=fflux.getURLParam('flux_topres');if(!n&&document._ffqOptions.timeOnPageResolution!==null){n=document._ffqOptions.timeOnPageResolution};if(parseInt(n)==n){n=Math.max(n,100)}else{n=3000};function a(){if(!navigator.sendBeacon){if(e===null){i=0}else{var t=Date.now();i+=t-e;e=t}}else{if(o!==null){c();i=Date.now()-o-l}};var f=formatFFQEntry('top',[i]),n='ffq='+f+'&flux_url='+encodeURIComponent(document.URL)+'&flux_fn='+getNodeId()+'&noCookies='+(document._ffqOptions.noCookies?1:0);if(!navigator.sendBeacon){var r=getServerUrl()+'?'+n;bodyCallback(function(){m(r)},'_ffqtopl')}else{navigator.sendBeacon(getServerUrl(),n)}};function m(e){insertUniqueFrame(e,'_ffq_top_')};function c(){if(r!==null){l+=Date.now()-r;r=null}};function s(){if(navigator.sendBeacon){if(o===null){o=Date.now()};c()}else{if(f!==null){e=Date.now()-f;f=null;a()};if(t==-1){if(e===null){a();e=Date.now()};if(!navigator.sendBeacon){t=setInterval(a,n)}else{t=1}}}};function d(){if(navigator.sendBeacon){if(r===null){r=Date.now()}}else{if(f===null){if(t!=-1){if(!navigator.sendBeacon){clearInterval(t)};t=-1};f=e===null?0:Date.now()-e}}};var u=(function(){var e,n,t={hidden:'visibilitychange',webkitHidden:'webkitvisibilitychange',mozHidden:'mozvisibilitychange',msHidden:'msvisibilitychange'};for(var e in t){if(e in document){n=t[e];break}};return function(t){if(t)document.addEventListener(n,t);return!document[e]}})();u(function(){if(u()){s()}else{d()}});window.addEventListener('beforeunload',a);return{'start':s,'pause':d}};function Mvt(){var n='-legacy',o=d(),t=[],e={};function d(){var n='mvt-vid',e=i(n);if(!e){e=Date.now();m(n,e)};return e};var r=function(e){return t[e][Math.floor(s()*t[e].length)]},f=function(n){if(n==='always'){o=Date.now()};var f={};for(var t in e){f[t]=r(t)};e=f},a=function(){e={}},u=function(n,r){if(!(n in e)){e[n]=[]};e[n].push(r);t=e},l=function(n,t){if(t){return document.write(e[n])};return e[n]},c=function(n){f(n);for(var t in e){fflux.ffq('mvt',[t,e[t]])}},s=function(e,n){var t=Math.sin(o++)*10000;return t-Math.floor(t)};function i(e){var f=e+'=',o=document.cookie.split(';');for(var r=0;r<o.length;r++){var t=o[r];while(t.charAt(0)==' '){t=t.substring(1)};if(t.indexOf(f)==0){return t.substring(f.length,t.length)}};if(e.indexOf(n)==-1){return i(e+n)};return''};function m(e,t){var r=new Date();r.setTime(r.getTime()+(30*24*60*60*1000));var f='expires='+r.toUTCString();document.cookie=e+'='+t+';'+f+';path=/;SameSite=None;Secure';document.cookie=e+n+'='+t+';'+f+';path=/;'};return{'getVariation':r,'createCombination':f,'reset':a,'add':u,'get':l,'process':c}};function getDocumentURL(){var e=document.URL;if(window.top!==window.self){var r=splitKeyValuePairs(getAllParametersFromURL(window.top.document.URL)),n=splitKeyValuePairs(getAllURLParameters());for(var t in r){n[t]=r[t]};var f=Object.keys(n).map(function(e){return e+'='+n[e]}).join('&');if(e.indexOf('?')>0){e=e.substring(0,e.indexOf('?'))};e+='?'+f};return e};function getReferrer(){if(window.top!==window.self){return window.top.document.referrer};return document.referrer};return{'track':track,'ffq':ffq,'mvt':function(){if(!document._ffmvt){document._ffmvt=new Mvt()};return document._ffmvt},'top':function(){if(!document._ffTopTracker){document._ffTopTracker=new TimeOnPageTracker()};return document._ffTopTracker},'getURLParams':function(){return splitKeyValuePairs(getAllURLParameters())},'getURLParam':function(e){return splitKeyValuePairs(getAllURLParameters())[e]},'getDocumentURL':getDocumentURL,'getReferrer':getReferrer};
    }
    var fflux = new ffluxQuery();
    fflux.ffq('set', ['flux_url', fflux.getDocumentURL()]);
    fflux.ffq('set', ['flux_ref', fflux.getReferrer()]);
    fflux.ffq('set', ['flux_f', '1739750463186683403']);
    fflux.track({
        timeOnPage: false,
        timeOnPageResolution: 3000,
        noCookies: false,
        tokenInjection: {
            intoUrl: false,
            intoForms: { selector: null },
            intoLinks: { selector: null },
            tokens: {}
        }
    });
</script>
<!-- FunnelFlux Tracking JS End -->

    </body>
</html>
