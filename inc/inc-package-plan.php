<section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 c-btn">
    <div class="layout-section__bg">
        <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/section-bg.svg" class="img-cover" alt=""/>
    </div>
    <div class="container text-align-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="heading mb-5"><?php _e( 'Grab the <span>limited deal</span> now!', 'hotbot' ); ?></h2>
                <p class="mb-5"><?php esc_html_e( 'Our best price ever! Get HotBot VPN for 66% off today. Our app can
          be used on up to 6 devices at a time, doesn\'t limit speeds, and
          increases security and freedom when using the internet.', 'hotbot' ); ?>
                </p>
            </div>
        </div>

        <div class="row justify-content-center" id="app">

            <!--                        <div class="card p-0 mt-3 mb-5 mr-4 ml-5 col-md-4 order-md-2">-->
            <!--                            <div class=" plan-header">-->
            <!--                                <div class="row">-->
            <!--                                    <div class="col-6 col-md-12">-->
            <!--                                        <h5 class="heading pt-4 pb-4 pt-md-5 pb-md-5 mt-0 mb-0">-->
			<?php //esc_html_e('3 Year Plan', 'hotbot'); ?><!--</h5>-->
            <!--                                    </div>-->
            <!--                                    <div class="col-6 col-md-12">-->
            <!--                                        <div class="row justify-content-md-center">-->
            <!--                                            <div class="col-11 col-md-8 col-lg-6">-->
            <!--                                                <div class="plan mt-md-5">-->
            <!--                                                    USD-->
            <!--                                                    <h2 class="plan-price">2.99</h2>-->
            <!--                                                    /mo-->
            <!--                                                </div>-->
            <!--                                            </div>-->
            <!--                                        </div>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!---->
            <!--                            <div class="container-fluid pt-3 pb-5">-->
            <!---->
            <!--                                <h4 class="plan__saved danger">-->
			<?php //esc_html_e('SAVE 70%', 'hotbot'); ?><!--</h4>-->
            <!--                                <div class="row">-->
            <!--                                    <div class="col-12 order-md-2">-->
            <!--                                        <div class="plan-billed justify-content-center">-->
            <!--                                            <p class="mb-md-0 mt-md-3"><span-->
            <!--                                                    class="danger line-through">USD 359.64</span> USD 107.64</p>-->
            <!--                                            <p>-->
			<?php //esc_html_e('billed one time', 'hotbot'); ?><!--</p>-->

            {{ localCurrencyFn }}

            <?php /*
            <div class="card p-0 mt-3 mb-5 mr-4 ml-5 col-md-3 order-md-1 card--active-md">
                <div class="row">
                    <div class="col-6 col-md-12">
                        <h5 class="heading pt-4 pb-4 pt-md-5 pb-md-5 mt-0 mb-0">
                            <span><?php esc_html_e( 'Black November', 'hotbot' ); ?></span></h5>
                    </div>
                    <div class="col-6 col-md-12">
                        <div class="row justify-content-md-center">
                            <div class="col-11 col-md-8 col-lg-6">
                                <div class="plan mt-md-5" style="justify-content: center">
                                    {{ getPlan(Plans.FOUR).currency }}
                                    <h3 class="plan-price">{{ trialPriceNumeric(planIndex(Plans.FOUR)) }}</h3>
                                    <span v-show="!showZeroTrial"><?php esc_html_e( '/mo', 'hotbot' ); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid pt-3 pb-5">

                    <h4 class="plan__saved"><?php esc_html_e('2 Years + 2 Years FREE', 'hotbot'); ?></h4>

                    <div class="row">
                        <div class="col-12 order-md-2">
                            <div class="plan-billed justify-content-center">
                                <p class="mb-md-0 mt-md-3"><span
                                            class="danger line-through">{{ getPlan(Plans.FOUR).oldPrice }}</span>
                                    {{ getPlan(Plans.FOUR).formatPrice }} </p>
                                <p><?php esc_html_e( 'Billed one time.', 'hotbot' ); ?></p>
                            </div>
                        </div>
                        <div class="col-12 order-md-1">
                            <a href="/order/?plan=FOUR" class="btn btn--sm btn--block-sm btn--secondary has-arrow m-auto">
                                <span>
                                    <?php esc_html_e( 'Start 7 Day Free Trial', 'hotbot' ); ?>
                                    <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg>
                                </span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            */ ?>
            <div class="card p-0 mt-3 mb-5 mr-4 ml-5 col-md-3 order-md-1 card--active-md">
                <div class="row">
                    <div class="col-6 col-md-12">
                        <h5 class="heading pt-4 pb-4 pt-md-5 pb-md-5 mt-0 mb-0">
                            <span><?php esc_html_e( '1 Year Plan', 'hotbot' ); ?></span></h5>
                    </div>
                    <div class="col-6 col-md-12">
                        <div class="row justify-content-md-center">
                            <div class="col-11 col-md-8 col-lg-6">
                                <div class="plan mt-md-5" style="justify-content: center">
                                    {{ getPlan(Plans.YEAR).currency }}
                                    <h3 class="plan-price">{{ trialPriceNumeric(planIndex(Plans.YEAR)) }}</h3>
                                    <span v-show="!showZeroTrial"><?php esc_html_e( '/mo', 'hotbot' ); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid pt-3 pb-5">

                    <h4 class="plan__saved"><?php echo sprintf( __( 'Save %s', 'hotbot' ), '66%' ); ?></h4>

                    <div class="row">
                        <div class="col-12 order-md-2">
                            <div class="plan-billed justify-content-center">
                                <p class="mb-md-0 mt-md-3"><span
                                            class="danger line-through">{{ getPlan(Plans.YEAR).oldPrice }}</span>
                                    {{ getPlan(Plans.YEAR).formatPrice }} </p>
                                <p><?php esc_html_e( 'Billed every year.', 'hotbot' ); ?></p>
                            </div>
                        </div>
                        <div class="col-12 order-md-1">
                            <a href="/order/?plan=YEAR" class="btn btn--sm btn--block-sm btn--secondary has-arrow m-auto">
                                <span>
                                    <?php esc_html_e( 'Start 7 Day Free Trial', 'hotbot' ); ?>
                                    <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg>
                                </span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card p-0 mt-3 mb-5 mr-4 ml-5 col-md-3 order-md-3 card--active-md">
                <div class="row">
                    <div class="col-6 col-md-12">
                        <h5 class="heading pt-4 pb-4 pt-md-5 pb-md-5 mt-0 mb-0">
                            <span><?php esc_html_e( '1 Month Plan', 'hotbot' ); ?></span></h5>
                    </div>
                    <div class="col-6 col-md-12">
                        <div class="row justify-content-md-center">
                            <div class="col-11 col-md-8 col-lg-6">
                                <div class="plan mt-md-5" style="justify-content: center">
                                    {{ getPlan(Plans.MONTH).currency }}
                                    <h3 class="plan-price">{{ trialPriceNumeric(planIndex(Plans.MONTH)) }}</h3>
                                    <span v-show="!showZeroTrial"><?php esc_html_e( '/mo', 'hotbot' ); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid pt-3 pb-5">
                    <div class="row">
                        <div class="col-12 order-md-2">
                            <div class="plan-billed justify-content-center">
                                <p class="mb-md-0 mt-md-3">{{ getPlan(Plans.MONTH).monthPrice }}</p>
                                <p><?php esc_html_e( 'Billed every month.', 'hotbot' ); ?></p>
                            </div>
                        </div>
                        <div class="col-12 order-md-1">
                            <a href="/order/?plan=MONTH" class="btn btn--sm btn--secondary has-arrow m-auto">
                                <span>
                                    <?php esc_html_e( 'Start 7 Day Free Trial', 'hotbot' ); ?>
                                    <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<?php include 'inc-stripe.php'; ?>

