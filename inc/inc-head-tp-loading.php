<?php
/**
 * The header for our theme
 *
 * This is the template that displays all the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hotbot
 */
    // hb_ensure_nats_cookies();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<!--suppress HtmlRequiredTitleElement -->
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue@legacy"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=<?=config(RECAPTCHA_SITE_KEY)?>"></script>
    <script src="https://unpkg.com/axios@0.27.2/dist/axios.min.js"></script>
    <?php include 'inc-tune.php'; ?>
	<?php if (strpos($_SERVER['REQUEST_URI'], 'confirmation') === false) : ?>
        <!-- BEGIN CJ TRACKING CODE -->
        <!--suppress JSUnresolvedVariable -->
        <script type='text/javascript'>
            if (!window.cj) window.cj = {};
            cj.sitePage = {
                enterpriseId: '<?=config(CJ_ENTERPRISE_ID)?>',
                pageType: 'homepage',
                userId: '',
                emailHash: '',
                referringChannel: hasCJ ? 'Affiliate' : 'Direct_Navigation'
            };
        </script>
        <script type='text/javascript'>
            (function(a,b,c,d){
                a='https://www.mczbf.com/tags/<?=config(CJ_TAG_ID)?>/tag.js';
                b=document;c='script';d=b.createElement(c);d.src=a;
                d.type='text/java'+c;d.async=true;
                d.id='cjapitag';
                a=b.getElementsByTagName(c)[0];a.parentNode.insertBefore(d,a)
            })();
        </script>
        <!-- END CJ TRACKING CODE, JSUnresolvedFunction -->
	<?php endif; ?>
    <!--suppress JSUnresolvedVariable, JSUnresolvedFunction -->
    <script>
        let gBackUrl = '/order';
        try {
            const gEnv = JSON.parse(sessionStorage.getItem('processingEnv'));
            if (gEnv.orderFree) { gBackUrl = '/order-free'; }
            if (gEnv.accordion) { gBackUrl = '/order-accordion'; }
        } catch (e) {}

        const app = new Vue({
            el: '#app',
            data: {
                objAddTr: {},
                env: {},
                errorMessage: ""
            },
            computed: {},
            watch: {},
            async mounted() {
                document.onreadystatechange = async () => {
                    if (document.readyState === "complete") {
                        const objAddTrStr = sessionStorage.getItem('objAddTr');
                        const envStr = sessionStorage.getItem('processingEnv');
                        if (!objAddTrStr || !envStr) { return; }

                        this.objAddTr = JSON.parse(objAddTrStr);
                        this.env = JSON.parse(envStr);
                        await this.onSubmit(true);
                    }
                }
            },
            methods: {
                async subscribe(trial = true, token = 'stage') {
                    try {
                        if (!this.objAddTr || !this.env) { return; }

                        if (token !== 'stage') { this.objAddTr.token = token; }
                        if (!trial) { this.objAddTr.skipTrial = true; }

                        let response = await axios.post(this.env.urls.getSubscription, this.objAddTr);
                        if (response.status === 201) {
                            const stripe = Stripe('<?= config(STRIPE_API_KEY); ?>');
                            await stripe.confirmCardSetup(
                                response.data.response.data.secret,
                                { payment_method: this.objAddTr.paymentMethodId }
                            ).then(
                                result => {
                                    if (result.error) {
                                        this.paymentMethod = null;
                                        throw new Error("<?php esc_html_e("Card is not authenticated", 'hotbot'); ?>");
                                    }
                                });
                            delete this.objAddTr.paymentMethodId;
                            this.objAddTr['setupIntent'] = response.data.response.data.id;
                            response = await axios.post(this.env.urls.getSubscription, this.objAddTr);
                        }
                        const transactionId = response.data.response.data.transactionId || '';

                        sessionStorage.setItem('user', this.env.email);
                        sessionStorage.setItem('transactionId', transactionId);
                        sessionStorage.setItem('currency', this.env.plan['currency']);
                        sessionStorage.setItem('planId', this.env.plan['planId']);
                        sessionStorage.setItem('planPrice', this.env.newClient ? 0.0 : this.env.plan['planPrice']);
                        sessionStorage.setItem('planType', this.env.plan['planType']);
                        sessionStorage.setItem('processor', 'stripe');
                        sessionStorage.setItem('response', JSON.stringify(response.data));
                        sessionStorage.setItem('planDuration', this.env.plan['planName']);
                        document.location.href = '/confirmation'
                    } catch (error) {
                        let message;
                        if (error.response) {
                            message = error.response.data.error
                                ? error.response.data.error.message
                                : error.response.data.response
                                    ? error.response.data.response.message
                                    : '<?php esc_html_e("Something wrong on server. Try later.", 'hotbot'); ?>';
                        } else if (error.message) {
                            message = error.message
                        }
                        if (message === "card was used") {
                            this.showTrialDialog();
                        } else {
                            this.showErrorDialog(message);
                        }
                    }
                },
                async onSubmit(trial = true) {
                    if (!trial) { this.onCancelDialog(); }

                    if (this.env.isProduction) {
                        grecaptcha.ready(()=> {
                            grecaptcha
                                .execute('<?=config(RECAPTCHA_SITE_KEY)?>', {action: 'submit'})
                                .then(async (token) => { await this.subscribe(trial, token); });
                        });
                    } else {
                        await this.subscribe(trial);
                    }

                },
                showTrialDialog() {
                    const errorDialog = document.getElementById('trialDialog');
                    errorDialog.classList.add('is-open');
                },
                onCancelDialog() {
                    const trialDialog = document.getElementById('trialDialog');
                    trialDialog.classList.remove('is-open');
                    this.backToOrderPage();
                },
                showErrorDialog(message) {
                    document.getElementById("errorMessage").innerText = message;
                    const errorDialog = document.getElementById('errorDialog');
                    errorDialog.classList.add('is-open');
                },
                backToOrderPage() {
                    // sessionStorage.setItem('errorMessage', message);
                    document.location.href = gBackUrl;
                }
            }
        })
    </script>

    <script>
		dataLayer = [];
	</script>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <script src="https://js.stripe.com/v3/"></script>
	<main class="main">
        <div  id="app">
