<?php /* Template Name: Confirmation page */ ?>
<?php get_header(); ?>
<?php include 'inc/inc-cookie.php'; ?>
<script>
    const url = new URL(window.location.href);
    if (url.searchParams.get('ans') && url.searchParams.get('localamount')) {
        sessionStorage.setItem('user', url.searchParams.get('email'));
        sessionStorage.setItem('currency', url.searchParams.get('currency'));
        sessionStorage.setItem('transactionId', url.searchParams.get('transaction_id'));
        sessionStorage.setItem('planPrice', url.searchParams.get('localamount'));
        sessionStorage.setItem('processor', 'Epoch');
        sessionStorage.setItem('planType', 'Monthly');
        sessionStorage.setItem('planDuration', '1 month');
    }

    if (sessionStorage.getItem('user')) {

        dataLayer.push({
        'event': 'add_payment_info',
            'ecommerce': {
                    'payment_type': sessionStorage.getItem('processor')
            }
        });

        dataLayer.push({
            'event': 'purchase',
            'ecommerce': {
                'currency': sessionStorage.getItem('currency'),
                'value': sessionStorage.getItem('planPrice'),
                'transaction_id': sessionStorage.getItem('transactionId'),
                'payment_type': sessionStorage.getItem('processor'),

                'items': [{
                    'item_name': sessionStorage.getItem('planType'),
                    'item_id': sessionStorage.getItem('planType'),
                    'price': sessionStorage.getItem('planPrice'),
                    'quantity': '1'
                }]
            }
        });


    }
</script>

<!-- BEGIN CJ TRACKING CODE -->
<script type='text/javascript'>
    async function sha256(message) {
        try {
            const msgBuffer = new TextEncoder().encode(message);
            const hashBuffer = await crypto.subtle.digest('SHA-256', msgBuffer);
            const hashArray = Array.from(new Uint8Array(hashBuffer));
            return hashArray.map(b => b.toString(16).padStart(2, '0')).join('');
        } catch (e) {
            return null;
        }
    }

    async function cjConversionTag() {
        const cjEvent = getCookie('cjEvent');
        const user = sessionStorage.getItem('user');
        const currency = sessionStorage.getItem('currency');
        const processor = sessionStorage.getItem('processor');
        const planDuration = sessionStorage.getItem('planDuration');
        const planPrice = sessionStorage.getItem('planPrice');
        if (!['coinpayments', 'nowpayments', 'Epoch'].includes(processor) && user && currency && planDuration && planPrice !== null) {
            const hash = user ? await sha256(user.toLowerCase()) : "";
            const price = Number(planPrice) || 0;
            if (!window.cj) window.cj = {};
            let sku = planDuration;
            sku = sku ? 'web_' + sku.replace(' ', '_').toLowerCase() : '';
            cj.order = {
                enterpriseId: '<?=config( CJ_ENTERPRISE_ID )?>',
                pageType: price ? 'conversionConfirmation' : 'accountSignup',
                emailHash: hash,
                orderId: sessionStorage.getItem('transactionId') || "",
                actionTrackerId: price ? '<?=config( CJ_ACTION_ID_PURCHASE )?>' : '<?=config( CJ_ACTION_ID_SIGNUP )?>',
                currency,
                amount: price,
                discount: 0,
                cjeventOrder: cjEvent || "",
                items: [{
                    'unitPrice': price,
                    'itemId': sku,
                    'quantity': 1,
                    'discount': 0
                }]
            };
            try {
                const res = JSON.parse(sessionStorage.getItem('response'));
                if (res.response.data.userId) {
                    cj.order.userId = res.response.data.userId;
                }
            } catch (e) {}
        }
    }
    cjConversionTag();
</script>

<script type="text/javascript">
    (function(a,b,c,d){
        a='//www.mczbf.com/tags/<?=config(CJ_TAG_ID)?>/tag.js';
        b=document;c='script';d=b.createElement(c);d.src=a;
        d.type='text/java'+c;d.async=true;
        d.id='cjapitag';
        a=b.getElementsByTagName(c)[0];a.parentNode.insertBefore(d,a)
    })();
</script>
<!-- END CJ TRACKING CODE -->

<!-- FunnelFlux CONVERSION REPORT -->
<iframe width='1' height='1' style='display:none;' src='https://fflux.sb-mgmt-srv.com/tracking/conversions/iframe.php?flux_pix=1668181498.173&flux_payout=&flux_txid=&flux_hid='></iframe>
<!-- END FunnelFlux CONVERSION REPORT -->

<script>
    window.cg_conversion = true;
</script>
<?php include 'inc/inc-header.php'; ?>
<div id="planInfo" style="display: none"></div>
<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7">
    <div class="layout-section__bg">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/section-bg.svg" class="img-cover" alt=""/>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="card card--overflow text-align-center mt-5 pl-5 pr-5 pb-3">
                    <div class="circle-wrapper">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/logo-white.svg" class="logo" alt="">
                    </div>
                    <div id="cryptopayments" style="display: none">
                        <h2 class="heading"><?php esc_html_e('Payment is being processed', 'hotbot'); ?></h2>
                        <p><?php esc_html_e('Payment confirmation can take up to 60 minutes. When we receive this confirmation your account will be created and you will receive an email with your account details.','hotbot'); ?></p>
                    </div>
                    <div id="congratulations">
                        <h1 class="heading"><?php esc_html_e('Success!', 'hotbot'); ?></h1>
                        <p><?php esc_html_e('Your HotBot VPN account has been activated.', 'hotbot'); ?></p>
                        <p><?php esc_html_e('A confirmation email has been sent to your inbox.', 'hotbot'); ?></p>
                        <p><?php _e('Your username is <span class="bold" id="userName"></span>', 'hotbot'); ?></p>
                    </div>
                    <h2 class="heading"><?php esc_html_e('Next Step:', 'hotbot'); ?></h2>
                    <p class="mb-5"><?php esc_html_e('Follow the links below to install our apps on all your devices', 'hotbot'); ?></p>
                    
                    <div class=" pb-5">
                        <div class="d-none os-windows">
                            <a href="https://assets.hotbotvpn.com/windows/HotBotVpnInstaller.exe" download target="_blank">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/button-microsoft.svg" class="btn-dl ml-auto mr-auto" />
                            </a>
                        </div>
                        <div class="d-none os-android">
                            <a id="playstore" href="https://play.google.com/store/apps/details?id=com.hotbotvpn">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/button-google-play.svg" class="btn-dl ml-auto mr-auto" />
                            </a>
                        </div>
                        <div class="d-none os-iphone os-ipad">
                            <a id="appstore" href="https://apps.apple.com/us/app/hotbot-vpn/id1488136863" target="_blank">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/button-app-store.svg" class="btn-dl ml-auto mr-auto" />
                            </a>
                        </div>
                        <div class="d-none os-apple">
                            <a  href="https://apps.apple.com/us/app/hotbot-vpn/id1488136863#?platform=mac" id="macosapp" target="_blank">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/button-mac-app-store.svg " class="btn-dl ml-auto mr-auto" />
                            </a>
                        </div>
 
                    </div>
                    <p class="text-align-center mb-4"><?php esc_html_e('Also available on', 'hotbot'); ?></p>

                    <!-- windows -->
                    <div class="d-none os-windows">
                        <div class="d-flex flex-wrap mb-4 justify-content-center">
                            <div class="pb-4 pl-3 pr-3">
                                <a href="https://apps.apple.com/us/app/hotbot-vpn/id1488136863#?platform=mac" id="macosapp" target="_blank">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/button-mac-app-store.svg " class="btn-dl ml-auto mr-auto" />
                                </a>
                            </div>
                            <div class="pb-4 pl-3 pr-3">
                                <a id="playstore" href="https://play.google.com/store/apps/details?id=com.hotbotvpn">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/button-google-play.svg" class="btn-dl ml-auto mr-auto" />
                                </a>
                            </div>
                            <div class="pb-4 pl-3 pr-3">
                                <a id="appstore" href="https://apps.apple.com/us/app/hotbot-vpn/id1488136863" target="_blank">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/button-app-store.svg" class="btn-dl ml-auto mr-auto" />
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- os android -->
                    <div class="d-none os-android">
                        <div class="d-flex flex-wrap mb-4 justify-content-center">
                            <div class="pb-4 pl-3 pr-3">
                                <a id="appstore" href="https://apps.apple.com/us/app/hotbot-vpn/id1488136863" target="_blank">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/button-app-store.svg" class="btn-dl ml-auto mr-auto" />
                                </a>
                            </div>
                            <div class="pb-4 pl-3 pr-3">
                                <a href="https://assets.hotbotvpn.com/windows/HotBotVpnInstaller.exe" download target="_blank">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/button-microsoft.svg" class="btn-dl ml-auto mr-auto" />
                                </a>
                            </div>
                            <div class="pb-4 pl-3 pr-3">
                                <a href="https://apps.apple.com/us/app/hotbot-vpn/id1488136863#?platform=mac" id="macosapp" target="_blank">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/button-mac-app-store.svg" class="btn-dl ml-auto mr-auto" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- os iphon ipad -->
                    <div class="d-none os-iphone os-ipad">
                        <div class="d-flex flex-wrap mb-4 justify-content-center">
                            <div class="pb-4 pl-3 pr-3">
                                <a id="playstore" href="https://play.google.com/store/apps/details?id=com.hotbotvpn">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/button-google-play.svg" class="btn-dl ml-auto mr-auto" />
                                </a>
                            </div>
                            <div class="pb-4 pl-3 pr-3">
                                <a href="https://apps.apple.com/us/app/hotbot-vpn/id1488136863#?platform=mac" id="macosapp" target="_blank">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/button-mac-app-store.svg" class="btn-dl ml-auto mr-auto" />
                                </a>
                            </div>
                            <div class="pb-4 pl-3 pr-3">
                                <a href="https://assets.hotbotvpn.com/windows/HotBotVpnInstaller.exe" download target="_blank">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/button-microsoft.svg" class="btn-dl ml-auto mr-auto" />
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- os apple -->
                    <div class="d-none os-apple">
                        <div class="d-flex flex-wrap mb-4 justify-content-center">
                            <div class="pb-4 pl-3 pr-3">
                                <a href="https://assets.hotbotvpn.com/windows/HotBotVpnInstaller.exe" download target="_blank">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/button-microsoft.svg" class="btn-dl ml-auto mr-auto" />
                                </a>
                            </div>
                            <div class="pb-4 pl-3 pr-3">
                                <a id="appstore" href="https://apps.apple.com/us/app/hotbot-vpn/id1488136863" target="_blank">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/button-app-store.svg" class="btn-dl ml-auto mr-auto" />
                                </a>
                            </div>
                            <div class="pb-4 pl-3 pr-3">
                                <a id="playstore" href="https://play.google.com/store/apps/details?id=com.hotbotvpn">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/button-google-play.svg" class="btn-dl ml-auto mr-auto" />
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'inc/inc-utm.php'; ?>
<script>
    jQuery(function () {
        if (sessionStorage.getItem('processor') === 'nowpayments') {
            jQuery('#congratulations').hide();
            jQuery('#cryptopayments').show();
        } else {
            jQuery('#userName').text(sessionStorage.getItem('user'));
            jQuery('#transactionId').text(sessionStorage.getItem('transactionId'));
        }
    });
</script>
<?php get_footer(); ?>
