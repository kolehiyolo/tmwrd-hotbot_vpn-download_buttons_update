<?php /* Template Name: Order App page */ ?>
<?php
$geo = hb_get_geoinfo();
$value = ht_get_geo_currency($geo['country_code']);
setcookie("defCurrencyTest", $value);
?>
<?php get_header(); ?>
<div id="app" class="order-app">
    <section class="layout-section nav-wrapper">
        <div class="container">
            <nav>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-brand">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo-app.svg" class="logo"
                         alt="hotbot logo"/>
                </a>

                <!--            <div class="menu-wrap menu-wrap--static">-->
                <!--                <div class="">-->
                <!--                    <div class="form__group">-->
                <!--                        <select class="form__control pt-3 pb-3">-->
                <!--                            <option value="">$ USD</option>-->
                <!--                        </select>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->

            </nav>
        </div>
    </section>

    <section class="layout-section pt-3 pb-3 pt-md-5 pb-md-5">
        <div class="container">
            <p class="text-align-center mb-0 small"><?php esc_html_e('Save 70% by using a credit card. Unlimited High-Speed VPN access.', 'hotbot'); ?></p>
        </div>
    </section>

    <section class="layout-section pt-3 pb-3 pt-md-7 pb-md-7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-lg-8">
                    <form class="js--content">
                        <div class="row">
                            <div class="form__group mb-3 mb-md-4 col-md-10">
                                {{ localCurrencyFn }}
                                <select class="form__control sm-text" v-model="pickedPeriod">
                                    <option :value="Plans.YEAR">
                                        Yearly Subscription, Save 66% - {{ plans[1].monthPrice }}/mo  (Billed {{ plans[1].formatPrice }})
                                    </option>
                                    <option :value="Plans.MONTH">
                                        {{infoFreeTrialForPlanApp}}Monthly Subscription, {{ plans[3].formatPrice }}/mo
                                    </option>
                                </select>
                                
                                <svg class="icon-arrow svg-icon svg-icon--15"><use xlink:href="#angle-down-solid"></use></svg>
                            </div>
                            <div class="form__group mb-3 mb-md-4 col-md-2">
                                <select class="form__control sm-text" v-model="localCurrency">
                                    <!--                                    <option value="USD">USD</option>-->
                                    <option v-for="plks in allPlansKeys" v-bind:value="plks">{{ plks }}</option>

                                </select>
                                <svg class="icon-arrow svg-icon svg-icon--15"><use xlink:href="#angle-down-solid"></use></svg>
                                
                            </div>
                        </div>
                        <label for="createAccount" class="d-sm-inline-block mr-sm-5 cursor-pointer"
                               @click="newClient=true" v-if="!hideCreateAccount">
                            <h5>
                                <div class="v-align-middle d-inline-block mr-3 mt-n2 radio-style"
                                     :class="{ checked: newClient }"
                                     id="radioCheckYes"
                                ></div>
                                <?php esc_html_e('Create an account', 'hotbot'); ?>
                            </h5>
                        </label>
                        <label for="existingAccount" class="d-sm-inline-block ml-sm-5 pl-sm-3 cursor-pointer"
                               @click="newClient=false">
                            <h5>
                                <div class="v-align-middle d-inline-block mr-3 mt-n2 radio-style"
                                     :class="{ checked: !newClient }"
                                     id="radioCheckNo"
                                ></div>
                                <?php esc_html_e('Use existing account', 'hotbot'); ?>
                            </h5>
                        </label>

                        <input type="radio" name="accountCe" class="d-none" id="createAccount" value="yes" checked/>
                        <div class="fieldShow">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form__group mb-4">

                                                <input type="email" class="form__control" v-model="email"
                                                       :readonly="readOnly" @click="changeReadOnly" autocomplete="off" placeholder="<?php esc_html_e('Email Address', 'hotbot'); ?>"/>
                                                <!-- <label
                                                    class="form__label-offset js--label-offset"><?php esc_html_e('Email Address', 'hotbot'); ?></label> -->
                                            </div>
                                        </div>
                                        <div class="col-sm-6" v-if="newClient">
                                            <div class="form__group mb-4">
                                                <input type="password" class="form__control password" v-model="password"
                                                       :readonly="readOnly" autocomplete="off" placeholder="<?php esc_html_e('Create Password', 'hotbot'); ?>"/>
                                                <!-- <label
                                                    class="form__label-offset js--label-offset"><?php esc_html_e('Create Password', 'hotbot'); ?></label> -->
                                                    <div class="has-icon has-icon--password togglePassword">
                                                        <svg class="togglePassword-hidden"><use xlink:href="#eye-slash-solid"></use></svg>
                                                        <svg class="togglePassword-show"><use xlink:href="#eye-solid"></use></svg>
                                                    </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="radio" name="accountCe" class="d-none" id="existingAccount" value="no"/>
                        <div class="fieldShow">
                            <div class="row">
                                <div class="col-12  mb-4">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form__group">
                                                <input type="email" class="form__control" v-model="email"
                                                       :readonly="readOnly" @click="changeReadOnly" autocomplete="off" placeholder="<?php esc_html_e('Email Address', 'hotbot'); ?>"/>
                                                <!-- <label
                                                    class="form__label-offset js--label-offset"><?php esc_html_e('Email Address', 'hotbot'); ?></label> -->
                                            </div>
                                            <!--                                        <span class="text-color-primary small">-->
                                            <?php //esc_html_e('We will not share your information or send spam.', 'hotbot'); ?><!--</span>-->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <?php /*
                        <div class="col-6" v-if="!mid">
                            <div class="form__group mb-3">
                                <input type="text"
                                       class="form__control sm-text focused"
                                       required autocomplete="off"
                                       v-model="email"
                                >
                                <label class="form__label-offset js--label-offset active">User Name</label>
                            </div>
                        </div>
                        <div class="col-6 pl-0" v-if="!mid">
                            <div class="form__group mb-3">
                                <input type="password"
                                       class="form__control sm-text focused"
                                       required
                                       autocomplete="off"
                                       v-model="password"
                                >
                                <label class="form__label-offset js--label-offset active">Password</label>
                            </div>
                        </div>
*/ ?>
                            <div class="col-12">
                                <div class="form__group mb-4">
                                    <input type="text" class="form__control sm-text" required v-model="nameOnCard" placeholder="<?php esc_html_e('Name on card', 'hotbot'); ?>">
                                    <!-- <label
                                        class="form__label-offset js--label-offset"><?php esc_html_e('Name on card', 'hotbot'); ?></label> -->
                                </div>
                            </div>

                        </div>

                        <div id="errorMessage" style="display: none">
                            <h6 v-if="errorMessage" class="danger form__group mb-5" role="alert">
                                {{ errorMessage }}
                            </h6>
                            <div id="card-element" class="MyCardElement form__group mb-4">
                                <!-- Elements will create input elements here -->
                            </div>
                        </div>


                        <!-- We'll put the error messages in this element -->
                        <div id="card-errors" role="alert" class="form__group mb-3"></div>


                        <button type="submit"
                                style="background-color: #1a9efe"
                                class="btn btn--block btn--primary"
                                @click.prevent.stop="subscribe"
                                :disabled="submitDisabled"
                                :loading="loading"
                        >
                            <div class="lds-ellipsis">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <span><?php esc_html_e('Complete Purchase', 'hotbot'); ?></span>
                        </button>
                        <!--                        <p class="mt-2 mt-md-3 small">--><?php //echo sprintf( __('By submitting this form, you agree to our <a href="%1$s" class="text-color-primary text-color-primary--has-hover bold">Terms
                        //                                        of Service</a> and <a href="%2$s" class="text-color-primary text-color-primary--has-hover bold">Privacy
                        //                                        Policy</a>', 'hotbot'), '/terms/', '/privacy/'); ?><!--</p>-->

                        <p class="mt-5 small" style="font-size: 1.3rem" v-html='textUnderBtn'>

                        </p>

                        <div class="row">
                            <div class="col-12">
                                <div class="devider mt-2 mt-md-5"></div>
                            </div>
                            <div class="col-6"><h4 class="heading"><?php esc_html_e('TOTAL', 'hotbot'); ?></h4></div>
                            <div class="col-6 text-align-right"><h4 class="heading mb-0">{{ total }}</h4></div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
</div>
<?php include 'inc/inc-stripe.php'; ?>
<?php get_footer(); ?>
