<?php /* Template Name: Affiliate page */ ?>
<?php get_header();?>
    <section class="layout-section layout-section--affiliate-hero text-align-center--md pb-5 pb-md-7">
        <div class="layout-section--affiliate-hero__img-wrap" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/img/affiliate-hero-bg-top.svg')">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/affiliate-hero-curve-white.svg" class="curve" alt="Hero"  />
        </div>
        <?php include 'inc/inc-header-affiliate.php'; ?>

        <div class="container mt-0 pt-5">
            <div class="row align-items-center">
                <div class="col-md-6" id="app2">
                    <?php if( get_field('heading') ): ?>
                        <h1 class="heading mb-4"><?php the_field('heading'); ?></h1>
                        <?php else: ?>
                        <h1 class="heading mb-4"><?php esc_html_e('Promote HotBot Apps and Get Paid!', 'hotbot' ); ?></h1>
                    <?php endif; ?>

                    <?php if( get_field('sub_heading') ): ?>
                        <p class="legend mb-5"><?php the_field('sub_heading'); ?></p>
                        <?php else: ?>
                        <p class="legend mb-5"><?php esc_html_e('Influencers and affiliates can easily earn money. Promote our Android/iOS apps directly. Get paid on every subscription you send to us. “In-app"  and/or website.', 'hotbot' ); ?></p>
                    <?php endif; ?>


                    <div class="d-md-flex flex-wrap">
                        <a href="https://signup.cj.com/member/signup/publisher/?cid=6065541" class="btn btn--primary-darken has-arrow mb-5 mr-md-3 rtl-mr-md-3"><span><?php esc_html_e('Become an Affiliate', 'hotbot' ); ?>
                        <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>

                        <a href="https://members.cj.com/member/login/#/" class="btn btn--primary-darken has-arrow mb-5"><span><?php esc_html_e('Login', 'hotbot' ); ?>
                        <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <div class="col-10 col-md-12 p-0 pr-md-4">
                            <?php if( get_field('header_image') ): ?>
                                <img src="<?php the_field('header_image'); ?>" class="layout-section--affiliate-hero__img" alt="Hotbot VPN Affiliates"  />
                                <?php else: ?>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/affiliate-head-imager.svg" class="layout-section--affiliate-hero__img" alt="Hotbot VPN Affiliates"  />
                            <?php endif; ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-section pt-5 pb-5 pt-md-0 pb-md-7 text-align-center--md layout-section--affiliate-offset">
        <div class="img-offset">
            <?php if( get_field('points_thumb') ): ?>
                <img loading="lazy" src="<?php the_field('points_thumb'); ?>" alt="Hotbot VPN Affiliates" >
                <?php else: ?>
                <picture>
                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/affiliate-app.webp" type="image/webp">
                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/affiliate-app.png" type="image/png"> 
                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/affiliate-app.png" alt="Hotbot VPN Affiliates" >
                </picture>
            <?php endif; ?>
        </div>
        <div class="container">
            <?php if( get_field('points_heading') ): ?>
                <h2 class="heading mb-5 text-align-center"><?php the_field('points_heading'); ?></h2>
                <?php else: ?>
                <h2 class="heading mb-5 text-align-center"><?php _e( '<span>HotBotVPN</span> Affiliate', 'hotbot' ); ?></h2>
            <?php endif; ?>
            
            <div class="row align-items-center pt-5">
                <div class="col-xl-8">
                    <div class="row">

                        <?php if( get_field('points_1_img') ): ?>
                        <div class="col-sm-12 col-md-6">
                            <div class="row">
                                <div class="col-md-11 pb-md-3 mb-md-3">
                                    <img src="<?php the_field('points_1_img'); ?>" class="mb-5 img-size-120 m-auto ml-md-0 rtl-ml-md-0" alt="40% Lifetime Revshare"  />
                                    <h3 class="heading mt-4"><?php the_field('points_1_heading'); ?></h3>
                                    <p><?php the_field('points_1_text'); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if( get_field('points_2_img') ): ?>
                        <div class="col-sm-12 col-md-6">
                            <div class="row">
                                <div class="col-md-11 pb-md-3 mb-md-3">
                                    <img src="<?php the_field('points_2_img'); ?>" class="mb-5 img-size-120 m-auto ml-md-0 rtl-ml-md-0" alt="40% Lifetime Revshare"  />
                                    <h3 class="heading mt-4"><?php the_field('points_2_heading'); ?></h3>
                                    <p><?php the_field('points_2_text'); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="col-sm-12 col-md-6">
                            <div class="row">
                                <div class="col-md-11 pb-md-3 mb-md-3">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/affiliate-subscription.svg" class="mb-5 img-size-120 m-auto ml-md-0 rtl-ml-md-0" alt="40% Lifetime Revshare"  />
                                    <h3 class="heading mt-4"><?php esc_html_e('40% Lifetime Revshare on all subscriptions', 'hotbot' ); ?></h3>
                                    <p><?php esc_html_e('Take advantage of a whopping 40% revenue share on customers you refer to HotBot VPN, for the lifetime of their membership.', 'hotbot' ); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="row">
                                <div class="col-md-11 pb-md-3 mb-md-3">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/affiliate-currency.svg" class="img-size-120 m-auto ml-md-0" alt="Localized Currencies"  />
                                    <h3 class="heading mt-4"><?php esc_html_e('Localized Customer Payment Currencies', 'hotbot' ); ?></h3>
                                    <p><?php esc_html_e('We accept over 200 global currencies. Customers all over the globe will feel at home with tailored customized billing options, including EUR, USD, AUD, CAD, GPB and many more', 'hotbot' ); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="row">
                                <div class="col-md-11 pb-md-3 mb-md-3">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/affiliate-linking.svg" class="img-size-120 m-auto ml-md-0" alt="Deep Linking"  />
                                    <h3 class="heading mt-4"><?php esc_html_e('Advanced Linking Available', 'hotbot' ); ?></h3>
                                    <p><?php esc_html_e('Link to any URL on our website or link directly to our Google Play & iOS App Store pages. Get paid on all In-App-Purchases', 'hotbot' ); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="row">
                                <div class="col-md-11 pb-md-3 mb-md-3">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/affiliate-monthly-pay.svg" class="mb-5 img-size-120 m-auto ml-md-0 rtl-ml-md-0" alt="Monthly Payments"  />
                                    <h3 class="heading mt-4"><?php esc_html_e('Monthly Payouts', 'hotbot' ); ?></h3>
                                    <p><?php esc_html_e('Your payouts get sent out on time, every month for revenue generated in the previous month.', 'hotbot' ); ?></p>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-section layout-section--bg-gray-darker pt-5 pb-5 pt-md-7 pb-md-7  text-align-center--md" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/img/affiliate-hero-bg-top.svg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-10 col-sm-8 col-md-10">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/affiliate-support-2.svg" class="mb-4 mb-md-0" alt="Affiliate Support"  />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="heading"><?php esc_html_e('Friendly Affiliate Support', 'hotbot' ); ?></h2>
                    <p class="mb-5"><?php esc_html_e('Our affiliate support team is standing by to help you maximize our partnership potential, feel free to get in touch any time.', 'hotbot' ); ?></p>
                    <p class="d-flex align-items-center justify-content-center justify-content-md-start"><a href="/affiliate-support/" class="mr-5 d-inline-block white-space-nw bold link-lite-text rtl-mr-5"><?php esc_html_e('Get Help', 'hotbot' ); ?></a> <a href="https://signup.cj.com/member/signup/publisher/?cid=6065541" class="btn btn--primary-darken has-arrow btn--xs"><span><?php esc_html_e('Become an Affiliate', 'hotbot' ); ?>
                    <svg class="icon icon-right"><use xlink:href="#long-arrow-alt-right-solid"></use></svg></span></a></p>
                    
                </div>
            </div>
            
        </div>
    </section>

    <section class="layout-section pt-5 pb-5 pt-md-7 pb-md-7 text-align-center--md">
        <div class="container">
            <h2 class="heading mb-5 text-align-center"><?php _e( '<span>HotBotVPN</span> Product Features', 'hotbot' ); ?></h2>
            <div class="row pt-md-5">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-11">
                            <h3 class="heading mt-5"><?php esc_html_e('Connect 6 devices at once', 'hotbot' ); ?></h3>
                            <p><?php esc_html_e('A single HotBot VPN account can be used on up to 6 devices simultaneously, for example, 2 phones, 2 laptops, and a TV - all at once.', 'hotbot' ); ?>
</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row justify-content-end">
                        <div class="col-md-11">
                            <h3 class="heading mt-5"><?php esc_html_e('Works on all device', 'hotbot' ); ?></h3>
                            <p><?php esc_html_e('Windows, MacOS, iOS, Android, and Android and Amazon TV, allow you to enjoy the benefits of your VPN on any platform or device.', 'hotbot' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-11">
                            <h3 class="heading mt-5"><?php esc_html_e('No Logs, Totally Anonymous Connections', 'hotbot' ); ?></h3>
                            <p><?php esc_html_e('All HotBot VPN connections are anonymous and no logs are collected, your data is private and will remain that way.', 'hotbot' ); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row justify-content-end">
                        <div class="col-md-11 mt-5">
                            <h3 class="heading"><?php esc_html_e('Servers in 36+ countries', 'hotbot' ); ?></h3>
                            <p><?php esc_html_e('With more than 2,000 servers to our name you will always find the connection you are looking for. Access our VPN servers in multiple countries around the world.', 'hotbot' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-11">
                            <h3 class="heading mt-5"><?php esc_html_e('Ultra-fast VPN speeds', 'hotbot' ); ?></h3>
                            <p><?php esc_html_e('Our servers offer fast speeds and can unlock geo-locked and censored content with the click of a button.', 'hotbot' ); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row justify-content-end">
                        <div class="col-md-11">
                            <h3 class="heading mt-5"><?php esc_html_e('P2P File-share Friendly', 'hotbot' ); ?></h3>
                            <p><?php esc_html_e('No restrictions on P2P file sharing platforms, including bittorrent.', 'hotbot' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-11">
                            <h3 class="heading mt-5"><?php esc_html_e('256 bit data encryption', 'hotbot' ); ?></h3>
                            <p><?php esc_html_e('Military grade encryption is standard with HotBot VPN.', 'hotbot' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php get_footer();?>


