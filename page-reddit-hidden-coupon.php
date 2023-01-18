<?php /* Template Name: Reddit Hidden Coupon Page */ ?>
<?php get_header(); ?>

<?php include 'inc/inc-header-light.php'; ?>
<?php include 'inc/inc-reddit-hidden-coupon.php';?>

<div id="app" class="new-order-page-template orderPage">

    <section class="layout-section pt-5 pb-5 layout-section__section1">
        <div class="container-small pt-4">
            <div class="row justify-content-center">
                <div class="col-12 text-align-center">
                    <p>
                        <strong>
                            <?php echo sprintf( __('Get HotBot VPN Premium, <span class="high-light">7 Day  Free Trial</span>, PLUS <span class="high-light">30-day money-back guarantee</span>', 'hotbot')); ?>
                        </strong>
                    </p>


                    <div class="row align-items-start mt-5 ml-0 mr-0 pt-4 pb-4 justify-content-center">

                        <label class="card--label-wrap col-12 col-lg-8">
                            <input type="radio" name="plan" class="d-none" checked/>
                            <div class="card p-3 mt-3 mb-3">
                                <div class="plan__saved"><?php esc_html_e('7 Day Free Trial', 'hotbot'); ?></div>

                                <div class="card__inner card__inner--height-auto justify-content-center">
                                    <div class="radio-style radio-style--absolute-left"></div>
                                    <div class="d-flex align-items-center justify-content-center flex-column">
                                        <div class="card__label"><?php esc_html_e('6 Month', 'hotbot'); ?></div>
                                        <h5 class="mb-0 mt-4 heading save-text"><span><?php echo sprintf( __('Save %s', 'hotbot'), '50%'); ?></span></h5>
                                    </div>
                                </div>
                                <p class="mb-0 footer-text x-small mt-3 m-3 d-flex align-items-center justify-content-center">
                                    <svg class="icon"><use xlink:href="#checkmark"></use></svg>
                                    <?php esc_html_e('Reddit Coupon Applied', 'hotbot'); ?>
                                </p>
                            </div>
                        </label>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="layout-section pt-5 pb-5">
        <div class="container-small text-align-center pt-4 pb-4">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <a href="/order/" class="btn btn--primary btn--block"><span><?php esc_html_e('PROCEED TO CHECKOUT', 'hotbot'); ?></span></a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
