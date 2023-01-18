<?php /* Template Name: Order Free Page */ ?>
<?php
$geo = hb_get_geoinfo();
$value = ht_get_geo_currency($geo['country_code']);
setcookie("defCurrencyTest", $value);
setcookie("defCountryIso", $geo["country_code"]);
?>

<?php get_header(); ?>

<script src="https://www.googleoptimize.com/optimize.js?id=OPT-NPPKXF3"></script>

<style>html .ribbon { display: none !important; /* don't show promo ribbons here */ }</style>

<!-- Prevent error messages flashing on load -->
<style id="hide-alerts">*[role='alert'] { display: none;  }</style>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('hide-alerts').remove();
    })
</script>

<script
        src="https://www.paypal.com/sdk/js?client-id=<?=config(PAYPAL_CLIENT_ID)?>&vault=true&intent=subscription">
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@500&display=swap" rel="stylesheet">

<?php $slug = get_post_field( 'post_name', get_post() ); ?>
<section class="layout-section nav-wrapper">
    <div class="logo-container container">
        <a style="left: 0;" href="javascript:void(0)" class="hero__logo"><img src="<?php bloginfo('template_url'); ?>/offers/download/assets/img/logo-light-bg.svg" width="180" height="28" alt="logo" style="margin:auto;filter:opacity(0.6) brightness(0.5)"></a>
    </div>
</section>

<div id="app" class="new-order-page-template orderPage">
        <div class="container-small pt-2">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <section class="layout-section mb-3" id="createAnchor">
                                <div class="pb-3">
                                    <div class="d-flex flex-wrap justify-content-between align-items-center" >
                                        <div class="pr-3 rtl-total-pr-3">
                                            <h5 class="heading"><?php esc_html_e('100% Free Account', 'hotbot'); ?></h5>
                                        </div>
                                        <div class="text-align-right">
                                            {{localCurrencyFn}}
                                            <div class="d-flex flex-wrap align-items-center justify-content-end">

                                                <span class="d-inline-block currency-m-rtl">{{ plans[2].currency }}</span>
                                                <h5 class="heading mb-0 mt-0 ml-3">{{ totalNumeric }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <label for="createAccount" class="d-none mr-4 cursor-pointer rtl-label" @click="newClient=true">
                                        <p>
                                        <div class="v-align-middle  mr-1 mt-n2 radio-style d-none"
                                             :class="{ checked: newClient }"
                                             id="radioCheckYes"
                                        ></div>
                                        </p>
                                    </label>

                                    <p class="header-subheader">Your credit card <b>WILL NOT be charged</b></p>

                                    <input type="radio" name="accountCe" class="d-none" id="createAccount" value="yes" checked/>
                                    <div class="fieldShow">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label class="d-block mb-2 small"><?php esc_html_e('Email Address', 'hotbot'); ?></label>
                                                        <div class="form__group">
                                                            <input type="email" class="form__control mb-2 sm-text" v-model="email" placeholder="Fill in your email"/>
                                                            <!--                                        <span class="text-color-primary small">-->
															<?php //esc_html_e('We will not share your information or send spam.', 'hotbot' ); ?><!--</span>-->
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="d-block mb-2 small"><?php esc_html_e('Create Password', 'hotbot'); ?></label>
                                                        <div class="form__group">
                                                            <input type="password" class="form__control password sm-text" v-model="password" placeholder="At least 6 characters"/>
                                                            <div class="has-icon has-icon--password togglePassword" id="togglePassword">
                                                                <svg class="togglePassword-hidden"><use xlink:href="#eye-slash-solid"></use></svg>
                                                                <svg class="togglePassword-show"><use xlink:href="#eye-solid"></use></svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12" id="errorMessage">
                                                        <h6 class="danger m-0" role="alert">{{ errorMessageCreateAcc }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="radio" name="accountCe" class="d-none" id="existingAccount" value="no"/>
                                    <div class="fieldShow">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row justify-content-center">
                                                    <div class="col-12">
                                                        <label class="d-block mb-2 small"><?php esc_html_e('Email Address', 'hotbot'); ?></label>
                                                        <div class="form__group">
                                                            <input type="email" class="form__control mb-2 sm-text" v-model="email" value="<?= $_GET["uemail"] ?>"/>
                                                            <!--                                        <span class="text-color-primary small">-->
															<?php //esc_html_e('We will not share your information or send spam.', 'hotbot' ); ?><!--</span>-->
                                                        </div>
                                                    </div>
                                                    <div class="col-12" id="errorMessage">
                                                        <h6 class="danger" role="alert">{{ errorMessageExistAcc }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </section>

                            <section class="layout-section pt-0 pb-3 mb-3" id="select-payment-section">

                                <h3 class="heading d-flex mb-0"><?php esc_html_e('Select your verification method', 'hotbot'); ?></h3>
                                <h6 class="heading d-flex align-items-center mt-0 flex-wrap" style="line-height: inherit" v-if="!isCrypto">
                                    <!--<div class="mr-auto pr-3 rtl-pr-3"><?php /*esc_html_e('Country:', 'hotbot'); */?></div>-->
                                    <div class="form__group mt-2 mb-2" style="flex: auto;" id="countrySelector1">
                                        <select class="form__control country-selector" v-model="localCurrencyIndex" style="font-weight: bold; padding-top: .9rem">
                                            <option v-for="(rec, index) in currencyCountryList" v-bind:value="index">{{ rec.country }}</option>
                                        </select>
                                        <svg class="icon-arrow svg-icon svg-icon--15"><use xlink:href="#angle-down-solid"></use></svg>
                                    </div>
                                </h6>

                                <div class="d-flex flex-wrap" style="margin-left: -10px; margin-right: -10px;">
                                    <label class="card--label-wrap col-12 col-md-6 pt-0 pb-0">
                                        <input type="radio" name="payment-method" class="d-none" checked
                                               :value="PaySystem.STRIPE" v-model="typePaySystem"
                                        />
                                        <div class="card card--sm p-0 mt-3 mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="col-2 pr-0 rtl-pr-0">
                                                    <div class="v-align-middle m-auto radio-style"></div>
                                                </div>
                                                <div class="col-10">
                                                    <h6 class=" mb-1"><?php esc_html_e('Credit Card', 'hotbot'); ?></h6>
                                                    <ul class="payments-card">
                                                        <li><img src="<?php bloginfo('template_url'); ?>/assets/img/card-amex.svg"/></li>
                                                        <li><img src="<?php bloginfo('template_url'); ?>/assets/img/card-discover.svg"/></li>
                                                        <li><img src="<?php bloginfo('template_url'); ?>/assets/img/card-mastercard.svg"/></li>
                                                        <li><img src="<?php bloginfo('template_url'); ?>/assets/img/card-visa.svg"/></li>
                                                        <li><img src="<?php bloginfo('template_url'); ?>/assets/img/card-jcb.svg"/></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                    <label class="card--label-wrap col-12 col-md-6 pt-0 pb-0">
                                        <input type="radio" name="payment-method" class="d-none"
                                               :value="PaySystem.PAYPAL" v-model="typePaySystem"
                                        />
                                        <div class="card card--sm p-0 mt-3 mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="col-2 pr-0 rtl-pr-0">
                                                    <div class="v-align-middle m-auto radio-style"></div>
                                                </div>
                                                <div class="col-10">
                                                    <h6 class="mb-1"><?php esc_html_e('PayPal', 'hotbot'); ?></h6>
                                                    <ul class="payments-card">
                                                        <li style="width: 82px; height: 28px;"><img src="<?php bloginfo('template_url'); ?>/assets/img/paypal.svg"/></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </label>

                                    <!--<label class="card--label-wrap col-12 col-md-6 pt-0 pb-0" v-show="canMakePayment">
                                        <input type="radio" name="payment-method" class="d-none" id="buttonId"
                                               :value="PaySystem.BUTTON" v-model="typePaySystem"
                                        />
                                        <div class="card card--sm p-0 mt-3 mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="col-2 pr-0 rtl-pr-0">
                                                    <div class="v-align-middle m-auto radio-style"></div>
                                                </div>
                                                <div class="col-10">
                                                    <h6 class="mb-1">{{methodName}}</h6>
                                                    <ul class="payments-card">
                                                        <li v-show="prbMethod==='cards'"><img src="<?php /*bloginfo('template_url'); */?>/assets/img/card-amex.svg"/></li>
                                                        <li v-show="prbMethod==='cards'"><img src="<?php /*bloginfo('template_url'); */?>/assets/img/card-discover.svg"/></li>
                                                        <li v-show="prbMethod==='cards'"><img src="<?php /*bloginfo('template_url'); */?>/assets/img/card-mastercard.svg"/></li>
                                                        <li v-show="prbMethod==='cards'"><img src="<?php /*bloginfo('template_url'); */?>/assets/img/card-visa.svg"/></li>
                                                        <li v-show="prbMethod==='cards'"><img src="<?php /*bloginfo('template_url'); */?>/assets/img/card-jcb.svg"/></li>
                                                        <li v-show="prbMethod==='apple'" style="height: 28px; width: 61px; padding-left: 5px; padding-right: 5px;">
                                                            <img src="<?php /*bloginfo('template_url'); */?>/assets/img/apple-pay.svg"/></li>
                                                        <li v-show="prbMethod==='google'" style="width: 67px; padding-left: 5px; padding-right: 5px;">
                                                            <img src="<?php /*bloginfo('template_url'); */?>/assets/img/google-pay.svg"/></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </label>-->
                                </div>

                                <!--                <div class="text-align-center--sm">-->
                                <!--                    <button-->
                                <!--                            @click.prevent.stop="payPalInit"-->
                                <!--                            class="btn btn--primary mt-md-5 mb-md-5"><span>--><?php //esc_html_e('Continue to payment', 'hotbot' ); ?><!--</span></button>-->
                                <!--                </div>-->
                                {{payPalBtnInit}}
                            </section>

                            <section class="layout-section pt-0 pb-3 mb-3">
                            <div id="paymentInfoAnchor">
                                    <div class="row justify-content-center" v-show="typePaySystem === PaySystem.SEPA">
                                        <div class="col-12">
                                            <!--                                            <form action="/form" method="post" id="setup-form">-->
                                            <!--                                                <div class="form-row inline">-->
                                            <label for="accountholder-name" class="d-block mb-2 small">
                                                Name
                                            </label>
                                            <div class="form__group">

                                                <input
                                                        id="accountholder-name"
                                                        type="text"
                                                        name="accountholder-name"
                                                        placeholder="Jenny Rosen"
                                                        class="form__control mb-2 sm-text"
                                                        required
                                                        v-model="nameSEPA"
                                                />
                                            </div>
                                            <!--                                            <label for="emailSEPA" class="d-block mb-2 small">-->
                                            <!--                                                Email Address-->
                                            <!--                                            </label>-->
                                            <!--                                            <div class="form__group">-->
                                            <!---->
                                            <!--                                                <input-->
                                            <!--                                                        id="emailSEPA"-->
                                            <!--                                                        name="emailSEPA"-->
                                            <!--                                                        type="email"-->
                                            <!--                                                        placeholder="jenny.rosen@example.com"-->
                                            <!--                                                        class="form__control mb-2 sm-text"-->
                                            <!--                                                        required-->
                                            <!--                                                        v-model="emailSEPA"-->
                                            <!--                                                />-->
                                            <!--                                            </div>-->
                                            <!--                                                </div>-->

                                            <label for="iban-element" style="margin-top: 10px" class="d-block mb-2 small">
                                                IBAN
                                            </label>
                                            <div class="form__group">
                                                <!--
                                                  Using a label with a for attribute that matches the ID of the
                                                  Element container enables the Element to automatically gain focus
                                                  when the customer clicks on the label.
                                                -->

                                                <div id="iban-element" style="height: 50px; border: 1px solid #a9a9b2; border-radius: 3px; padding: 1.5rem;" class="MyCardElement">
                                                    <!-- A Stripe Element will be inserted here. -->
                                                </div>
                                            </div>

                                            <!-- Add the client_secret from the SetupIntent as a data attribute   -->
                                            <!--                                                <button id="submit-button" data-secret="{CLIENT_SECRET}">-->
                                            <!--                                                    Set up SEPA Direct Debit-->
                                            <!--                                                </button>-->

                                            <!-- Display mandate acceptance text. -->
                                            <!--                                                <div id="mandate-acceptance">-->
                                            <!--                                                    By providing your payment information and confirming this payment, you-->
                                            <!--                                                    authorise (A) HotBot Canada Inc and Stripe, our payment service provider-->
                                            <!--                                                    and/or PPRO, its local service provider, to send instructions to your-->
                                            <!--                                                    bank to debit your account and (B) your bank to debit your account in-->
                                            <!--                                                    accordance with those instructions. As part of your rights, you are-->
                                            <!--                                                    entitled to a refund from your bank under the terms and conditions of-->
                                            <!--                                                    your agreement with your bank. A refund must be claimed within 8 weeks-->
                                            <!--                                                    starting from the date on which your account was debited. Your rights-->
                                            <!--                                                    are explained in a statement that you can obtain from your bank. You-->
                                            <!--                                                    agree to receive notifications for future debits up to 2 days before-->
                                            <!--                                                    they occur.-->
                                            <!--                                                </div>-->
                                            <!-- Used to display form errors. -->
                                            <div id="error-message" role="alert">
                                                <h6 v-if="errorMessageSEPA" class="danger" role="alert">
                                                    {{ errorMessageSEPA }}
                                                </h6>
                                            </div>
                                            <div class="mt-3">
                                                <p class="terms">
                                                    By providing your payment information and confirming this payment,
                                                    you authorise (A) HotBot Limited Inc and Stripe,
                                                    our payment service provider and/or PPRO, its local
                                                    service provider, to send instructions to your bank to debit
                                                    your account and (B) your bank to debit your account in accordance with those instructions.
                                                    As part of your rights, you are entitled to a refund from your bank under
                                                    the terms and conditions of your agreement with your bank.
                                                    A refund must be claimed within 8 weeks starting from
                                                    the date on which your account was debited.
                                                    Your rights are explained in a statement that you can obtain from your bank.
                                                    You agree to receive notifications for future debits up to 2 days before they occur.
                                                </p>
                                            </div>
                                            <!--                                            </form>-->
                                            <div class="mt-5" v-show="typePaySystem === PaySystem.SEPA">
                                                <button type="submit"
                                                        style="background-color: #1a9efe; color: #fff;"
                                                        class="btn btn--block btn--primary"
                                                        @click.prevent.stop="onSubmit"
                                                        :disabled="submitDisabledSEPA"
                                                        :loading="loadingSepa">
                                                    <div class="lds-ellipsis">
                                                        <div></div>
                                                        <div></div>
                                                        <div></div>
                                                        <div></div>
                                                    </div>
                                                    <span><?php esc_html_e('Start Free Trial (SEPA)', 'hotbot'); ?></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-12">

                                            <div v-show="typePaySystem === PaySystem.STRIPE" id="cardholderAnchor">
                                                <label class="mb-2 d-block small"><?php esc_html_e('Credit Card Information:', 'hotbot'); ?></label>
                                                <div class="form__group mb-3">
                                                    <input type="text" class="form__control" v-model="nameOnCard" placeholder="First and last name" />
                                                </div>
                                            </div>
                                            <div id="errorMessage" style="display: none" v-show="typePaySystem === PaySystem.STRIPE">
                                                <h6 v-if="errorMessage" class="danger" role="alert">
                                                    {{ errorMessage }}
                                                </h6>
                                                <div id="card-element" style="height: 50px;" class="MyCardElement">
                                                    <!-- Elements will create input elements here -->
                                                </div>
                                            </div>

                                            <!-- We'll put the error messages in this element -->
                                            <div id="card-errors" role="alert" v-show="typePaySystem === PaySystem.STRIPE"></div>
                                            <h6 v-if="errorMessage && typePaySystem === PaySystem.BUTTON" class="danger" role="alert">
                                                {{ errorMessage }}
                                            </h6>

                                            <div class="form__group mt-3 mb-2" style="flex: auto; display: none;" id="countrySelector2">
                                                <select class="form__control country-selector" v-model="localCurrencyIndex" style="font-weight: bold; padding-top: .9rem">
                                                    <option v-for="(rec, index) in currencyCountryList" v-bind:value="index">{{ rec.country }}</option>
                                                </select>
                                                <svg class="icon-arrow svg-icon svg-icon--15"><use xlink:href="#angle-down-solid"></use></svg>
                                            </div>

                                            <div class="mt-5" v-show="typePaySystem === PaySystem.STRIPE || (typePaySystem === PaySystem.BUTTON && prbMethod==='cards')">
                                                <button type="submit"
                                                        class="btn btn--block btn--fine"
                                                        @click.prevent.stop="onSubmit"
                                                        :disabled="submitDisabled"
                                                        :loading="loading"
                                                >
                                                    <div class="lds-ellipsis">
                                                        <div></div>
                                                        <div></div>
                                                        <div></div>
                                                        <div></div>
                                                    </div>
                                                    <span style="text-transform: uppercase">

<svg class="padlock-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22">
 <path style="fill:currentColor;fill-opacity:1;stroke:none;"
       d="M 11,3 C 8.784,3 7,4.784 7,7 l 0,4 -2,0 c 0,2.666667 0,5.333333 0,8 4,0 8,0 12,0 l 0,-8 c -0.666667,0 -1.333333,0 -2,0 L 15,7 C 15,4.784 13.216,3 11,3 m 0,1 c 1.662,0 3,1.561 3,3.5 L 14,11 8,11 8,7.5 C 8,5.561 9.338,4 11,4"
       class="ColorScheme-Text"
 />
</svg>

                                                        <?php esc_html_e('Finish', 'hotbot'); ?>
                                                    </span>
                                                </button>
                                            </div>

                                        </div>

                                        <div class="col-12">
                                            <div style="display: flex; justify-content: center;" v-show="isCrypto" >
                                                <div style="min-width: 100%; text-align: center">
                                                    <button type="submit"
                                                            style="background-color: #1a9efe; color: #fff; margin: 30px 0 10px;"
                                                            class="btn btn--block btn--primary"
                                                            @click.prevent.stop="coinpaymentsPreSubmit"
                                                            :disabled="submitDisabled"
                                                            :loading="loading">
                                                        <div class="lds-ellipsis">
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <span><?php esc_html_e('Pay Now', 'hotbot'); ?></span>
                                                    </button>
                                                    <p class="terms mt-0 mb-0">
                                                        <?php esc_html_e( 'Payment confirmation for crypto can take up to 60 min.', 'hotbot'); ?>
                                                    </p>
                                                    <form ref="coinpaymentsForm" action="https://www.coinpayments.net/index.php" method="post" >
                                                        <input type="hidden" name="cmd" value="_pay_simple">
                                                        <input type="hidden" name="reset" value="1">
                                                        <input type="hidden" name="merchant" value="6d9bbe71d8cb0524af69de7934c72a35">
                                                        <input type="hidden" name="item_name" value="HotBot VPN Premium">
                                                        <input type="hidden" name="item_desc" :value="coinPaymentsDescription">
                                                        <input type="hidden" name="currency" value="USD">
                                                        <input type="hidden" name="amountf" :value="coinPaymentsAmount">
                                                        <input type="hidden" name="want_shipping" value="0">
                                                        <?php if (MODE !== PROD): ?>
                                                            <input type="hidden" name="ipn_url" value="<?=config(HOTBOT_API_URL)?>v1/transaction/coinpayments">
                                                        <?php endif; ?>
                                                        <input type="hidden" name="success_url" :value="confirmationUrl">
                                                        <input type="hidden" name="cancel_url" :value="orderUrl">
                                                        <input type="hidden" name="email" :value="email">
                                                        <input type="hidden" name="custom" ref="custom">
                                                        <input type="hidden" name="item_number" :value="currentPlanId()">
                                                    </form>
                                                </div>
                                            </div>
                                            <div style="display: flex; justify-content: center; margin-top: 50px;" v-show="typePaySystem === PaySystem.PAYPAL">
                                                <div style="min-width: 100%">
                                                    <div id="paypal-button-container"></div>
                                                </div>
                                            </div>
                                            <div id="payment-request-button" v-show="typePaySystem === PaySystem.BUTTON && prbMethod!=='cards'" style="margin-top: 50px"></div>
                                            <div class=" mt-3">
                                                <!--                            <p class="mt-5 small" style="font-size: 1.3rem" v-html='textUnderBtn'>-->
                                                <!---->
                                                <!--                            </p>-->
                                                <p class="terms">
                                                    <?php echo sprintf( __('By submitting this form, you agree to our <a href="%1$s">Terms of Service</a>, and <a href="%2$s">Privacy Policy</a>.', 'hotbot' ), '/terms/' , '/privacy/'); ?>
                                                    <span v-show="textUnderBtn && !isCrypto">
                                                        <?php echo sprintf( __('Try our service free for seven (7) days. Cancel at any time with no charges. If you choose to continue, starting on %1$s, you will be automatically charged the applicable monthly fee of %2$s. You can cancel at any time. There is no obligation to purchase and no additional fees.', 'hotbot' ),
                                                            '{{ toDayDate }}',
                                                            '{{ priceForText }}'); ?>
                                                    </span>
                                                    <span v-show="isCrypto">
                                                        <?=__('Payments made with crypto currency are one time payments and do not automatically renew and are not 
                                                        eligible for our refund guarantee. You can reload your account at any time by making additional crypto payments on 
                                                        this page. Payments made with crypto currency are not eligible for a free trial.', 'hotbot' ); ?>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <input type="radio" name="tab" class="d-none" value="no" id="tab2">
                            <div class="fieldShow">
                                <section class="layout-section pt-0 pb-3">
                                    <div class="container">
                                        <p class="heading mb-3 mt-3"><?php esc_html_e('Your Plan', 'hotbot'); ?></p>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-10 col-lg-8">

                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>



                        <div class="col-12 col-md-5">
                            <div class="order-aside">
                                <p class="aside-header"><?php esc_html_e('Access all of your content, securely.', 'hotbot'); ?></p>

                                <ul class="listing">
                                    <li class="mb-3 mb-md-4 align-items-center"><svg class="listing__icon sm icon-checkmark"><use xlink:href="#checkmark"></use></svg>
                                        <div class="listing__content">
                                            <p class="small"><?php esc_html_e('One account for ALL your devices', 'hotbot'); ?></p>
                                        </div>
                                    </li>

                                    <li class="mb-3 mb-md-4 align-items-center"><svg class="listing__icon sm icon-checkmark"><use xlink:href="#checkmark"></use></svg><div class="listing__content"><p class="small"> <?php esc_html_e('Zero logs policy', 'hotbot'); ?></p></div></li>

                                    <li class="mb-3 mb-md-4 align-items-center"><svg class="listing__icon sm icon-checkmark"><use xlink:href="#checkmark"></use></svg><div class="listing__content"><p class="small"> <?php esc_html_e('Optimized for HD streaming and downloading', 'hotbot'); ?></p></div></li>

                                    <li class="mb-3 mb-md-4 align-items-center"><svg class="listing__icon sm icon-checkmark"><use xlink:href="#checkmark"></use></svg><div class="listing__content"><p class="small"> <?php esc_html_e('Unlimited speeds and unlimited data', 'hotbot'); ?></p></div></li>

                                    <li class="mb-3 mb-md-4 align-items-center"><svg class="listing__icon sm icon-checkmark"><use xlink:href="#checkmark"></use></svg><div class="listing__content"><p class="small"> <?php esc_html_e('Advanced encryption standards', 'hotbot'); ?></p></div></li>

                                    <li class="mb-3 mb-md-4 align-items-center"><svg class="listing__icon sm icon-checkmark"><use xlink:href="#checkmark"></use></svg><div class="listing__content"><p class="small"> <?php esc_html_e('Secure up to 6 devices at once.', 'hotbot'); ?></p></div></li>

                                    <li class="mb-3 mb-md-4 align-items-center"><svg class="listing__icon sm icon-checkmark"><use xlink:href="#checkmark"></use></svg><div class="listing__content"><p class="small"> <?php esc_html_e('30-day risk-free trial. Not satisfied? Get your money back, no questions asked.', 'hotbot'); ?></p></div></li>
                                </ul>
                            </div>
                            <div class="order-aside">

                                <p class="aside-header"><?php esc_html_e('What our users are saying:', 'hotbot'); ?> </p>

                                <div class="row justify-content-center">
                                    <div class="col-12">

                                                <div class="item">
                                                    <p class="small">
                                                    <?php esc_html_e('"HotBot is by far one of the fastest VPNs I\'ve ever used. They say it works with streaming services too, and it actually does. That on top of a secure connection, I couldn\'t be happier."', 'hotbot'); ?>
                                                        <span class="user">Calvin Peterson</span>
                                                    </p>
                                                </div>

                                                <div class="item">
                                                    <p class="small">
														<?php esc_html_e('"Does everything it says it\'s supposed to do. The app is super easy to use as well. Just open it up and tap a button to connect. Easy!"', 'hotbot'); ?>
                                                        <span class="user">Peter Ecken</span>
                                                    </p>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="trialDialog" class="modal container-fluid js-dropdown js-modal-dialog" style="z-index: 999;">
        <div class="modal__container modal__container--sm">
            <div class="card text-align-center p-md-5">
                <svg class="modal-close svg-icon svg-icon--15 js-close"><use xlink:href="#times-solid"></use></svg>
                <h4 class="bold mt-4 mb-4"><?php esc_html_e('Free trial ', 'hotbot'); ?></h4>
                <p class="mb-5"><?php esc_html_e('Looks like you\'ve already redeemed your free trial once. Click OK to continue at the regular price. ', 'hotbot'); ?></p>

                <div class="row justify-content-center align-items-center">
                    <div class="col-6">
                        <button class="btn btn--sm btn--primary btn--block" @click.prevent.stop="onSubmit(false)">
                            <span><?php esc_html_e('OK', 'hotbot'); ?><span>
                        </button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn--sm btn--caution btn--block" @click.prevent.stop="onCancelDialog">
                            <span><?php esc_html_e('CANCEL', 'hotbot'); ?></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="order-guarantee" v-show="!isCrypto">
        <section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-md-10 text-align-center--sm">
                                <h3 class="heading mb-5"><?php /*esc_html_e('30-day Free Trial Money-Back Guarantee', 'hotbot'); */?>
                                </h3>
                                <p><?php /*esc_html_e('Don\'t put your personal security at risk any longer. Get full access to everything HotBot Premium VPN has to offer. Every subscription comes with our 30 day guarantee. We are so confident that you will love our VPN, If you\'re not 100% satisfied, we\'ll refund your payment within 30 days. No hassles, no risk.', 'hotbot'); */?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row justify-content-end">
                            <div class="col-md-10">
                                <div class="row justify-content-center">
                                    <div class="col-9 col-sm-12">
                                        <img loading="lazy" src="<?php /* bloginfo('template_url'); */ ?>/assets/img/money-back-guarantee.svg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>-->
</div>

<footer class="footer layout-section pt-5 pb-5">
    <div class="container">
        <div class="d-md-flex flex-wrap justify-content-center align-items-center text-align-center footer-line">

            <!--<div class="footer__menu order-md-4 text-align-left pt-3 pb-3">
                <?php /*if ( is_active_sidebar( 'footer-widget-area' ) ) : */?>
                    <?php /*dynamic_sidebar( 'footer-widget-area' ); */?>
                <?php /*endif; */?>
            </div>-->

            <div class="footer__menu order-md-2">
<!--                <a href="/about/" class="text-small"><?php /*_e('About HotBot VPN', 'hotbot' ); */?></a>
                <a href="<?php /*echo esc_url( home_url( '/' ) ); */?>" class="text-small"><?php /*_e('Go to Homepage', 'hotbot' ); */?></a>-->
            </div>

            <div class="footer__menu mr-auto order-md-3 ml-auto mr-lg-0 footer__menu-mg">

                <a href="/privacy/" class="text-small no-dot"><?php _e('Privacy', 'hotbot' ); ?></a>
                <a href="/cookie/" class="text-small"><?php _e('Cookie Policy', 'hotbot' ); ?></a>
                <a href="/terms/" class="text-small"><?php _e('Terms of Service', 'hotbot' ); ?></a>
            </div>

            <p class="mb-0 text-small order-md-1">
                © 2012-<?php echo date("Y"); ?> HotBotVPN.com
            </p>

            <p class="mt-2 mb-3 terms-mobile">
                <a href="/privacy/" class="text-small no-dot">Privacy</a> &bull;
                <a href="/cookie/" class="text-small">Cookie Policy</a> &bull;
                <a href="/terms/" class="text-small">Terms of Service</a>
            </p>
        </div>

        <div>
            <p class="recaptcha-terms">
                This site is protected by reCAPTCHA and the Google
                <a href="https://policies.google.com/privacy">Privacy Policy</a> and
                <a href="https://policies.google.com/terms">Terms of Service</a> apply.
            </p>
        </div>
    </div>
</footer>

<?php //include 'inc/inc-comming-soon.php'; ?>
<?php include 'inc/inc-stripe.php'; ?>

<style>
    .footer {
        background-color: transparent;
        color: #b8c1c7;
    }

    @media all and (min-width: 769px) {
        .footer__menu {
            display: flex;
            flex-wrap: wrap;
        }
    }

    .footer__menu a {
        color: #b8c1c7;
        text-decoration: none;
        display: block;
        padding: .5rem 1rem;
    }

    .footer__menu a:hover {
        text-decoration: underline;
    }

    @media all and (min-width: 769px) {
        .footer__menu a:before {
            content: "•";
            display: inline-block;
            text-decoration: none;
            position: relative;
            left: -15px;
        }
    }

    .footer__menu a.no-dot:before {
        display: none;
    }

    .footer > div {
        color: rgb(92, 92, 102) !important;;
    }

    .footer p {
        padding: .5rem 1rem;
    }

    .footer-line p, .footer-line a {
        color: rgb(92, 92, 102);
    }

    /* --- */

    .logo-container {
        padding: 25px;
    }
    
    .logo-container a {
        cursor: default;
    }

    @media (max-width: 767px) {
        .logo-container {
            padding: 2.5rem 2.5rem 2rem 2.5rem;
        }
    }

    p.terms {
        opacity: 0.8;
        font-size: 1.4rem;
        line-height: 1.3;
        color: #5c5c66 !important;
    }

    p.terms a {
        font-weight: 400;
        text-decoration: underline;
        color: #5c5c66;
    }

    .listing__icon {
        fill: hsl(210deg 10% 54%);
    }

    .new-order-page-template p {
        color: hsl(210deg 10% 55%);
    }

    .new-order-page-template h6 {
        font-size: 1.8rem;
    }

    p.aside-header {
        font-weight: bold;
        color: rgba(0,0,0,0.5);
    }

    h3.heading {
        font-size: 2.5rem;
    }

    input[type=radio]:checked+.card {
        border: 2px solid #24a2fe;
        /*box-shadow: 0 0 0 1px #5bbb60, 0 0 0 5px rgb(91 187 96 / 33%);*/
        box-shadow: none;
    }

    .radio-style.checked, input[type=radio]:checked+.card .radio-style {
        background-color: #24a2fe;
        border-color: #1d83cc;
    }

    button[type='submit'] {
        font-size: 22px;
    }

    svg.padlock-icon {
        height: 22px;vertical-align: middle;margin-bottom: 4px;
    }

    .terms-mobile {
        display: none;
    }

    .terms-mobile,
    .terms-mobile a {
        color: hsl(209, 9%, 56%);
        margin: 0 5px;
    }

    @media (max-width: 767px) {
        .terms-mobile {
            display: block;
        }
    }

    .recaptcha-terms {
        text-align: right;
        font-size: 90%;
        max-width: 350px;
        float: right;
        color: #b8c1c7;
    }

    .recaptcha-terms a {
        color: #b8c1c7;
    }

    /* Hide recaptcha badge */
    .grecaptcha-badge {
        visibility: hidden;
    }

    /* Match form inputs with stripe CC input */
    .country-selector {
        color: #737380 !important;
        font-weight: normal !important;
    }

    input[type='text'], input[type='email'], input[type='password'], select {
        font-family: 'Noto Sans', sans-serif !important;
        padding: 1.4rem !important;
        font-size: 16px !important;
        height: 50px;
        font-weight: 500;
    }

    input::placeholder {
        font-family: 'Noto Sans', sans-serif !important;
        color: #aab7c4 !important;
        font-size: 16px !important;
        font-weight: 500;
        opacity: 1;
    }

    @media (max-width: 767px) {
        input::placeholder {
            font-size: 17px !important;
        }
    }

    .header-subheader {
        margin: 0 0 15px 0;
        color: black !important;
        font-size: 14px;
        padding: 0;
    }

    .currency-m-rtl {
        font-size: 15px;
    }

    .btn--fine {
        background-color: #24a2fe;
    }

    .btn--fine:hover {
        background-color: #1d83cc;
    }
</style>

<?php wp_footer(); ?>

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
