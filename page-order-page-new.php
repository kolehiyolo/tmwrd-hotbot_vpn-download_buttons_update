<?php /* Template Name: Live Order Page */ ?>
<?php
$geo = hb_get_geoinfo();
$value = ht_get_geo_currency($geo['country_code']);
setcookie("defCurrencyTest", $value);
setcookie("defCountryIso", $geo["country_code"]);
?>
<?php get_header(); ?>
<script
        src="https://www.paypal.com/sdk/js?client-id=<?=config(PAYPAL_CLIENT_ID)?>&vault=true&intent=subscription">
</script>
<?php include 'inc/inc-header-light.php'; ?>
<?php include 'inc/inc-order-page-hero.php'; ?>

<div id="app" class="new-order-page-template orderPage">
    <div>
        <section class="layout-section">
            <div class="container">
                <ul class="tab d-flex mb-0 p-0">
                    <!--                    <li id="labelCheckYes" class="checked"><label for="tab1">Step 1</label></li>-->
                    <!--                    <li id="labelCheckNo" ><label >Step 2</label></li>-->
                    <!--                    <li id="labelCheckHide" style="display: none"><label onclick="function(e){e.preventDefault(); return false;}" for="tab2">Step 2</label></li>-->
                </ul>
            </div>
            <div class="devider"></div>
        </section>
    </div>
    <input type="radio" name="tab" class="d-none" value="yes" id="tab1" checked>
    <div class="fieldShow">

        <section class="layout-section pt-3 pb-3 layout-section__section1">
            <div class="container-small">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h3 class="heading mb-3 mt-0 pt-5 pt-sm-3 mt-sm-3"><?php esc_html_e('1. Choose a plan', 'hotbot'); ?></h3>
                        <p class="mb-3" v-show="!isCrypto">
                            <strong>
								<?php echo sprintf( __('Get HotBot VPN Premium, <span class="high-light">7 Day  Free Trial</span>, PLUS <span class="high-light">30-day money-back guarantee</span>', 'hotbot')); ?>
                            </strong>
                        </p>
                        <p class="mb-3" v-show="isCrypto"><strong><?=__('Get HotBot VPN Premium', 'hotbot'); ?></strong></p>
						<?php
						// $datenow = date("d/m/Y", strtotime("+30 days"));
						?>
                        <!--<p class="mb-3"><strong><?php // echo sprintf( __("Limited Time Offer: <span class='high-light'>Try HotBot VPN Free for 30 days!</span> If you are not 100%% satisfied, cancel anytime before $datenow and get your money back.</span>"), 'hotbot'); ?></strong></p>-->

                        <div class="row align-items-start mt-5 ml-0 mr-0 pt-4">

                            <!-- 4 Years -->
                            <?php /*
                            <label class="card--label-wrap col-12 col-lg-4 mb-5 mb-lg-0">
                                <input type="radio" name="plan" class="d-none" :value="Plans.FOUR" v-model="pickedPeriod"/>
                                <div class="card card--sm p-3 mt-3 mb-3">
                                    <div class="plan__saved" v-show="!isCrypto">
				                        <?php esc_html_e('7 Day Free Trial', 'hotbot'); ?>
                                    </div>
                                    <div class="card__inner">
                                        <div class="d-flex align-items-center justify-content-md-center flex-md-wrap flex-fill order-md-1">
                                            <div class="radio-style"></div>
                                            <div class="card__label"><?php esc_html_e('Black November', 'hotbot'); ?></div>
                                        </div>
                                        <div class="order-md-3">
                                            <div class="plan  plan--centered  text-align-center">
                                                {{ getPlan(Plans.FOUR).currency }} 
                                                <h2 class="plan-price">{{ trialPriceNumeric(planIndex(Plans.FOUR)) }}</h2>
                                                <span v-show="!newClient || !showZeroTrial"><?php esc_html_e('/mo', 'hotbot'); ?></span>
                                            </div>
                                        </div>
                                        <p class="small bold heading mt-2 mb-2 mb-md-0 save-text col-md-12 pr-0 order-md-2">
                                            <span><?php esc_html_e('2 Years + 2 Years FREE', 'hotbot'); ?></span>
                                        </p>
                                        <div class="col-12 order-md-4">
                                            <p class="mb-0 x-small">
                                                <span class="danger line-through">{{ getPlan(Plans.FOUR).currency }} {{ getPlan(Plans.FOUR).priceOld }}</span>
                                                {{ getPlan(Plans.FOUR).currency }} {{ getPlan(Plans.FOUR).pricePlan }}
                                                <span v-show="newClient"><?php esc_html_e('after trial.', 'hotbot'); ?></span>
                                            </p>
                                            <p class="x-small mb-0"><?php esc_html_e('Billed one time.', 'hotbot'); ?></p>
                                        </div>
                                    </div>

                                    <p class="mb-0 footer-text x-small mt-3 m-3 d-flex align-items-center" v-if="!isCrypto">
                                        <svg class="icon"><use xlink:href="#replay_30_black_24dp"></use></svg>
				                        <?php esc_html_e('Includes a 30-day money-back guarantee.', 'hotbot'); ?>
                                    </p>
                                </div>
                            </label>
                            */ ?>
                            <div style="min-width: 16.6%;"></div>

                            <!-- 1 Year-->
                            <label class="card--label-wrap col-12 col-lg-4 mb-5 mb-lg-0">
                                <input type="radio" name="plan" class="d-none" :value="Plans.YEAR" v-model="pickedPeriod"/>
                                <div class="card card--sm p-3 mt-3 mb-3">
                                    <div class="plan__saved" v-show="!isCrypto">
										<?php esc_html_e('7 Day Free Trial', 'hotbot'); ?>
                                    </div>
                                    <div class="card__inner">
                                        <div class="d-flex align-items-center justify-content-md-center flex-md-wrap flex-fill order-md-1">
                                            <div class="radio-style"></div>
                                            <div class="card__label"><?php esc_html_e('1 Year', 'hotbot'); ?></div>
                                        </div>
                                        <div class="order-md-3">
                                            <div class="plan  plan--centered  text-align-center">
                                                {{ getPlan(Plans.YEAR).currency }}
                                                <h2 class="plan-price">{{ trialPriceNumeric(planIndex(Plans.YEAR)) }}</h2>
                                                <span v-show="!newClient || !showZeroTrial"><?php esc_html_e('/mo', 'hotbot'); ?></span>
                                            </div>
                                        </div>
                                        <p class="small bold heading mt-2 mb-2 mb-md-0 save-text col-md-12 pr-0 order-md-2">
                                            <span><?php echo sprintf( __('Save %s', 'hotbot'),'66%'); ?></span>
                                        </p>
                                        <div class="col-12 order-md-4">
                                            <p class="mb-0 x-small">
                                                <span class="danger line-through">{{ getPlan(Plans.YEAR).currency }} {{ getPlan(Plans.YEAR).priceOld }}</span>
                                                {{ getPlan(Plans.YEAR).currency }} {{ getPlan(Plans.YEAR).pricePlan }}
                                                <span v-show="newClient && !isCrypto"><?php esc_html_e('after trial.', 'hotbot'); ?></span>
                                                <span v-show="isCrypto"><?php esc_html_e('one time.', 'hotbot'); ?></span>
                                            </p>
                                            <p class="x-small mb-0" v-show="!isCrypto">
												<?php esc_html_e('Billed every year.', 'hotbot'); ?>
                                                ({{ getPlan(Plans.YEAR).currency }} {{ getPlan(Plans.YEAR).priceMonth }} /mo)
                                            </p>
                                            <p class="x-small mb-0" v-show="isCrypto">&nbsp;</p>
                                        </div>
                                    </div>
                                    <p class="mb-0 footer-text x-small mt-3 m-3 d-flex align-items-center" v-if="!isCrypto">
                                        <svg class="icon"><use xlink:href="#replay_30_black_24dp"></use></svg>
										<?php esc_html_e('Includes a 30-day money-back guarantee.', 'hotbot'); ?>
                                    </p>
                                </div>
                            </label>

                            <!-- 1 Month-->
                            <label class="card--label-wrap col-12 col-lg-4 mb-5 mb-lg-0">
                                <input type="radio" name="plan" class="d-none" :value="Plans.MONTH" v-model="pickedPeriod"/>
                                <div class="card card--sm p-3 mt-3 mb-3">
                                    <div class="plan__saved" v-show="!isCrypto"><?php esc_html_e('7 Day Free Trial', 'hotbot'); ?></div>
                                    <div class="card__inner">
                                        <div class="d-flex align-items-center justify-content-md-center flex-md-wrap flex-fill order-md-1">
                                            <div class="radio-style"></div>
                                            <div class="card__label"><?php esc_html_e('1 Month', 'hotbot'); ?></div>
                                        </div>
                                        <div class="order-md-3">
                                            <div class="plan  plan--centered  text-align-center">
                                                {{ getPlan(Plans.MONTH).currency }}
                                                <h2 class="plan-price">{{ getPrice(Plans.MONTH) }}</h2>
                                                <span v-show="!newClient || !showZeroTrial"><?php esc_html_e('/mo', 'hotbot'); ?></span>
                                            </div>
                                        </div>
                                        <p class="small bold heading mt-2 mb-2 mb-md-0 save-text col-md-12 pr-md-0 order-md-2" style="opacity: 0; visibility: hidden; width: 0; line-height: .7;"><span><?php echo sprintf( __('Save %s', 'hotbot'), '0%'); ?></span></p>
                                        <div class="col-12 order-md-4 mt-4 mt-md-0">
                                            <p class="x-small mb-0">{{ getPlan(Plans.MONTH).currency }} {{ getPrice(Plans.MONTH) }}
                                                <span v-show="newClient && !isCrypto"><?php esc_html_e('after trial.', 'hotbot'); ?></span>
                                                <span v-show="isCrypto"><?php esc_html_e('one time.', 'hotbot'); ?></span>
                                            </p>
                                            <p class="x-small mb-0" v-show="!isCrypto"><?php esc_html_e('Billed every month.', 'hotbot'); ?></p>
                                            <p class="x-small mb-0" v-show="isCrypto">&nbsp;</p>
                                        </div>
                                    </div>
                                    <p class="mb-0 footer-text x-small mt-3 m-3 d-flex align-items-center" v-if="!isCrypto">
                                        <svg class="icon"><use xlink:href="#replay_30_black_24dp"></use></svg>
				                        <?php esc_html_e('Includes a 30-day money-back guarantee.', 'hotbot'); ?>
                                    </p>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php /*
        <input type="radio" class="d-none coupon-toggler" id="badgeCouponToggler" />
        <section class="layout-section layout-section--bg-eee mb-5 badge--coupon-wrap">
            <div class="container text-align-center">
                
                <div class="">
                    <span class="badge mb-3 mt-3 badge--coupon"><span class="d-flex align-items-center"><svg class="icon mr-3 ml-3"><use xlink:href="#checkmark"></use></svg>'reddit50off' coupon applied<label for="badgeCouponToggler" class="ml-3"><svg class="icon"><use xlink:href="#times-solid"></use></svg></label></span></a>
                </div>
            </div>
        </section>
        */ ?>

        <div class="container-small pt-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">

                        <div class="col-12 col-md-7">

                            <section class="layout-section" id="createAnchor">
                                <div class="pt-0 pb-3">

                                    <h6 class="heading d-inline-block mr-2"><?php esc_html_e('2. ', 'hotbot'); ?></h6>
                                    <label for="createAccount" class="d-inline-block mr-4 cursor-pointer rtl-label" @click="newClient=true">
                                        <p>
                                        <div class="v-align-middle d-inline-block mr-1 mt-n2 radio-style"
                                             :class="{ checked: newClient }"
                                             id="radioCheckYes"
                                        ></div>

                                        <h6 class="d-inline"><?php esc_html_e('Create an account', 'hotbot'); ?></h6>
                                        </p>
                                    </label>
                                    <label for="existingAccount" class="d-inline-block cursor-pointer"
                                           @click="newClient=false">
                                        <p>
                                        <div class="v-align-middle d-inline-block mr-1 mt-n2 radio-style"
                                             :class="{ checked: !newClient }"
                                             id="radioCheckNo"
                                        ></div>
                                        <h6 class="d-inline"><?php esc_html_e('Use existing account', 'hotbot'); ?></h6>

                                        </p>
                                    </label>

                                    <input type="radio" name="accountCe" class="d-none" id="createAccount" value="yes" checked/>
                                    <div class="fieldShow">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label class="d-block mb-2 small"><?php esc_html_e('Email Address', 'hotbot'); ?></label>
                                                        <div class="form__group">
                                                            <input type="email" class="form__control mb-2 sm-text" v-model="email"/>
                                                            <!--                                        <span class="text-color-primary small">-->
															<?php //esc_html_e('We will not share your information or send spam.', 'hotbot' ); ?><!--</span>-->
                                                        </div>
                                                    </div>
                                                    <div class="col-12" v-if="newClient">
                                                        <label class="d-block mb-2 small"><?php esc_html_e('Create Password', 'hotbot'); ?></label>
                                                        <div class="form__group">
                                                            <input type="password" class="form__control password sm-text" v-model="password"/>
                                                            <div class="has-icon has-icon--password togglePassword" id="togglePassword">
                                                                <svg class="togglePassword-hidden"><use xlink:href="#eye-slash-solid"></use></svg>
                                                                <svg class="togglePassword-show"><use xlink:href="#eye-solid"></use></svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12" id="errorMessage">
                                                        <h6 class="danger" role="alert">
                                                            {{ errorMessageCreateAcc }} &nbsp;
                                                        </h6>
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
                                                            <input type="email" class="form__control mb-2 sm-text" v-model="email" />
                                                            <!--                                        <span class="text-color-primary small">-->
															<?php //esc_html_e('We will not share your information or send spam.', 'hotbot' ); ?><!--</span>-->
                                                        </div>
                                                    </div>
                                                    <div class="col-12" id="errorMessage">
                                                        <h6 class="danger" role="alert">
                                                            {{ errorMessageExistAcc }} &nbsp;
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </section>
                            <?php /*
                            <input type="checkbox" class="d-none coupon-toggler" id="couponToggler" /> 
                            <label for="couponToggler" class="bold d-block mt-3 coupon-toggle"><a><?php esc_html_e('Got a coupon?', 'hotbot'); ?></a></label>
                            <div class="d-flex align-items-center coupon-field mb-4">
                                <p class="flex-shrink-0 pr-3 mb-0">
                                    <?php esc_html_e('Enter coupon code', 'hotbot'); ?>
                                </p>
                                <input type="text" class="form__control mr-3" />
                                <button type="submit" class="btn btn--primary-darken btn--xs pl-5 pr-5"><span>Apply</span></button>
                            </div>
                            */ ?>

                            <section class="layout-section pt-0 pb-3">

                                <h3 class="heading d-flex mb-0"><?php esc_html_e('3. Select a payment method', 'hotbot'); ?></h3>
                                <h6 class="heading d-flex align-items-center mt-0 flex-wrap" style="line-height: inherit" v-if="!isCrypto">
                                    <div class="mr-auto pr-3 rtl-pr-3"><?php esc_html_e('Country of Payment:', 'hotbot'); ?></div>
                                    <div class="form__group mt-2 mb-2" style="flex: auto">
                                        <select class="form__control" v-model="localCurrencyIndex" style="font-weight: bold; padding-top: .9rem" id="countrySelector">
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
                                    <label class="card--label-wrap col-12 col-md-6 pt-0 pb-0" v-show="canMakePayment">
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
                                                        <li v-show="prbMethod==='cards'"><img src="<?php bloginfo('template_url'); ?>/assets/img/card-amex.svg"/></li>
                                                        <li v-show="prbMethod==='cards'"><img src="<?php bloginfo('template_url'); ?>/assets/img/card-discover.svg"/></li>
                                                        <li v-show="prbMethod==='cards'"><img src="<?php bloginfo('template_url'); ?>/assets/img/card-mastercard.svg"/></li>
                                                        <li v-show="prbMethod==='cards'"><img src="<?php bloginfo('template_url'); ?>/assets/img/card-visa.svg"/></li>
                                                        <li v-show="prbMethod==='cards'"><img src="<?php bloginfo('template_url'); ?>/assets/img/card-jcb.svg"/></li>
                                                        <li v-show="prbMethod==='apple'" style="height: 28px; width: 61px; padding-left: 5px; padding-right: 5px;">
                                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/apple-pay.svg"/></li>
                                                        <li v-show="prbMethod==='google'" style="width: 67px; padding-left: 5px; padding-right: 5px;">
                                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/google-pay.svg"/></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
<!--                                    <label class="card--label-wrap col-12 col-md-6 pt-0 pb-0">-->
<!--                                        <input type="radio" name="payment-method" class="d-none" :value="PaySystem.COINPAYMENTS" v-model="typePaySystem"/>-->
<!--                                        <div class="card card--sm p-0 mt-3 mb-3">-->
<!--                                            <div class="d-flex align-items-center">-->
<!--                                                <div class="col-2 pr-0 rtl-pr-0">-->
<!--                                                    <div class="v-align-middle m-auto radio-style"></div>-->
<!--                                                </div>-->
<!--                                                <div class="col-10">-->
<!--                                                    <h6 class=" mb-1">--><?php //esc_html_e('CoinPayments', 'hotbot'); ?><!--</h6>-->
<!--                                                    <ul class="payments-card">-->
<!--                                                        <li><img src="--><?php //bloginfo('template_url'); ?><!--/assets/img/crypto-btc.svg"/></li>-->
<!--                                                        <li><img src="--><?php //bloginfo('template_url'); ?><!--/assets/img/crypto-eth.svg"/></li>-->
<!--                                                        <li><img src="--><?php //bloginfo('template_url'); ?><!--/assets/img/crypto-usdt.svg"/></li>-->
<!--                                                        <li><img src="--><?php //bloginfo('template_url'); ?><!--/assets/img/crypto-bnb.svg"/></li>-->
<!--                                                    </ul>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </label>-->
                                    <!--                                    <label class="card--label-wrap col-12 col-md-6">-->
                                    <!--                                        <input type="radio" name="payment-method" class="d-none"-->
                                    <!--                                               :value="PaySystem.SEPA" v-model="typePaySystem"-->
                                    <!--                                        />-->
                                    <!--                                        <div class="card card--sm p-0 mt-3 mb-3">-->
                                    <!--                                            <div class="d-flex align-items-center">-->
                                    <!--                                                <div class="col-2 pr-0 rtl-pr-0">-->
                                    <!--                                                    <div class="v-align-middle m-auto radio-style"></div>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="col-10">-->
                                    <!--                                                    <h6 class=" mb-1">--><?php //esc_html_e('SEPA', 'hotbot'); ?><!--</h6>-->
                                    <!--                                                    <ul class="payments-card">-->
                                    <!--                                                        <li><img src="--><?php //bloginfo('template_url'); ?><!--/assets/img/card-amex.svg"/></li>-->
                                    <!--                                                        <li><img src="--><?php //bloginfo('template_url'); ?><!--/assets/img/card-discover.svg"/></li>-->
                                    <!--                                                        <li><img src="--><?php //bloginfo('template_url'); ?><!--/assets/img/card-mastercard.svg"/></li>-->
                                    <!--                                                        <li><img src="--><?php //bloginfo('template_url'); ?><!--/assets/img/card-visa.svg"/></li>-->
                                    <!--                                                        <li><img src="--><?php //bloginfo('template_url'); ?><!--/assets/img/card-jcb.svg"/></li>-->
                                    <!--                                                    </ul>-->
                                    <!--                                                </div>-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                    </label>-->
                                </div>

                                <!--                <div class="text-align-center--sm">-->
                                <!--                    <button-->
                                <!--                            @click.prevent.stop="payPalInit"-->
                                <!--                            class="btn btn--primary mt-md-5 mb-md-5"><span>--><?php //esc_html_e('Continue to payment', 'hotbot' ); ?><!--</span></button>-->
                                <!--                </div>-->
                                {{payPalBtnInit}}

                                <div id="paymentInfoAnchor">
                                    <h3 class="heading mb-3" v-show="typePaySystem === PaySystem.STRIPE">
										<?php esc_html_e('4. Payment Information', 'hotbot'); ?>
                                    </h3>

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
                                                <label class="mb-2 d-block small"><?php esc_html_e('Name on card', 'hotbot'); ?></label>
                                                <div class="form__group mb-3">
                                                    <input type="text" class="form__control" v-model="nameOnCard" />
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

                                            <div class="mt-5 row justify-content-center">
                                                <!--                                                <div id="reCartchaV2"></div>-->
                                            </div>

                                            <div class="mt-5" v-show="typePaySystem === PaySystem.STRIPE || (typePaySystem === PaySystem.BUTTON && prbMethod==='cards')">
                                                <button type="submit"
                                                        style="background-color: #1a9efe; color: #fff;"
                                                        class="btn btn--block btn--primary"
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
                                                    <span><?php esc_html_e('Start Free Trial', 'hotbot'); ?></span>
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
                                                        <input type="hidden" name="item_number" :value="currentPrice()">
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
                                                    &nbsp;
                                                    <span v-show="textUnderBtn && !isCrypto">
                                                        <?php echo sprintf( __('Your free trial with HotBot VPN starts on %1$s and will end on %2$s. Check your email for reminders about your trial period status. You can cancel anytime. Otherwise, starting on %3$s you will be billed %4$s.', 'hotbot' ),
	                                                        '{{ atDayDate }}',
	                                                        '{{ toDayDate }}',
	                                                        '{{ toDayDate }}',
	                                                        '{{ priceForText }}{{ periodForText }}'); ?>
                                                    </span>
                                                    <span v-show="isCrypto">
                                                        <?=__('Payments made with crypto currency are one time payments and do not automatically renew and are not 
                                                        eligible for our refund guarantee. You can reload your account at any time by making additional crypto payments on 
                                                        this page. Payments made with crypto currency are not eligible for a free trial.', 'hotbot' ); ?></span>
                                                </p>
                                            </div>
                                            <div class="">
                                                <div class="devider mt-5 mb-4"></div>
                                            </div>

                                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                                <div class="pr-3 rtl-total-pr-3">
                                                    <h4 class="heading"><?php esc_html_e('TOTAL', 'hotbot'); ?></h4>
                                                </div>
                                                <div class="text-align-right">
                                                    {{localCurrencyFn}}
                                                    <div class="d-flex flex-wrap align-items-center justify-content-end">
                                                        <!--                                                        <div class="form__group mb-0">-->
                                                        <!--                                                            <select class="form__control no-border" v-model="localCurrency" style="min-width: 100px; font-weight: bold">-->
                                                        <!--                                                                <option v-for="plks in allPlansKeys" v-bind:value="plks">{{ plks }}</option>-->
                                                        <!--                                                            </select>-->
                                                        <!---->
                                                        <!--                                                            <svg class="icon-arrow svg-icon svg-icon--15"><use xlink:href="#angle-down-solid"></use></svg>-->
                                                        <!--                                                        </div>-->
                                                        <!-- <h4 class="heading mb-0 mt-0">{{ total }} </h4> -->
                                                        <span class="d-inline-block currency-m-rtl">{{ getPlan(Plans.MONTH).currency }}</span>
                                                        <h4 class="heading mb-0 mt-0 ml-3">{{ totalNumeric }}</h4>
                                                    </div>
                                                </div>
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
                                <p><?php esc_html_e('Your FREE HotBot Account Includes', 'hotbot'); ?></p>

                                <ul class="listing">
                                    <li class="mb-3 mb-md-4 align-items-center"><svg class="listing__icon sm icon-checkmark"><use xlink:href="#checkmark"></use></svg>
                                        <div class="listing__content">
                                            <p class="small"><?php esc_html_e('One account for ALL your devices', 'hotbot'); ?> <br>
                                                <svg class="svg-icon svg-icon--15 ml-2"><use xlink:href="#windows"></use></svg>
                                                <svg class="svg-icon svg-icon--15 ml-2"><use xlink:href="#macos"></use></svg>
                                                <svg class="svg-icon svg-icon--15 ml-2"><use xlink:href="#android"></use></svg>
                                                <svg class="svg-icon svg-icon--15 ml-2"><use xlink:href="#ios"></use></svg>
                                            </p>
                                        </div>
                                    </li>

                                    <li class="mb-3 mb-md-4 align-items-center"><svg class="listing__icon sm icon-checkmark"><use xlink:href="#checkmark"></use></svg><div class="listing__content"><p class="small"> <?php esc_html_e('Zero logs policy.', 'hotbot'); ?></p></div></li>

                                    <li class="mb-3 mb-md-4 align-items-center"><svg class="listing__icon sm icon-checkmark"><use xlink:href="#checkmark"></use></svg><div class="listing__content"><p class="small"> <?php esc_html_e('Optimized for HD streaming and downloading.', 'hotbot'); ?></p></div></li>

                                    <li class="mb-3 mb-md-4 align-items-center"><svg class="listing__icon sm icon-checkmark"><use xlink:href="#checkmark"></use></svg><div class="listing__content"><p class="small"> <?php esc_html_e('Unlimited speeds and unlimited data.', 'hotbot'); ?></p></div></li>

                                    <li class="mb-3 mb-md-4 align-items-center"><svg class="listing__icon sm icon-checkmark"><use xlink:href="#checkmark"></use></svg><div class="listing__content"><p class="small"> <?php esc_html_e('24/7 customer support.', 'hotbot'); ?></p></div></li>

                                    <li class="mb-3 mb-md-4 align-items-center"><svg class="listing__icon sm icon-checkmark"><use xlink:href="#checkmark"></use></svg><div class="listing__content"><p class="small"> <?php esc_html_e('Advanced encryption standards', 'hotbot'); ?></p></div></li>

                                    <li class="mb-3 mb-md-4 align-items-center"><svg class="listing__icon sm icon-checkmark"><use xlink:href="#checkmark"></use></svg><div class="listing__content"><p class="small"> <?php esc_html_e('Secure up to 6 devices at once.', 'hotbot'); ?></p></div></li>

                                    <li class="mb-3 mb-md-4 align-items-center"><svg class="listing__icon sm icon-checkmark"><use xlink:href="#checkmark"></use></svg><div class="listing__content"><p class="small"> <?php esc_html_e('30-day risk-free trial. Not satisfied? Get your money back, no questions asked.', 'hotbot'); ?></p></div></li>
                                </ul>
                            </div>
                            <div class="order-aside">

                                <p><?php esc_html_e('What Our Customers Are Saying', 'hotbot'); ?> </p>

                                <div class="row justify-content-center">
                                    <div class="col-12">

                                        <div class="glider-contain">
                                            <div id="gliderTestament" class="glide glider-testament">
                                                <div class="item">

                                                    <p class="small">
														<?php esc_html_e('I find hotbot great vpn service. I researched quite a few different vpn trials, and there was not really a clear winner. I think the biggest problem is potential conflicts of interest with the various reviewers. Still hotbot seemed to come out at or near the top in my research, so with that I decided to give them a try. This is the first VPN I paid for, but really I am just a beginner to it all.', 'hotbot'); ?>

                                                        <span class="user">Toruk Ramos</span>
                                                    </p>

                                                </div>
                                                <div class="item">

                                                    <p class="small">
														<?php esc_html_e('AWESOME VPN! Best VPN I have found to break outside mainland China firewalls. Video streaming works. I purchased the 3 year deal and already I saved almost half price on some plane tickets by using different VPN locations. Protection for my identity and financial records. I highly recommend Hotbot to everyone', 'hotbot'); ?>
                                                        <span class="user">Alexandru Porojan</span>
                                                    </p>

                                                </div>
                                                <div class="item">

                                                    <p class="small">
                                                    <?php esc_html_e('Easy to use on my Android phone. I get peace of mind making it harder for someone to steal my banking
 
 info or identity while on a public network.', 'hotbot'); ?>
                                                        <span class="user">JustWilson</span>
                                                    </p>

                                                </div>
                                                <div class="item">

                                                    <p class="small">
														<?php esc_html_e('by far one of the fastest VPNs I\'ve used recently. also, they say it works on Netflix and Hulu, AND IT
                        ACTUALLY DOES! Anyone else who cant is wrong.', 'hotbot'); ?>
                                                        <span class="user">Calvin Mckenzie</span>
                                                    </p>

                                                </div>
                                                <div class="item">

                                                    <p class="small">
														<?php esc_html_e('does everything it says it\'s suppose to. the app is easy to use. I\'m enjoying the service so far. I\'ve
                        had it installed for like 3 weeks now. the service works just as fine as when the trial was still going
                        on. i don\'t get lag or buffering when i watch videos when the vpn is on. definitely worth it, and the
                        price is great too', 'hotbot'); ?>
                                                        <span class="user">Alex Ecks</span>
                                                    </p>

                                                </div>
                                                <div class="item">

                                                    <p class="small">
														<?php esc_html_e('hotbot is easy to use and it doesn\'t slow down my internet that I can tell. I mostly use it when I am
                        out on a public wifi or for private browsing at home. I really don\'t want my ISP logging and tracking
                        everything that I\'m doing. I tested the privacy myself several ways, it is legit.', 'hotbot'); ?>
                                                        <span class="user">iwantpotato</span>
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="dots" id="dots"></div>
                                        </div>
                                    </div>
                                </div>
                                <br />

								<?php
								$languages = apply_filters( 'wpml_active_languages', NULL );
								foreach($languages as $l) {
									if ($l['active']) { $locale = $l['default_locale']; break; }
								}

								?>
                                <!-- TrustBox widget - Micro Review Count -->
                                <div class="trustpilot-widget" data-locale="<?php echo $locale; ?>" data-template-id="5419b6a8b0d04a076446a9ad" data-businessunit-id="48653e10000064000502c9e5" data-style-height="48px" data-style-width="100%" data-theme="light" data-min-review-count="50">
                                    <a href="https://www.trustpilot.com/review/www.hotbot.com" target="_blank" rel="noopener">Trustpilot</a>
                                </div>
                                <!-- End TrustBox widget -->
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
    <div class="order-guarantee" v-show="!isCrypto">
        <section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-md-10 text-align-center--sm">
                                <h3 class="heading mb-5"><?php esc_html_e('30-day Free Trial Money-Back Guarantee', 'hotbot'); ?>
                                </h3>
                                <p><?php esc_html_e('Don\'t put your personal security at risk any longer. Get full access to everything HotBot Premium VPN has to offer. Every subscription comes with our 30 day guarantee. We are so confident that you will love our VPN, If you\'re not 100% satisfied, we\'ll refund your payment within 30 days. No hassles, no risk.', 'hotbot'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row justify-content-end">
                            <div class="col-md-10">
                                <div class="row justify-content-center">
                                    <div class="col-9 col-sm-12">
                                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/money-back-guarantee.svg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script>
    //nav app slider
    window.addEventListener('load',function(){
        new Glider(document.querySelector('.glider-testament'), {
            slidesToShow: 1,
            dots: '#dots',
            draggable: false,
            autoplay: 1000,
            perView: 1
        });

        const glider = new Glider(document.querySelector('.glider-testament'));

        function sliderAuto(slider, miliseconds) {
            const slidesCount = slider.track.childElementCount;
            let slideTimeout = null;
            let nextIndex = 1;

            function slide () {
                slideTimeout = setTimeout(
                    function () {
                        if (nextIndex >= slidesCount ) {
                            nextIndex = 0;
                        }
                        slider.scrollItem(nextIndex++);
                    },
                    miliseconds
                );
            }

            slider.ele.addEventListener('glider-animated', function() {
                window.clearInterval(slideTimeout);
                slide();
            });

            slide();
        }

        sliderAuto(glider, 7000)

    });

</script>
<?php //include 'inc/inc-comming-soon.php'; ?>
<?php include 'inc/inc-stripe.php'; ?>

<?php get_footer(); ?>
