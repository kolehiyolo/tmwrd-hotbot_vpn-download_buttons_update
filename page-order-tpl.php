<?php /* Template Name: Order Page TPL */ ?>
<?php // order-accordion page
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
                                    <div class="plan__saved" v-show="!isCrypto"><?php esc_html_e('7 Day Free Trial', 'hotbot'); ?></div>

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


        <div class="container-small">
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

                                <div class="accordion mt-4">
                                    <div class="accordion__item">
                                        <input type="checkbox" class="accordion__radio-toggler d-none" name="accordion-radio" id="accordion-1"
                                               @click="if ($('#accordion-1').prop('checked')) typePaySystem = PaySystem.STRIPE">
                                        <label for="accordion-1" class="accordion__header d-block">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="accordion__heading mr-3"><?php esc_html_e('Credit Card', 'hotbot' ); ?></h6>
                                                <ul class="payment-options ml-auto mr-3 pl-0">
                                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/card-visa.svg" alt="Visa" /></li>
                                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/card-mastercard.svg" alt="Mastercard"/></li>
                                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/card-amex.svg" alt="AMEX"></li>
                                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/card-discover.svg" alt="Discover" /></li>
                                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/card-jcb.svg" alt="JBC"/></li>
                                                </ul>
                                                <svg class="icon accordion__close"><use xlink:href="#angle-down-solid"></use></svg>
                                            </div>
                                        </label>
                                        <div class="accordion__body">
                                            <div class="d-flex justify-content-between">
                                                <h5><?php esc_html_e('TOTAL', 'hotbot'); ?></h5>
                                                <h5><h5>{{ totalWithCurrency }}</h5></h5>
                                            </div>

                                            <div class="panel panel--default x-small mt-3 mb-4" v-show="textUnderBtn && !isCrypto">
                                                <?php echo sprintf( __('Your free trial with HotBot VPN starts on %1$s and will end on %2$s. Check your email for reminders about your trial period status. You can cancel anytime. Otherwise, starting on %3$s you will be billed %4$s.', 'hotbot' ),
                                                    '{{ atDayDate }}',
                                                    '{{ toDayDate }}',
                                                    '{{ toDayDate }}',
                                                    '{{ priceForText }}{{ periodForText }}'); ?>
                                            </div>

                                            <div v-show="typePaySystem === PaySystem.STRIPE" id="cardholderAnchor">
                                                <label class="mb-2 d-block small"><?php esc_html_e('Name on card', 'hotbot'); ?></label>
                                                <div class="form__group mb-3">
                                                    <input type="text" class="form__control" v-model="nameOnCard" />
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
                                            </div>

                                            <div class="mt-5 row justify-content-center" v-show="false">
                                                <!--<div id="reCartchaV2"></div>-->
                                            </div>

                                            <div class="mt-5" v-show="typePaySystem === PaySystem.STRIPE || (typePaySystem === PaySystem.BUTTON && prbMethod==='cards')">
                                                <button type="submit"
                                                        style="background-color: #1a9efe; color: #fff;"
                                                        class="btn btn--proccess"
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
                                                    <span>{{ buttonText }}</span>
                                                </button>
                                            </div>

                                            <div class="mt-3">
                                                <p class=" small mb-0" style="font-size: 1.3rem;">By submitting this form, you agree to our <a href="/terms/" class="text-color-primary text-color-primary--has-hover">Terms of Service</a>, and <a href="/privacy/" class="text-color-primary text-color-primary--has-hover">Privacy Policy</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion__item">
                                        <input type="checkbox" class="accordion__radio-toggler d-none" name="accordion-radio" id="accordion-2"
                                               @click="if ($('#accordion-2').prop('checked')) typePaySystem = PaySystem.PAYPAL">
                                        <label for="accordion-2" class="accordion__header d-block">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="accordion__heading mr-3"><?php esc_html_e('PayPal', 'hotbot' ); ?></h6>
                                                <ul class="payment-options ml-auto mr-3 pl-0">
                                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/paypal.svg" class="md"/></li>
                                                </ul>
                                                <svg class="icon accordion__close"><use xlink:href="#angle-down-solid"></use></svg>
                                            </div>
                                        </label>
                                        <div class="accordion__body">
                                            <div class="d-flex justify-content-between">
                                                <h5><?php esc_html_e('TOTAL', 'hotbot'); ?></h5>
                                                <h5><h5>{{ totalWithCurrency }}</h5></h5>
                                            </div>

                                            <div class="panel panel--default x-small mt-3 mb-4" v-show="textUnderBtn && !isCrypto">
                                                <?php echo sprintf( __('Your free trial with HotBot VPN starts on %1$s and will end on %2$s. Check your email for reminders about your trial period status. You can cancel anytime. Otherwise, starting on %3$s you will be billed %4$s.', 'hotbot' ),
                                                    '{{ atDayDate }}',
                                                    '{{ toDayDate }}',
                                                    '{{ toDayDate }}',
                                                    '{{ priceForText }}{{ periodForText }}'); ?>
                                            </div>

                                            <div id="paypal-button-container"></div>
                                            {{payPalBtnInit}}

                                            <div class=" mt-3">
                                                <p class="small mb-0" style="font-size: 1.3rem;">By submitting this form, you agree to our <a href="/terms/" class="text-color-primary text-color-primary--has-hover">Terms of Service</a>, and <a href="/privacy/" class="text-color-primary text-color-primary--has-hover">Privacy Policy</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion__item" v-show="canMakePayment">
                                        <input type="checkbox" class="accordion__radio-toggler d-none" name="accordion-radio" id="accordion-3"
                                               @click="if ($('#accordion-3').prop('checked')) typePaySystem = PaySystem.BUTTON">
                                        <label for="accordion-3" class="accordion__header d-block">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="accordion__heading mr-3">{{ methodName }}</h6>
                                                <ul class="payment-options ml-auto mr-3 pl-0">
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
                                                <svg class="icon accordion__close"><use xlink:href="#angle-down-solid"></use></svg>
                                            </div>
                                        </label>
                                        <div class="accordion__body">
                                            <div class="d-flex justify-content-between">
                                                <h5><?php esc_html_e('TOTAL', 'hotbot'); ?></h5>
                                                <h5><h5>{{ totalWithCurrency }}</h5></h5>
                                            </div>

                                            <div class="panel panel--default x-small mt-3 mb-4" v-show="textUnderBtn && !isCrypto">
                                                <?php echo sprintf( __('Your free trial with HotBot VPN starts on %1$s and will end on %2$s. Check your email for reminders about your trial period status. You can cancel anytime. Otherwise, starting on %3$s you will be billed %4$s.', 'hotbot' ),
                                                    '{{ atDayDate }}',
                                                    '{{ toDayDate }}',
                                                    '{{ toDayDate }}',
                                                    '{{ priceForText }}{{ periodForText }}'); ?>
                                            </div>

                                            <div class="mt-3">
                                                <div id="payment-request-button" v-show="prbMethod !== 'cards'" style="margin-top: 50px"></div>
                                                <button class="btn btn--proccess" v-show="prbMethod === 'cards'">{{ buttonText }}</button>
                                            </div>

                                            <div class="mt-3">
                                                <p class="small mb-0" style="font-size: 1.3rem;">By submitting this form, you agree to our <a href="/terms/" class="text-color-primary text-color-primary--has-hover">Terms of Service</a>, and <a href="/privacy/" class="text-color-primary text-color-primary--has-hover">Privacy Policy</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion__item">
                                        <input type="checkbox" class="accordion__radio-toggler d-none" name="accordion-radio" id="accordion-4"
                                               @click="if ($('#accordion-4').prop('checked')) typePaySystem = PaySystem.NOWPAYMENTS">
                                        <label for="accordion-4" class="accordion__header d-block">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="accordion__heading mr-3"><?php esc_html_e('Crypto', 'hotbot'); ?></h6>
                                                <ul class="payment-options ml-auto mr-3 pl-0">
                                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/crypto-btc.svg" class="sm" /></li>
                                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/crypto-eth.svg" class="sm" /></li>
                                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/crypto-usdt.svg" class="sm" /></li>
                                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/crypto-bnb.svg" class="sm" /></li>
                                                </ul>
                                                <svg class="icon accordion__close"><use xlink:href="#angle-down-solid"></use></svg>
                                            </div>
                                        </label>
                                        <div class="accordion__body">
                                            <div class="d-flex justify-content-between">
                                                <h5><?php esc_html_e('TOTAL', 'hotbot'); ?></h5>
                                                <h5><h5>{{ totalWithCurrency }}</h5></h5>
                                            </div>

                                            <div class="panel panel--default x-small mt-3 mb-4">
                                                <?=__('Payments made with crypto currency are one time payments and do not automatically renew and are not 
                                                eligible for our refund guarantee. You can reload your account at any time by making additional crypto payments on 
                                                this page. Payments made with crypto currency are not eligible for a free trial.', 'hotbot' ); ?>
                                            </div>

                                            <button type="submit"
                                                    class="btn btn--proccess"
                                                    @click.prevent.stop="cryptoPaymentPreSubmit"
                                                    :disabled="submitDisabled"
                                                    :loading="loading">
                                                <div class="lds-ellipsis">
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <span>{{ buttonText }}</span>
                                            </button>

                                            <div class="mt-3">
                                                <p class="mt-3 small mb-3"><?php esc_html_e( 'Payment confirmation for crypto can take up to 60 min.', 'hotbot'); ?></p>
                                                <p class="small mb-0" style="font-size: 1.3rem;">By submitting this form, you agree to our <a href="/terms/" class="text-color-primary text-color-primary--has-hover">Terms of Service</a>, and <a href="/privacy/" class="text-color-primary text-color-primary--has-hover">Privacy Policy</a></p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="accordion__item" v-show="false">
                                        <input type="checkbox" class="accordion__radio-toggler d-none" name="accordion-radio" id="accordion-5">
                                        <label for="accordion-5" class="accordion__header d-block">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6 class="accordion__heading mr-3">More Options</h6>
                                                <ul class="payment-options ml-auto mr-3 pl-0">
                                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/spacer.JPG" class="" /></li>
                                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/spacer.JPG" class="" /></li>
                                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/spacer.JPG" class="" /></li>
                                                    <li><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/spacer.JPG" class="" /></li>
                                                </ul>
                                                <svg class="icon accordion__close"><use xlink:href="#angle-down-solid"></use></svg>
                                            </div>
                                        </label>
                                        <div class="accordion__body">
                                            <ul class="payment-options ml-auto mr-auto pl-0 flex-wrap mb-3">
                                                <li class="pl-2 pr-2 mb-2"><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/spacer.JPG" class="md" /></li>
                                                <li class="pl-2 pr-2 mb-2"><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/spacer.JPG" class="md" /></li>
                                                <li class="pl-2 pr-2 mb-2"><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/spacer.JPG" class="md" /></li>
                                                <li class="pl-2 pr-2 mb-2"><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/spacer.JPG" class="md" /></li>
                                                <li class="pl-2 pr-2 mb-2"><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/spacer.JPG" class="md" /></li>
                                                <li class="pl-2 pr-2 mb-2"><img loading=lazy src="<?php bloginfo('template_url'); ?>/assets/img/spacer.JPG" class="md" /></li>
                                            </ul>

                                            <div class="d-flex justify-content-between">
                                                <h5><?php esc_html_e('TOTAL', 'hotbot'); ?></h5>
                                                <h5>$0.00</h5>
                                            </div>

                                            <div class="panel panel--default x-small mt-3 mb-4">
                                                Billed USD 59.76 now. After the first 24 months, USD 59.76 will be billed annually. Cancel anytime.
                                            </div>

                                            <div class="mt-3">
                                                <button class="btn btn--proccess">Buy now</button>
                                            </div>

                                            <div class="mt-3">
                                                <p class="small mb-0" style="font-size: 1.3rem;">By submitting this form, you agree to our <a href="/terms/" class="text-color-primary text-color-primary--has-hover">Terms of Service</a>, and <a href="/privacy/" class="text-color-primary text-color-primary--has-hover">Privacy Policy</a></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                            {{localCurrencyFn}}
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
<?php include 'inc/inc-stripe.php'; ?>

<?php get_footer(); ?>
